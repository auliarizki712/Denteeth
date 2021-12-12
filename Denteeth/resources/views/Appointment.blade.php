@extends('template/temp')

@section('title', 'Appointment')

@section('container')
<section class="abody">
    <div class="abovefold pt-md-5">
        <!-- Pages -->
        <div class="container header">
            <div class="row">
                <div class="col-md-6 px-md-0 my-auto">
                    <div class="headline">
                        Dentist Care <span class="cl-light-blue">Finance</span>
                    </div>
                    <div class="sub-headline">
                        We care about your smile
                    </div>
                </div>
                <!-- Form -->
                <div class="col-md-6 mt-5 mt-md-0">
                    <div class="card">
                        <div class="input-group mb-2">
                            <label for="input" class="w-100">
                                <span class="input-title">Name</span>
                                <input type="text" class="form-control mt-2" placeholder="Your Name">
                            </label>
                        </div>
                        <div class="input-group mb-2">
                            <label for="input" class="w-100">
                                <span class="input-title">Email</span>
                                <input type="text" class="form-control mt-2" placeholder="Email@example.org">
                            </label>
                        </div>
                        <div class="input-group mb-2">
                            <label for="input" class="w-100">
                                <span class="input-title">Address</span>
                                <input type="text" class="form-control mt-2" placeholder="Your Address">
                            </label>
                        </div>
                        <div class="input-group mb-2">
                            <label for="input" class="w-100">
                                <span class="input-title">Date</span>
                                <input type="date" class="form-control mt-2" placeholder="Select Date">
                            </label>
                        </div>
                        <div class="input-group">
                            <label for="input" class="w-100">
                                <span class="input-title">Doctor</span>
                                <input type="text" class="form-control mt-2" value="Dr. ..." aria-label="Disabled input example" disabled readonly>
                            </label>
                        </div>
                        <button class="btn btn-card">
                            Book Now
                        </button>
                        <div class="row mx-0 mt-4 award">
                            <div class="col-1 px-0">
                                <img src="https://api.elements.buildwithangga.com/storage/files/2/assets/Header/HeaderFinance-1/award.png"
                                    alt="award" class="img-fluid">
                            </div>
                            <div class="col-11 px-0">
                                Licensed and regulated by Persatuan Dokter Gigi Indonesia.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
    