@extends('layouts.app')

@section('content')
<div class="container">
    <view-courses :courses="{{ $courses }}" />
</div>
@endsection
