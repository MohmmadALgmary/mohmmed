@extends('chalets.parent')

@section('title' , 'الشليهات')


@section('styles')
<link rel="stylesheet" href="{{asset('chalets/css/style2.css')}}">
<link rel="stylesheet" href="{{asset('chalets/bootstrap-5.2.3-dist/css/bootstrap.min.css')}}">
@endsection



@section('content')
<!-- Page Content -->
<div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3">Portfolio 1
      <small>Subheading</small>
    </h1>

    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="{{ route('chalets.home2') }}">الرئيسية</a>
      </li>
      <li class="breadcrumb-item active">Portfolio 1</li>
    </ol>

    <!-- news title One -->
            
        </div>
        @foreach($articles as $article)
        <div class="row">
          <div class="col-md-7">
            <a href="newsdetailes.html">
              <img class="img-fluid full-width h-200 rounded mb-3 mb-md-0" src="{{asset('storage/images/article/'.$article->image)}}" alt="">
            </a>
          </div>
          <div class="col-md-5">
            <h3>{{ $article->title }}</h3>
            <p>{{$article->short_description}}</p>
            <a class="btn btn-primary" href="{{ route('chalets.chalet' , $article->id) }}">التفاصيل
              <span class="glyphicon glyphicon-chevron-right"></span>
            </a>
                  </div>
</div>
        <!-- /.row -->
        <hr>
    </div>

        @endforeach
  
        {{$articles->links()}}   
          
            
     

        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
@endsection



@section('scripts')
<script src="{{asset('chalets/bootstrap-5.2.3-dist/js/bootstrap.min.js')}}"></script>

@endsection
<body>
   