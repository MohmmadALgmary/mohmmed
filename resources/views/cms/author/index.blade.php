@extends('cms.parent')

@section('title' , 'Index Authors')

@section('main_title' , 'Index Authors')

@section('sub_title' , 'index of authors')


@section('styles')

@endsection

@section('content')

{{-- <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Responsive Hover Table</h3>

          <div class="card-tools">
            <div class="input-group input-group-sm" style="width: 150px;">
              <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

              <div class="input-group-append">
                <button type="submit" class="btn btn-default">
                  <i class="fas fa-search"></i>
                </button>
              </div>
            </div>
          </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0">
          <table class="table table-hover text-nowrap">
            <thead>
              <tr>
                <th>ID</th>
                <th>User</th>
                <th>Date</th>
                <th>Status</th>
                <th>Reason</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>183</td>
                <td>John Doe</td>
                <td>11-7-2014</td>
                <td><span class="tag tag-success">Approved</span></td>
                <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
              </tr>
              <tr>
                <td>219</td>
                <td>Alexander Pierce</td>
                <td>11-7-2014</td>
                <td><span class="tag tag-warning">Pending</span></td>
                <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
              </tr>
              <tr>
                <td>657</td>
                <td>Bob Doe</td>
                <td>11-7-2014</td>
                <td><span class="tag tag-primary">Approved</span></td>
                <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
              </tr>
              <tr>
                <td>175</td>
                <td>Mike Doe</td>
                <td>11-7-2014</td>
                <td><span class="tag tag-danger">Denied</span></td>
                <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
              </tr>
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
  </div>

@endsection --}}


<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <a href="{{route('authors.create')}}" type="submit" class="btn btn-info">Add New authors</a>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th style="width: 10px">id</th>

                <th>Image</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Gender</th>
                <th>Status</th>
                <th>mobile</th>
                <th>Add Articles</th>


                <th>Setting</th>

              </tr>
            </thead>
            <tbody>

                @foreach ($authors as $author )
                <tr>
                    <td>{{$author->id  }}</td>
                    <td>
                        <img class="img-circle img-bordered-sm" src="{{asset('storage/images/author/'.$author->image)}}" width="50" height="50" alt="User Image">
                    </td>
                    <td>{{ $author->user->first_name ?? ""}}</td>
                    <td>{{ $author->user->last_name ?? ""}}</td>
                    <td>{{ $author->email }}</td>
                    <td>{{ $author->user->gender ?? ""}}</td>
                    <td>{{ $author->user->status ?? ""}}</td>
                    <td>{{ $author->user->mobile ?? ""}}</td>
                    {{-- <td>{{ $authors->user ? $authors->user->mobile : "" }}</td> --}}

                    {{-- <td>{{ $authors->country->name }}</td> --}}

                    <td><a href="{{route('indexArticle',['id'=>$author->id])}}"
                        class="btn btn-info">({{ $author->articles_count }})
                        article/s</a>
                    </td>
                    <td>
                        <div class="btn-group">
                          <a href="{{route('authors.edit' , $author->id )}}" type="button" class="btn btn-info">edit</a>
                          <button type="button" onclick="performDestroy({{$author->id }} , this)" class="btn btn-danger">delete</button>
                          {{-- <button type="button" class="btn btn-success">show</button> --}}
                        </div>
                      </td>
                  </tr>
                @endforeach




            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
        {{ $authors->links() }}
      </div>
      <!-- /.card -->


      <!-- /.card -->
    </div>
    <!-- /.col -->

    <!-- /.col -->

    @endsection

@section('scripts')

<script>
    function performDestroy(id , reference){

        confirmDestroy('/cms/admin/authors/'+id  ,reference );

    }

    </script>
@endsection
