@extends('layouts.main')

@section('container')
<br>
<br>
<br>

<style>
    .img-profile{
    width: 65%;
    border-radius: 50%;
    margin: 0 auto;
    box-shadow: 0 0 10px rgba(0,0,0,.2);
}

.card{
    padding: 1.5em .5em .5em;
    border-radius: 2em;
    text-align: center;
    box-shadow: 0 5px 10px rgba(0,0,0,.2);
}

.card-title{
    font-weight: 700;
    font-size: 1.5em;
}

.btn{
    border-radius:2em;
    background-color: teal;
    color: #ffffff;
    padding: .5em 1.5em;
}
.btn:hover {
  background-color: rgba(0, 128, 128, 0.7);
  color: #ffffff;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
}


</style>

<div class="container my-4">
    <div class="text-center">
        <h2>Daftar Tenaga Pendidik</h2>
    </div> 


    <div class="row row-cols-1 row-cols-md-5 g-4 my-5">

    @foreach ($gurus as $guru)
    <div class="col">
        <div class="card h-100">
          <img src="{{ asset('storage/' . $guru->imgguru) }}" class="card-img-top img-profile" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">{{ $guru->name }}</h5>
            <p class="card-text">{{ $guru->desc }}</p>
            {{-- <div class="social-links d-flex justify-content-center">
				<a href="#!" class="mx-2"><img src="img/social/instagram.svg" alt="Instagram"></a>
				<a href="#!" class="mx-2"><img src="img/social/facebook.svg" alt="Facebook"></a>
				<a href="#!" class="mx-2"><img src="img/social/linkedin.svg" alt="Linkedin"></a>
				<a href="#!" class="mx-2"><img src="img/social/youtube.svg" alt="Youtube"></a>
			</div> --}}
          </div>
        </div>
      </div>
    @endforeach
 

</div>
  
</div>
@endsection
