@extends('layouts.admin')

@section('main-content')
    <!-- Page Heading -->
    <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/home">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Failure Story</li>
    </ol>
    </nav>

    <!-- Main Content goes here -->
    <div class="container">
        <div class="row">
            <div class="col">
            <h1 class="h3 mb-6 text-gray-800">{{ __('List Failure Story') }}</h1>
            </div>
            <div class="col-md-auto">
            <a class="btn btn-primary text-btn-col" href="/add-failure-story" role="button">Add Failure Story</a>
            </div>
        </div>
    </div>
    <br>
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card shadow h-100 py-2 text center">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-6">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col col-lg-12">
                                    <table class="table">
                                        <thead class="thead-color font-thead">
                                            <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Problem</th>
                                            <th scope="col">Description</th>
                                            <th scope="col">Solution</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>UX Strategy: Lean Canvas & User Persona</td>
                                            <td>UI/UX</td>
                                            <td><button class="btn"><a href="/detail-failure-story"><i class="fas fa-eye"></i></a></button>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>UX Strategy: Comparison Matrix</td>
                                            <td>UI/UX</td>
                                            <td><button class="btn"><a href="/detail-failure-story"><i class="fas fa-eye"></i></a></button>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>Basic Laravel</td>
                                            <td>Backend</td>
                                            <td><button class="btn"><a href="/detail-failure-story"><i class="fas fa-eye"></i></a></button>
                                        </tr>
                                        <tr>
                                            <th scope="row">4</th>
                                            <td>Routing and Fetch API</td>
                                            <td>Backend</td>
                                            <td><button class="btn"><a href="/detail-failure-story"><i class="fas fa-eye"></i></a></button>
                                        </tr>
                                        <tr>
                                            <th scope="row">5</th>
                                            <td>Instalasi Node JS</td>
                                            <td>Frontend</td>
                                            <td><button class="btn"><a href="/detail-failure-story"><i class="fas fa-eye"></i></a></button>
                                        </tr>
                                        <tr>
                                            <th scope="row">6</th>
                                            <td>React JS</td>
                                            <td>Frontend</td>
                                            <td><button class="btn"><a href="/detail-failure-story"><i class="fas fa-eye"></i></a></button>
                                        </tr>
                                        <tr>
                                            <th scope="row">7</th>
                                            <td>Android Chart in Android Studio</td>
                                            <td>Android</td>
                                            <td><button class="btn"><a href="/detail-failure-story"><i class="fas fa-eye"></i></a></button>
                                        </tr>
                                        <tr>
                                            <th scope="row">8</th>
                                            <td>Tutorial WPF</td>
                                            <td>Desktop</td>
                                            <td><button class="btn"><a href="/detail-failure-story"><i class="fas fa-eye"></i></a></button>
                                        </tr>
                                        <tr>
                                            <th scope="row">9</th>
                                            <td>Dokumentasi Velacro Documentation</td>
                                            <td>Desktop</td>
                                            <td><button class="btn"><a href="/detail-failure-story"><i class="fas fa-eye"></i></a></button>
                                        </tr>
                                        <tr>
                                            <th scope="row">10</th>
                                            <td>DigitalOcean Automation</td>
                                            <td>Deployment</td>
                                            <td><button class="btn"><a href="/detail-failure-story"><i class="fas fa-eye"></i></a></button>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <nav aria-label="Page navigation example">
    <ul class="pagination justify-content-center">
        <li class="page-item">
        <a class="page-link" href="#" aria-label="Previous">
            <span aria-hidden="true">&laquo;</span>
            <span class="sr-only">Previous</span>
        </a>
        </li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item">
        <a class="page-link" href="#" aria-label="Next">
            <span aria-hidden="true">&raquo;</span>
            <span class="sr-only">Next</span>
        </a>
        </li>
    </ul>
    </nav>

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
