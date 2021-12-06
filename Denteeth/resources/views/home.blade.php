@extends('template/temp')

@section('title', 'Home')

@section('container')
<header class="masthead">
    <div class="container px-4 px-lg-5 h-100">
        <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
            <div class="col-lg-8 align-self-end">
                <h1 class="text-dark fw-bold">High-quality and<br>Painless dentistry</h1>
                <hr class="divider" />
            </div>
            <div class="col-lg-8 align-self-baseline">
                <p class="text-dark mb-5">Start making appointment can help you reach out to our dentists! Just fill the appointment form and we will connect you to our dentists!</p>
                <a class="btn btn-primary btn-xl" href="/appointment">Make Appointment</a>
            </div>
        </div>
    </div>
</header>
<!-- Services-->
<section class="page-section" id="services">
    <div class="container px-4 px-lg-5">
        <h2 class="text-center mt-0">Choose Your Service</h2>
        <hr class="divider" />
        <div class="row">
            <div class="col text-center">
                <div class="mt-5">
                    <div class="mb-5"><img class="fs-1 text-primary" src="assets/img/services/1.svg" width="90" height="60"></img></div>
                    <h3 class="h4 mb-5">Check Up</h3><br>
                </div>
            </div>
            <div class="col text-center">
                <div class="mt-5">
                    <div class="mb-5"><img class="fs-1 text-primary" src="assets/img/services/2.svg" width="90" height="60"></img></div>
                    <h3 class="h4 mb-5">Pembersihan Karang</h3><br>
                </div>
            </div>
            <div class="col text-center">
                <div class="mt-5">
                    <div class="mb-5"><img class="fs-1 text-primary" src="assets/img/services/3.svg" width="90" height="60"></img></div>
                    <h3 class="h4 mb-5">Lainnya</h3><br>
                </div>
            </div>
        </div>
    </div>
</section>
        <!-- doctor-->
        <div id="doctor">
            <div class="container-fluid p-0">
                <div class="row g-0">
                    <div class="col-lg-4 col-sm-6">
                        <a class="doctor-box" href="assets/img/doctor/1.jpg" title="drg. Jessica">
                            <img class="img-fluid" src="assets/img/doctor/1.jpg" alt="..." />
                            <div class="doctor-box-caption">
                                <div class="project-category text-white-50">drg. Jessica</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="doctor-box" href="assets/img/doctor/2.jpg" title="drg. Ruby">
                            <img class="img-fluid" src="assets/img/doctor/2.jpg" alt="..." />
                            <div class="doctor-box-caption">
                                <div class="project-category text-white-50">drg. Ruby</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="doctor-box" href="assets/img/doctor/3.jpg" title="drg. John">
                            <img class="img-fluid" src="assets/img/doctor/3.jpg" alt="..." />
                            <div class="doctor-box-caption">
                                <div class="project-category text-white-50">drg. John</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="doctor-box" href="assets/img/doctor/4.jpg" title="drg. Bertha">
                            <img class="img-fluid" src="assets/img/doctor/4.jpg" alt="..." />
                            <div class="doctor-box-caption">
                                <div class="project-category text-white-50">drg. Bertha</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="doctor-box" href="assets/img/doctor/5.jpg" title="drg. Emma">
                            <img class="img-fluid" src="assets/img/doctor/5.jpg" alt="..." />
                            <div class="doctor-box-caption">
                                <div class="project-category text-white-50">drg. Emma</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="doctor-box" href="assets/img/doctor/6.jpg" title="drg. James">
                            <img class="img-fluid" src="assets/img/doctor/6.jpg" alt="..." />
                            <div class="doctor-box-caption p-3">
                                <div class="project-category text-white-50">drg. James</div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact-->
    @endsection