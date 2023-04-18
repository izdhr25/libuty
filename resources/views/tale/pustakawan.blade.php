@extends('layouts.front')

@section('title', 'Libuty | Pustakawan')

@section('content')
<br>

  <div class="projects section" id="projects">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-heading">
            <h2 class="text-center">Pustakawan</h2>
            <center><div class="line-dec"></div></center>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        @foreach($akunpustakawans as $pustakawan)
        <div class="col-lg-3">
        	<div class="item">
              <img src="/img/userprofile/{{ $pustakawan->image }}" height="300px">
              <div class="down-content">
                <h4>{{ $pustakawan->name }}</h4>
                <p class="text-muted">{{ $pustakawan->nip_nis }}</p>
                <a href="#"><i class="fa fa-circle-info"></i></a>
              </div>
          	</div>
        </div>
        @endforeach
      </div>

      <div class="d-flex">
        {{ $akunpustakawans->links() }}
      </div>
    </div>
  </div>

@endsection