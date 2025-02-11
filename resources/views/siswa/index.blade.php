@extends('partials.main')

@section('content')
<h1>
    data siswa
</h1>
<a href="{{ route('siswa.add') }}">
    <button class="btn btn-primary">tambah siswa</button>
</a>
<table border="1" class="table table-success table-str mt-3">
    <thead class=" table table-dark">

        <tr>
            <th>
                nomer
            </th>
            <th>
                nama
            </th>
            <th>
                alamat
            </th>
            <th>
                jenis kelamin
            </th>
            <th>
                menu
            </th>
        </tr>
    </thead>

    @foreach ($siswas as $item)
    <tr>
        <td>
            {{ $loop->iteration }}
        </td>
        <td>
            {{ $item['nama'] }}
        </td>
        <td>
            {{ $item['alamat'] }}
        </td>
        <td>
            {{ $item['jenis_kelamin'] }}
        </td>
        <td>
            <form action="{{ route('siswa.delete',$item->id) }}" method="post">
                @method('DELETE')
                @csrf
                <button class="btn btn-danger" type="submit">
                    hapus
                </button>
            </form>
            <a href="{{ route('siswa.edit', $item->id) }}" class="btn btn-warning">edit</a>
        </td>
    </tr>
    @endforeach


</table>


@endsection





