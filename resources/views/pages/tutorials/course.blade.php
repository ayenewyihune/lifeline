@extends('layouts.app')

@section('content')
<!-- Page Content -->
<div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3">Tutorials
        <small>and courses...</small>
    </h1>

    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="/">Home</a>
        </li>
        <li class="breadcrumb-item">
            <a href="/tutorials">Tutorials</a>
        </li>
        <li class="breadcrumb-item active">{{$course->course_title}}</li>
    </ol>

    <!-- Content Row -->
    <div class="row">
        <!-- Sidebar Column -->
        <div class="col-lg-3 mb-4">
            <div class="list-group">
                @foreach ($tutorials as $tutorial)
                <a href="/tutorials/{{$course->id}}/{{$tutorial->chapter_number}}"
                    class="list-group-item">{{$tutorial->chapter_title}}</a>
                @endforeach
                @if(Auth::check())
                @if(Auth::user()->id==$course->user_id)
                <a href="{{route('course_content.create',$course->id)}}" class="btn btn-primary">Create Chapter</a>
                @endif
                @endif
            </div>
        </div>
        <!-- Content Column -->
        <div class="col-lg-9 mb-4">
            @if(Auth::check())
            @if(Auth::user()->id==$course->user_id)
            <div class="text-right py-2">
                <a href="{{route('course_content.edit', [$course->id, $chapter->chapter_number])}}"
                    class="btn btn-sm btn-primary">Edit Chapter</a>
            </div>
            @endif
            @endif
            @if ($chapter->chapter_number == 1)
            <img class="img-fluid rounded mb-4" style="width:100%; max-height:500px;"
                src="{{asset("storage/courses/course_images/".$course->course_image)}}" alt="course image">
            @endif
            <h2 class="display-4">{{$chapter->chapter_title}}</h2>
            <p>{!!$chapter->chapter_body!!}</p>
            <br><br>
            {{-- Comments list --}}
            <legend>Comments</legend>
            <hr>
            <div class="comment-list">
                @foreach($chapter->comments as $comment)
                <div class="py-2">
                    <div class="card">
                        <div class="card-footer"
                            style="padding-top:2px; padding-bottom:2px;padding-left:10px; padding-right:10px;">
                            <small>{{$comment->user->first_name}} {{$comment->user->middle_name}}</small>
                        </div>
                        <div class="card-body" style="padding:10px;">
                            <p class="card-text">{!!$comment->body!!}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            {{-- Comment form --}}
            <div class="comment-form py-2">
                <form action="{{ route('chapter_comment.store', $chapter->id) }}" method="POST">
                    {{ csrf_field() }}

                    <hr>
                    <div class="form-group">
                        <textarea id="content" type="text" class="form-control{{ $errors->has('body') ? ' is-invalid' : '' }}"
                            name="body" value="{{ old('body') }}" required></textarea>

                        @if ($errors->has('body'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('body') }}</strong>
                        </span>
                        @endif
                    </div>
                    <button type="submit" class="btn btn-primary btn-sm">Comment</button>
                </form>
            </div>
        </div>
    </div>
    <!-- /.row -->

</div>
@endsection
