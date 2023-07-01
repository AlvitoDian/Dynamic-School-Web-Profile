
@extends('layouts.main')

@section('container') 

<br>
<br>
<br>
<div class="container my-4">

  <h1 class="text-center">
    Galeri
  </h1>

  <section class="gallery min-vh-100">
     <div class="container-lg">
        <div class="row gy-4 row-cols-1 row-cols-sm-2 row-cols-md-3 image-container">

          @foreach ($galeries as $galery)
           <div class="col image">
              <img src="{{ asset('storage/' . $galery->imggallery) }}" class="gallery-item" alt="{{ $galery->title }}" value="" id="imgclick">
              <h4 class="my-3 text-center text-galery" id="titlein">{{ $galery->title }}</h4>
              <hr
                style="width: 200px; background-color: rgb(87, 84, 84); height: 4px;
                margin-right: auto;
                margin-left: auto;
                margin-top: -10px"
                />
           </div>
          @endforeach
     </div>
     </div>
  </section>


  <!-- Modal -->
<div class="modal fade" id="gallery-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <!-- <h5 class="modal-title" id="exampleModalLabel">Modal title</h5> -->
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
         <img src="" class="modal-img" alt="modal img">
        
         <h4 class="mt-4" class="modal-title" alt="modal title"></h4>
     
      </div>
    </div>
  </div>
</div>

</div>

<script>

   document.addEventListener("click",function (e){
   if(e.target.classList.contains("gallery-item")){
   	  const src = e.target.getAttribute("src");   	    	  
   	  document.querySelector(".modal-img").src = src;

   	  const myModal = new bootstrap.Modal(document.getElementById('gallery-modal'));
   	  myModal.show();
   }
 })
   
</script>
@endsection



