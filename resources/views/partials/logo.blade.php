@php
    $svgPath = public_path($site['brand']['logo']);
    $pngPath = public_path($site['brand']['logo_png']);
    $logoSvg = file_exists($svgPath) ? file_get_contents($svgPath) : null;
    $logoSvg = $logoSvg ? preg_replace('/<\?xml.*?\?>\s*/', '', $logoSvg) : null;
@endphp

<span class="inline-logo" aria-label="{{ $site['brand']['name'] }} logo">
    @if (file_exists($pngPath))
        <img src="{{ asset($site['brand']['logo_png']) }}" alt="{{ $site['brand']['name'] }}" style="width:100%;height:100%;object-fit:contain;display:block;" />
    @elseif ($logoSvg)
        {!! $logoSvg !!}
    @else
        {{ $site['brand']['name'] }}
    @endif
</span>
