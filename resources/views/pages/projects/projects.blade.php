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
                    <img class="d-block w-100" src="{{ asset('images/eace-01.jpg') }}" alt="Webiste Development">
                </div>
                <div class="col-lg-6">
                    <br>
                    <h2 class="display-4">EACE Webiste</h2>
                    <p>This is the official website of the Ethiopian Association of Civil Engineers. It has also an
                        event and member registration system</p>
                    <a href="https://eacecivil.org" class="btn btn-outline-primary" target="_blank">Visit Webiste</a>
                </div>
            </div>

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

            <div class="row py-4">
                <div class="col-lg-6">
                    <img class="d-block w-100" src="{{ asset('images/grocery-01.jpg') }}" alt="Ecommerce">
                </div>
                <div class="col-lg-6">
                    <h2 class="display-4">Online Supermarket</h2>
                    <p>We are completing an online supermarket platform which shows all supermarket items with the
                        required details with convenient search functionality, accept orders and more...</p>
                    <a href="https://ecommerce.lifeline-techs.com" class="btn btn-outline-primary" target="_blank">See
                        Demo</a>
                </div>
            </div>

            <div class="row py-4">
                <div class="col-lg-6">
                    <img class="d-block w-100" src="{{ asset('images/cseb-01.jpg') }}" alt="CSEB Project">
                </div>
                <div class="col-lg-6">
                    <h2 class="display-4">CSEB Project</h2>
                    <p>We are completing a project on the production of CSEB blocks from crushed sandstone in and
                        around the town of Adigrat. We are getting promising results...</p>
                    <a href="/projects/miscellaneous/cseb-01" class="btn btn-outline-primary" target="_blank">See
                        Details</a>
                </div>
            </div>

            <div class="row py-4">
                <div class="col-lg-6">
                    <img class="d-block w-100" src="{{ asset('images/dcp-01.jpg') }}" alt="DCP Project">
                </div>
                <div class="col-lg-6">
                    <h2 class="display-4">DCP Project</h2>
                    <p>Dynamic cone penetrometer (DCP) is a light weight field equipment for cost effective
                        geotechnical investigation. We are attempting to prepare a standard procedure for the
                        interpretation of DCP results...</p>
                    <a href="/projects/miscellaneous/dcp-01" class="btn btn-outline-primary" target="_blank">See
                        Details</a>
                </div>
            </div>

        </div>
    </div>
    <!-- /.row -->

</div>
@endsection
