@extends('layout.master3')
@section('content')
<!-- input -->
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">Silahkan Tulis Pengaduan Dibawah ini </h3>
                            
                        </div>
                        <div class="panel-body">
                            <form action="/kirimkan" method="POST" enctype="multipart/form-data">
                               
                                @csrf

                                <div class="form-group">
                                    <label for="exampleInputemail1">NOMER</label>
                                    <input name="id_pengaduan" type="number" class="form-control" id="exampleInputemail1" aria-describedby="emailHelp" >
                                </div>


                                <div class="form-group">
                                    <label for="exampleInputemail1">WAKTU KEJADIAN</label>
                                    <input name="waktu_kejadian" type="text" class="form-control" id="exampleInputemail1" aria-describedby="emailHelp" >
                                </div>

                             

                                <div class="form-group">
                                    <label for="exampleInputemail1">NAMA</label>
                                    <input name="nama" type="text" class="form-control" id="exampleInputemail1" aria-describedby="emailHelp" >
                                </div>


                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">LAPORAN</label>
                                    <input name="isi_laporan" type="text" class="form-control" id="exampleInputemail1" aria-describedby="emailHelp" >
                                </div>

                                



                                </div>
                                <button type="submit" class="btn btn-warning">KIRIM</button>
                                
                            </form>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop