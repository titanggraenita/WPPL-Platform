@extends('layouts.admin')

@section('main-content')
    <!-- Page Heading -->
    <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/home">Home</a></li>
        <li class="breadcrumb-item"><a href="/forum">Forum</a></li>
        <li class="breadcrumb-item active" aria-current="page">List Forum</li>
    </ol>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col">
            <h1 class="h3 mb-4 text-gray-800">{{ __('List Forum') }}</h1>
            </div>
            <div class="col-md-auto">
            <a class="btn btn-primary text-btn-col" href="/ask-forum" role="button">Add Question</a>
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
                                            <th scope="col">Title</th>
                                            <th scope="col">Modul</th>
                                            <th scope="col">Question</th>
                                            <th scope="col">Answer</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Choosing colors</td>
                                            <td>UI/UX</td>
                                            <td>Confuse to choose whats color that suitable for our product</td>
                                            <td><button class="btn"><a href="/answer-forum"><i class="fas fa-eye"></i></a></button></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>Pagination</td>
                                            <td>Backend</td>
                                            <td>Dont know how to add pagination using query params</td>
                                            <td><button class="btn"><a href="/answer-forum"><i class="fas fa-eye"></i></a></button></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>Server handling</td>
                                            <td>Frontend</td>
                                            <td>Dont know how to fix index for server handling</td>
                                            <td><button class="btn"><a href="/answer-forum"><i class="fas fa-eye"></i></a></button></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">4</th>
                                            <td>Login validation</td>
                                            <td>Android</td>
                                            <td>Dont know how to add login validation</td>
                                            <td><button class="btn"><a href="/answer-forum"><i class="fas fa-eye"></i></a></button></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">5</th>
                                            <td>Failed request</td>
                                            <td>Deployment</td>
                                            <td>Cant fixing failed request on controller</td>
                                            <td><button class="btn"><a href="/answer-forum"><i class="fas fa-eye"></i></a></button></td>
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
