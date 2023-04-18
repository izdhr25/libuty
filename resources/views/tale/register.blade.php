@extends('layouts.front')

@section('title', 'Libuty | Register')

@section('content')

<br><br><br>

<section class="h-100">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col">
        <div class="card card-registration my-4" style="background:linear-gradient(to right, #5b03e4, #c03afe);">
          <div class="row g-0">
            <div class="col-lg-6 d-none d-xl-block my-auto">
              <h3 class="mb-5 text-center text-white fw-bold">Registrasi</h3>
              <img src="img/icon1.png" alt="Sample photo" class="img-fluid" style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;" />
            </div>
            <div class="col-lg-6">
              <div class="card-body p-md-5 text-black">
                <form method="POST" enctype="multipart/form-data" action="{{ route('register.store') }}">
                  @csrf
                	<div class="row">
                		<div class="col-lg-6">
                			<div class="form-outline mb-4">
								        <div class="form-outline mb-4">
				                  <label class="form-label text-white" for="form3Example9">Nama Lengkap</label>
				                  <input type="text" id="form3Example9" class="form-control form-control-sm" name="name"/>
				                </div>
			                </div>
                		</div>

                		<div class="col-lg-6">
                			<div class="form-outline mb-4">
			                  <label class="form-label text-white" for="form3Example9">Email</label>
			                  <input type="email" id="form3Example9" class="form-control form-control-sm" name="email"/>
			                </div>
                		</div>

                		<div class="col-lg-6">
                			<div class="form-outline mb-4">
			                  <label class="form-label text-white" for="form3Example9">Whatsapp</label>
			                  <input type="number" id="form3Example9" class="form-control form-control-sm" name="telepon"/>
			                </div>
                		</div>

                		<div class="col-lg-6">
                			<div class="form-outline mb-4">
			                    <div class="form-outline mb-4">
				                  <label class="form-label text-white" for="form3Example9">Gambar</label>
				                  <input type="file" class="form-control" name="image" placeholder="Gambar">
				                </div>
			                </div>
                		</div>

                		<div class="col-lg-6">
                			<div class="form-outline mb-4">
			                  <label class="form-label text-white" for="form3Example9">Kode RFID</label>
			                  <input type="text" id="form3Example9" class="form-control form-control-sm" name="kode_rfid"/>
			                </div>
                		</div>

                		<div class="col-lg-6">
                			<div class="form-outline mb-4">
			                  <label class="form-label text-white" for="form3Example9">NIS</label>
			                  <input required type="text" class="form-control" name="nip_nis" placeholder="NIS">
			                </div>
                		</div>

                		<div class="col-lg-6">
                			<div class="form-outline mb-4">
			                  <label class="form-label text-white" for="form3Example9">Kelas</label>
			                  <input type="text" class="form-control" name="kelas" placeholder="Kelas">
			                </div>
                		</div>

                		<div class="col-lg-6">	
			                <div class="form-outline mb-4">
			                  <label class="form-label text-white" for="form3Example9">Password</label>
			                  <input type="password" id="form3Example9" class="form-control form-control-sm" name="password"/>
			                  <input type="hidden" class="form-control form-control-sm" name="status" value="Active"/>
                        <input type="hidden" class="form-control form-control-sm" name="role_id" value="2"/>
                			</div>
                		</div>
                	</div>

                <div class="d-md-flex justify-content-start align-items-center mb-4 py-2">

                  <h6 class="mb-0 me-4 text-white">Jenis Kelamin </h6>

                  <select class="form-control" name="jk">
                    <option value="Perempuan">Perempuan</option>
                    <option value="Laki - Laki">Laki - Laki</option>
                  </select>
                </div>
                

                <div class="form-outline mb-4">
                  
                  <label class="form-label text-white" for="form3Example8">Alamat</label>
                  <textarea type="text" id="form3Example8" class="form-control form-control-sm" name="alamat"></textarea>

                </div>

                <div class="form-check form-check-inline mb-0 me-4">
                  <input class="form-check-input" type="checkbox" name="inlineRadioOptions" id="setuju"
                    value="Setuju"/ required>
                  <label class="form-check-label text-white" for="setuju">Dengan ini saya menyetujui Syarat dan Ketentuan yang ada di Libuty.</label>
                </div>

                <div class="d-flex justify-content-end pt-3">
                  <button type="submit" class="btn form-control text-white" style="background: #5b03e4;">Submit</button>
                </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection