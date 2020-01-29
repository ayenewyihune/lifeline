@extends('layouts.app')

@section('content')
<header>
    {{-- Carousel --}}
    <div id="main-carousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#main-carousel" data-slide-to="0" class="active"></li>
            <li data-target="#main-carousel" data-slide-to="1"></li>
            <li data-target="#main-carousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner carousel-fade" role="listbox">
            <!-- Slide One - Set the background image for this slide in the line below -->
            <div class="carousel-item active" style="background-image: url('{{ asset('images/it_main.png') }}')">
                <div class="carousel-caption">
                    <h2 class="display-4" style="color:#222;">IT Services</h2>
                    <p class="lead">We develop websites, online systems, mobile and desktop applications and <a
                            href="/projects" style="color:white"><i>more...</i></a></p>
                </div>
            </div>
            <!-- Slide Two - Set the background image for this slide in the line below -->
            <div class="carousel-item" style="background-image: url('{{ asset('images/tut_main.jpg') }}')">
                <div class="carousel-caption">
                    <h2 class="display-4" style="color:#222;">Tutorials</h2>
                    <p class="lead">We provide useful <a href="/tutorials" style="color:white"><i>tutorials</i></a> on
                        Engineering
                        and IT area with links to
                        the best resources on the subject area.</p>
                </div>
            </div>
            <!-- Slide Three - Set the background image for this slide in the line below -->
            <div class="carousel-item" style="background-image: url('{{ asset('images/cseb_main.png') }}')">
                <div class="carousel-caption">
                    <h2 class="display-4" style="color:#222;">Affordable Construction</h2>
                    <p class="lead" style="color:#999;">We conduct researches on low cost construction materials and
                        consult individuals and
                        organizations woking on the area. <br><a href="/projects" style="color:white"><i>Find out
                                more</i></a></p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#main-carousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#main-carousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</header>

<!-- Page Content -->
<div class="container">

    {{-- Short about section on home page --}}
    <div class="featured-section">

        <div class="container text-center">
            {{-- For medium and large screens --}}
            <h1 class="display-3 d-none d-md-block">Lifeline Technologies</h1>

            {{-- For small screens --}}
            <h2 class="display-4 d-md-none d-lg-none d-xl-none">Lifeline Technologies</h2>

            <p class="section-description" class="lead">Lifeline Technologies is a startup firm working on
                IT area and
                automating engineering works, with a special emphasis on civil engineering...</p>

            <a href="/about" class="button">Read more...</a>
        </div>
    </div>

    {{-- Services on home page --}}
    <div class="row">
        <div class="col-lg-4 mb-4">
            <div class="card h-100">
                <h4 class="card-header  display-4">Services</h4>
                <div class="card-body">
                    <p class="card-text">Our services include development of website for any purpose, web systems,
                        android and desktop apps and more...</p>
                </div>
                <div class="card-footer">
                    <a href="/services" class="btn btn-outline-secondary">Learn More</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 mb-4">
            <div class="card h-100">
                <h4 class="card-header display-4">Projects</h4>
                <div class="card-body">
                    <p class="card-text">Although new in the area, we have done and are doing relatively many works in
                        a short time, including websites, android apps and more...</p>
                </div>
                <div class="card-footer">
                    <a href="/projects" class="btn btn-outline-secondary">Learn More</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 mb-4">
            <div class="card h-100">
                <h4 class="card-header display-4">Tutorials</h4>
                <div class="card-body">
                    <p class="card-text">We provide online tutorials, YouTube videos and links to best resources on
                        civil engineering and IT areas...</p>
                </div>
                <div class="card-footer">
                    <a href="/tutorials" class="btn btn-outline-secondary">Learn More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- /.row -->

    {{-- Projects on home page --}}
    <h2 class="display-4 py-4">Explore our projects...</h2>

    <div class="row">
        <div class="col-lg-4 col-sm-6 portfolio-item" id="indexProj1" style="opacity:0;">
            <div class="card h-100">
                <a href="https://eacecivil.org" target="blank">
                    <img class="card-img-top" src="{{asset('images/eace-01.jpg')}}" alt="">
                </a>
                <div class="card-body">
                    <a href="https://eacecivil.org" target="blank">
                        <h4 class="card-title display-4">EACE Webiste</h4>
                    </a>
                    <p class="card-text">This is the official website of the Ethiopian Association of Civil
                        Engineers. It has also an event and member registration system.</p>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-sm-6 portfolio-item" id="indexProj2" style="opacity:0;">
            <div class="card h-100">
                <a href="https://play.google.com/store/search?q=zema%20apps&hl=en" target="blank">
                    <img class="card-img-top" src="{{asset('images/zemaapps-01.jpg')}}" alt="">
                </a>
                <div class="card-body">
                    <a href="https://play.google.com/store/search?q=zema%20apps&hl=en" target="blank">
                        <h4 class="card-title display-4">Android Apps</h4>
                    </a>
                    <p class="card-text">ZemaApps is our official account on the Play Store. We have Apps on
                        different areas like a chat app and more...</p>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-sm-6 portfolio-item" id="indexProj3" style="opacity:0;">
            <div class="card h-100">
                <a href="https://ecommerce.lifeline-techs.com" target="blank">
                    <img class="card-img-top" src="{{asset('images/grocery-01.jpg')}}" alt="">
                </a>
                <div class="card-body">
                    <a href="https://ecommerce.lifeline-techs.com" target="blank">
                        <h4 class="card-title display-4">Online Supermarket</h4>
                    </a>
                    <p class="card-text">We are completing an online supermarket platform which shows all supermarket
                        items with the required details with convenient search functionality, accept orders and more...
                    </p>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-sm-6 portfolio-item" id="indexProj4" style="opacity:0;">
            <div class="card h-100">
                <a href="/projects/miscellaneous/dcp-01">
                    <img class="card-img-top" src="{{asset('images/cseb-01.jpg')}}" alt="">
                </a>
                <div class="card-body">
                    <a href="/projects/miscellaneous/mcseb-01">
                        <h4 class="card-title display-4">CSEB Project</h4>
                    </a>
                    <p class="card-text">We are completing a project on the production of CSEB blocks from crushed
                        sandstone in and around the town of Adigrat. We are getting promising results...</p>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-sm-6 portfolio-item" id="indexProj5" style="opacity:0;">
            <div class="card h-100">
                <a href="/projects/miscellaneous/dcp-01">
                    <img class="card-img-top" src="{{asset('images/dcp-01.jpg')}}" alt="">
                </a>
                <div class="card-body">
                    <a href="/projects/miscellaneous/dcp-01">
                        <h4 class="card-title display-4">DCP Project</h4>
                    </a>
                    <p class="card-text">Dynamic cone penetrometer (DCP) is a light weight field equipment for cost
                        effective geotechnical investigation. We are attempting to prepare a standard...</p>
                </div>
            </div>
        </div>

    </div>
    <!-- /.row -->
</div>

<div class="blog-section">
    <div class="container">
        <h1 class="text-center display-4">From our Tutorials</h1>

        <p class="section-description text-center">Findout online tutorials, YouTube videos and links to best resources
            on the topic of your interest, in civil engineering and IT areas...</p>

        <div class="text-center">
            <div class="row">
                @foreach ($courses as $course)
                <div class="col-lg-4 col-sm-6 portfolio-item" id="indexProj2" style="opacity:0;">
                    <div class="card h-100">
                        <a href="{{ route('course.show', [$course->id, $chapter_number]) }}">
                            <img class="card-img-top" src="{{asset("storage/".$course->cover_image)}}" alt="">
                        </a>
                        <div class="card-body">
                            <a href="{{ route('course.show', [$course->id, $chapter_number]) }}">
                                <h4 class="card-title display-4" style="font-size:25px !important">{{ $course->course_title }}</h4>
                            </a>
                            <p class="card-text">{{ $course->description }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
<!-- /.row -->

<!-- Call to Action Section -->
<div class="container">
    <div class="row mb-4 py-4">
        <div class="col-md-8">
            <p>For any information, feedback, orders or any other case, you can contact us through phone, our social
                media platforms or using the form in the contact us page of this website.</p>
        </div>
        <div class="col-md-4">
            <a class="btn btn-lg btn-secondary btn-block" href="/contact">Contact Us</a>
        </div>
    </div>
</div>
@endsection
