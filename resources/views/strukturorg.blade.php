@extends('layouts.main')

@section('container')
<br>
<br>
<br>
<div class="container my-4">
    <div class="text-center">
        <h2>Struktur Sekolah</h2>
    </div> 
    
    <div class="text-center mt-5">
    @foreach ($struktur as $strukt)
        <img src="{{ asset('storage/' . $strukt->imgstruktur) }}" alt="">
    @endforeach
    </div> 
    
</div>
@endsection


