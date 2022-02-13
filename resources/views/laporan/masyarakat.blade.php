@extends('layout.master2')
@section('content')


<!-- table -->
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <!-- Button trigger modal -->
                           
                            <!-- Modal -->
                            
                        </div>
                        <div class="panel-body">
                            <table class="table table-hover" id="datatable">
                                <thead>
                                    <tr>
                                          
                                        <th>NO</th>
                                        <th>TANGGAL KEJADIAN</th>
                                        <th>WAKTU KEJADIAN</th>
                                        <th>NIK</th>
                                        <th>NAMA</th>
                                        <th>LAPORAN</th>
                                        <th>STATUS</th>
                                       

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($pengaduan as $a) 
                                    <tr>
                                        <td><a href="/masyarakat/{{$a->id_pengaduan}}/profile">{{$a->id_pengaduan}}</a>
                                        <td>{{$a->tgl_pengaduan}}</td>
                                        <td>{{$a->waktu_kejadian}}</td>
                                        <td>{{$a->nik}}</td>
                                        <td>{{$a->nama}}</td>
                                        <td>{{$a->isi_laporan}}</td>
                                        <td>{{$a->status}}</td>
                                       
                                        
                                    
                                    </tr>
                                    @endforeach
                                 
                                </tbody>

                            </table>

                        </div>                  
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end table -->

<!-- input -->

@stop