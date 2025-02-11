@extends('partials.main')

@section('content')

<h1>form Tambah Data</h1>

<div class="row col-5">
    <form action="{{ route('siswa.add.process') }}" method="post">

        @csrf

        <div class="mb-3">
            <label for="nama" class="form-label">nama</label>
            <input type="text" class="form-control" id="nama" placeholder="masukan nama" name="nama">
        </div>
        <div class="mb-3">
            <label for="alamat" class="form-label">alamat</label>
            <textarea class="form-control" id="alamat" rows="3" name="alamat" placeholder="masukan alamat"></textarea>
        </div>
        <div class="mb-3">
            <label for="jenis_kelamin" >jenis kelamin</label>
            <select name="jenis_kelamin"class="form-select" >
            <option value="">pilih jenis kelamin</option>
            <option value="laki-laki">laki-laki</option>
            <option value="perempuan">perempuan</option>
        </select>
    </div>

    <button type="submit" class="btn btn-primary">submit</button>
</form>

</div>nggfhttgf



@endsection
