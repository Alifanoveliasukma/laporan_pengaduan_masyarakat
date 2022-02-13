@if(auth()->user()->role == 'masyarakat')
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
									<h3 class="panel-title">Selamat Datang beban masyarakat</h3>
									<div class="right">
										<button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
										<button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button>
                                       
									</div>
								</div>
								<div class="panel-body">
									<p>Semoga Hari mu menyenangkan :></p>
								</div>
							</div>
                            
                        </div>
                        <table class="table mb-3" id="data-laporan" style="width:100%">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Waktu Pengaduan</th>
                                    <th>Tanggal Kejadian</th>
                                    <th>Keluhan</th>
                                    <th>Foto</th>
                                    <th>Status</th>
                                    <th>Tanggapan</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($datas as $data)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $data->created_at->diffForHumans() }}</td>
                                        <td>{{ $data->waktu_kejadian }}</td>
                                        <td>{{ $data->isi_laporan }}</td>
                                        <td>
                                            @if ($data->foto != NULL)
                                                <img src="{{ asset('images/'.$data->foto )}}" alt="" width="75px">
                                            @else
                                                Tidak ada foto
                                            @endif
                                        </td>
                                        <td>
                                            @if ($data->status == '0')
                                                Belum ditanggapi
                                            @elseif ($data->status == 'proses')

                                                Sedang dalam proses
                                            @elseif ($data->status == 'selesai')
                                                Selesai
                                            @else
                                                Error
                                            @endif
                                        </td>
                                        <td>
                                            @if ($data->ambilTanggapan != NULL)
                                                <button type="button" class=" btn btn-primary" data-dismiss="modal" data-toggle="modal" data-target="{{'#tanggapanModal'.$data->id}}">
                                                    Lihat Tanggapan
                                                </button>

                                                <div class="modal fade" id="{{'tanggapanModal'.$data->id}}" tabindex="-1" role="dialog" aria-labelledby="cekStatusModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="{{'tanggapanModal'.$data->id}}">Catatan</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                                <div class="modal-body">
                                                                    @if ($data->ambilTanggapan->tanggapan == NULL)
                                                                        Tidak ada catatan
                                                                    @else
                                                                        {{ $data->ambilTanggapan->tanggapan }}
                                                                    @endif
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            @else
                                                Belum ditanggapi
                                            @endif
                                        </td>
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
@endif