@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <view-course-edit :course="{{ $course }}" />
    </div>
</div>
@endsection