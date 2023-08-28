@extends('backend.template')
@section('content')
@include('backend.sidebar')
<main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg ">
<div class="container py-4">
    <div class="row justify-content-center">
<div class="col-md-6">
<div class="card-header text-center pt-4">
              <h5>Modifier Nouvelle</h5>
            </div>
<div class="card-body mt-5">

<form role="form text-left" method="post" action="{{url('/modifiernews')}}"  enctype="multipart/form-data">
            {{csrf_field()}}
 <div class="mb-3">
 <input type="hidden" value="{{$nouvelle->id}}" class="form-control" name="id" >
 <input type="text"  value="{{$nouvelle->title}}" class="form-control" name="title" >
           </div>
<div class="mb-3">
    <input type="text"  value="{{$nouvelle->short_description}}" class="form-control" name="short_description" >
</div>
           <div class="mb-3">
    <input type="text"  value="{{$nouvelle->description}}" class="form-control" name="description" >
              
                </div>
           
                <div class="mb-3">
    <input type="text"  value="{{$nouvelle->nouvelle_date}}" class="form-control" name="nouvelle_date" >
              
                </div>
                <div class="mb-3">
 <input type="file" class="form-control" name="nouvelle_image"> 
           </div>
                <div class="text-center">
                  <button type="submit" class="btn bg-gradient-dark w-100 my-4 mb-2">Modifier Glisseur</button>
                </div>
      </form>
      </div>
</div>
 </div> 
</div>
</main>
@endsection