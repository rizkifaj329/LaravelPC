@extends('layout/mainlight')

@section ('title', 'mahasiswa')

@section ('container')
<div class="container mt-4">
<div class="row">
<div class ="col-10">
<h1 class="mt-10">Data Mahasiswa </h1>

<body>
	<br/>
    <table class="table mt-4">
    <thead class="thead-dark">
        <tr>
            <th scope="col"></th>
            <th scope="col">Nama</th>
            <th scope="col">NIM</th>
            <th scope="col">Email</th>
            <th scope="col">Jurusan</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
    @foreach($mahasiswa as $mhs)
        <tr>
            <th scope="row">{{$loop->iteration}}</th>
            <td>{{$mhs->nama}}</td>
            <td>{{$mhs->nim}}</td>
            <td>{{$mhs->email}}</td>
            <td>{{$mhs->jurusan}}</td>
            <td>
                <a href="" class="badge badge-success">edit</a>
                <a href="" class="badge badge-danger">delete</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</body>
</div>
</div>
</div>
@endsection 