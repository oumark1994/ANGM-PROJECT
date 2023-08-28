@extends('frontend.template')
@section('content') 
    <!-- Carousel Start -->
  <div class="container-fluid bg-light  p-0 pb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="owl-carousel header-carousel position-relative">
   @foreach($sliders as $slider)

            <div class="owl-carousel-item position-relative" data-dot="<img src='/storage/slider_images/{{$slider->slider_image}}'>">
                <img class="img-fluid" style="height:90vh" src="/storage/slider_images/{{$slider->slider_image}}" alt="">
                <div class="owl-carousel-inner">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-10 col-lg-8">
                                <h6 class="display-6 text-white animated slideInDown text-capitalize">{{$slider->title}}</h6>
                                <p class="fs-5 fw-medium text-white mb-4 pb-3">{{$slider->description}}</p>
                                <a href="#about" class="btn btn-primary rounded-pill py-3 px-5 animated slideInLeft">Voir Plus</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
 @endforeach
   </div>
    </div>
</div>
 


    <!-- About Start -->
    <div class="container-fluid bg-light overflow-hidden  px-lg-0" id="about">
        <div class="container about px-lg-0 mt-sm-5">
            <div class="row g-0 mx-lg-0  mt-sm-5 justify-content-center">
                <div class="col-lg-4 col-md-6  col-sm-6 ps-lg-0 wow fadeIn" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative mt-sm-5 pt-sm-5  h-100  mt-sm-5">
                        <img class="position-absolute img-fluid " style="object-fit:fill" src="{{asset('img/mylogo.png')}}" style="object-fit: cover;" alt="">
                    </div>
                </div>
                <div class="col-lg-6 about-text py-5 wow fadeIn" data-wow-delay="0.5s">
                    <div class="p-lg-5 pe-lg-0">
                        <h6 class="text-primary">A Propos</h6>
                        <h3 class="mb-4 text-capitalize">Agence National de la Grande muraile verte</h3>
                        <p>La Grande Muraille Verte vise à restaurer les paysages dégradés du Sahel - l’une des régions les plus pauvres du monde. La Muraille est un symbole convaincant pour toute l’humanité que nous pouvons prendre des mesures pour restaurer notre planète dégradée</p>
                        <p><i class="fa fa-check-circle text-primary me-3"></i>Historique</p>
                        <p><i class="fa fa-check-circle text-primary me-3"></i>Institution</p>
                        <p><i class="fa fa-check-circle text-primary me-3"></i>Vision</p>
                        <a href="#gallerie" class="btn btn-primary rounded-pill py-3 px-5 mt-3">Explorer More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
      <!-- Team Start -->
      <div class="container-xxl py-5" id="mission">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h6 class="text-primary">ANGVM</h6>
                <h1 class="mb-4">Qui Somme nous</h1>
            </div>
            <div class="row g-4">
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item rounded overflow-hidden">

                        <div class="p-4">
                            <h5 class="text-center my-3">Historique</h5>
                            <span> La « Grande Muraille Verte » est le nom donné à un projet international de
reboisement destiné à enrayer en Afrique le phénomène de désertification des régions sub-sahariennes et en particulier du Sahel. Annoncé dès 2002 lors
d’un sommet spécial ténu à Ndjamena à l’occasion de la Journée mondiale
de lutte contre la désertification, ce projet multinational a effectivement été
lancé en 2005 par le Président Olugun Obansanjo puis repris par le Président
sénégalais Abdoulaye Wade.. Il vise le reboisement de 15 millions d’hectares,
sur une bande de territoire d’une longueur 7100 km et d’une largeur
moyenne de 15 km, entre Dakar et Djibouti.
Cette Muraille sahélienne traverse les (11) onze pays signataires du projet de
la GMV : Sénégal, Mauritanie, Mali, Burkina-Faso, Niger, Nigeria, Tchad,
Soudan, Ethiopie, Erythrée et Djibouti.
 </span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item rounded overflow-hidden">

                        <div class="p-4">
                            <h5 class="text-center my-3">Institution</h5>
                            <span>L’Initiative de la Grande Muraille Verte reverdit le Sahel, restaure les terres dégradées et fournit des moyens de subsistance décents à sa population, serpentant le Sahel du Sénégal à l’Ouest à Djibouti à l’Est, restaurant des terres dégradées et offrant des emplois et des opportunités à des millions de personnes en Afrique. La Grande Muraille Verte est un mouvement dirigé par l’Afrique lancé en 2007 par les dirigeants des pays Sahéliens, avec une ambition épique de faire croître une merveille du monde naturelle de 8000 km sur toute la largeur de l’Afrique.  </span>
                            <span>  La Grande Muraille Verte est un mouvement dirigé par l’Afrique lancé en 2007 par les dirigeants des pays Sahéliens, avec une ambition épique de faire croître une merveille du monde naturelle de 8000 km sur toute la largeur de l’Afrique.  </span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item rounded overflow-hidden">

                        <div class="p-4">
                            <h5 class="text-center my-3">Missions</h5>
                            <span>
                            L’Agence Nationale de la Grande Muraille Verte a pour missions de réaliser la
