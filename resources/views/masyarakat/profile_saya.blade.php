@extends('layout.master2')

@section('header')
<link href="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/css/bootstrap-editable.css" rel="stylesheet"/>
@stop
@section('content')
<div class="main">

    <!-- MAIN CONTENT -->
    <div class="main-content">
        <div class="container-fluid">
         
            <div class="panel panel-profile">
                <div class="clearfix">
                    <!-- LEFT COLUMN -->
                    <div class="profile-left">

                        <!-- PROFILE HEADER -->
                        <div class="profile-header">
                            <div class="overlay"></div>
                            <div class="profile-main">
                                <img src="#" class="img-circle" alt="Avatar">
                                <h3 class="name">#</h3>
                                <span class="online-status status-available">Available</span>
                            </div>
                            <div class="profile-stat">
                                <div class="row">
                                    <div class="col-md-4 stat-item">
                                      #<span>Mata Pelajaran</span>
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
                        
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Tanggapan</h3></div>
                                <div class="panel-body">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Tanggapan</th>
                                                <th>Status</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($tanggapans as $adu)
                                            <tr>
                                                <td>{{$adu->id_tanggapan}}</td>
                                                <td>{{$adu->tanggapan}}</td>
                                                <td>{{$adu->status}}</td>
                                                
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                        </div>
                        <dic class="panel">
                            <div id="chartNilai"></div>
                        </div>
                    </div>
                    <!-- END RIGHT COLUMN -->
                </div>
            </div>
        </div>
    </div>
    <!-- END MAIN CONTENT -->
</div>



@stop
<!-- javascript -->
