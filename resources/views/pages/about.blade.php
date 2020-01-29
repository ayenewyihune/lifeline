@extends('layouts.app')

@section('content')
<!-- Page Content -->
<div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3">About
    </h1>

    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="/">Home</a>
        </li>
        <li class="breadcrumb-item active">About</li>
    </ol>

    <!-- Intro Content -->
    <div class="row py-4">
        <div class="col-lg-6">
            <img class="d-block w-100" src="{{ asset('images/about_main.jpg') }}" alt="lifeline">
        </div>
        <div class="col-lg-6">
            <br><br>
            <h2 class="display-4">About Lifeline Technologies</h2>
            <p>Lifeline Technologies is a startup firm working on IT area and automating engineering works, with a
                special emphasis on civil engineering.</p>
            <p>The firm has got its name from its aspiration to be the lifeline of businesses through providing them
                online presence and much more. It also targets to be the lifeline of the community through provision of
                housing and other related facilities by researching and introducing local and affordable technologies
                in the building sector.</p>
            <p>In addition to the tasks given above, the firm has also ambitions to provide up to date tutorials on
                engineering and IT areas.</p>
        </div>
    </div>
    <!-- /.row -->

    <!-- Team Members -->
    <h2 class="display-4">Our Customers</h2>

    <div class="row">
        <div class="col-lg-4 mb-4">
            <div class="card h-100 text-center">
                <img class="card-img-top" src="{{ asset('images/eace-01.jpg') }}" alt="Ethiopian Association of Civil Engineers (EACE)">
                <div class="card-body">
                    <h4 class="card-title display-4">EACE</h4>
                    <p class="card-text">We are proud to have developed an all purpose website and member management
                        system for the Ethiopian Association of Civil Engineers. We are also glad that the association
                        is our first client.</p>
                </div>
                <div class="card-footer">
                    <a href="https://eacecivil.org" target="_blank">eacecivil.org</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 mb-4">
            <div class="card h-100 text-center">
                <img class="card-img-top" src="{{ asset('images/dcp-01.jpg') }}" alt="Addis Ababa Science and Technology University (AASTU)">
                <div class="card-body">
                    <h4 class="card-title display-4">AASTU</h4>
                    <p class="card-text">We are working with Addis Ababa Science and Technology University in various
                        areas like affordable construction and development of a laboratory management system.</p>
                </div>
                <div class="card-footer">
                    <a href="http://www.aastu.edu.et" target="_blank">www.aastu.edu.et</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 mb-4">
            <div class="card h-100 text-center">
                <img class="card-img-top" src="{{ asset('images/cseb-01.jpg') }}" alt="Adigrat University (AGU)">
                <div class="card-body">
                    <h4 class="card-title display-4">AGU</h4>
                    <p class="card-text">We are working with Adigrat University on the area of affordable construction
                        materials, especially on the production of building blocks from local materials.</p>
                </div>
                <div class="card-footer">
                    <a href="http://www.adu.edu.et" target="_blank">www.adu.edu.et</a>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
