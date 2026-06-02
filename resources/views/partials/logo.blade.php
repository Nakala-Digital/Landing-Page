@php
    $logoPath = public_path($site['brand']['logo']);
    $logoSvg = file_exists($logoPath) ? file_get_contents($logoPath) : null;
    $logoSvg = $logoSvg ? preg_replace('/<\?xml.*?\?>\s*/', '', $logoSvg) : null;
@endphp

<span class="inline-logo" aria-label="{{ $site['brand']['name'] }} logo">
    {!! $logoSvg ?: e($site['brand']['name']) !!}
</span>
