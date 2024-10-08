@extends('dashboard/layouts.template')
@section('content')
<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-left">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="">Dashboard</a></li>
                    <li class="breadcrumb-item active">Data Rules</li>
                </ol>
                <h4 class="Header-title">Data Ruless</h4>
            </div>
        </div>
    </div>
</div>
<!-- end page title -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="">
                    <p><a href="rules/create" class="btn btn-secondary"> Tambah Rules</a></p>
                </div>
                @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
                @endif

                @if (session('error'))
                <div class="alert alert-error">
                    {{ session('error') }}
                </div>
                @endif
                <br>

                <div class="tab-content">
                    <div class="tab-pane show active" id="alt-pagination-preview">
                        <table id="alternative-page-datatable" class="table table-striped dt-responsive nowrap w-100 text-center">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Jam Kecelakaan</th>
                                    <th>Kondisi Jalan</th>
                                    <th>Kondisi Lingkungan</th>
                                    <th>Kondisi Kecelakaan</th>
                                    <th>Tingkat Kerawanan</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($rules as $rule)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $rule->jam }}</td>
                                    <td>{{ $rule->kondisi_jalan }}</td>
                                    <td>{{ $rule->kondisi_lingkungan }}</td>
                                    <td>{{ $rule->kondisi_kecelakaan }}</td>
                                    <td style="color:
                                            @if ($rule->tingkat_kerawanan == 'Sangat Rawan') red
                                            @elseif ($rule->tingkat_kerawanan == 'Rawan') orange
                                            @else green @endif">
                                        {{ $rule->tingkat_kerawanan }}
                                    </td>

                                    <td>
                                        <a href="{{ route('rules.edit', $rule->id) }}" class="btn btn-success btn-md ml-1">Edit</a>

                                        <button type="button" class="btn btn-danger ml-1" data-bs-toggle="modal" data-bs-target="#warning-alert-modal">Delete
                                        </button>
                                        <div id="warning-alert-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                                            <div class="modal-dialog modal-sm">
                                                <div class="modal-content">
                                                    <div class="modal-body p-4">
                                                        <div class="text-center">
                                                            <i class="ri-alert-line h1 text-warning"></i>
                                                            <h4 class="mt-2">Hapus Data</h4>
                                                            <div class="text-center">
                                                                <p class="mt-3">Anda yakin menghapus
                                                                    data?
                                                                    <br>
                                                                    Data akan terhapus dari database
                                                                </p>
                                                            </div>
                                                            <form action="{{ route('rules.destroy', $rule->id) }}" class="d-inline" method="POST">
                                                                {{ csrf_field() }}
                                                                {{ method_field('delete') }}
                                                                <button class="btn btn-danger ml-1">Delete</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                <th>No</th>
                                    <th>Jam Kecelakaan</th>
                                    <th>Kondisi Jalan</th>
                                    <th>Kondisi Lingkungan</th>
                                    <th>Kondisi Kecelakaan</th>
                                    <th>Tingkat Kerawanan</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div> <!-- end preview-->
                </div> <!-- end tab-content-->
            </div> <!-- end card body-->
        </div> <!-- end card -->
    </div><!-- end col-->
</div>
@endsection