
@extends('chalets.parent2')

@section('title' , 'chalet')


@section('styles')

@endsection



@section('content')

<div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        @foreach($sliders as $slider)

        <div class="carousel-item active" data-bs-interval="2000">
          <img src="{{asset('storage/images/slider/'.$slider->image)}}" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h3>{{ $slider->title }}</h3>
            <p>{{ $slider->description }}</p>
          </div>
        </div>
        @endforeach

      </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>



  <div class="sec2">
    <div class="sec2-icons">
      <div class="hand">
        <a href="#"><i class="fa-solid fa-hand-point-up"></i></a>
        <p>احجز الان</p>
      </div>
      <div class="location">
        <a href="#"><i class="fa-solid fa-location-dot icon"></i></a>
        <p>الوصول للموقع</p>
      </div>
      <div class="img-vedio">
        <a href="#"><i class="fa-regular fa-image icon"></i></a>
        <p>الصور والفيديو</p>
      </div>
    </div>
    </div>


    <div class="sec5">
      <div class="sec5-icons">
        <a href="#"><i class="fa-solid fa-hand-point-up">المعلومات العامة</i></a>
        <a href="#"><i class="fa-solid fa-hand-point-up">الموصفات التفصيلية</i></a>
        <a href="#"><i class="fa-solid fa-hand-point-up">المرافق والمحتويات</i></a>
        <a href="#"><i class="fa-solid fa-hand-point-up">المميزات</i></a>
      </div>
    </div>




  <div class="sec3">
    <div class="sec3-icons">
      <div class="sec3-hand">
        <a href="#"><i class="fa-solid fa-images"></i></a>
        <p>احجز الان</p>
      </div>
      <div class="sec3-location">
        <a href="#"><i class="fa-solid fa-video"></i></a>
        <p>الوصول للموقع</p>
      </div>
      <div class="sec3-img-vedio">
        <a href="#"><i class="fa-solid fa-eye"></i></a>
        <p>الصور والفيديو</p>
      </div>
    </div>

    
    <div class="sec3-imges">
        <img src="{{asset('chalets/img/ (1).png')}}" alt="img1">
        <img src="{{asset('chalets/img/ (4).png')}}" alt="img2">
        <img src="{{asset('chalets/img/ (6).png')}}" alt="img3">
      </div>

      <div class="sec4-imges">
        <img src="{{asset('chalets/img/ (8).PNG')}}" alt="img1">
        <img src="{{asset('chalets/img/ (9).png')}}" alt="img2">
        <img src="{{asset('chalets/img/ (3).png')}}" alt="img3">
      </div>
      </div>






  

 





@endsection



@section('scripts')

@endsection
        
      
        