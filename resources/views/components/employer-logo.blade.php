@props(['employer', 'width' => 90])
<img src="{{ asset('storage/' . $employer->logo) }}" alt="Employer Logo" class="rounded-xl" width="{{ $width }}">

{{--<img src="{{ asset($employer->logo) }}" alt="Gray" class="rounded-xl" width="{{ $width }}">
{{--<img src="https://picsum.photos/seed/{{ rand(0, 10000) }}/{{ $width }}" alt="Gray" class="rounded-xl">--}}

{{--            <img src="https://via.placeholder.com/90" alt="" class="rounded-xl">--}}
{{--        <img src="https://loremflickr.com/90/90" alt="Random">--}}
{{--        <img src="https://singlecolorimage.com/get/cccccc/90x90" alt="Gray" class="rounded-xl">--}}

