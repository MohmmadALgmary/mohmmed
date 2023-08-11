@extends('cms.parent')

@section('title' , 'Index City')

@section('main_title' , 'Index City')

@section('sub_title' , 'index of City')


@section('styles')

@endsection

@section('content')

<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <a href="{{route('cities.create')}}" type="submit" class="btn btn-info">Add New City</a>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th style="width: 10px">id</th>
                <th>Name of City</th>
                <th>Street of City</th>
                <th>Country</th>

                <th>Setting</th>

              </tr>
            </thead>
            <tbody>

                @foreach ($cities as $city )
                <tr>
                    <td>{{$city->id  }}</td>
                    <td>{{ $city->name }}</td>
                    <td>{{ $city->street }}</td>
                    {{-- <td>{{ $city->country->name }}</td> --}}
                    <td><span class="badge bg-success"> {{$city->country->name}}</span></td>


                    <td>
                        <div class="btn-group">
                          <a href="{{route('cities.edit' , $city->id )}}" type="button" class="btn btn-info">edit</a>
                          <button type="button" onclick="performDestroy({{$city->id }} , this)" class="btn btn-danger">delete</button>
                          {{-- <button type="button" class="btn btn-success">show</button> --}}
                        </div>
                      </td>
                  </tr>
                @endforeach




            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
        {{ $cities->links() }}
      </div>
      <!-- /.card -->


      <!-- /.card -->
    </div>
    <!-- /.col -->

    <!-- /.col -->
</div>

      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

    @endsection

@section('scripts')

<script>
    function performDestroy(id , reference){

        confirmDestroy('/cms/admin/cities/'+id  ,reference );

    }

    </script>
@endsection
