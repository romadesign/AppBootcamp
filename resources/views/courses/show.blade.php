@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <view-course-details :course="{{ $course }}" />
    </div>
</div>
@endsection
