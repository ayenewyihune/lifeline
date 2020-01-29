@extends('layouts.app')

@section('content')
<!-- Page Content -->
<div class="container">

    @include('inc.messages')

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3">Contact
    </h1>

    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="/">Home</a>
        </li>
        <li class="breadcrumb-item active">Contact</li>
    </ol>

    <!-- Content Row -->
    <div class="row">
        <!-- Map Column -->
        <div class="col-lg-8 mb-4">
            <!-- Embedded Google Map -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3941.8723198330676!2d38.80904925964942!3d8.891461191899003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x164b82afe79ea789%3A0x32ad809ea3e79e3!2sAddis+Ababa+Science+and+Technology+University!5e0!3m2!1sen!2set!4v1549442557623"
                width="100%" height="400px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
                allowfullscreen></iframe>
        </div>
        <!-- Contact Details Column -->
        <div class="col-lg-4 mb-4">
            <br>
            <h3>Contact Details</h3>
            <p>Phone: +251 911 28 05 20 </p>
            <p>Email: <a href="mailto:contactlifelinetechs@gmail.com">contactlifelinetechs@gmail.com</a></p>
            <p>Lifeline Technologies</p>
            <p>Akaky Kality Sub-city (Kilinto Area)</p>
            <p>Addis Ababa</p>
            <p>Ethiopia</p>
        </div>
    </div>
    <!-- /.row -->

    <!-- Contact Form -->
    <div class="row">
        <div class="col-lg-8 mb-4">
            <h3>Send us a Message</h3>
            <form method="POST" action="{{route('contact.store')}}">
                @csrf
                <div class="control-group form-group">
                    <div class="controls">
                        <label>Full Name:</label>
                        <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                            name="name" value="{{ old('name') }}" required>

                        @if ($errors->has('name'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>
                <div class="control-group form-group">
                    <div class="controls">
                        <label for="name">Phone Number:</label>
                        <input id="phone=" type="text" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}"
                            name="phone" value="{{ old('phone') }}" required>

                        @if ($errors->has('phone'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('phone') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>
                <div class="control-group form-group">
                    <div class="controls">
                        <label for="email">Email Address:</label>
                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                            name="email" value="{{ old('email') }}" required>

                        @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>
                <div class="control-group form-group">
                    <div class="controls">
                        <label>Message:</label>
                        <textarea id="message" type="text" rows="10" cols="100" class="form-control{{ $errors->has('message') ? ' is-invalid' : '' }}"
                            name="message" value="{{ old('message') }}" maxlength="999" style="resize:none"></textarea>

                        @if ($errors->has('message'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('message') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>

                <button type="submit" class="btn btn-primary" id="sendMessageButton">Send Message</button>
            </form>
        </div>

    </div>
    <!-- /.row -->

</div>
@endsection