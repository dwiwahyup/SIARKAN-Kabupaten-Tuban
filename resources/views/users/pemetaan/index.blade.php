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
    <div class="container pb-11 pt-10">
        <div class="row">
            <div class="col-lg-10 offset-lg-1 col-xl-8 offset-xl-2">
                <h2 class="display-4 mb-3 text-center">Cek Pemetaan</h2>
                <form class="contact-form needs-validation" method="post" action="./assets/php/contact.php" novalidate>
                    <div class="messages"></div>
                    <div class="row gx-4">
                        <div class="col-12 text-center">
                            <select class="form-select mb-5" id="form-select" name="department" required>
                                <option selected disabled value="">Pilih Tingkat Kerawanan</option>
                                <option value="Sales">Tidak Rawan</option>
                                <option value="Marketing">Rawan</option>
                                <option value="Customer Support">Sangat Rawan</option>
                            </select>
                            <div class="valid-feedback"> Looks good! </div>
                            <div class="invalid-feedback"> Please select a department. </div>
                            <input type="submit" class="btn btn-primary rounded-pill btn-send mb-3" value="Cek Pemetaan">
                        </div>
                        <!-- /column -->
                    </div>
                    <!-- /.row -->
                </form>
                <!-- /form -->
            </div>
            <!-- /column -->
            <section class="wrapper bg-light">
                <div class="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d253467.04740821905!2d111.73122006617668!3d-6.9593713900865515!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e779e5bae8278bf%3A0x3027a76e352be70!2sTuban%20Regency%2C%20East%20Java!5e0!3m2!1sen!2sid!4v1681634917230!5m2!1sen!2sid" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </section>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>

@endsection