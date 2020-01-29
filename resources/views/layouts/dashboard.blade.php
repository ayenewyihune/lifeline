@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mt-4 mb-3">Account Settings
    </h1>

    @yield('breadcrumb')
    <div class="row">
        <!-- Sidebar Column -->
        <div class="col-lg-3 mb-4">
            <div class="list-group">
                <a href="/dashboard" class="list-group-item">Account Details</a>
                <a href="/dashboard/favorites" class="list-group-item">Favorites</a>
            </div>
        </div>
        <!-- Content Column -->
        <div class="col-lg-9 mb-4">
            @yield('main')
        </div>
    </div>
</div>

@endsection
