@include('website.shared.head')

@include('website.shared.header')

@if (isset($layout))
    @include('website.layout.member.'.$layout)
@else
    No Resource
@endif

@include('website.shared.footer')