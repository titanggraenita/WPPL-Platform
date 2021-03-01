@extends('layouts.admin')

@section('main-content')
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">{{ __('Forum') }}</h1>

    <!-- Main Content goes here -->
    <div class="card shadow mb-4">

        <div class="card-body">
            <div class="row">

                <div class="card-body">
                    <a class="btn btn-primary btn-top float-right" href="/ask-forum">Ask Forum</a>
                    <div class="table-responsive">
                        <table class="table-new" id="dataTable" width="100%" cellspacing="0">
                            <thead class="table-thead">
                                <tr>
                                    <th>No</th>
                                    <th>Title</th>
                                    <th>Modul</th>
                                    <th>Question</th>
                                    <th>Answer</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center">1</td>
                                    <td>Choosing colors</td>
                                    <td>UI/UX</td>
                                    <td>Confuse to choose whats color that suitable for our product</td>
                                    <td class="text-center"><button class="btn btn-icon"><a href="/answer-forum"><i class="fas fa-eye fa-color"></i></a></button></td>
                                </tr>
                                <tr>
                                    <td class="text-center">2</td>
                                    <td>Pagination</td>
                                    <td>Backend</td>
                                    <td>Dont know how to add pagination using query params</td>
                                    <td class="text-center"><button class="btn btn-icon"><a href="/answer-forum"><i class="fas fa-eye fa-color"></i></a></button></td>
                                </tr>
                                <tr>
                                    <td class="text-center">3</td>
                                    <td>Server handling</td>
                                    <td>Frontend</td>
                                    <td>Dont know how to fix index for server handling</td>
                                    <td class="text-center"><button class="btn btn-icon"><a href="/answer-forum"><i class="fas fa-eye fa-color"></i></a></button></td>
                                </tr>
                                <tr>
                                    <td class="text-center">4</td>
                                    <td>Login validation</td>
                                    <td>Android</td>
                                    <td>Dont know how to add login validation</td>
                                    <td class="text-center"><button class="btn btn-icon "><a href="/answer-forum"><i class="fas fa-eye fa-color"></i></a></button></td>
                                </tr>
                                <tr>
                                    <td class="text-center">5</td>
                                    <td>Failed request</td>
                                    <td>Deployment</td>
                                    <td>Cant fixing failed request on controller</td>
                                    <td class="text-center"><button class="btn btn-icon"><a href="/answer-forum"><i class="fas fa-eye fa-color"></i></a></button></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <nav aria-label="Page navigation example">
                        <ul class="pagination float-right">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                </a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
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
