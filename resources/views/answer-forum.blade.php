@extends('layouts.admin')

@section('main-content')
    <!-- Page Heading -->
    <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/home">Home</a></li>
        <li class="breadcrumb-item"><a href="/forum">Forum</a></li>
        <li class="breadcrumb-item"><a href="/list-forum">List Forum</a></li>
        <li class="breadcrumb-item active" aria-current="page">Answer Failure Story</li>
    </ol>
    </nav>
    <h1 class="h3 mb-4 text-gray-800">{{ __('Answer Forum') }}</h1>

    <!-- Main Content goes here -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="row">
                <div class="col-lg-8">
                    <div class="form-group focused">
                        <label class="form-control-label" for="title">Title</label>
                        <input type="text" id="problem" class="form-control" name="problem" readonly>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group focused">
                        <label class="form-control-label" for="title">Modul</label>
                        <select id="modul" class="form-control">
                            <option selected>Select Modul...</option>
                            <option value="1">UI/UX</option>
                            <option value="2">Backend</option>
                            <option value="3">Frontend</option>
                            <option value="4">Mobile</option>
                            <option value="5">Desktop</option>
                            <option value="6">Deployment</option>
                        </select>
                    </div>
                </div>
            </div>    
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group focused">
                        <label class="form-control-label" for="description">Question</label>
                        <textarea id="description" class="form-control" name="description" readonly></textarea>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group focused">
                        <label class="form-control-label" for="solution">Answer</label>
                        <textarea id="solution" class="form-control" name="solution"></textarea>
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
