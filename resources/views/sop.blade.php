@extends('layouts.main')

@section('container')
<br>
<br>
<br>
<div class="container my-4">
    <div class="text-center mb-5">
        <h1>Standar Operasional Prosedur (SOP) SMPN 2 Gedangan</h1>
    </div> 
    W
 <div class="text-center mt-5">
    @foreach ($sops as $sop)   
        <iframe src="{{ asset('storage/' . $sop->imgsop) }}" frameborder="0" style="width: 100%; height: 975px;"></iframe>
        
    @endforeach
    </div> 

</div>

@endsection
