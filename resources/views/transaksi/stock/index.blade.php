@extends('transaksi')
@section('konten-transaksi')
<div class="row">
    <div class="col-12 text-end mb-3">
        <a href="{{ route('transaksi-stock-tambah') }}" class="btn btn-outline-success">
            <i class="fa-solid fa-plus"></i> Datang barang
        </a>
    </div>
    <div class="col-12">
        <table class="table table-hover">
            <thead class="bg-info">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Cabang</th>
                    <th scope="col">Kode Menu</th>
                    <th scope="col">Nama Menu</th>
                    <th scope="col">Jumlah</th>
                    <th scope="col">Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

@endsection