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
        <img class="img-fluid rounded mb-4" src="{{asset('images/dcp-01.jpg')}}" alt="DCP Project 01 Image">

        <div class="py-4">
            <h4 class="display-4">Title</h4>
            <p class="lead">Preparation of Standard Procedures and Correlations on the Use of Dynamic Cone Penetrometer
                for Building Site Investigation</p>
        </div>

        <div class="py-4">
            <h4 class="display-4">Background</h4>
            <p class="lead">It is known that one of the pre-requisites needed to start construction of a building is
                geotechnical investigation of the site. This could be done through different ways depending on the
                extent of the proposed construction and the available investigation facilities. Investigation of a site
                for a relatively small building project may need only shallower borings and some common field and
                laboratory tests, while undertaking site investigation for larger building projects need more advanced
                and expensive boring, sampling and testing mechanisms and facilities.</p>
            <p class="lead">In Ethiopia, following the enforcement of the new construction proclamation, investigation
                of sites for
                small building projects is becoming a common practice. One of the most common soil testing equipments
                used for such purpose is the dynamic cone penetrometer (DCP) apparatus. The use of this apparatus is
                increasing from time to time in different parts of the country. This emanates from the fact that the
                test is relatively easy to perform and the apparatus is cheaper and easy to transport. The apparatus is
                even being manufactured locally at different metal processing firms.</p>
            <p class="lead">Although the test has its own advantages, due to mainly the above reasons, the result of
                the test
                should be used with a great caution. The result of this test is mostly correlated with other common and
                more “standard” tests before using it for design purpose. This correlation has two main drawbacks.
                Firstly, there are still no well-defined and reliable correlations of this test with tests designed for
                building site investigation, as the test is mainly designed for investigation of roads. The second
                reason is, even if there are such correlations available, they are too site specific to use them for
                any site under consideration. So, it is very important to have well-defined and site specific
                correlations in order to effectively gain the benefits behind using this test.</p>
            <p class="lead">The aim of this research is to formulate organized and site specific correlations between
                the dynamic
                cone penetration (DCP) index value and the standard penetration test (SPT) N-value. The research also
                attempts to modify the DCP apparatus so that it will have a better efficiency and reliability for
                building site investigation purpose.
            </p>
        </div>

        <div class="py-4">
            <h4 class="display-4">General Objective</h4>
            <p class="lead">The general objective of this research is to prepare standard procedures and correlations
                for using dynamic cone penetrometer (DCP) apparatus for building site investigation purpose.</p>
        </div>

        <div class="py-4">
            <h4 class="display-4">Specific Objective</h4>
            <p class="lead">The specific objectives of the research are:</p>
            <ul class="lead">
                <li>To assess the current procedures and correlations used to convert the DCP index to foundation
                    design parameters.</li>
                <li>To prepare correlations between the dynamic cone penetration index and the standard penetration
                    test N value for selected sites.</li>
                <li>To modify the DCP apparatus, if necessary, in order to make to make it more suitable for building
                    site investigation purpose.</li>
            </ul>
        </div>

    </div>
    <!-- /.row -->

</div>
@endsection
