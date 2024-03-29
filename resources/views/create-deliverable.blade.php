@extends('layouts.admin')

@section('main-content')
    <!-- Page Heading -->
    <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/home">Home</a></li>
        <li class="breadcrumb-item"><a href="/deliverable">Deliverable</a></li>
        <li class="breadcrumb-item active" aria-current="page">Create Deliverable</li>
    </ol>
    </nav>
    <h1 class="h3 mb-4 text-gray-800">{{ __('Create Deliverable for Student') }}</h1>

    <!-- Main Content goes here -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="row">
                <div class="col-lg-8">
                    <div class="form-group focused">
                        <label class="form-control-label" for="name">Name</label>
                        <input type="text" id="name" class="form-control" name="name">
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
                        <textarea id="question" class="form-control" name="description" placeholder="Write a detail description..."></textarea>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group focused">
                        <label class="form-control-label" for="due_date">Due Date</label>
                        <div class="form-item"></div>
                        <input class="input-sm form-control" id="start-date" type="text" name="start" data-date-format="DD, MM d"/><span class="date-text date-depart"></span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group focused">
                        <label class="form-control-label" for="attachement">Attachment</label>
                        <form action="{{ route('dropzone') }}" class="dropzone" method="post" enctype="multipart/form-data">@csrf
                        </form>
                        <p class="text-form">(* File type : .docx, .pptx, .xlsx, .pdf)</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-1">
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Post</button>
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
