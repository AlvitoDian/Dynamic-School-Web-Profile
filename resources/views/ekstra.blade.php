@extends('layouts.main')

@section('container')
<br>
<br>
<br>

<style>

.card{
    /* padding: 1.5em .5em .5em; */

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
        <h2>Daftar Ekstrakurikuler</h2>
    </div> 


    <div class="row row-cols-1 row-cols-md-5 g-4 my-5">

    @foreach ($ekstras as $ekstra)
    <div class="col">
        <div class="card h-100 border-bottom-secondary">
          <img src="{{ asset('storage/' . $ekstra->imgekstra) }}" class="card-img-top" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">{{ $ekstra->name }}</h5>
            <p class="card-text">{{ $ekstra->desc }}</p>
           
          </div>
        </div>
      </div>
    @endforeach
 

</div>
  
</div>
@endsection
