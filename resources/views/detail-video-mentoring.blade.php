@extends('layouts.admin')

@section('main-content')
    <!-- Page Heading -->
    <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/home">Home</a></li>
        <li class="breadcrumb-item"><a href="/video-mentoring">Video Mentoring</a></li>
        <li class="breadcrumb-item"><a href="/list-video-mentoring">List Video Mentoring</a></li>
        <li class="breadcrumb-item active" aria-current="page">Detail Video Mentoring</li>
    </ol>
    </nav>
    <h1 class="h3 mb-4 text-gray-800">{{ __('Detail Video Mentoring') }}</h1>

    <!-- Main Content goes here -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h4><label class="form-control-label" for="title">Basic Laravel</label></h4>
                        <h6><label class="form-control-label" for="title">Backend</label></h6>
                    </div>
                    <div class="col-md-auto">
                        <a class="btn btn-primary text-btn-col font-weight-bold" href="#" role="button">Download</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group focused">
                        <img src="img/thumbnailvideo.png" class="card-img-top img-fluid">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group focused">
                        <label class="form-control-label" for="description">Description</label>
                        <textarea id="description" class="form-control" name="description" readonly></textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- End of Main Content -->
@endsection

@push('notif')
@if (session('success'))
<div class="alert alert-success border-left-success alert-dismissible fade show" role="alert">
    {{ session('success') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif

@if (session('status'))
    <div class="alert alert-success border-left-success" role="alert">
        {{ session('status') }}
    </div>
@endif
@endpush
