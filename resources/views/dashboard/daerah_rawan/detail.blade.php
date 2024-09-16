@extends('dashboard/layouts.template')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-left">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="">Dashboard</a></li>
                    <li class="breadcrumb-item">Data Kecalakaan</li>
                    <li class="breadcrumb-item active">Detail</li>
                </ol>
                <a href="{{ URL::previous() }}">
                    <p>Kembali</p>
                </a>
                <h4 class="Header-title">Detail</h4>
            </div>
        </div>
    </div>
</div>
<!-- end page title -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="tab-content">
                    <div class="tab-pane show active" id="alt-pagination-preview">
                        <div class="modal-content">
                            <div class="modal-body">
                                <h4>Inputan</h4>
                                <small>Informasi Umum</small>
                                <div class="row g-2">
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">Nama Jalan</label>
                                        <input name="alamat" type="text" class="form-control" value="{{ $data->jalan->nama_jalan }}" disabled>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">Alamat</label>
                                        <input name="alamat" type="text" class="form-control" value="{{ $data->alamat }}" disabled>
                                    </div>
                                </div>

                                <div class="row g-2">
                                    <div class="mb-3 col-md-6">
                                        <label for="inputPassword4" class="form-label">Lattitude</label>
                                        <input name="lattitude" type="text" class="form-control" value="{{ $data->latitude }}" disabled>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label for="inputPassword4" class="form-label">Longitude</label>
                                        <input name="longitude" type="text" class="form-control" value="{{ $data->longitude }}" disabled>
                                    </div>
                                </div>
                                <small>Inputan Kondisi</small>
                                <div class="row g-2">
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">Jam Kecelakaan</label>
                                        <input class="form-control" type="text" name="jam_kecelakaan" value="{{ $data->jam_kecelakaan }}" disabled>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label for="inputPassword4" class="form-label">Kondisi Jalan</label>
                                        <input name="kepadatan" type="text" class="form-control" value="{{ $data->kondisi_jalan }}" disabled>
                                    </div>
                                </div>

                                <div class="row g-2">
                                    <div class="mb-3 col-md-6">
                                        <label for="inputPassword4" class="form-label">Kondisi Lingkungan</label>
                                        <input name="intensitas_kecelakaan" type="text" class="form-control" value="{{ $data->kondisi_lingkungan }}" disabled>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label for="inputPassword4" class="form-label">Kondisi Kecelakaan</label>
                                        <input name="kondisi_korban" type="text" class="form-control" value="{{ $data->kondisi_kecelakaan }}" disabled>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <h4>Fungsi Keanggotaan</h4>
                            <table class="table mb-0">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Variabel Input</th>
                                        <th scope="col">Nilai</th>
                                        <th scope="col">Fungsi Keanggotaan</th>
                                        <th scope="col">Nilai Keanggotaan </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Jam Kecelakaan</td>
                                        <td>{{ $data->jam_kecelakaan }}</td>
                                        <td>{{ $data->rules->jam }}</td>
                                        <td>{{ $keanggotaan['jam'] }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Kondisi Jalan</td>
                                        <td>{{ $data->kondisi_jalan }}</td>
                                        <td>{{ $data->rules->kondisi_jalan }}</td>
                                        <td>{{ $keanggotaan['kondisi_jalan'] }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Kondisi Lingkungan</td>
                                        <td>{{ $data->kondisi_lingkungan }}</td>
                                        <td>{{ $data->rules->kondisi_lingkungan }}</td>
                                        <td>{{ $keanggotaan['kondisi_lingkungan'] }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">4</th>
                                        <td>Kondisi Kecelakaan</td>
                                        <td>{{ $data->kondisi_kecelakaan }}</td>
                                        <td>{{ $data->rules->kondisi_kecelakaan }}</td>
                                        <td>{{ $keanggotaan['kondisi_kecelakaan'] }}</td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr>
                            <h4>Rule Yang Digunakan</h4>
                            <table class="table mb-0">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Jam Kecelakaan</th>
                                        <th scope="col">Kepadatan Kendaraan</th>
                                        <th scope="col">Intensitas Kecelakaan</th>
                                        <th scope="col">Kondisi Korban </th>
                                        <th scope="col">Tingkat Kerawanan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>{{ $data->rules->jam }}</td>
                                        <td>{{ $data->rules->kondisi_jalan }}</td>
                                        <td>{{ $data->rules->kondisi_lingkungan }}</td>
                                        <td>{{ $data->rules->kondisi_kecelakaan }}</td>
                                        <td>
                                            @if ($data->rules->tingkat_kerawanan == 'Sangat Rawan')
                                            <span style="color: red;">{{ $data->rules->tingkat_kerawanan }}</span>
                                            @elseif ($data->rules->tingkat_kerawanan == 'Rawan')
                                            <span style="color: yellow;">{{ $data->rules->tingkat_kerawanan }}</span>
                                            @else
                                            <span style="color: green;">{{ $data->rules->tingkat_kerawanan }}</span>
                                            @endif
                                        </td>

                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr>
                            <h4>Deffuzifikasi</h4>

                            <h6>Batas</h6>

                            <h6>Luas</h6>
                            <p>{{ $luasA1 }}</p>
                            <p>{{ $luasA2 }}</p>
                            <p>{{ $luasA3 }}</p>
                            <p>{{ Str::limit($luasA3, 5) }}</p>
                            <h6>Moment</h6>
                            <p>{{ $momentSatu }}</p>
                            <p>{{ $momentDua }}</p>
                            <p>{{ $momentTiga }}</p>
                            <h6>Deffuzifikasi</h6>
                            <div class="mb-3 col-md-12">
                                <input name="alamat" type="text" class="form-control" value="{{ $defuzzy }}" disabled>
                            </div>
                            <hr>
                            <h4>Klafisikasi Kerawanan</h4>
                            <div class="col-md-6">
                                @if ($data->tingkat_kerawanan == 'Sangat Rawan')
                                <button type="button" class="btn btn-danger">Sangat Rawan</button>
                                @elseif ($data->tingkat_kerawanan == 'Rawan')
                                <button type="button" class="btn btn-warning">Rawan</button>
                                @else
                                <button type="button" class="btn btn-info">Tidak Rawan</button>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection