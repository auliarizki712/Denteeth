@extends('template/temp')

@section('title', 'History')

@section('container')
<section class="page-section">
    <div class="container pt-5 px-4 px-lg-5">
        <h2 class="text-center mt-0">History</h2>
        <hr class="divider" />
        <div class="container pt-5 px-4 px-lg-5">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Name</th>
                        <th scope="col">Job</th>
                        <th scope="col">Age</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Andi</td>
                        <td>Pegawai</td>
                        <td>37</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Budi</td>
                        <td>Polisi</td>
                        <td>42</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>
@endsection