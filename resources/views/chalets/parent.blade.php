<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('chalets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('chalets/bootstrap-5.2.3-dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.4.2/css/all.css">
    @yield('styles')
    <title>صالات شاليهات | @yield('title')</title>
  

</head>
<body>








  <div class="header-top fixed-top">
    <div class="logo"><p>راحتك في الحجز الان</p></div>
    <div class="nav">
      <a href="{{ route('chalets.home2') }}">الرئيسية</a>
      @foreach($categories as $category)
      <a href="#">{{ $category->name }}</a>

      @endforeach
    
      <a href="#">تواصل معنا</a>
      <a href="#">ابحث</a>
    </div>
    <div class="header-log">
      <a href="#" class="log">تسجيل الدخول</a>
      <a href="#" class="login">سجل الان</a>
    </div>
   </div>

   
</div>

@yield('content')

    <footer>
        <div class="logo-footer">
          <h2>راحتك في الحجز الان</h2>
        </div>
            <div class="link-fast">
              <h5>روابط سريعة</h5>
                <a href="#">ابحث عن استراحة</a>
                <a href="#" >تسجيل الدخول</a>
                <a href="#">تواصل معنا</a>
          </div>
          
          <div class="contact-footer">
            <h5>معلوماتي</h5>
            <a href="#" class="contact-footer1">من نحن</a>
            <a href="#" class="contact-footer2">أسئلة شائعة</a>
            <a href="#" class="contact-footer3">شروط الاستخدام</a>
          </div>
          <div class="serve-footer">
            <h5>الخدمات</h5>
            <a href="#" class="serve-footer1">أضف استراحتك</a>
            <a href="#" class="serve-footer2">انشئ موقعك الخاص</a>
          </div>
      
    </footer>

  




    <script src="{{asset('chalets/bootstrap-5.2.3-dist/js/bootstrap.min.js')}}"></script>
    @yield('scripts')

</body>
</html>