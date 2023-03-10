@extends('master')
@section('konten-master')
<div class="row">
    <div class="col-12 text-end mb-3">
        <a href="{{ route('master-cabang-tambah') }}" class="btn btn-outline-success">
            <i class="fa-solid fa-plus"></i> Tambah cabang baru
        </a>
    </div>
    @foreach ($cabang as $c)
    <div class="col-md-3">
        <div class="card mb-4 shadow">
            <div class="card-title text-end">
                <a href="{{ route('master-cabang-edit', ['kode' => $c->kode_cabang]) }}" class="btn btn-sm btn-outline-primary border-0">
                    <i class="fa-solid fa-edit"></i>
                </a>
            </div>
            <img src="{{ asset('images/emporium.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{$c->kode_cabang}} - {{$c->nama_cabang}}</h5>
                <p class="card-text"><i class="fa-solid fa-phone"></i> {{$c->no_telp}}</p>
                <p class="card-text"><i class="fa-solid fa-map"></i> {{$c->alamat}}</p>
            </div>
        </div>
    </div>
    @endforeach
</div>

@endsection