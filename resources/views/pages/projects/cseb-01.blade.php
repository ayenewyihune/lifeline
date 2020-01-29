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
        <li class="breadcrumb-item">
            <a href="/projects">Projects</a>
        </li>
        <li class="breadcrumb-item active">DCP Project 01</li>
    </ol>

    <!-- Content Row -->
    <div class="container">
        <!-- Image Header -->
        <img class="img-fluid rounded mb-4" src="{{asset('images/cseb-01.jpg')}}" alt="DCP Project 01 Image">

        <div class="py-4">
            <h4 class="display-4">Title</h4>
            <p class="lead">Production of Compressed Stabilized Earth Blocks from Local Soils</p>
        </div>

        <div class="py-4">
            <h4 class="display-4">Background</h4>
            <p class="lead">The construction industry is one of the rapidly growing sectors in the country. The sector
                is expected to provide the growing needs of housing, commercial constructions, industrial
                constructions, roads, dams and other infrastructures. It will be difficult for the industry to fulfill
                its responsibilities with the expected quality, economic, environmental, ethical and other
                considerations unless it is supported by research and development works.
            </p>
            <p class="lead">The building construction sector, as one part of the construction industry, is also showing
                a rapid
                growth. The main constructions that are categorized in this area include traditional and modern
                residential constructions, commercial and related constructions, construction of governmental and
                non-governmental office facilities, schools, health centers and industrial buildings. The construction
                of buildings involves the use of different construction materials and techniques and it needs a
                relatively very huge amount of cost which will be challenging for developing countries and low income
                societies. The improvement of these materials and techniques and introduction of more cost effective
                construction methodologies will be very important for the country and should be given focus by
                researchers. Various research works have been done globally and different new materials and
                construction methods have been developed through time, which are generally more efficient, economical
                and environmentally friendly. Fast adaptation and use of these techniques will be very important in
                order to address the need of those living and working facilities within acceptable limits of cost,
                quality and duration.
            </p>
            <p class="lead">Wall construction is one of the major parts of building construction. In Ethiopia the
                methods of wall
                construction can be divided generally in to two; the traditional methods and modern methods. The
                traditional wall construction in the country has diversified types including timber and mud wall
                construction in the central part of the country and stone wall construction in northern Ethiopia. The
                most common modern wall construction materials in the country are hollow concrete blocks (HCB), bricks
                and dressed stones. These current practices in the country have in one way or another some critical
                problems. The traditional timber and mud construction is the main reason for deforestation in the
                country; HCB, brick or dressed stone walls has a relatively high cost and/or use relatively high amount
                of energy in production and transportation which will also have a negative impact on the environment.
                So, finding a more economical, sustainable and energy efficient method will have a huge importance for
                the construction industry.
            </p>
            <p class="lead">Using compressed stabilized earth blocks (CSEB) is a more recent finding that gained a wide
                range of
                acceptance in many countries, developed and developing, all over the world. The first attempts for
                compressed earth blocks were tried in the early days of the 19th century in Europe. The first steel
                manual press which has been produced in the world on the 1950’s was the Cinva-ram. It was the result of
                a research program for a social housing in Colombia to improve the hand molded and sun dried brick
                (adobe). CSEB generally uses a soil (can be the soil at the site) as the main material for block
                production and a small amount (around 5% on average) of cement or lime for stabilizing the soil. Then
                the mixture is compressed in a simple manual machine or a more advanced mechanical machine to produce
                blocks. The produced blocks will then be cured for about four weeks before they are going to be used
                for the intended construction. This blocks are very economical than HCB or conventional bricks; are
                energy efficient as they will not need any firing as conventional bricks, will not consume much cement
                which in turn consumes high energy in its production nor they will consume energy for transportation as
                they can be produced at the building site. They are aesthetically better than unpastered HCB or
                conventional brick walls and mostly are left unplastered. They will also be an ideal replacement for
                deforestation based timber and mud houses as they are not expensive materials and have more aesthetic
                appearance.
            </p>
            <p class="lead">The aim of this research is to produce CSEB using crushed sandstone around Adigrat and
                study the
                properties by using a simple manual press manufactured locally. Various research works are available
                internationally regarding the topic but currently few researches are available only in particular areas
                on this regard locally in the country.
            </p>
        </div>

        <div class="py-4">
            <h4 class="display-4">General Objective</h4>
            <p class="lead">The general objective of this research is to produce CSEB using crushed sandstone around
                Adigrat and study the properties by using a simple manual press manufactured locally.</p>
        </div>

        <div class="py-4">
            <h4 class="display-4">Specific Objective</h4>
            <p class="lead">The specific objectives of the research are:</p>
            <ul class="lead">
                <li>Thoroughly studying the significance of CSEB in relation to Ethiopia.</li>
                <li>Producing a manual CSEB production machine locally.</li>
                <li>Producing CSEB using sandstone around Adigrat. </li>
                <li>Preparing a comparison scheme with the traditional dressed stone, HCB and conventional bricks
                    based on different criteria. </li>
                <li>Preparing general construction procedures (guidelines) for construction using the CSEB.</li>
                <li>Recommendation of the ways for local and/or commercial production of the CSEB.</li>
            </ul>
        </div>

    </div>
    <!-- /.row -->

</div>
@endsection
