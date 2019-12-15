@extends('layouts.login.master')

@section('title','Data Siswa Prakerin')

@section('content')

@if(session('sukses'))
<div class="alert alert-success" role="alert">
    {{session('sukses')}}
</div>
@endif

<div class="main-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <!-- TABLE HOVER -->
                <div class="panel">
                    <div class="panel-heading">
                        <h3>DATA SISWA PRAKERIN</h3>
                        <div class="right">
                            <button type="button" class="btn float-right" data-toggle="modal" data-target="#exampleModal">
                                Tambah Peserta Prakerin<i class="lnr lnr-plus-circle"></i>
                            </button>
                        </div>
                    </div>
                    <div class="panel-body">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Nama Lengkap</th>
                                    <th>NIM/NIS</th>
                                    <th>Institusi</th>
                                    <th>Jurusan</th>
                                    <th>Tanggal Mulai</th>
                                    <th>Tanggal Selesai</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data_siswa as $siswa)
                                <tr>
                                    <td>{{$siswa->nama}}</td>
                                    <td>{{$siswa->nim}}</td>
                                    <td>{{$siswa->institusi}}</td>
                                    <td>{{$siswa->jurusan}}</td>
                                    <td>{{$siswa->tanggal_mulai}}</td>
                                    <td>{{$siswa->tanggal_selesai}}</td>
                                    <td>
                                        <a href="siswa/{{$siswa->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                                        <a href="siswa/{{$siswa->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Yakin mau dihapus ?')">Delete</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div>
                    <!-- END TABLE HOVER --> -->
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Data Siswa Prakerin</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="/siswa/create" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama Lengkap</label>
                        <input name="nama" type="text" class="form-control" id="exampleInputEmail1" placeholder="Nama Lengkap">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">NIM/NIS</label>
                        <input name="nim" type="text" class="form-control" id="exampleInputEmail1" placeholder="NIM/NIS">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Institusi</label>
                        <input name="institusi" type="text" class="form-control" id="exampleInputEmail1" placeholder="Institusi">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Jurusan</label>
                        <input name="jurusan" type="text" class="form-control" id="exampleInputEmail1" placeholder="Jurusan">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Tanggal Mulai</label>
                        <input name="tanggal_mulai" type="text" class="form-control" id="exampleInputEmail1" value="{{$data_siswa = date('Y-m-d')}}" readonly>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Tanggal Selesai</label>
                        <input name="tanggal_selesai" type="date" class="form-control" id="exampleInputEmail1">
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">submit</button>
            </div>
            </form>
        </div>
    </div>
</div>
@endsection