@extends('dashboard.layouts.template')
@section('content')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-left">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="">Dashboard</a></li>
                        <li class="breadcrumb-item active">Data Kecalakaan</li>
                    </ol>
                    <h4 class="Header-title">Data Kecalakaan</h4>
                </div>
            </div>
        </div>
    </div>
    <!-- end page title -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div>
                        <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal"
                            data-bs-target="#tambah-data">Tambah Data </button>
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
                            <table id="alternative-page-datatable" class="table table-striped dt-responsive nowrap w-100">
                                <thead>
                                    <tr>
                                        <th>Nama Jalan</th>
                                        <th>Alamat</th>
                                        <th>Status Kerawanan</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Jalan Tuban - Bancar</td>
                                        <td>Km 02 Simpang 3 Semen</td>
                                        <td>Sangat Rawan</td>
                                        <td>
                                            <a href="/dashboard/details" type="button" class="btn btn-outline-info"><i
                                                    class="mdi mdi-eye"></i></a>
                                            <button type="button" data-bs-toggle="modal" data-bs-target="#edit-data"
                                                class="btn btn-outline-success"><i class="mdi mdi-note-edit-outline"></i>
                                            </button>
                                            <button type="button" class="btn btn-outline-warning" data-bs-toggle="modal"
                                                data-bs-target="#warning-alert-modal"><i class="mdi mdi-window-close"></i>
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Nama Jalan</th>
                                        <th>Alamat</th>
                                        <th>Status Kerawanan</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div> <!-- end preview-->
                    </div> <!-- end tab-content-->
                </div> <!-- end card body-->
            </div> <!-- end card -->
        </div><!-- end col-->
    </div> <!-- end row-->


    <!-- Tambah Data -->
    <div id="tambah-data" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="fullWidthModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-full-width">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="fullWidthModalLabel">Tambah Data Lokasi Kecelakaan</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="row g-2">
                            <div class="mb-3 col-md-6">
                                <label for="inputState" class="form-label">Nama Jalan</label>
                                <select id="inputState" class="form-select">
                                    <option>Choose</option>
                                    <option>Option 1</option>
                                    <option>Option 2</option>
                                    <option>Option 3</option>
                                </select>
                            </div>
                            <div class="mb-3 col-md-6">
                                <label class="form-label">Alamat</label>
                                <input name="alamat" type="text" class="form-control" placeholder="Alamat">
                            </div>
                        </div>

                        <div class="row g-2">
                            <div class="mb-3 col-md-6">
                                <label for="inputPassword4" class="form-label">Lattitude</label>
                                <input name="lattitude" type="text" class="form-control" placeholder="Lattitude">
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="inputPassword4" class="form-label">Longitude</label>
                                <input name="longitude" type="text" class="form-control" placeholder="Longitude">
                            </div>
                        </div>

                        <div class="row g-2">
                            <div class="mb-3 col-md-6">
                                <label class="form-label">Jam Kecelakaan</label>
                                <input class="form-control" type="time" name="jam_kecelakaan">
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="inputPassword4" class="form-label">Kepadatan</label>
                                <input name="kepadatan" type="text" class="form-control" placeholder="Kepadatan Jalan">
                            </div>
                        </div>

                        <div class="row g-2">
                            <div class="mb-3 col-md-6">
                                <label for="inputPassword4" class="form-label">Intensitas Kecelakaan</label>
                                <input name="indensitas_kecelakaan" type="text" class="form-control"
                                    placeholder="Intensitas Kecelakaan">
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="inputPassword4" class="form-label">Kondisi Korban</label>
                                <input name="kondisi_korban" type="text" class="form-control"
                                    placeholder="Kondisi Korban">
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Proses</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <!-- Edit Data -->
    <div id="edit-data" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="fullWidthModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-full-width">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="fullWidthModalLabel">Edit Data</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
                </div>
                <div class="modal-body">

                    <div class="modal-body">
                        <form>
                            <div class="row g-2">
                                <div class="mb-3 col-md-6">
                                    <label for="inputState" class="form-label">Nama Jalan</label>
                                    <select id="inputState" class="form-select">
                                        <option>Choose</option>
                                        <option>Option 1</option>
                                        <option>Option 2</option>
                                        <option>Option 3</option>
                                    </select>
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Alamat</label>
                                    <input name="alamat" type="text" class="form-control" placeholder="Alamat">
                                </div>
                            </div>

                            <div class="row g-2">
                                <div class="mb-3 col-md-6">
                                    <label for="inputPassword4" class="form-label">Lattitude</label>
                                    <input name="lattitude" type="text" class="form-control" placeholder="Lattitude">
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="inputPassword4" class="form-label">Longitude</label>
                                    <input name="longitude" type="text" class="form-control" placeholder="Longitude">
                                </div>
                            </div>

                            <div class="row g-2">
                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Jam Kecelakaan</label>
                                    <input class="form-control" type="time" name="jam_kecelakaan">
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="inputPassword4" class="form-label">Kepadatan</label>
                                    <input name="kepadatan" type="text" class="form-control"
                                        placeholder="Kepadatan Jalan">
                                </div>
                            </div>

                            <div class="row g-2">
                                <div class="mb-3 col-md-6">
                                    <label for="inputPassword4" class="form-label">Intensitas Kecelakaan</label>
                                    <input name="indensitas_kecelakaan" type="text" class="form-control"
                                        placeholder="Intensitas Kecelakaan">
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="inputPassword4" class="form-label">Kondisi Korban</label>
                                    <input name="kondisi_korban" type="text" class="form-control"
                                        placeholder="Kondisi Korban">
                                </div>
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Warning Alert Modal -->

    <div id="warning-alert-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-body p-4">
                    <div class="text-center">
                        <i class="ri-alert-line h1 text-warning"></i>
                        <h4 class="mt-2">Hapus Data</h4>
                        <p class="mt-3">Apakah anda yakin akan menghapus data? Data akan terhapus dari database</p>
                        <button type="button" class="btn btn-warning my-2" data-bs-dismiss="modal">Hapus</button>
                    </div>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
@endsection
