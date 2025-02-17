@extends('partials.main')

@section('content')

<h1>form edit data</h1>

<div class="row col-5">
    <form action="{{ route('siswa.update', $data['id']) }}" method="post">

        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="nama" class="form-label">nama</label>
            <input type="text" class="form-control" id="nama" name="nama" value="{{ $data['nama'] }}">
        </div>
        <div class="mb-3">
            <label for="alamat" class="form-label">alamat</label>
            <textarea class="form-control" id="alamat" rows="3" name="alamat" placeholder="masukan alamat">{{ $data['alamat'] }}
            </textarea>
        </div>
        <div class="mb-3">
            <label for="jenis_kelamin" >jenis kelamin</label>
            <select name="jenis_kelamin"class="form-select" >
            <option value="">--pilih jenis kelamin--</option>
            <option value="laki-laki" {{ $data['jenis_kelamin'] == "laki-laki"? 'selected' : ''}}>laki-laki</option>

            <option value="perempuan" {{ $data['jenis_kelamin'] == "perempuan" ?'selected' : ''}}>perempuan</option>
        </select>
    </div>

    <button type="submit" class="btn btn-primary">edit</button>
</form>

</div>



@endsection
