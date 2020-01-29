@extends('layouts.dashboard')

@section('breadcrumb')
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="/">Home</a>
    </li>
    <li class="breadcrumb-item">
        <a href="/dashboard">Dashboard</a>
    </li>
    <li class="breadcrumb-item active">Favorites</li>
</ol>
@endsection

@section('main')
<div class="card">
    <div class="card-header">{{ __('Favorites') }}</div>

    <div class="card-body">
        <div class="jumbotron">
            <div class="container">
                <h1 class="display-4">No favorite courses yet</h1>
            </div>
        </div>
    </div>
</div>
@endsection
