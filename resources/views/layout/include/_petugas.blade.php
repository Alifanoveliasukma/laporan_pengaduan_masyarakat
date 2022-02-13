@if(auth()->user()->role == 'petugas')
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
									<h3 class="panel-title">Selamat Datang Babu</h3>
									<div class="right">
										<button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
										<button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button>
									</div>
								</div>
								<div class="panel-body">
                                <p>Semoga Hari mu menyenangkan :*</p>
								</div>
							</div>
                            
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endif