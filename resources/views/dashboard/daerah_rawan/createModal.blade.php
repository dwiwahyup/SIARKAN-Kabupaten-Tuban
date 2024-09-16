<!-- Tambah Data -->
<div id="tambah-data" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="fullWidthModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-full-width">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="fullWidthModalLabel">Tambah Data Lokasi Kecelakaan</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('fuzzy') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row g-2">
                        <div class="mb-3 col-md-6">
                            <label for="inputState" class="form-label">Nama Jalan</label>
                            <select id="inputState" class="form-select" name="nama_jalan">
                                <option>Choose</option>
                                @foreach ($jalan as $lokasi)
                                <option value="{{ $lokasi->id}}">{{ $lokasi->nama_jalan }}</option>
                                @endforeach
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
                            <input class="form-control" type="text" name="jam_kecelakaan">
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="inputPassword4" class="form-label">Kondisi Jalan</label>
                            <select id="inputState" class="form-select" name="kondisi_jalan">
                                <option>Choose</option>                                
                                <option value="1">Lurus</option>
                                <option value="2">Tikungan</option>
                                <option value="3">Persimpangan</option>
                            </select>
                        </div>
                    </div>

                    <div class="row g-2">
                        <div class="mb-3 col-md-6">
                            <label for="inputPassword4" class="form-label">Kondisi Lingkungan </label>
                            <select id="inputState" class="form-select" name="kondisi_lingkungan">
                                <option>Choose</option>                                
                                <option value="1">Lengang</option>
                                <option value="2">Ramai</option>
                                <option value="3">Padat</option>
                            </select>
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="inputPassword4" class="form-label">Kondisi Kecelakaan</label>
                            <select id="inputState" class="form-select" name="kondisi_kecelakaan">
                                <option>Choose</option>                                
                                <option value="1">Ringan</option>
                                <option value="2">Sedang</option>
                                <option value="3">Berat</option>
                            </select>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Proses</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>