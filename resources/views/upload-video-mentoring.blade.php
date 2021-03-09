@extends('layouts.admin')

@section('main-content')
    <!-- Page Heading -->
    <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/home">Home</a></li>
        <li class="breadcrumb-item"><a href="/vide-mentoring">Video Mentoring</a></li>
        <li class="breadcrumb-item"><a href="/list-video-mentoring">List Video Mentoring</a></li>
        <li class="breadcrumb-item active" aria-current="page">Upload Video Mentoring</li>
    </ol>
    </nav>
    <h1 class="h3 mb-4 text-gray-800">{{ __('Upload Video Mentoring') }}</h1>

    <!-- Main Content goes here -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="row">
                <div class="col-lg-8">
                    <div class="form-group focused">
                        <label class="form-control-label" for="title">Video Title</label>
                        <input type="text" id="title" class="form-control" name="title">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group focused">
                        <label for="modul">Modul</label>
                        <select id="modul" class="form-control">
                            <option selected>Select Modul...</option>
                            <option value="1">Backend</option>
                            <option value="2">Frontend</option>
                            <option value="3">Mobile</option>
                            <option value="4">Desktop</option>
                            <option value="5">Deployment</option>
                        </select>
                    </div>
                </div>
            </div>    
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group focused">
                        <label class="form-control-label" for="description">Description</label>
                        <textarea id="description" class="form-control" name="description" placeholder="Write a detailed description..."></textarea>
                        <p class="text-form">You will be able to edit this information later.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group focused">
                        <label class="form-control-label" for="link">Video Link</label>
                        <input type="text" id="link" class="form-control" name="link">
                        <p class="text-form">Put your link video from YouTube.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Upload</button>
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
