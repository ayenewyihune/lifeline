@extends('layouts.app')

@section('content')
<!-- Page Content -->
<div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3">Services
    </h1>

    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="/">Home</a>
        </li>
        <li class="breadcrumb-item active">Services</li>
    </ol>

    <div class="row py-4">
        <div class="col-lg-8">
            <img class="d-block w-100" src="{{ asset('images/grocery-01.jpg') }}" alt="Webiste Development">
        </div>
        <div class="col-lg-4">
            <h2 class="display-4">Website Development</h2>
            <p>Need a website for your company, start up or simply for your individual purpose? Then we are here to
                help you.</p>

            <p>We can develop for you:</p>
            <ul>
                <li>Simple WordPress websites which we develop once and you fully manage it simply.</li>
                <li>Websites built from scratch with a flexible and more general use (and which may need our continous
                    management).</li>
            </ul>
        </div>
    </div>

    <div class="row py-4">
        <div class="col-lg-4">
            <br><br>
            <h2 class="display-4">Android App Development</h2>
            <p>We can develop for you android apps for any purpose.</p>
        </div>
        <div class="col-lg-8">
            <img class="d-block w-100" src="{{ asset('images/zemaapps-01.jpg') }}" alt="lifeline">
        </div>
    </div>

    <div class="row py-4">
        <div class="col-lg-8">
            <img class="d-block w-100" src="{{ asset('images/tut_main.jpg') }}" alt="Webiste Development">
        </div>
        <div class="col-lg-4">
            <br><br>
            <h2 class="display-4">Tips and Tutorials</h2>
            <p>This website has a tutorials page which contains tips and tutorials in selected areas and links to best
                YouTube videos and more detail online tutorials on the given topic.</p>
        </div>
    </div>

</div>
@endsection
