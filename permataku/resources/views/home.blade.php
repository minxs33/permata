@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (Session()->has('status'))
                        <div class="alert alert-success" role="alert">
                            <p>{{ Session()->get('status') }}Kamu sudah login!</p>
                        </div>
                    @elseif(Session()->has('danger'))
                    <div class="alert alert-danger" role="alert">
                            <p>{{ Session()->get('danger') }}Permintaan sedang di proses</p>
                    </div>
                    @endif
                        ngentod kuy
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
