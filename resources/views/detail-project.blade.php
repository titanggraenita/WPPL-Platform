@extends('layouts.admin')

@section('main-content')
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">{{ __('Detail Project') }}</h1>

    <!-- Main Content goes here -->
    <div class="container-0">
        <div class="card item-0-1  mr-5" style="border : 1px solid #fff;">
            <div class="item-1 card-body" style="flex-direction: column;display:flex;min-width: 250px; align-items: center;justify-content: center">
                <span class="iconify" data-icon="carbon:document" data-inline="false"></span>
                <br>
                <h5>Deliverable</h5>
            </div>
        </div>

        <div class="card item-0-1 mr-5" style="border : 1px solid #fff;">
            <div class="item-1 card-body" style="flex-direction: column;display:flex;min-width: 250px; align-items: center;justify-content: center">
                <span class="iconify" data-icon="teenyicons:kanban-outline" data-inline="false" ></span>
                <br>
                <h5>Kanban Card</h5>
            </div>
        </div>

        <div class="card item-0-1 mr-5" style="border : 1px solid #fff;">
            <div class="item-1 card-body" style="flex-direction: column;display:flex;min-width: 250px; height:430px; align-items: center;justify-content: center">
                <span class="iconify" data-icon="carbon:ai-status-failed" data-inline="false"></span>
                <br>
                <h5>Failure Story</h5>
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
