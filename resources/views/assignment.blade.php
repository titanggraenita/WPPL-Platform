@extends('layouts.admin')

@section('main-content')
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">{{ __('List Assignment') }}</h1>

    <!-- Main Content goes here -->
    <div class="card shadow mb-4">

        <div class="card-body">
            <div class="row">

                <div class="col-lg-4 mb-4">
                    <div class="card card-task">
                        <div class="row">
                            <div class="col-lg-5">
                                <img class="task-picture" src="img/task_icon.png">
                            </div>
                            <div class="col-lg-5">
                                <div class="task-description">
                                    <h5 class="font-weight-bold">Task 1</h5>
                                    <p>30 days left</p>
                                    <p class="task-label label-unfinished">Unfinished<p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <a href="/upload-assignment" class="btn btn-primary">Upload File</a>
                            </div>
                            <div class="col-lg-4">
                                <a href="#" class="btn btn-primary">View</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mb-4">
                    <div class="card card-task">
                        <div class="row">
                            <div class="col-lg-5">
                                <img class="task-picture" src="img/task_icon.png">
                            </div>
                            <div class="col-lg-5">
                                <div class="task-description">
                                    <h5 class="font-weight-bold">Task 2</h5>
                                    <p>30 days left</p>
                                    <p class="task-label label-unfinished">Unfinished<p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <a href="/upload-assignment" class="btn btn-primary">Upload File</a>
                            </div>
                            <div class="col-lg-4">
                                <a href="#" class="btn btn-primary">View</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mb-4">
                    <div class="card card-task">
                        <div class="row">
                            <div class="col-lg-5">
                                <img class="task-picture" src="img/task_icon.png">
                            </div>
                            <div class="col-lg-5">
                                <div class="task-description">
                                    <h5 class="font-weight-bold">Task 3</h5>
                                    <p>30 days left</p>
                                    <p class="task-label label-finished">Finished<p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <a href="/upload-assignment" class="btn btn-primary">Upload File</a>
                            </div>
                            <div class="col-lg-4">
                                <a href="#" class="btn btn-primary">View</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row">

                <div class="col-lg-4">
                    <div class="card card-task">
                        <div class="row">
                            <div class="col-lg-5">
                                <img class="task-picture" src="img/task_icon.png">
                            </div>
                            <div class="col-lg-5">
                                <div class="task-description">
                                    <h5 class="font-weight-bold">Task 1</h5>
                                    <p>30 days left</p>
                                    <p class="task-label label-unfinished">Unfinished<p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <a href="/upload-assignment" class="btn btn-primary">Upload File</a>
                            </div>
                            <div class="col-lg-4">
                                <a href="#" class="btn btn-primary">View</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="card card-task">
                        <div class="row">
                            <div class="col-lg-5">
                                <img class="task-picture" src="img/task_icon.png">
                            </div>
                            <div class="col-lg-5">
                                <div class="task-description">
                                    <h5 class="font-weight-bold">Task 2</h5>
                                    <p>30 days left</p>
                                    <p class="task-label label-unfinished">Unfinished<p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <a href="/upload-assignment" class="btn btn-primary">Upload File</a>
                            </div>
                            <div class="col-lg-4">
                                <a href="#" class="btn btn-primary">View</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="card card-task">
                        <div class="row">
                            <div class="col-lg-5">
                                <img class="task-picture" src="img/task_icon.png">
                            </div>
                            <div class="col-lg-5">
                                <div class="task-description">
                                    <h5 class="font-weight-bold">Task 3</h5>
                                    <p>30 days left</p>
                                    <p class="task-label label-finished">Finished<p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <a href="/upload-assignment" class="btn btn-primary">Upload File</a>
                            </div>
                            <div class="col-lg-4">
                                <a href="#" class="btn btn-primary">View</a>
                            </div>
                        </div>
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
