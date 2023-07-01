@extends('dashboard.layouts.main')

@section('container')

  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Ekstrakurikuler</h1>
  </div>

  <div class="col-lg-8">
      
    <form method="post" action="/dashboard/ekstra/{{ $ekstra->slug }}" class="mb-5" enctype="multipart/form-data">
        @method('put')
        @csrf
        <div class="mb-3">
          <label for="name" class="form-label">Name</label>
          <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" required autofocus value="{{ old('name', $ekstra->name) }}">
          @error('name')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        
        <div class="mb-3">
          <label for="slug" class="form-label @error('slug') is-invalid @enderror">Slug</label>
          <input type="text" class="form-control" id="slug" name="slug" required value="{{ old('slug', $ekstra->slug) }}">
          @error('slug')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        
        <div class="mb-3">
          <label for="desc" class="form-label">Description</label>
          <input type="text" class="form-control @error('desc') is-invalid @enderror" id="desc" name="desc" required autofocus value="{{ old('desc', $ekstra->desc) }}">
          @error('desc')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>

        <div class="mb-3">
          <label for="imgekstra" class="form-label">Image Extracurricular</label>
          <input type="hidden" name="oldImage" value="{{ $ekstra->imgekstra }}">

          @if($ekstra->imgekstra)
          <img src="{{ asset('storage/' . $ekstra->imgekstra) }}" class="img-preview img-fluid mb-3 col-sm-5 d-block">

          @else
          <img class="img-preview img-fluid mb-3 col-sm-5">

          @endif

          <input class="form-control @error('imgekstra') is-invalid @enderror" type="file" id="imgekstra" name="imgekstra" onchange="previewImage()">
          @error('imgekstra')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>

        <button type="submit" class="btn btn-primary">Update Extracurricular</button>
      </form>

  </div>

  <script>
    const title = document.querySelector("#name");
    const slug = document.querySelector("#slug");

    title.addEventListener("keyup", function() {
        let preslug = title.value;
        preslug = preslug.replace(/ /g,"-");
        slug.value = preslug.toLowerCase();
    });

    function previewImage() {

      const image = document.querySelector('#imgekstra');
      const imgPreview = document.querySelector('.img-preview');

      imgPreview.style.display = 'block';

      const oFReader = new FileReader();
      oFReader.readAsDataURL(image.files[0]);

      oFReader.onload = function(oFREvent){
        imgPreview.src =  oFREvent.target.result;
      }
    }
</script>

@endsection