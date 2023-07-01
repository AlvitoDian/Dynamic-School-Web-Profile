@extends('layouts.main')

@section('container')
<br>
<br>
<br>
<div class="container my-4">
    <div class="text-center">
        <h2>Jadwal Pembelajaran Tahun Ajaran 2022/2023</h2>
    </div> 
    
    <div class="text-center mt-5">
    @foreach ($jadwal as $jadwl)
        <iframe src="{{ asset('storage/' . $jadwl->imgjadwal) }}" frameborder="0" style="width: 100%; height: 975px;"></iframe>
        
    @endforeach
    </div> 
    
</div>
@endsection
