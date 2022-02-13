@extends('layout.master2')

@section('header')
<link href="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/css/bootstrap-editable.css" rel="stylesheet"/>
@stop
@section('content')
<div class="main">

    <!-- MAIN CONTENT -->
    <div class="main-content">
        <div class="container-fluid">
         @if(session('sukses'))
            <div class="alert alert-success" role="alert">
                {{session('sukses')}}
            </div>
            @endif

            @if(session('error'))
            <div class="alert alert-danger" role="alert">
                {{session('error')}}
            </div>
            @endif
            <div class="panel panel-profile">
                <div class="clearfix">
                    <!-- LEFT COLUMN -->
                    <div class="profile-left">

                        <!-- PROFILE HEADER -->
                        <div class="profile-header">
                            <div class="overlay"></div>
                            <div class="profile-main">
                                <img src="#" class="img-circle" alt="Avatar">
                                <h3 class="name">{{$adu->nama}}</h3>
                                <span class="online-status status-available">Available</span>
                            </div>
                            <div class="profile-stat">
                                <div class="row">
                                    <div class="col-md-12 stat-item">
                                       {{$adu->nik}}
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <!-- END PROFILE HEADER -->

                        <!-- PROFILE DETAIL -->
                        
                        <!-- END PROFILE DETAIL -->
                    </div>
                    <!-- END LEFT COLUMN -->

                    <!-- RIGHT COLUMN -->
                    <div class="profile-right">
                        @if($adu->status == '0')
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                        Tambah Nilai
                        </button>
                        @else
                        <a href="#" class="btn btn-success">Selesai</a>
                        @endif
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Mata Pelajaran</h3></div>
                                <div class="panel-body">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>NO</th>
                                                <th>Tanggapan</th>
                                      
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($tanggapans as $adu)
                                            <tr>
                                                <td>{{$adu->id_tanggapan}}</td>
                                                <td>{{$adu->tanggapan}}</td>
                                          
                                                
                                               @endforeach
                                            </tr>
                                           
                                        </tbody>
                                    </table>
                                </div>
                        </div>
                       
                    </div>
                    <!-- END RIGHT COLUMN -->
                </div>
            </div>
        </div>
    </div>
    <!-- END MAIN CONTENT -->
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Beri Tanggapan</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
        <form action="/masyarakat/{{$adu->id_pengaduan}}/beritanggapan" method="POST" >
                    @csrf
                    <div class="form-group">
                        <label for="tanggapan">Tanggapan</label>
                        <input name="tanggapan" type="text" class="form-control" id="tanggapan" aria-describedby="emailHelp" placeholder="Tanggapan" >
                    </div>

           
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>  
        </div>
        </div>
    </div>
</div>

@stop
<!-- javascript -->
