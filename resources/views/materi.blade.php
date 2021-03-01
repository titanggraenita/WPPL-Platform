@extends('layouts.admin')

@section('main-content')
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">{{ __('List Materi') }}</h1>

    <!-- Main Content goes here -->
    <div class="card shadow mb-4">

        <div class="card-body">
            <div class="row">

                <div class="card-body">
                    <div class="modul float-right">
                        <select class="form-control btn-top" id="modul">
                            <option selected>Select Modul</option>
                            <option value="1">UI/UX</option>
                            <option value="2">Frontend</option>
                            <option value="3">Mobile</option>
                            <option value="4">Desktop</option>
                            <option value="5">Deployment</option>
                        </select>
                    </div>
                    <div class="table-responsive">
                        <table class="table-new" id="dataTable" width="100%" cellspacing="0">
                            <thead class="table-thead">
                                <tr>
                                    <th>No</th>
                                    <th>Course</th>
                                    <th>Modul</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center">1</td>
                                    <td>UX Strategy: Lean Canvas & User Persona</td>
                                    <td>UI/UX</td>
                                    <td class="text-center">
                                        <button class="btn btn-icon"><a href="/detail-materi"><i class="fas fa-eye fa-color"></i></a></button>
                                        <button class="btn btn-icon"><i class="fas fa-download fa-color"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">2</td>
                                    <td>UX Strategy: Comparison Matrix</td>
                                    <td>UI/UX</td>
                                    <td class="text-center">
                                        <button class="btn btn-icon"><a href="/detail-materi"><i class="fas fa-eye fa-color"></i></a></button>
                                        <button class="btn btn-icon"><i class="fas fa-download fa-color"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">3</td>
                                    <td>Basic Laravel</td>
                                    <td>Backend</td>
                                    <td class="text-center">
                                        <button class="btn btn-icon"><a href="/detail-materi"><i class="fas fa-eye fa-color"></i></a></button>
                                        <button class="btn btn-icon"><i class="fas fa-download fa-color"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">4</td>
                                    <td>Routing and Fetch API</td>
                                    <td>Backend</td>
                                    <td class="text-center">
                                        <button class="btn btn-icon"><a href="/detail-materi"><i class="fas fa-eye fa-color"></i></a></button>
                                        <button class="btn btn-icon"><i class="fas fa-download fa-color"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">5</td>
                                    <td>Instalasi Node JS</td>
                                    <td>Frontend</td>
                                    <td class="text-center">
                                        <button class="btn btn-icon"><a href="/detail-materi"><i class="fas fa-eye fa-color"></i></a></button>
                                        <button class="btn btn-icon"><i class="fas fa-download fa-color"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">6</td>
                                    <td>React JS</td>
                                    <td>Frontend</td>
                                    <td class="text-center">
                                        <button class="btn btn-icon"><a href="/detail-materi"><i class="fas fa-eye fa-color"></i></a></button>
                                        <button class="btn btn-icon"><i class="fas fa-download fa-color"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">7</td>
                                    <td>Android Chart in Android Studio</td>
                                    <td>Android</td>
                                    <td class="text-center">
                                        <button class="btn btn-icon"><a href="/detail-materi"><i class="fas fa-eye fa-color"></i></a></button>
                                        <button class="btn btn-icon"><i class="fas fa-download fa-color"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">8</td>
                                    <td>Tutorial WPF</td>
                                    <td>Desktop</td>
                                    <td class="text-center">
                                        <button class="btn btn-icon"><a href="/detail-materi"><i class="fas fa-eye fa-color"></i></a></button>
                                        <button class="btn btn-icon"><i class="fas fa-download fa-color"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">9</td>
                                    <td>Dokumentasi Velacro Documentation</td>
                                    <td>Desktop</td>
                                    <td class="text-center">
                                        <button class="btn btn-icon"><a href="/detail-materi"><i class="fas fa-eye fa-color"></i></a></button>
                                        <button class="btn btn-icon"><i class="fas fa-download fa-color"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">10</td>
                                    <td>Digital Ocean Automation</td>
                                    <td>Deployment</td>
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
