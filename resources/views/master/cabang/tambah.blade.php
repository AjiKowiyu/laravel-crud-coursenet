@extends('master')
@section('konten-master')
<form class="mb-5">
    <div class="row">
        <div class="col-3">
            <div class="mb-5">
                <label class="form-label">Kode Cabang</label>
                <input type="text" class="form-control">
            </div>
        </div>
        <div class="col-9">
            <div class="mb-5">
                <label class="form-label">Nama Cabang</label>
                <input type="text" class="form-control">
            </div>
        </div>
    </div>
    <div class="mb-5">
        <label class="form-label">Nomor Telepon</label>
        <input type="text" class="form-control">
    </div>
    <div class="mb-5">
        <label class="form-label">Alamat</label>
        <textarea name="" id="" rows="5" class="form-control"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection