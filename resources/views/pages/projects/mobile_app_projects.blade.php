@extends('layouts.app')

@section('content')
<!-- Page Content -->
<div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3">Projects
    </h1>

    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="/">Home</a>
        </li>
        <li class="breadcrumb-item active">Projects</li>
    </ol>

    <!-- Content Row -->
    <div class="row">
        <!-- Sidebar Column -->
        <div class="col-lg-3 mb-4">
            <div class="list-group">
                <a href="/projects/web-apps" class="list-group-item">Web Apps</a>
                <a href="/projects/mobile-apps" class="list-group-item">Mobile Apps</a>
                <a href="/projects/desktop-apps" class="list-group-item">Desktop Apps</a>
                <a href="/projects/miscellaneous" class="list-group-item">Miscellaneous</a>
            </div>
        </div>
        <!-- Content Column -->
        <div class="col-lg-9 mb-4">

            <div class="row py-4">
                <div class="col-lg-6">
                    <img class="d-block w-100" src="{{ asset('images/zemaapps-01.jpg') }}" alt="ZemaApps">
                </div>
                <div class="col-lg-6">
                    <br>
                    <h2 class="display-4">Android Apps</h2>
                    <p>ZemaApps is our official account on the Play Store. We have Apps on different areas like a chat
                        app and more...</p>
                    <a href="https://play.google.com/store/search?q=zema%20apps&hl=en" class="btn btn-outline-primary"
                        target="_blank">Visit Store</a>
                </div>
            </div>

        </div>
    </div>
    <!-- /.row -->

</div>
@endsection
