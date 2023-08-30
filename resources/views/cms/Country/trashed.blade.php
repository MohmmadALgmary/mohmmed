@extends('cms.parent')

@section('title' , 'Trashed Country')

@section('main_title' , 'Trashed Country')

@section('sub_title' , 'Trashed of country')


@section('styles')

@endsection

@section('content')

<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          {{-- <a href="{{route('countries.create')}}" type="submit" class="btn btn-info">Add New Country</a> --}}

          {{-- <form action="" method="get" style="margin-bottom:2%;">
            <div class="row">
                <div class="input-icon col-md-2">
                    <input type="text" class="form-control" placeholder="Search By Name"
                       name='name' @if( request()->name) value={{request()->name}} @endif/>
                      <span>
                          <i class="flaticon2-search-1 text-muted"></i>
                      </span>
                    </div>

                    <div class="input-icon col-md-2">
                        <input type="text" class="form-control" placeholder="Search By Code"
                           name='code' @if( request()->code) value={{request()->code}} @endif/>
                          <span>
                              <i class="flaticon2-search-1 text-muted"></i>
                          </span>
                        </div>

                    <div class="input-icon col-md-2">
                    <input type="date" class="form-control" placeholder="Search By Date"
                       name='created_at' @if( request()->created_at) value={{request()->created_at}} @endif/>
                      <span>
                          <i class="flaticon2-search-1 text-muted"></i>
                      </span>
                    </div>


            <div class="col-md-4">
                  <button class="btn btn-success btn-md" type="submit"> Filter</button>
                  <a href="{{route('countries.Trashed')}}"  class="btn btn-danger">End Filter</a>
                  {{-- @can('Create-City') --}}

                  <a href="{{route('countries.create')}}"><button type="button" class="btn btn-md btn-primary"> Add New Country </button></a>
                  {{-- @endcan --}}
            </div>

                 </div>
        {{-- </form>  --}}
        </div>


              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                    <div class="card-body">
                        <table class="table table-bordered">
                          <thead>
                            <tr>
                              <th style="width: 10px">id</th>
                              <th>Name of Country</th>
                              <th>Code of Country</th>
                              {{-- <th>Number of City</th> --}}

                              <th>Setting</th>

                            </tr>
                          </thead>
                          <tbody>

                            @foreach ($countries as $country )
                            <tr>
                                <td>{{$country->id  }}</td>
                                <td>{{ $country->name }}</td>
                                <td>{{ $country->code }}</td>
                                {{-- <td>{{ $country->cities_count }}</td> --}}

                                <td><span class="badge bg-info"> {{$country->cities_count}} - Cities</span></td>

                                <td>
                                    <div class="btn-group">
                                      <a href="{{route('countries.edit' , $country->id )}}" type="button" class="btn btn-info">Restore</a>
                                      <button type="button" onclick="performDestroy({{$country->id }} , this)" class="btn btn-danger">Delete</button>
                                      {{-- <button type="button" class="btn btn-success">show</button> --}}
                                    </div>
                                  </td>
                              </tr>
                            @endforeach

                        </tbody>
                </table>
              </div>
              <!-- /.card-body -->
              {{ $countries->links() }}

            </div>
            <!-- /.card -->


            <!-- /.card -->
          </div>
          <!-- /.col -->

      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

    @endsection

@section('scripts')

<script>
    function performDestroy(id , reference){

        confirmDestroy('/cms/admin/countries/'+id  ,reference );

    }

    </script>
@endsection
