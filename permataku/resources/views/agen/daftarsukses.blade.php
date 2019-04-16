@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (Session::has('success'))
                        <div class="alert alert-success" role="alert">
                            {{ Session::get('success') }}
                        </div>
                    @endif
                    <h1 class="title">Rekap</h1>
                    <img src="{{URL::asset('fotoKtp/'.$agen->foto_ktp) }}" width="250px" height="250px">
                    <p>Atas nama = {{ $agen->nama_lengkap }}</p>
                    <p>Alamat = {{ $agen->alamat }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
