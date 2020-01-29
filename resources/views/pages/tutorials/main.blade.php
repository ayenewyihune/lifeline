@extends('layouts.app')

@section('content')
{{-- Page Content --}}
<div class="container">

    {{-- Page Heading/Breadcrumbs --}}
    <h1 class="mt-4 mb-3">Tutorials
        <small>and links...</small>
        @if(Auth::check())
        @if(Auth::user()->roles->first()->name=='Teacher')
        <a href="/tutorials/create" class="btn btn-primary">Create Course</a>
        @endif
        @endif
    </h1>

    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="/">Home</a>
        </li>
        <li class="breadcrumb-item active">Tutorials</li>
    </ol>

    <!-- Content Row -->
    <div class="row">
        @foreach ($courses as $course)
        <div class="col-lg-4 col-sm-6 portfolio-item" id="indexProj2" style="opacity:0;">
            <div class="card h-100">
                <a href="{{ route('course.show', [$course->id, $chapter_number]) }}">
                    <img class="card-img-top" style="height:200px" src="{{asset("storage/courses/course_images/".$course->course_image)}}" alt="course image">
                </a>
                <div class="card-body">
                    <a href="{{ route('course.show', [$course->id, $chapter_number]) }}">
                        <h4 class="card-title display-4" style="font-size: 25px !important">{{ $course->course_title }}</h4>
                    </a>
                    <p class="card-text">{{ $course->course_description }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <!-- /.row -->

</div>
@endsection
