
@extends('chalets.parent')

@section('title' , 'الصفحة الرئيسية')


@section('styles')

@endsection



@section('content')

<div class="sec1">





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



    <div class="sec4">
        <div class="per">
          <h1>اخر العروض</h1>
          <a href="#">اعرض المزيد</a>
        </div>

        <div class="offer3">
            @foreach($articles as $article)

          <div class="offer3-lounge1">
            <img src="{{asset('storage/images/article/'.$article->image)}}" alt="شاليه">
            <div class="offer3-lounge1-per">
              <div class="offer3-lounge1-rival">
                <h5>{{ $article->title }}</h5>
                <div class="rival">50% خصم</div>
              </div>
              <p class="addres">{{$article->short_description}}</p>
              <div class="offer3-lounge1-details">
                <a href="" class="details">التفاصيل</a>
                <p class="pries">100/ليلة</p>
              </div>
            </div>

          </div>
          @endforeach



        </div>

      </div>

      @foreach($categories as $category)

    <div class="sec2">
      <div class="per">
        <h1>{{ $category->name }}</h1>
        <a href="#">اعرض المزيد</a>
      </div>

      <div class="offer">
        @foreach($category->articles as $article)

        <div class="offer-lounge1">

          <img src="{{asset('storage/images/article/'.$article->image)}}" alt="">
          <div class="offer-lounge1-per">
            <h5>{{ $article->title }}</h5>
            <p class="addres">{{$article->short_description}}</p>
            <div class="offer-lounge1-details">
              <a href="" class="details">التفاصيل</a>
              <p class="pries">100/ليلة</p>
            </div>
          </div>

        </div>

        @endforeach


    </div>


    @endforeach

    <div class="sec5">
        <h1>مميزاتنا</h1>
        <div class="sec5-advantages1">
          <div class="advantages1">
            <div class="icon"><i class="fa-solid fa-magnifying-glass"></i></div>
            <h2>سهولة البحث</h2>
            <p>مكنك الآن البحث عن أفضل بيوت العطلات بتجربة غاية في السهولة واليسر</p>
          </div>
          <div class="advantages1">
            <div class="icon"><i class="fa-solid fa-heart"></i></div>
            <h2>جودة الخدمة</h2>
            <p>مكنك الآن البحث عن أفضل بيوت العطلات بتجربة غاية في السهولة واليسر</p>
          </div>
          <div class="advantages1">
            <div class="icon"><i class="fa-solid fa-money-bill"></i></div>
            <h2>أفضل الأسعار</h2>
            <p>نضمن لكم أفضل الأسعار</p>
          </div>
          <div class="advantages1">
            <div class="icon"><i class="fa-solid fa-credit-card"></i></div>
            <h2>الحجز أونلاين</h2>
            <p>إمكانية الحجز و الدفع أونلاين</p>
          </div>
        </div>

      </div>


  </div>

    @endsection



@section('scripts')

@endsection








