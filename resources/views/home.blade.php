@extends('layouts.admin')

@section('main-content')

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">{{ __('Dashboard') }}</h1>

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

    <div class="row">

        <!-- Content Column -->
        <div class="col-lg-12 mb-4">

            <!-- My Project -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">My Projects</h6>
                </div>
                <div class="card-body">
                    <a class="btn btn-primary btn-top float-right" href="#" data-toggle="modal" data-target="#create-project-modal">Add Project</a>

                    <div class="modal fade" role="dialog" id="create-project-modal">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h3 class="modal-title">Add Project</h3>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label class="form-control-label" for="project_name">Project Name</label>
                                        <input type="text" name="project_name" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-control-label" for="description">Description</label>
                                        <textarea name="description" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table-new" id="dataTable" width="100%" cellspacing="0">
                            <thead class="table-thead">
                                <tr>
                                    <th>Project Name</th>
                                    <th>Description</th>
                                    <th>Owner</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Hotelin</td>
                                    <td>Platform untuk Booking Hotel</td>
                                    <td>andhikadar@gmail.com</td>
                                    <td style="text-align: center">
                                        <button class="btn btn-icon"><a href="/detail-project"><i class="fas fa-eye fa-color"></i></a></button>
                                        <button class="btn btn-icon"><a href="#"><i class="fas fa-pencil-alt fa-color"></i></a></button>
                                        <button class="btn btn-icon"><i class="fas fa-trash-alt fa-color"></i></button>
                                        <button class="btn btn-icon"><a href="#"><i class="fas fa-user-plus fa-color"></i></a></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Benjol</td>
                                    <td>Platform untuk Servis Motor Online</td>
                                    <td>ayudiva@gmail.com</td>
                                    <td style="text-align: center">
                                        <button class="btn btn-icon"><a href="#"><i class="fas fa-eye fa-color"></i></a></button>
                                        <button class="btn btn-icon"><a href="#"><i class="fas fa-pencil-alt fa-color"></i></a></button>
                                        <button class="btn btn-icon"><i class="fas fa-trash-alt fa-color"></i></button>
                                        <button class="btn btn-icon"><a href="#"><i class="fas fa-user-plus fa-color"></i></a></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Shopipi</td>
                                    <td>Platform untuk Belanjan Online</td>
                                    <td>cinnamon@gmail.com</td>
                                    <td style="text-align: center">
                                        <button class="btn btn-icon"><a href="#"><i class="fas fa-eye fa-color"></i></a></button>
                                        <button class="btn btn-icon"><a href="#"><i class="fas fa-pencil-alt fa-color"></i></a></button>
                                        <button class="btn btn-icon"><i class="fas fa-trash-alt fa-color"></i></button>
                                        <button class="btn btn-icon"><a href="#"><i class="fas fa-user-plus fa-color"></i></a></button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">

        <!-- Content Column -->
        <div class="col-lg-12 mb-4">

            <!-- My Task -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <div class="row">
                        <div class="col-lg-6">
                            <h6 class="m-0 font-weight-bold text-primary">My Task</h6>
                        </div>
                        <div class="col-lg-6">
                            <a class="see-all-link" href="/assignment">See All>></a>
                        </div>
                    </div>
                </div>

                <div class="card-body">
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
                                    <div class="col-lg-12">
                                        <a href="/upload-assignment" class="btn btn-primary">Upload File</a>
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
                                    <div class="col-lg-12">
                                        <a href="/upload-assignment" class="btn btn-primary">Upload File</a>
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
                                    <div class="col-lg-12">
                                        <a href="/upload-assignment" class="btn btn-primary">Upload File</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            
        </div>
        
    </div>

    <div class="row">

        <!-- Content Column -->
        <div class="col-lg-12 mb-4">

            <!-- Latest Materi -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <div class="row">
                        <div class="col-lg-6">
                            <h6 class="m-0 font-weight-bold text-primary">Latest Materi</h6>
                        </div>
                        <div class="col-lg-6">
                            <a class="see-all-link" href="/materi">See All>></a>
                        </div>
                    </div>
                </div>
                
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-3 col-sm-6">
                            <div class="card text-center card-list">
                                <img src="img/laravel.png" class="card-img-top card-image img-fluid">
                                <div class="card-text">
                                    <h5 class="card-title font-weight-bold"><a href="#">Laravel</a></h5>
                                    <p class="card-subject">Backend</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="card text-center card-list">
                                <img src="img/react.png" class="card-img-top card-image img-fluid">
                                <div class="card-text">
                                    <h5 class="card-title font-weight-bold"><a href="#">React JS</a></h5>
                                    <p class="card-subject">Frontend</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="card text-center card-list">
                                <img src="img/android.png" class="card-img-top card-image img-fluid">
                                <div class="card-text">
                                    <h5 class="card-title font-weight-bold"><a href="#">Android</a></h5>
                                    <p class="card-subject">Mobile</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="card text-center card-list">
                                <img src="img/vue.jpg" class="card-img-top card-image img-fluid">
                                <div class="card-text">
                                    <h5 class="card-title font-weight-bold"><a href="#">Vue JS</a></h5>
                                    <p class="card-subject">Frontend</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

    <div class="row">

        <!-- Content Column -->
        <div class="col-lg-12 mb-4">

            <!-- Latest Materi -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <div class="row">
                        <div class="col-lg-6">
                            <h6 class="m-0 font-weight-bold text-primary">Latest Video Mentoring</h6>
                        </div>
                        <div class="col-lg-6">
                            <a class="see-all-link" href="/video-mentoring">See All>></a>
                        </div>
                    </div>
                </div>
                
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-3 col-sm-6">
                            <div class="card text-center card-list">
                                <img src="img/laravel.png" class="card-img-top card-image img-fluid">
                                <div class="card-text">
                                    <h5 class="card-title font-weight-bold"><a href="#">Laravel</a></h5>
                                    <p class="card-subject">Backend</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="card text-center card-list">
                                <img src="img/react.png" class="card-img-top card-image img-fluid">
                                <div class="card-text">
                                    <h5 class="card-title font-weight-bold"><a href="#">React JS</a></h5>
                                    <p class="card-subject">Frontend</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="card text-center card-list">
                                <img src="img/android.png" class="card-img-top card-image img-fluid">
                                <div class="card-text">
                                    <h5 class="card-title font-weight-bold"><a href="#">Android</a></h5>
                                    <p class="card-subject">Mobile</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="card text-center card-list">
                                <img src="img/vue.jpg" class="card-img-top card-image img-fluid">
                                <div class="card-text">
                                    <h5 class="card-title font-weight-bold"><a href="#">Vue JS</a></h5>
                                    <p class="card-subject">Frontend</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

@endsection
