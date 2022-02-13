<div id="sidebar-nav" class="sidebar">
	<div class="sidebar-scroll">
		<nav>
			<ul class="nav">
				@if(auth()->user()->role == 'admin')
				<li><a href="/dashboard/registrasi" class="active"><i class="lnr lnr-pencil"></i> <span>Registrasi Petugas</span></a></li>
				<li><a href="/laporan" class="active"><i class="lnr lnr-pencil"></i> <span>Laporan</span></a></li>
                
				@endif
				@if(auth()->user()->role == 'masyarakat')
				<li><a href="/tulispengaduan" class="active"><i class="lnr lnr-pencil"></i> <span>Tulis Pengaduan</span></a></li>
				@endif
				@if(auth()->user()->role == 'petugas')
				<li><a href="/laporanpengaduan" class="active"><i class="lnr lnr-pencil"></i> <span>Laporan Pengaduan</span></a></li>

				@endif

			</ul>
		</nav>
	</div>
</div>