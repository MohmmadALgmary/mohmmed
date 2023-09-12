@extends('cms.parent')

@section('title' , 'Index Admin')

@section('main_title' , 'Index Admin')

@section('sub_title' , 'index of Admin')


@section('styles')

@endsection

@section('content')



<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
        
          <a href="{{route('admins.index')}}" type="submit" class="btn btn-info">Go to Index</a>
          <a href="{{route('admins-restoreAll')}}" type="submit" class="btn btn-info">Restore All </a>

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
                <th>language</th>
                <th>language level</th>
                <th>City Name</th>


                <th>Setting</th>

              </tr>
            </thead>
            <tbody>

                @foreach ($admins as $admin )
                <tr>
                    <td>{{$admin->id  }}</td>
                    <td>
                      <img class="img-circle img-bordered-sm" src="{{asset('storage/images/admin/'.$admin->user->image)}}" width="50" height="50" alt="User Image">
                  </td>
                    <td>{{ $admin->user->first_name ?? ""}}</td>
                    <td>{{ $admin->user->last_name ?? ""}}</td>
                    <td>{{ $admin->email }}</td>
                    <td>{{ $admin->user->gender ?? ""}}</td>
                    <td>{{ $admin->user->status ?? ""}}</td>
                    <td>{{ $admin->languages->name ?? ""}}</td>
                    <td>{{ $admin->languages->level ?? ""}}</td>
                    {{-- <td>{{ $admin->user ? $admin->user->mobile : "" }}</td> --}}

                    {{-- <td>{{ $Admin->country->name }}</td> --}}
                    <td><span class="badge bg-success"> {{$admin->user->city->name ?? ""}}</span></td>


                    <td>
                        <div class="btn-group">
                          {{-- @can('Edit-Admin') --}}
                          {{-- <a href="{{route('admins.edit' , $admin->id )}}" type="button" class="btn btn-info">edit</a> --}}
                          {{-- @endcan --}}
                          {{-- @can('Delete-Admin') --}}
                          <button type="button" onclick="performDestroy({{$admin->id }} , this)" class="btn btn-danger">Restore</button>

                          <button type="button" onclick="performDestroy({{$admin->id }} , this)" class="btn btn-danger">delete</button>
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
        {{ $admins->links() }}
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

        confirmDestroy('/cms/admin/admins/'+id  ,reference );

    }

    </script>
@endsection
