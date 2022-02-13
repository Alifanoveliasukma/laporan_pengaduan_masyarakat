@extends('layout.master2')
@section('content')


<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <!-- Button trigger modal -->
                            <div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Selamat Datang </h3>
									<div class="right">
										<button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
										<button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button>
									</div>
								</div>
								<div class="panel-body">
                                <p>Berikut Laporan Pengaduan</p>
								</div>
							</div>
                            
                        </div>
                        <div class="panel-body">
                            
                        <a href="/laporan/cetak_pdf" class="btn btn-primary" target="_blank">Generate Laporan</a>
                            <table class="table table-hover" id="datatable">
                                <thead>
                                    <tr>

                                        <th>Waktu DETAIL</th>
                                        <th>Waktu</th>
                                        <th>NIK</th>
                                        <th>NAMA</th>                  
                                        <th>LAPORAN</th>
                                        
                                        
                                       
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($pengaduan as $a)
                                    <tr>
                                    <td>{{$a->tgl_pengaduan}}</td>
                                    <td>{{$a->waktu_kejadian}}</td>
                                    <td>{{$a->nik}}</td>
                                    <td>{{$a->nama}}</td>
                                    <td>{{$a->isi_laporan}}</td>
                                    
                                        
                                        @endforeach
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop