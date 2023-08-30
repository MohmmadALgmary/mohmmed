@extends('cms.parent')

@section('title' , 'Index Language')

@section('main_title' , 'Index Language')

@section('sub_title' , 'index of Language')


@section('styles')

@endsection

@section('content')


<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          {{-- @can('Create-Language') --}}
          <a href="{{route('languages.create')}}" type="submit" class="btn btn-info">Add New Language</a>
          {{-- @endcan --}}
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th style="width: 10px">id</th>

                <th>name</th>

                <th>Setting</th>

              </tr>
            </thead>
            <tbody>

                @foreach ($languages as $language )
                <tr>
                    <td>{{$language->id  }}</td>
               
                    <td>{{ $language->name ?? ""}}</td>
                  
                    {{-- <td>{{ $Language->user ? $Language->user->mobile : "" }}</td> --}}

                    {{-- <td>{{ $Language->country->name }}</td> --}}

                    <td>
                        <div class="btn-group">
                          {{-- @can('Edit-Language') --}}
                          <a href="{{route('languages.edit' , $language->id )}}" type="button" class="btn btn-info">edit</a>
                          {{-- @endcan --}}
                          {{-- @can('Delete-language') --}}
                          <button type="button" onclick="performDestroy({{$language->id }} , this)" class="btn btn-danger">delete</button>
                          {{-- @endcan --}}
                          {{-- <button type="button" class="btn btn-success">show</button> --}}
                        </div>
                      </td>
                  </tr>
                @endforeach




            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
        {{ $languages->links() }}
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

        confirmDestroy('/cms/admin/languages/'+id  ,reference );

    }

    </script>
@endsection
