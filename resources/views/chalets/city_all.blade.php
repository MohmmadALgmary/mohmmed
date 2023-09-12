@extends('chalets.parent')

@section('title' , 'city_all')


@section('styles')
<link rel="stylesheet" href="{{asset('chalets/css/style11.css')}}">
@endsection



@section('content')







<div class="select-outer-container">
  
<section class="1">


  <a id="bu_show" class="myButton99" onclick="myFunction()">اظهار خيارات البحث</a>


<!-- بداية الخلفية المتحركة -->
<header >
 <video  playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop" __idm_id__="3055617" jm_neat="1999094785">
    <source src="{{ asset('chalets/img/خلفية فيديو متحركة للمونتاج ,, حصرية وبجودة عالية 4.mp4') }}" type="video/mp4">

  </video>


<div class="container h-100 table-dark">
<div class="d-flex h-100 text-center align-items-center">
<div class="w-100 text-white">

<!-- فاصل -->





<form action="https://alhgz.com/search.php" method="post" autocomplete="off" id="search_main" name="search_main">


<div class="main_banrs mWrap mIni000 " style="position: relative; overflow: hidden; max-width: 100%; height: auto; width: auto; min-height:100%;"><div class="mMove" style="position: absolute; inset: auto auto auto 715.059px; float: left; white-space: nowrap;">
<div class="mMove clone cloneBefore" style="position: absolute; inset: 0px auto auto -100%; float: left; white-space: nowrap; width: 100%; height: 100%; opacity: 1;">
</div><div class="mMove clone cloneAfter" style="position: absolute; inset: 0px auto auto 100%; float: left; white-space: nowrap; width: 100%; height: 100%; opacity: 1;">


</div>
</div>

</div>




 <!-- multiple -->
 <select class="form-select mt-5 mb-5" aria-label="Default select example">
    <option selected> >>اختر المدينة<< </option>
    <option value="1">غزة</option>
    <option value="2">الوسطى</option>
    <option value="3">دير البلح</option>
    <option value="3">خانيونس </option>
    <option value="3">رفح </option>
    <option value="3">الشمال </option>
  </select>


   <div class="inpot">
    <input type="text" size="2" name="f_date" placeholder="تاريخ الوصول" id="fromDate" style="text-align:center" class="input-res hasDatepicker" value="" required=""> |
    <input type="text" size="2" name="l_date" placeholder="تاريخ المغادرة" id="toDate" style="text-align:center" class="input-res hasDatepicker" value="" required=""><p></p>

   </div>

<div id="bu_show_new_search ">
<button type="submit" onclick="fun_more()" class="myButton" id="fun_more_button"> &gt;&gt;&gt;&gt; ابحث &lt;&lt;&lt;&lt; </button>
<!-- ::: <button onclick="myFunction()" class="myButton3"> خيارات متقدمة.. </button> -->
</div>

<div id="type_need">
<input type="hidden" name="type_need_fild" value="">
</div>


<div style="display:none" id="myDIV">


<!-- main_form -->





<div class="container">
<div class="section">



<!--
<button type="submit" class="myButton" id="fun_more_button" onclick="fun_more1();">&gt;&gt;&gt; ابحث &lt;&lt;&lt;&lt; </button>

  -->

</div>
</div>
</div>
</form></div>
</div></div></div></header>


</section></section></div>

   <!-- نهاية خيارات المواصفات والمميزات -->


  </form>
</div>


<div class="container">
<div class="row">


            <!-- f dmg -->

<section class="link text-center">
     <div class="linkk mb-5">
       <a href="{{ route('chalets.contact') }}" class="myButton2">اضف مشروعك   !! .. وزد ارباحك</a>

     </div>

              <div class="container_start">

<div class="thumbex_start">
    <div class="thumbnail_start">
        <a href="{{ route('chalets.all_chalets', ['id' => 1]) }}"><img src="https://www.alhgz.com/images/IMG131.jpg"> <span>غزة</span></a></div>

    
    </div>


    <div class="thumbex_start">
        <div class="thumbnail_start">
            <a href="{{ route('chalets.all_chalets', ['id' => 1]) }}">
                <img src="https://www.alhgz.com/images/zulfi.jpg">
                <span>رفح</span>
            </a>
        </div>
    </div>
    


    <div class="thumbex_start">
        <div class="thumbnail_start">
            <a href="{{ route('chalets.all_chalets', ['id' => 1]) }}">
                <img src="https://www.alhgz.com/images/-3.jpg">
                <span>الشمال</span>
            </a>
        </div>
    </div>
    


    <div class="thumbex_start">
        <div class="thumbnail_start">
            <a href="{{ route('chalets.all_chalets', ['id' => 1]) }}">
                <img src="https://www.alhgz.com/images/IMG-20200116-WA0009.jpg">
                <span>خانيونس</span>
            </a>
        </div>
    </div>
    


    <div class="thumbex_start">
        <div class="thumbnail_start">
            <a href="{{ route('chalets.all_chalets', ['id' => 1]) }}">
                <img src="https://www.alhgz.com/images/onaizah.jpeg">
                <span>الوسطى</span>
            </a>
        </div>
    </div>
    

    <div class="thumbex_start">
        <div class="thumbnail_start">
            <a href="{{ route('chalets.all_chalets', ['id' => 1]) }}">
                <img src="https://www.alhgz.com/images/image.jpeg">
                <span>الجنوب</span>
            </a>
        </div>
    </div>
    



</div>
<!-- partial -->

           <br>

             <br>
             </section>


           <!-- dmg foter start -->

             </div>
              </div>
              <!-- dmg foter finsh -->


          </div>
      </div>
  </div>
</div>
</div>




<section>


@endsection



@section('scripts')
<script src="{{ asset('chalets/bootstrap-5.2.3-dist/js/js11.js') }}"></script>
<script src="https:ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="{{ asset('chalets/s7.addthis.com/js/300/addthis_widget.js#pubid=ra-587e5cc0949e51d7') }}"></script>
<script src="https:cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script><script src="./script.js"></script>

@endsection

<body>




