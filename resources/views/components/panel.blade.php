@php
    $classes = 'p-4 bg-white/5 rounded-xl  border border-transparent hover:border-blue-800 group transition-colors duration-300'
@endphp
<div {{ $attributes(['class' => $classes]) }}>
    {{ $slot }}
</div>
{{--<div {{ $attributes(['p-4 bg-white/5 rounded-xl  border border-transparent hover:border-blue-800 group transition-colors duration-300']) }}>--}}
{{--    {{ $slot }}--}}
{{--</div>--}}
{{--<div {{ $attributes->merge(['p-4 bg-white/5 rounded-xl  border border-transparent hover:border-blue-800 group transition-colors duration-300']) }}>--}}
{{--    {{ $slot }}--}}
{{--</div>--}}
