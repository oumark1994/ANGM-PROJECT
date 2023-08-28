@extends('frontend.template')
@section('content')
  <!-- Page Header Start -->
  <div class="container-fluid page-header py-5 mb-5">
        <div class="container py-5">
            <h4 class="display-6 text-white mb-3 animated slideInDown">Nouvelles</h4>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="text-white" href="{{url('/')}}">Home</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Les Nouvelles</li>
                </ol>
            </nav>
        </div>
    </div>
     <!-- Service Start -->
     <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h4 class="mb-4 text-capitalize">Les nouvelles  de l’ANGMV </h4>
            </div>
            <div class="row g-4">
            @foreach($nouvelles as $nouvelle)

                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item rounded overflow-hidden">
                        <img class="img-fluid" style="height:350px"  src="/storage/nouvelle_images/{{$nouvelle->nouvelle_image}}" alt="">
                        <div class="position-relative p-4 pt-0">
                            <div class="service-icon">
                                <i class="fa fa-tree fa-3x"></i>
                            </div>
                            <h4 class="mb-3">{{$nouvelle->title}}</h4>
                            <p>{{$nouvelle->short_description}}</p>
                                                          <a class="" href="nouvelle/{{$nouvelle->title}}">Voir Details<i class="text-center fa fa-arrow-right ms-2"></i></a>

                          
                        </div>
                    </div>
                </div>
            @endforeach
         
            </div>
        </div>
    </div>
  <div>
</div>


    </div>
   
</div>

@endsection