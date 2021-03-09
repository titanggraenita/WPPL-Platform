    @extends('layouts.admin')

    @section('main-content')
        <!-- Page Heading -->
        <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/home">Home</a></li>
            <li class="breadcrumb-item"><a href="/materi">Materi</a></li>
            <li class="breadcrumb-item active" aria-current="page">List Materi</li>
        </ol>
        </nav>

        <!-- Main Content goes here -->
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1 class="h3 mb-4 text-gray-800">{{ __('List Materi') }}</h1>
                </div>
                <div class="col-md-auto">
                    <a class="btn btn-primary text-btn-col" href="/upload-materi" role="button">Add Materi</a>
                </div>
            </div>
        </div>
        <div class="card shadow mb-4">
            <div class="card-body">
                <div class="row">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table-new" id="dataTable" width="100%" cellspacing="0">
                                <thead class="table-thead">
                                    <tr>
                                        <th>No</th>
                                        <th>Course</th>
                                        <th>Modul</th>
                                        <th>Description</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td>UX Strategy: Lean Canvas & User Persona</td>
                                        <td class="text-center">UI/UX</td>
                                        <td class="text-center">This is a description</td>
                                        <td class="text-center">
                                            <button class="btn btn-icon"><a href="/detail-materi"><i class="fas fa-eye fa-color"></i></a></button>
                                            <button class="btn btn-icon"><i class="fas fa-download fa-color"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">2</td>
                                        <td>UX Strategy: Comparison Matrix</td>
                                        <td class="text-center">UI/UX</td>
                                        <td class="text-center">This is a description</td>
                                        <td class="text-center">
                                            <button class="btn btn-icon"><a href="/detail-materi"><i class="fas fa-eye fa-color"></i></a></button>
                                            <button class="btn btn-icon"><i class="fas fa-download fa-color"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">3</td>
                                        <td>Basic Laravel</td>
                                        <td class="text-center">Backend</td>
                                        <td class="text-center">This is a description</td>
                                        <td class="text-center">
                                            <button class="btn btn-icon"><a href="/detail-materi"><i class="fas fa-eye fa-color"></i></a></button>
                                            <button class="btn btn-icon"><i class="fas fa-download fa-color"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">4</td>
                                        <td>Routing and Fetch API</td>
                                        <td class="text-center">Backend</td>
                                        <td class="text-center">This is a description</td>
                                        <td class="text-center">
                                            <button class="btn btn-icon"><a href="/detail-materi"><i class="fas fa-eye fa-color"></i></a></button>
                                            <button class="btn btn-icon"><i class="fas fa-download fa-color"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">5</td>
                                        <td>Instalasi Node JS</td>
                                        <td class="text-center">Frontend</td>
                                        <td class="text-center">This is a description</td>
                                        <td class="text-center">
                                            <button class="btn btn-icon"><a href="/detail-materi"><i class="fas fa-eye fa-color"></i></a></button>
                                            <button class="btn btn-icon"><i class="fas fa-download fa-color"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">6</td>
                                        <td>React JS</td>
                                        <td class="text-center">Frontend</td>
                                        <td class="text-center">This is a description</td>
                                        <td class="text-center">
                                            <button class="btn btn-icon"><a href="/detail-materi"><i class="fas fa-eye fa-color"></i></a></button>
                                            <button class="btn btn-icon"><i class="fas fa-download fa-color"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">7</td>
                                        <td>Android Chart in Android Studio</td>
                                        <td class="text-center">Android</td>
                                        <td class="text-center">This is a description</td>
                                        <td class="text-center">
                                            <button class="btn btn-icon"><a href="/detail-materi"><i class="fas fa-eye fa-color"></i></a></button>
                                            <button class="btn btn-icon"><i class="fas fa-download fa-color"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">8</td>
                                        <td>Tutorial WPF</td>
                                        <td class="text-center">Desktop</td>
                                        <td class="text-center">This is a description</td>
                                        <td class="text-center">
                                            <button class="btn btn-icon"><a href="/detail-materi"><i class="fas fa-eye fa-color"></i></a></button>
                                            <button class="btn btn-icon"><i class="fas fa-download fa-color"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">9</td>
                                        <td>Dokumentasi Velacro Documentation</td>
                                        <td class="text-center">Desktop</td>
                                        <td class="text-center">This is a description</td>
                                        <td class="text-center">
                                            <button class="btn btn-icon"><a href="/detail-materi"><i class="fas fa-eye fa-color"></i></a></button>
                                            <button class="btn btn-icon"><i class="fas fa-download fa-color"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">10</td>
                                        <td>Digital Ocean Automation</td>
                                        <td class="text-center">Deployment</td>
                                        <td class="text-center">This is a description</td>
                                        <td class="text-center">
                                            <button class="btn btn-icon"><a href="/detail-materi"><i class="fas fa-eye fa-color"></i></a></button>
                                            <button class="btn btn-icon"><i class="fas fa-download fa-color"></i></button>
                                        </td>
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
