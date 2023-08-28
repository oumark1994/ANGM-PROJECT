@extends('frontend.template')
@section('content')
  <!-- Page Header Start -->
  <div class="container-fluid page-header py-5 mb-5">
        <div class="container py-5">
            <h1 class="display-6 text-white mb-3 animated slideInDown">Galleries</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="text-white" href="{{url('/')}}">Home</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Gallerie</li>
                </ol>
            </nav>
        </div>
    </div>
     <!-- Service Start -->
     <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp text-center" data-wow-delay="0.1s" style="max-width: 600px;">
                <h4 class="mb-4  display-6 text-capitalize">Explorer notre riche  gallerie</h4>
            </div>
        
            <div class="row g-4 portfolio-container wow fadeInUp" data-wow-delay="0.5s">
            @foreach($galleries as $gallerie)

                <div class="col-lg-4 col-md-6 portfolio-item first">
                    <div class="portfolio-img rounded overflow-hidden">
                        <img class="img-fluid" style="height:350px;width:100%" src="/storage/gallerie_images/{{$gallerie->gallerie_image}}" alt="">
                        <div class="portfolio-btn">
                            <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1" href="/storage/gallerie_images/{{$gallerie->gallerie_image}}" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1" href="/storage/gallerie_images/{{$gallerie->gallerie_image}}"><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                    <div class="pt-3">
                        <p class="text-primary mb-0">{{$gallerie->title}}</p>
                       
                    </div>
                </div>
            @endforeach
            <div class="text-center">

</div>
            </div>
        </div>
    </div>
  <div>
</div>


    </div>
   
</div>

@endsection