@extends('cms.parent')
@section('title','Home Page')

@section('styles')
<style>
    a{
        color: black;
        font-weight: bold
    }

    a:hover{
        text-decoration: none;
    }
</style>

@endsection

@section('content')

<div class="container-fluid">
    <div class="row">


        <!-- col -->
        @php
        use App\Models\Slider;
        $count = Slider::count('id');
        @endphp

          <div class="col-12 col-sm-6 col-md-4">
            <div class="info-box mb-3">
              <a href="{{route('sliders.index')}}" class="info-box-icon bg-danger elevation-1"><i class="fa-solid fa-user-gear ml-2"></i></a>

              <div class="info-box-content">
                <a href="{{route('sliders.index')}}" class="info-box-text">Number of Sliders </a>
                <a href="{{route('sliders.index')}}" class="info-box-number">{{$count}}</a>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          <!-- col -->
          @php
        use App\Models\Author;
        $count = Author::count('id');
        @endphp

          <div class="col-12 col-sm-6 col-md-4">
            <div class="info-box mb-3">
              <a href="{{route('authors.index')}}" class="info-box-icon bg-success elevation-1"><i class="fas fa-user ml-2"></i></a>

              <div class="info-box-content">
                <a href="{{route('authors.index')}}" class="info-box-text">Number of Authors </a>
                <a href="{{route('authors.index')}}" class="info-box-number">{{$count}}</a>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          <!-- col -->
          @php
        use App\Models\Category;
        $serCount = Category::count('id');
        @endphp

          <div class="col-12 col-sm-6 col-md-4">
            <div class="info-box mb-3">
              <a href="{{route('categories.index')}}" class="info-box-icon bg-warning elevation-1"><i class="fa-solid fa-chalkboard-user ml-2"></i></a>

              <div class="info-box-content">
                <a href="{{route('categories.index')}}" class="info-box-text"> Number of Category</a>
                <a href="{{route('categories.index')}}" class="info-box-number">{{$serCount}}</a>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          <!-- col -->
          @php
        use App\Models\Article;
        $sparCount = Article::count('id');
        @endphp

          <div class="col-12 col-sm-6 col-md-4">
            <div class="info-box mb-3">
              <a href="{{route('articles.index')}}" class="info-box-icon bg-blue elevation-1"><i class="fa-solid fa-user-graduate ml-2"></i></a>

              <div class="info-box-content">
                <a href="{{route('articles.index')}}" class="info-box-text"> Number of Article</a>
                <a href="{{route('articles.index')}}" class="info-box-number">{{$sparCount}}</a>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          @php
          use App\Models\Country;
          $serCount = Country::count('id');
          @endphp
  
            <div class="col-12 col-sm-6 col-md-4">
              <div class="info-box mb-3">
                <a href="{{route('countries.index')}}" class="info-box-icon bg-warning elevation-1"><i class="fa-solid fa-chalkboard-user ml-2"></i></a>
  
                <div class="info-box-content">
                  <a href="{{route('countries.index')}}" class="info-box-text"> Number of Country</a>
                  <a href="{{route('countries.index')}}" class="info-box-number">{{$serCount}}</a>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <!-- /.col -->
   

     @php
        use App\Models\Admin;
        $count = Admin::count('id');
        @endphp

          <div class="col-12 col-sm-6 col-md-4">
            <div class="info-box mb-3">
              <a href="{{route('admins.index')}}" class="info-box-icon bg-blue elevation-1"><i class="fa-solid fa-user-graduate ml-2"></i></a>

              <div class="info-box-content">
                <a href="{{route('admins.index')}}" class="info-box-text"> Number of Admin</a>
                <a href="{{route('admins.index')}}" class="info-box-number">{{$count}}</a>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
    </div>
</div>

@endsection

@section('scripts')

@endsection
