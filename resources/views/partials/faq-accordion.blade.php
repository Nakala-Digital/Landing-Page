{{--
  Reusable FAQ Accordion Component

  @param  $items         — Collection of ['question' => ..., 'answer' => ...] arrays.
  @param  $columns       — Number of columns (default 1). Items are chunked evenly.
  @param  $itemClass     — Extra CSS classes for each .accordion-item div.
  @param  $questionClass — Extra CSS classes for the question <span>.
  @param  $answerClass   — Extra CSS classes for the answer <p>.
  @param  $toggleIconClass — Extra CSS classes for the expand_more icon.

  IMPORTANT: $item['answer'] is rendered with {!! !!} (unescaped HTML) so that
  callers can include inline links (e.g. mailto:, tel:). If you pass user-generated
  content, sanitize it before passing to this partial.
--}}

{{-- Accordion CSS --}}
@once
<style>
    .accordion-content {
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.35s ease-out;
    }
    .accordion-item.active .accordion-content {
        max-height: 600px;
    }
    .accordion-item.active .toggle-icon {
        transform: rotate(90deg);
    }
    .toggle-icon {
        font-variation-settings: 'wght' 400, 'opsz' 24;
    }
</style>
@endonce

{{-- Accordion items --}}
@php
    $columns = $columns ?? 1;
    $chunks = $columns > 1 ? $items->chunk(ceil($items->count() / $columns)) : [$items];
    $itemIndex = 0;
    $accordionId = 'faq-accordion-' . Str::random(8);
@endphp

<div id="{{ $accordionId }}" class="faq-accordion-container {{ $columns > 1 ? 'grid grid-cols-1 md:grid-cols-2 gap-gutter' : 'space-y-unit-sm' }}">
    @foreach ($chunks as $chunk)
        <div class="space-y-unit-sm">
            @foreach ($chunk as $item)
                @php
                    $isActive = $loop->parent->first && $loop->first;
                    $contentId = $accordionId . '-content-' . $itemIndex;
                    $buttonId = $accordionId . '-btn-' . $itemIndex;
                    $itemIndex++;
                @endphp
                <div class="accordion-item {{ $isActive ? 'active' : '' }} {{ $itemClass ?? 'border border-outline-variant bg-surface-container-lowest p-unit-md rounded-[20px] transition-all hover:border-primary' }}">
                    <button
                        id="{{ $buttonId }}"
                        class="w-full flex justify-between items-center text-left focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-primary"
                        onclick="window.__faqAccordion(this)"
                        aria-expanded="{{ $isActive ? 'true' : 'false' }}"
                        aria-controls="{{ $contentId }}">
                        <span class="{{ $questionClass ?? '' }}">{{ $item['question'] }}</span>
                        <span class="material-symbols-outlined toggle-icon transition-transform {{ $toggleIconClass ?? 'text-primary' }} text-[32px] -mr-3">chevron_right</span>
                    </button>
                    <div
                        id="{{ $contentId }}"
                        class="accordion-content"
                        role="region"
                        aria-labelledby="{{ $buttonId }}">
                        <p class="{{ $answerClass ?? '' }}">{!! $item['answer'] !!}</p>
                    </div>
                </div>
            @endforeach
        </div>
    @endforeach
</div>

{{-- Accordion JS --}}
@once
<script>
    window.__faqAccordion = function(button) {
        const container = button.closest('.faq-accordion-container');
        const item = button.closest('.accordion-item');
        const isActive = item.classList.contains('active');

        // Close other items in the same container only
        container.querySelectorAll('.accordion-item').forEach(el => {
            el.classList.remove('active');
            const btn = el.querySelector('button[aria-expanded]');
            if (btn) btn.setAttribute('aria-expanded', 'false');
        });

        // Toggle current item
        if (!isActive) {
            item.classList.add('active');
            button.setAttribute('aria-expanded', 'true');
        }
    }
</script>
@endonce
