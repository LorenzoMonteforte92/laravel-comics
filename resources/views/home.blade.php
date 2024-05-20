@extends('layouts.app')

@section('content')
    
{{-- hero and cards secrions --}}
    @include('partials.heroCards')
{{--/ hero and cards secrions --}}

{{-- main navigation bar --}}
@include('partials.mainNav')
{{-- /main navigation bar --}}
@endsection