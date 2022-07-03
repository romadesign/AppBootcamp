@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="card text-center">
                <div class="card-body">
                    <h3 class="card-title text-capitalize">
                        {{$course->title}}
                    </h3>
                </div>
            </div>
        </div>
        <view-course-details :course="{{ $course }}" />
    </div>
</div>
@endsection
