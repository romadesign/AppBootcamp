@extends('layouts.app')

@section('content')
<div class="container">
    @if ( Auth::user() == null)
    <view-courses :courses="{{ $courses }}" />
    @else
    <view-courses :courses="{{ $courses }}" :user="{{Auth::user()}}"/>
    @endif
</div>
@endsection
