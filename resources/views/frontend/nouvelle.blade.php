@extends('frontend.template')
@section('content')
  <!-- Page Header Start -->
  <div class="container-fluid page-header py-5 mb-5">
        <div class="container py-5">
            <h5 class=" text-white mb-3 animated slideInDown text-center">{{$nouvelle->title}}</h5>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item text-white active" aria-current="page"></li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="container-xxl py-5">
       
<div class="row justify-content-center">
          <div class="col-md-8 col-lg-8 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item rounded overflow-hidden">
                        <img class="img-fluid" style="height:500px;width:100%;object-fit:fill"  src="/storage/nouvelle_images/{{$nouvelle->nouvelle_image}}" alt="">
                        <div class="position-relative p-4 pt-0">
                        <div class="my-3 px-3 d-flex align-items-center">
                                <i class="fa fa-calendar text-success  pr-3 fa-1x"></i>
                               <span  class="mx-2"> {{$nouvelle->nouvelle_date}}</span>
                            </div>
                            <div class="text-justify p-2">
                            <h5 class="mb-3">{{$nouvelle->title}}</h5>
                            <h6 class="text-break">{{$nouvelle->short_description}}</h6>
                            <p class="text-break">{{$nouvelle->description}}</p>
                            </div>
                          
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
    </div>
</div>

@endsection