portion nationale de la barrière verte contre l’avancée du désert et de
contribuer au développement durable dans la bande sahélo-saharienne
comprise principalement entre les isohyètes de 100mm et 400mm.<br>
La Grande Muraille Verte vise à restaurer les paysages dégradés du Sahel - l’une des régions les plus pauvres du monde. La Muraille est un symbole convaincant pour toute l’humanité que nous pouvons prendre des mesures pour restaurer notre planète dégradée.<br>
La Grande Muraille Verte est un mouvement dirigé par l’Afrique lancé en 2007 par les dirigeants des pays Sahéliens, avec une ambition épique de faire croître une merveille du monde naturelle de 8000 km sur toute la largeur de l’Afrique. 
                            </span>
                        </div>
                    </div>
                </div>
         
            
            </div>
        </div>
    </div>
 
      <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h6 class="text-primary">Nouvelles</h6>
                <h1 class="mb-4">Les dernieres nouvelles</h1>
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
    <a class="" href="/nouvelle/{{$nouvelle->title}}">Voir Details<i class="text-center fa fa-arrow-right ms-2"></i></a>

                          
                        </div>
                    </div>
                </div>
            @endforeach
            <div class="text-center">

            <a href="{{url('/nouvelles')}}" class="btn btn-primary rounded-pill py-3 px-5 mt-3" style="width:max-content">Voir plus</a>
            </div>
            </div>
        </div>
    </div>
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h6 class="text-primary">Actualites</h6>
                <h1 class="mb-4">Les dernieres actualites</h1>
            </div>
            <div class="row g-4">
            @foreach($blogs as $blog)

                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item rounded overflow-hidden">
                        <img class="img-fluid" style="height:350px;width:100%"  src="/storage/blog_images/{{$blog->blog_image}}" alt="">
                        <div class="position-relative p-4 pt-0">
                            <div class="service-icon">
                                <i class="fa fa-tree fa-3x"></i>
                            </div>
                            <h4 class="mb-3">{{$blog->title}}</h4>
                            <p>{{$blog->short_description}}</p>
 <a class="" href="{{$nouvelle->title}}">Voir Details<i class="text-center fa fa-arrow-right ms-2"></i></a>

                          
                        </div>
                    </div>
                </div>
            @endforeach
            <div class="text-center">

            <a href="{{url('/blogs')}}" class="btn btn-primary rounded-pill py-3 px-5 mt-3" style="width:max-content">Voir plus</a>
            </div>
            </div>
        </div>
    </div>
 <!-- Projects Start -->
 <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h6 class="text-primary">Gallerie</h6>
                <h1 class="mb-4">Explorer nos derniers gallerie</h1>
            </div>
            <!-- <div class="row mt-n2 wow fadeInUp" data-wow-delay="0.3s">
                <div class="col-12 text-center">
                    <ul class="list-inline mb-5" id="portfolio-flters">
                        <li class="mx-2 active" data-filter="*">All</li>
                        <li class="mx-2" data-filter=".first">Solar Panels</li>
                        <li class="mx-2" data-filter=".second">Wind Turbines</li>
                        <li class="mx-2" data-filter=".third">Hydropower Plants</li>
                    </ul>
                </div>
            </div> -->
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
                        <!-- <hr class="text-primary w-25 my-2"> -->
                        <!-- <h5 class="lh-base">We Are pioneers of solar & renewable energy industry</h5> -->
                    </div>
                </div>
            @endforeach
            <div class="text-center">

<a href="{{url('/lesgalleries')}}" class="btn btn-primary rounded-pill py-3 px-5 mt-3" style="width:max-content">Voir plus gallerie</a>
</div>
            </div>
        </div>
    </div>

        </div>
      </div>
    </div>
    <!-- Animal End -->

    
        <div
      class="container-xxl bg-primary visiting-hours my-5 py-5 wow fadeInUp"
      data-wow-delay="0.1s"
    >
      <div class="container py-5">
        <div class="row g-5 justify-content-center">
          <div class="col-md-6 wow fadeIn " data-wow-delay="0.3s">
            <h1 class="display-6 text-white mb-5 text-center">Documents</h1>
            <ul class="list-group list-group-flush">
              @foreach($documents as $document)
              <li class="list-group-item">
              <!-- <a style="text-decoration:none" href="/storage/document_images/{{$document->document}}" > -->
                <span><i class="text-danger text-uppercase fa fa-file-pdf  me-3"></i>
                {{$document->title}}
              </span>
                <span><a style="text-decoration:none" href="/storage/document_images/{{$document->document}}" download target="blank" ><i class="text-success fa fa-download  me-3"></i></a></span>
<!-- </a> -->
              </li>

              @endforeach
            </ul>
          </div>
      
        </div>
      </div>
    </div>

        </div>
      </div>
    </div>
    <!-- Testimonial End -->
@endsection