@extends('layouts.frontend')

@section('content')

			<!-- End banner Area -->

			<!-- Start feature Area -->
			<section class="feature-area">
				<div class="container">
					<div class="row">
																	
					</div>
				</div>	
			</section>
			<!-- End feature Area -->
					
			<!-- Start popular-course Area -->
			<section class="popular-course-area section-gap">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-70 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10">Registrasi Petugas</h1>
								
							</div>
						</div>
					</div>										
			</section>
			<!-- End popular-course Area -->
			

			<!-- Start search-course Area -->
			<section class="search-course-area relative">
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row justify-content-between align-items-center">
						<div class="col-lg-6 col-md-6 search-course-left">
							<h1 class="text-white">
								Registrasi Petugas<br>
							
							</h1>
							<div class="row details-content">
								<div class="col single-detials">
									<span class="lnr lnr-graduation-hat"></span>
									<a href="#"><h4>Terpercaya</h4></a>		
									<p>
										Usage of the Internet is becoming more common due to rapid advancement of technology and power.
									</p>						
								</div>
								<div class="col single-detials">
									<span class="lnr lnr-license"></span>
									<a href="#"><h4>Legal</h4></a>		
									<p>
										Usage of the Internet is becoming more common due to rapid advancement of technology and power.
									</p>						
								</div>								
							</div>
						</div>
						<div class="col-lg-4 col-md-6 search-course-right section-gap">
						{!! Form::open(['url' => '/postregister/petugas','class' => 'form-wrap']) !!}
								<h4 class="pb-20 text-center mb-30">Formulir Pendaftaran</h4>	
                                {!!Form::text('nik','', ['class' => 'form-control', 'placeholder' => 'NIK' ])!!}	

								{!!Form::text('name','', ['class' => 'form-control', 'placeholder' => 'Nama'])!!}

                                {!!Form::text('username','', ['class' => 'form-control', 'placeholder' => 'Username'])!!}

								{!!Form::text('telp','', ['class' => 'form-control', 'placeholder' => 'Nomer Telepon'])!!}

                                {!!Form::email('email','', ['class' => 'form-control', 'placeholder' => 'Email'])!!}

                                {!!Form::password('password',['class' => 'form-control', 'placeholder' => 'Password'])!!}

                                <p>Sudah punya akun? login <a href="/login">disini<a></p>

								<input type="submit" class="primary-btn text-uppercase" value="Kirim" style="text-align:center;">
                                {!! Form::close() !!}
						</div>
					</div>
				</div>	
			</section>
			<!-- End search-course Area -->
			
		
			<!-- Start upcoming-event Area -->
			
			<!-- End upcoming-event Area -->
						
			<!-- Start review Area -->
			
			<!-- End review Area -->	
			
			<!-- Start cta-one Area -->
		
			<!-- End cta-one Area -->

			<!-- Start blog Area -->
			
			<!-- End blog Area -->			
			

			<!-- Start cta-two Area -->
			
			<!-- End cta-two Area -->

@stop