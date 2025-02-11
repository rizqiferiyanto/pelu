@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card card-body">
        <p>list data siswa</p>
        <a href="/siswa/create"class="btn btn-primary">tambah</a>
        <div>
            @if (session('success')){
                <div class="card bg-success">
                    {{ session('success') }}
                </div>
            }
            @endif
        </div>

        <table>
           <tr>
            <td>no</td>
            <td>foto</td>
            <td>nama</td>
            <td>notelp</td>
            <td>Alamat</td>
            <td>opsi</td>
           </tr>

           <tr>
            <td>1</td>
            <td>foto</td>
            <td>yusuf</td>
            <td>083848204866</td>
            <td>sempu</td>
            <td>
                <a href=""class="btn btn-warning">edit</a>
                <a href=""class="btn btn-danger">hapus</a>
            </td>
</div>
</div>
@endsection
