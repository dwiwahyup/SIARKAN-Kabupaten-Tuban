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
                    <h4 class="Header-title">Tambah Rules</h4>
                </div>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Input Types</h4>
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
                    <div class="tab-content">
                        <div class="tab-pane show active" id="input-types-preview">
                            <div class="row">
                                <form action="{{ route('rules.update', $rules->id) }}" method="post"
                                    enctype="multipart/form-data">
                                    @method('PUT')
                                    @csrf
                                    <div class="row g-2">
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="nama_jalan" class="form-label">Jam Kecelakaan</label>
                                                <select class="form-select" id="example-select" name="jam" required>
                                                    <option>{{ old('jam') ?? $rules->jam }}</option>
                                                    <option value="Dini-Pagi">Dini-Pagi</option>
                                                    <option value="Siang">Siang</option>
                                                    <option value="Sore">Sore</option>
                                                    <option value="Malam">Malam</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="example-select" class="form-label">Kondisi Jalan</label>
                                                <select class="form-select" id="example-select" name="kondisi_jalan"
                                                    required>
                                                    <option>{{ old('kondisi_jalan') ?? $rules->kondisi_jalan }}</option>
                                                    <option value="Lurus">Lurus</option>
                                                    <option value="Persimpangan">Persimpangan</option>
                                                    <option value="Tikungan">Tikungan</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row g-2">
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="nama_jalan" class="form-label">Kondisi Lingkungan</label>
                                                <select class="form-select" id="example-select" name="kondisi_lingkungan"
                                                    required>
                                                    <option>{{ old('kondisi_lingkungan') ?? $rules->kondisi_lingkungan }}
                                                    </option>
                                                    <option value="Lengang">Lengang</option>
                                                    <option value="Ramai">Ramai</option>
                                                    <option value="Padat">Padat</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="example-select" class="form-label">Kondisi Kecelakaan</label>
                                                <select class="form-select" id="example-select" name="kondisi_kecelakaan"
                                                    required>
                                                    <option>{{ old('kondisi_kecelakaan') ?? $rules->kondisi_kecelakaan }}
                                                    </option>
                                                    <option value="Ringan">Ringan</option>
                                                    <option value="Sedang">Sedang</option>
                                                    <option value="Berat">Berat</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="example-select" class="form-label">Tingkat Kerawanan</label>
                                            <select class="form-select" id="example-select" name="tingkat_kerawanan"
                                                required>
                                                <option>{{ old('tingkat_kerawanan') ?? $rules->tingkat_kerawanan }}</option>
                                                <option value="Tidak Rawan">Tidak Rawan</option>
                                                <option value="Rawan">Rawan</option>
                                                <option value="Sangat Rawan">Sangat Rawan</option>
                                            </select>
                                        </div>
                                    </div>
                                    <p><button type="submit" class="btn btn-primary plus float-right">Simpan</button></p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
