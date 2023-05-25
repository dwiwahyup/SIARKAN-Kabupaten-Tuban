@extends('users/layouts.template')

@section('content')
    <section class="wrapper bg-gray">
        <div class="container py-12 py-md-16 text-center">
            <div class="row">
                <div class="col-lg-10 col-xxl-8 mx-auto">
                    <h1 class="display-1 mb-3">Pemetaan</h1>
                    <p class="lead mb-1">Pemetaan Daerah Rawan Kecelakaan (Jalan Nasional)</p>
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>

    <section class="wrapper bg-light ">
        <div class="container pb-8 pt-10">
            <div class="row">
                <section class="wrapper bg-light mb-5">
                    <div class="map">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d253467.04740821905!2d111.73122006617668!3d-6.9593713900865515!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e779e5bae8278bf%3A0x3027a76e352be70!2sTuban%20Regency%2C%20East%20Java!5e0!3m2!1sen!2sid!4v1681634917230!5m2!1sen!2sid"
                            width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </section>
            </div>
        </div>
    </section>

    <section class="wrapper bg-light">
        <div class="container py-8 py-md-6">
            <div class="row">
                <div class="col-xl-10 col-xxl-9 mx-auto">
                    <div class="row align-items-center justify-content-center counter-wrapper gy-6">
                        <div class="col-md-6 col-lg-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex flex-row align-items-center">
                                        <div>
                                            <div
                                                class="icon btn btn-circle btn-lg btn-soft-red pe-none mx-auto me-4 mb-lg-3 mb-xl-0">
                                                <i class="uil uil-clipboard-notes"></i>
                                            </div>
                                        </div>
                                        <div>
                                            <h3 class="counter mb-1">3472</h3>
                                            <p class="mb-0">Sangat Rawan</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex flex-row align-items-center">
                                        <div>
                                            <div
                                                class="icon btn btn-circle btn-lg btn-soft-yellow pe-none mx-auto me-4 mb-lg-3 mb-xl-0">
                                                <i class="uil uil-clipboard-notes"></i>
                                            </div>
                                        </div>
                                        <div>
                                            <h3 class="counter mb-1">4537</h3>
                                            <p class="mb-0">Rawan</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex flex-row align-items-center">
                                        <div>
                                            <div
                                                class="icon btn btn-circle btn-lg btn-soft-green pe-none mx-auto me-4 mb-lg-3 mb-xl-0">
                                                <i class="uil uil-clipboard-notes"></i>
                                            </div>
                                        </div>
                                        <div>
                                            <h3 class="counter mb-1">2654</h3>
                                            <p class="mb-0">Tidak Rawan</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="wrapper bg-gray">
        <div class="container py-8 py-md-6">
            <div class="text-center">
                {{-- <a href="#" class="btn btn-primary rounded-pill mx-1 mb-2 mb-md-0 text-center fs-20"
                    data-bs-toggle="modal" data-bs-target="#modal-01"> <i class="uil uil-location-point"></i> Cek
                    Pemetaan</a> --}}
                <a href="#" class="btn btn-primary rounded-pill mx-1 mb-2 mb-md-0" data-bs-toggle="modal"
                    data-bs-target="#modal-01">Cookie</a>
            </div>
        </div>
    </section>


    <section class="wrapper bg-light">
        <div class="container py-8 py-md-6">
            <h2 class="my-5">Data Lokasi Kecelakaan</h2>
            <hr class="my-5">
            <div class="row">
                <div class="col-12">
                    <table id="example" class="table table-striped text-center" style="width:100%">
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
                                    {{-- <a href="#"
                                        class="btn btn-outline-primary rounded-pill mx-1 mb-2 mb-md-0 text-center fs-15"
                                        data-bs-toggle="modal" data-bs-target="#modal-02"> Detail</a> --}}
                                    {{-- <a href="#" class="btn btn-oultine-primary rounded-pill mx-1 mb-2 mb-md-0"
                                        data-bs-toggle="modal" data-bs-target="#modal-02">Subscription</a> --}}

                                    <a href="#" class="btn btn-primary rounded-pill mx-1 mb-2 mb-md-0"
                                        data-bs-toggle="modal" data-bs-target="#modal-02">Subscription</a>
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
                </div>
            </div>
        </div>
    </section>






    <div class="modal fade" id="modal-01" tabindex="-1">
        {{-- <div class="modal-dialog modal-xl"> --}}
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-body p-6">
                    <h3>Cek Kerawanan Kecelakaan</h3>
                    <hr>
                    <div class="row">
                        {{-- <div class=""> --}}
                        <div id="mc_embed_signup">
                            <form class="text-start mb-3">
                                <div class="container">
                                    <div class="row g-2">
                                        <div class="mb-3 col-md-6">
                                            <label class="form-label">Nama Jalan</label>
                                            <div class="form-select-wrapper mb-4">
                                                <select class="form-select" aria-label="Default select example"
                                                    name="nama_jalan">
                                                    <option selected>Open this select menu</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label class="form-label">Alamat</label>
                                            <input name="alamat" type="text" class="form-control">
                                        </div>
                                    </div>

                                    <div class="row g-2">
                                        <div class="mb-3 col-md-6">
                                            <label for="inputPassword4" class="form-label">Lattitude</label>
                                            <input name="lattitude" type="text" class="form-control">
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label for="inputPassword4" class="form-label">Longitude</label>
                                            <input name="longitude" type="text" class="form-control">
                                        </div>
                                    </div>

                                    <div class="row g-2">
                                        <div class="mb-3 col-md-6">
                                            <label class="form-label">Jam Kecelakaan</label>
                                            <input class="form-control" type="time" name="jam_kecelakaan">
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label for="inputPassword4" class="form-label">Kepadatan</label>
                                            <input name="kepadatan" type="text" class="form-control">
                                        </div>
                                    </div>

                                    <div class="row g-2">
                                        <div class="mb-3 col-md-6">
                                            <label for="inputPassword4" class="form-label">Intensitas
                                                Kecelakaan</label>
                                            <input name="indensitas_kecelakaan" type="text" class="form-control">
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label for="inputPassword4" class="form-label">Kondisi
                                                Korban</label>
                                            <input name="kondisi_korban" type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-3">
                                            <a class="btn btn-primary rounded-pill btn-login w-100 mb-2">Hitung
                                                Kerawanan</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>





    <div class="modal fade" id="modal-02" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content text-center">
                <div class="modal-body">
                    <button class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <h3>Detail</h3>
                    <hr>
                    <div class="newsletter-wrapper">
                        <div class="row">
                            <div class="">
                                <div id="mc_embed_signup">
                                    <form class="text-start mb-3">
                                        <div class="container">
                                            <div class="row g-2">
                                                <div class="mb-3 col-md-6">
                                                    <label class="form-label">Nama Jalan</label>
                                                    <div class="form-select-wrapper mb-4">
                                                        <select class="form-select" aria-label="Default select example"
                                                            name="nama_jalan">
                                                            <option selected>Open this select menu</option>
                                                            <option value="1">One</option>
                                                            <option value="2">Two</option>
                                                            <option value="3">Three</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="mb-3 col-md-6">
                                                    <label class="form-label">Alamat</label>
                                                    <input name="alamat" type="text" class="form-control">
                                                </div>
                                            </div>

                                            <div class="row g-2">
                                                <div class="mb-3 col-md-6">
                                                    <label for="inputPassword4" class="form-label">Lattitude</label>
                                                    <input name="lattitude" type="text" class="form-control">
                                                </div>
                                                <div class="mb-3 col-md-6">
                                                    <label for="inputPassword4" class="form-label">Longitude</label>
                                                    <input name="longitude" type="text" class="form-control">
                                                </div>
                                            </div>

                                            <div class="row g-2">
                                                <div class="mb-3 col-md-6">
                                                    <label class="form-label">Jam Kecelakaan</label>
                                                    <input class="form-control" type="time" name="jam_kecelakaan">
                                                </div>
                                                <div class="mb-3 col-md-6">
                                                    <label for="inputPassword4" class="form-label">Kepadatan</label>
                                                    <input name="kepadatan" type="text" class="form-control">
                                                </div>
                                            </div>

                                            <div class="row g-2">
                                                <div class="mb-3 col-md-6">
                                                    <label for="inputPassword4" class="form-label">Intensitas
                                                        Kecelakaan</label>
                                                    <input name="indensitas_kecelakaan" type="text"
                                                        class="form-control">
                                                </div>
                                                <div class="mb-3 col-md-6">
                                                    <label for="inputPassword4" class="form-label">Kondisi
                                                        Korban</label>
                                                    <input name="kondisi_korban" type="text" class="form-control">
                                                </div>
                                            </div>
                                            <hr class="mb-5">
                                            <div class="row g-2">
                                                <div class="mb-3 col-md-3">
                                                    <a class="btn btn-primary rounded-pill btn-login w-100 mb-2">Hitung
                                                        Kerawanan</a>
                                                </div>
                                                <div class="mb-3 pt-2 col-lg-5 text-end">
                                                    <i class="">Status Kerawanan :</i>
                                                </div>
                                                <div class="mb-3 col-md-3">
                                                    <a class="btn btn-primary rounded-pill btn-login w-100 mb-2">Sangat
                                                        Rawan</a>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>
@endsection
