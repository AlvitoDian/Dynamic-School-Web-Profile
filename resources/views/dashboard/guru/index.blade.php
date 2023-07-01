@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Guru</h1>
</div>


@if(session()->has('success'))
<div class="alert alert-success col-lg-8" role="alert">
  {{ session('success') }}
</div>
@endif


<div class="table-responsive col-lg-16">
  <a href="/dashboard/guru/create" class="btn btn-primary mb-3">Tambah Guru</a>
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Name</th>
          <th scope="col">Description</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($gurus as $guru)

        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $guru->name }}</td>
            <td>{{ $guru->desc}}</td>
            <td>
               {{--  <a href="/dashboard/guru/{{ $guru->slug }}" class="badge bg-info"><span data-feather="eye"></span></a> --}}
                
                <a href="/dashboard/guru/{{ $guru->slug }}/edit" class="badge bg-warning"><span data-feather="edit"></span></a>

                <form action="/dashboard/guru/{{ $guru->slug }}" method="post" class="d-inline">
                  @method('delete')
                  @csrf
                  <button class="badge bg-danger border-0" onclick="return confirm('Are you sure?')"><span data-feather="trash-2"></span></button>
                </form>


            </td>
        </tr>

        @endforeach
      </tbody>
    </table>
  </div>


@endsection
