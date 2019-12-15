@extends('layouts.app')

@section('title','EDIT DATA SISWA PRAKERIN')

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
                <div class="panel">
                    <div class="panel-heading">
                        <h3 class="panel-title">EDIT DATA SISWA PRAKERIN</h3>
                    </div>
                    <div class="panel-body">
                        <form action="/siswa/{{$siswa->id}}/update" method="POST">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nama Lengkap</label>
                                <input name="nama" type="text" class="form-control" id="exampleInputEmail1" placeholder="Nama Lengkap" value="{{$siswa->nama}}">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">NIM/NIS</label>
                                <input name="nim" type="text" class="form-control" id="exampleInputEmail1" placeholder="NIM/NIS" value="{{$siswa->nim}}">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Institusi</label>
                                <input name="institusi" type="text" class="form-control" id="exampleInputEmail1" placeholder="Institusi" value="{{$siswa->institusi}}">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Jurusan</label>
                                <input name="jurusan" type="text" class="form-control" id="exampleInputEmail1" placeholder="Jurusan" value="{{$siswa->jurusan}}">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Tanggal Mulai</label>
                                <input name="tanggal_mulai" type="text" class="form-control" id="exampleInputEmail1" value="{{$siswa->tanggal_mulai}}" readonly>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Tanggal Selesai</label>
                                <input name="tanggal_selesai" type="date" class="form-control" id="exampleInputEmail1" value="{{$siswa->tanggal_selesai}}">
                            </div>
                            <button type="submit" class="btn btn-warning">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop