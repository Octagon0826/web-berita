@extends('layouts.app')

@section('title', 'Produk')

@section('content')
<h2 class="fw-bold mb-3">Daftar Produk</h2>

<div class="row">
    <div class="col-md-4">
        <div class="card shadow">
            <div class="card-body">
                <h5>Laptop</h5>
                <p>Perangkat komputer portable.</p>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card shadow">
            <div class="card-body">
                <h5>Mouse</h5>
                <p>Perangkat input komputer.</p>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card shadow">
            <div class="card-body">
                <h5>Keyboard</h5>
                <p>Perangkat untuk mengetik.</p>
            </div>
        </div>
    </div>
</div>
@endsection