@extends('layouts.admin')

@section('main-content')
    <!-- Page Heading -->
    <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/home">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Forum</li>
    </ol>
    </nav>
    <h1 class="h3 mb-4 text-gray-800">{{ __('Forum') }}</h1>

    <!-- Main Content goes here -->
    <div class="container-0 card-header">  
        <div class="item card font-weight-bold border-col border-dark text-center" style="width: 18rem;">
            <div class="container">
                <div class="card-title">Android</div><br>
                <i class="fas fa-user fa-5x"></i><br><br>
            </div>
            <a href="/list-forum" class="btn btn-primary">Details</a>
        </div> 
        <div class="item card font-weight-bold border-col border-dark text-center" style="width: 18rem;">
            <div class="container">
                <div class="card-title">Backend</div><br>
                <i class="fas fa-user fa-5x"></i><br><br>
            </div>
            <a href="/list-forum" class="btn btn-primary">Details</a>
        </div> 
        <div class="item card font-weight-bold border-col border-dark text-center" style="width: 18rem;">
            <div class="container">
                <div class="card-title">Deployment</div><br>
                <i class="fas fa-user fa-5x"></i><br><br>
            </div>
            <a href="/list-forum" class="btn btn-primary">Details</a>
        </div> 
    </div> 
    <div class="container-0 card-header">  
        <div class="item card font-weight-bold border-col border-dark text-center" style="width: 18rem;">
            <div class="container">
                <div class="card-title">Desktop</div><br>
                <i class="fas fa-user fa-5x"></i><br><br>
            </div>
            <a href="/list-forum" class="btn btn-primary">Details</a>
        </div> 
        <div class="item card font-weight-bold border-col border-dark text-center" style="width: 18rem;">
            <div class="container">
                <div class="card-title">UI/UX</div><br>
                <i class="fas fa-user fa-5x"></i><br><br>
            </div>
            <a href="/list-forum" class="btn btn-primary">Details</a>
        </div> 
        <div class="item card font-weight-bold border-col border-dark text-center" style="width: 18rem;">
            <div class="container">
                <div class="card-title">Web</div><br>
                <i class="fas fa-user fa-5x"></i><br><br>
            </div>
            <a href="/list-forum" class="btn btn-primary">Details</a>
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
