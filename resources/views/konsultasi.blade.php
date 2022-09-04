<section>
	<div class="container">
		<div class="text-center">
			<h1>Konsultasi Taman</h1>
			<p class="fs-20">klik dibawah ini untuk memilih tanggal & waktu yang tersedia untuk memanggil konsultan kami</p>
		</div>
		<form class="py-5">
			<div class="row">
				<div class="col-lg-5">
					<div class="card border-3 p-3 my-3 br-3 ct">
					  <div class="card-body p-0">
					    <input id="tanggal" class="form-control border-0" onchange="setDay()" type="hidden" name="tanggal">
					  </div>
					</div>
				</div>
				<div class="col-lg-7">
					<div class="card border-3 p-3 my-3 br-3 cw">
					  <div class="card-body">
					  	<div class="text-center mb-5">
					  		<h5 id="dday" class="card-title">Thursday</h5>
					    	<p id="ddate" class="card-text">October, 8 2022</p>
					  	</div>
					    <h5 class="card-title">Pilih Waktu</h5>
					    <p class="card-text">Durasi Konsultasi 30 Menit</p>
							<div id="waktu" class="row">
								@for ($i = 9; $i <= 16; $i++)
						        <div class="col-6 my-2">
								    <input type="radio" name="a" value="{{$i}}" id="w{{$i}}" />
								    <label for="w{{$i}}" class="col-12">
								    	<a class="col-12 btn btn-outline-primary-2 fw-bold p-2 br-2 jost">
								    		{{ substr("0".$i,-2,2) }}.00
								    	</a>
								    </label> 
								</div>
						    @endfor
							</div>
					  </div>
					</div>
				</div>
				<div class="col-md-12">
					<div class="card border-3 mt-3 br-3">
					  <div class="card-body col-lg-10 col-md-11 p-4 p-md-5">
					    <h2>Informasi Data Diri</h2>
					    <div class="row pt-4 text-dark fw-bold">
					    	<div class="col-md-6 my-2">
					    		<label class="fs-18 mb-1">Nama Lengkap</label>
					    		<input class="form-control text-secondary br-2 border-0 p-2" type="text" name="nama" value="Yudha Wahyu" readonly>
					    	</div>
					    	<div class="col-md-6 my-2">
					    		<label class="fs-18 mb-1">No HP</label>
					    		<input class="form-control text-secondary br-2 border-0 p-2" type="text" name="no" value="+62 852 2324 4747" readonly>
					    	</div>
					    	<div class="col-lg-10 my-2 alamat">
					    		<label class="fw-bold text-dark fs-18 mb-1">Alamat</label>
					    		<div class="row m-0 p-3 br-2 frame">
					    			<textarea id="alamat" class="col-12 border-0" name="alamat" rows="4">Jl. serangkai 1 Perum. Bumi Jaya blok A No. 12 Kelurahan samping, Kecamatan Baru, Kota Tanjungpinang, Kepulauan Riau 29125, Indonesia</textarea>
					    			<a class="text-primary ms-auto" onclick="addAlamat()">
					    				Tambah Alamat Baru
					    			</a>
					    		</div>
					    	</div>
					    	<div id="list-alamat" class="mt-3">
				    		</div>
					    </div>
					  </div>
					  <hr style="height:2px;">
					  <div class="card-body p-4 p-md-5">
					    <h2>Informasi Konsultasi Taman</h2>
					    <div class="py-4">
					    	<p class="fs-18 mb-1 text-dark fw-bold">Lahan Taman</p>
					    	<p>Pilih jumlah lahan taman yang akan dibuat.</p>
					    	<div id="lahan">
									@for ($i = 1; $i <= 3; $i++)
							    <span class="my-2 me-3">
									    <input type="radio" name="lahan" value="{{$i}}" id="l{{$i}}" />
									    <label for="l{{$i}}" class="mb-3">
									    	<a class="btn btn-outline-primary border-2 p-3 br-2 jost">
									    		@php
														if($i>2){$i="Lebih dari 2";}
													@endphp
													{{ $i }} Lahan Taman
									    	</a>
									    </label> 
									</span>
							    @endfor
								</div>
					    </div>
					    <div class="py-4">
					    	<p class="fs-18 mb-1 text-dark fw-bold">Tema Taman</p>
					    	<p>Pilih tema taman yang akan dibuat.</p>
					    	<p class="col-lg-7 text-dark br-2 p-3 jost" style="background-color: #FFF2D1;">
					    		<b>Catatan : </b>Jika anda belum memiliki inspirasi tema taman maka anda bisa melewati tahapan ini, konsultan kami akan memberikan rekomendasi terbaik untuk taman anda.
					    	</p>
					    	<div id="tema">
					    		<div class="row py-4">
					    			@php
											$tema = array(
												array('id'=>'1', 'title'=>'Taman Minimalis', 	'content'=>'Taman yang indah di lahan yang sempit.'),
												array('id'=>'2', 'title'=>'Taman Kering', 		'content'=>'Taman yang dirancang untuk menghasilkan suasana alam didalam dan diluar rumah'),
												array('id'=>'3', 'title'=>'Taman Tropis', 		'content'=>'Taman yang paling sesuai dengan iklim di Indonesia')
											)
										@endphp
										@foreach ($tema as $tm)
					    			<div class="col-lg-4 col-md-6">
					    				<div class="card border-2 mb-3 br-3" style="border-color: #D9E6D8;">
											  <img class="br-3" src="assets/img/tema{{ $tm['id'] }}.png" alt="Card image cap">
											  <div class="card-body p-4">
											    <h4 class="card-title">{{ $tm['title'] }}</h4>
											    <p class="card-text text-secondary jost fs-18" style="min-height: 90px">
											    	{{ $tm['content'] }}
											    </p>
											    <div class="d-flex">
											    	<input type="radio" name="tema" value="{{$tm['title']}}" id="t{{$tm['id']}}" />
											    	<p class="text-success m-0" style="display: none;"><i class="fa fa-check"></i> Terpilih</p>
											    	<label for="t{{$tm['id']}}" class="ms-auto" >
											    		<a class="text-primary fs-18 pointer">Pilih</a>
											    	</label>
											    </div>
											    
											  </div>
											</div>
					    			</div>
					    			@endforeach
					    		</div>
							    		
					    	</div>
					    </div>
					    <div class="py-4">
					    	<p class="fs-18 text-dark fw-bold">Estimasi Ukuran Taman</p>
					    	<div id="ukuran">	
				    			@php
										$ukuran = array(
											array('id'=>'1', 'size'=>'<10m2'),
											array('id'=>'2', 'size'=>'11-20m2'),
											array('id'=>'3', 'size'=>'21-30m2'),
											array('id'=>'4', 'size'=>'31-40m2'),
											array('id'=>'5', 'size'=>'41-50m2'),
											array('id'=>'6', 'size'=>'51-60m2'),
											array('id'=>'7', 'size'=>'>100m2')
										)
									@endphp
									@foreach ($ukuran as $uk)
				    			<span class="my-2 me-3 me-md-4">
								    <input type="radio" name="ukuran" value="{{ $uk['size'] }}" id="u{{ $uk['id'] }}" />
								    <label for="u{{ $uk['id'] }}" class="mb-3">
								    	<a class="btn btn-outline-primary border-2 fw-bold fs-18 py-2 px-3 br-2">
								    		{{ $uk['size'] }}
								    	</a>
								    </label> 
									</span>    	
				    			@endforeach
					    	</div>
					    </div>
					  </div>

					  <div class="card-body p-4 p-md-5">
						  <div class="d-flex">
						  	<a class="btn btn-light text-primary ms-auto fs-18 py-2 px-3 br-2">Batal</a>
								<a type="button" class="btn btn-primary ms-3 fs-18 py-2 px-3 br-2" data-bs-toggle="modal" data-bs-target="#submitModal" onclick="confirm()">OKE</a>
							</div>
						</div>

					</div>
				</div>
			</div>
		</form>
	</div>
</section>

<!-- Modal -->
<div class="modal fade" id="submitModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Konfirmasi data</h5>
        <button type="button" class="close btn" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      	<div class="row m-0">
        	<div class="col-6"><b>Nama Lengkap :</b> 		<p id="dnl"></p></div>
        	<div class="col-6"><b>No HP :</b>   				<p id="dnp"></p></div>
        	<div class="col-12"><b>Alamat :</b>   			<p id="dal" class="text-justify"></p></div>
        	<div class="col-6"><b>Tanggal :</b>   			<p id="dtg"></p></div>
        	<div class="col-6"><b>Tema Taman :</b>  	 	<p id="dtm"></p></div>
        	<div class="col-6"><b>Lahan Taman :</b>   	<p id="dlh"></p></div>
        	<div class="col-6"><b>Estimasi ukuran :</b>	<p id="des"></p></div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" data-bs-dismiss="modal" onclick="submit()">Submit</button>
      </div>
    </div>
  </div>
</div>