@extends('layouts.admin')

@section('main-content')
    <!-- Page Heading -->
    <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/home">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Kanban Card</li>
    </ol>
    </nav>
    <h1 class="h3 mb-4 text-gray-800">{{ __('Kanban Card') }}</h1>

    <!-- Main Content goes here -->
    <div class="container-0">
        <div class="card item-0">
            <div class="card-header" style="background-color: #e74a3b" >
                <span>TO DO</span> 
                <hr>
                <p class="rounded-circle" style=" color:#e74a3b ; ">5</p>
            </div>
            <div class="item-1 card-body">
                <p style="padding: 10px;" class="card mini-card">Lorem ipsum dolor sit dolor sit </p>
                <p style="padding: 10px;" class="card mini-card">Lorem ipsum dolor sit dolor sit</p>
                <p style="padding: 10px;" class="card mini-card">Lorem ipsum dolor sit dolor sit </p>
                <p style="padding: 10px;" class="card mini-card">Lorem ipsum dolor sit dolor sit </p>
            </div>
            <div class="container-2">
                <a href="#" class="btn" style="color:white;background-color: #e74a3b">Add Task +</a>
            </div>
        </div>

        <div class="card item-0">
            <div class="card-header" style="background-color: #ffc107">
                <span>DOING</span> 
                <hr>
                <p class=" rounded-circle" style="color: #ffc107">5</p>
            </div>
            <div class="item-1 card-body">
                <p style="padding: 10px;" class="card mini-card">Lorem ipsum dolor sit dolor sit </p>
                <p style="padding: 10px;" class="card mini-card">Lorem ipsum dolor sit dolor sit</p>
                <p style="padding: 10px;" class="card mini-card">Lorem ipsum dolor sit dolor sit </p>
                <p style="padding: 10px;" class="card mini-card">Lorem ipsum dolor sit dolor sit </p>
            </div>
            <div class="container-2">
                <a href="#" class="btn" style="color:white;background-color: #ffc107">Add Task +</a>
            </div>
        </div>

        <div class="card item-0">
            <div class="card-header" style="background-color: #28a745" >
               <span>DONE</span>
                <hr>
                <p class=" rounded-circle" style="color: #28a745" >5</p>
            </div>
            <div class="item-1 card-body">
                <p style="padding: 10px;" class="card mini-card">Lorem ipsum dolor sit dolor sit </p>
                <p style="padding: 10px;" class="card mini-card">Lorem ipsum dolor sit dolor sit</p>
                <p style="padding: 10px;" class="card mini-card">Lorem ipsum dolor sit dolor sit </p>
                <p style="padding: 10px;" class="card mini-card">Lorem ipsum dolor sit dolor sit </p>
            </div>
            <div class="container-2">
                <a href="#" class="btn" style="color:white;background-color: #28a745">Add Task +</a>
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
