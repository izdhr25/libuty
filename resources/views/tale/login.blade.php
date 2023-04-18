@extends('layouts.front')

@section('title', 'Libuty | Login')

@section('content')
<br><br><br>

<section class="h-100">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col">
        <div class="card card-registration my-4" style="background:linear-gradient(to right, #5b03e4, #c03afe);">
          <div class="row g-0 py-5">
            <div class="col-lg-6 d-none d-xl-block my-auto">
              <h3 class="mb-5 text-center text-white fw-bold">Login</h3>
              <center><img src="img/iconlibuty.png" alt="Sample photo" class="img-fluid" style="border-top-left-radius: .30rem; border-bottom-left-radius: .25rem; width: 80%;"/></center>
            </div>
            <div class="col-lg-6">
              <div class="card-body p-md-5 text-black">
                <form method="POST" enctype="multipart/form-data" action="">
                  @csrf
                  @error('loginError')
                    <div class="alert alert-danger">
                        <strong>Error</strong>
                        <p>{{ $message }}</p>
                    </div>
                  @enderror
                  <br>
                  <div class="form-outline mb-4">
                  
                    <label class="form-label text-white" for="form3Example9">Email</label>
                    <input type="email" id="form3Example9" class="form-control form-control-sm" name="email"/>
                    @error('email')
                      <small style="color: red">{{ $message }}</small>
                      <br>
                    @enderror
                  </div>

                  <div class="form-outline mb-4">
                    
                    <label class="form-label text-white" for="form3Example9">Password</label>
                    <input type="password" id="form3Example9" class="form-control form-control-sm" name="password"/>
                    @error('password')
                      <small style="color: red">{{ $message }}</small>
                      <br>
                    @enderror
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