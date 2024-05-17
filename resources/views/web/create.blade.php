@extends('layout.app')
@section('title', 'create data pasien')

@section('content') <h2>{{ $store }} Data Pasien</h2>

    <!-- START FORM -->
    <form action='{{ $action }}' method='post'>
        @csrf @if (strtolower($store) == 'ubah')
            @method('PUT') 
        @endif
        <div class="my-3 p-3 bg-body rounded shadow-sm">
            <div class="mb-3 row">
                <label for="nik" class="col-sm-2 col-form-label">NIK</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" name='nik' id="nik">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='nama' id="nama">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='alamat' id="alamat">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="hp" class="col-sm-2 col-form-label">Hp</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='hp' id="hp">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="alamat" class="col-sm-2 col-form-label"></label>
                <div class="col-sm-10"><button  class="btn btn-primary" name="submit">SIMPAN</button></div>
                
            </div>
    </form>
    </div>
    <!-- AKHIR FORM -->
@endsection
