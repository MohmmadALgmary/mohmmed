
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
          
          <div class="offer3-lounge1">
            <img src="/img/صورة شالية 1.jpg" alt="شاليه">
            <div class="offer3-lounge1-per">
              <div class="offer3-lounge1-rival">
                <h5>شاليه السلطان</h5>
                <div class="rival">50% خصم</div>
              </div>
              <p class="addres">شمال غزة</p>
              <div class="offer3-lounge1-details">
                <a href="" class="details">التفاصيل</a>
                <p class="pries">100/ليلة</p>
              </div>
            </div>
           
          </div>
    
    
    
        </div>
    
      </div>
  
    
    <div class="sec2">
      <div class="per">
        <h1>صالات مميزة</h1>
        <a href="#">اعرض المزيد</a>
      </div>
  
      <div class="offer">
        
        <div class="offer-lounge1">
          <img src="/img/صورة صالة 1.jpg" alt="">
          <div class="offer-lounge1-per">
            <h5>صالة السلطان</h5>
            <p class="addres">شمال غزة</p>
            <div class="offer-lounge1-details">
              <a href="" class="details">التفاصيل</a>
              <p class="pries">100/ليلة</p>
            </div>
          </div>
         
        </div>
        <div class="offer-lounge2">
          <img src="/img/صورة صالة 1.jpg" alt="">
          <div class="offer-lounge2-per">
            <h5>صالة العبد</h5>
            <p class="addres">جنوب غزة</p>
            <div class="offer-lounge2-details">
              <a href="" class="details">التفاصيل</a>
              <p class="pries">150/ليلة</p>
            </div>
          </div>
        </div>
        <div class="offer-lounge3">
          <img src="/img/صورة صالة 1.jpg" alt="">
          <div class="offer-lounge3-per">
            <h5>صالة الوحش</h5>
            <p class="addres">شرق غزة</p>
            <div class="offer-lounge3-details">
              <a href="" class="details">التفاصيل</a>
              <p class="pries">50/ليلة</p>
            </div>
          </div>
        </div>
        <div class="offer-lounge4">
          <img src="/img/صورة صالة 1.jpg" alt="">
          <div class="offer-lounge4-per">
            <h5>صالة النور</h5>
            <p class="addres">غرب غزة</p>
            <div class="offer-lounge4-details">
              <a href="" class="details">التفاصيل</a>
              <p class="pries">200/ليلة</p>
            </div>
          </div>
          </div>
        </div>
  
  
      </div>
  
  
    <div class="sec3">
      <div class="per">
        <h1>شاليهات مميزة</h1>
        <a href="#">اعرض المزيد</a>
      </div>
  
      <div class="offer2">
        
        <div class="offer2-lounge1">
          <img src="/img/صورة شالية 1.jpg" alt="شاليه">
          <div class="offer2-lounge1-per">
            <h5>شاليه السلطان</h5>
            <p class="addres">شمال غزة</p>
            <div class="offer2-lounge1-details">
              <a href="" class="details">التفاصيل</a>
              <p class="pries">100/ليلة</p>
            </div>
          </div>
         
        </div>
        <div class="offer2-lounge2">
          <img src="/img/صورة شالية 1.jpg" alt="شاليه">
          <div class="offer2-lounge2-per">
            <h5>شاليه العبد</h5>
            <p class="addres">جنوب غزة</p>
            <div class="offer2-lounge2-details">
              <a href="" class="details">التفاصيل</a>
              <p class="pries">150/ليلة</p>
            </div>
          </div>
        </div>
        <div class="offer2-lounge3">
          <img src="/img/صورة شالية 1.jpg" alt="شاليه">
          <div class="offer-lounge3-per">
            <h5>شاليه الوحش</h5>
            <p class="addres">شرق غزة</p>
            <div class="offer2-lounge3-details">
              <a href="" class="details">التفاصيل</a>
              <p class="pries">50/ليلة</p>
            </div>
          </div>
        </div>
        <div class="offer2-lounge4">
          <img src="/img/صورة شالية 1.jpg" alt="شاليه">
          <div class="offer-lounge4-per">
            <h5>شاليه النور</h5>
            <p class="addres">غرب غزة</p>
            <div class="offer2-lounge4-details">
              <a href="" class="details">التفاصيل</a>
              <p class="pries">200/ليلة</p>
            </div>
          </div>
          </div>
        </div>
  
  
      </div>
  
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
  
      <div class="sec6">
        <div class="sec6-cont">
          <h1>انشئ موقعك الخاص</h1>
          <p>احصل على موقعك الإلكتروني بهويتك الخاصة</p>
          <a href="#">اطلب الخدمة الان
            <i class="fa-solid fa-arrow-left"></i>
          </a>
        </div>
        <div class="sec6-cont-img">
          <img src="/img/website.webp" alt="lap">
        </div>
      </div>
  
  
     </div>
  
  </div>

@endsection



@section('scripts')

@endsection








