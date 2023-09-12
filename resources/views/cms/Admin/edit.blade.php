@extends('cms.parent')

@section('title' , 'Edit Admin')

@section('main_title' , 'Edit Admin')

@section('sub_title' , 'Edit Admin')


@section('styles')

@endsection

@section('content')

<section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Edit Data of Admin</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form>

                <div class="card-body">
                    <div class="row">

                    <div class="col-md-6">
                        <div class="form-group">
                          <label>City</label>
                          <select class="form-control select2" id="city_id" name="city_id"  style="width: 100%;">
                            @foreach ($cities as $city)
                            <option value="{{ $city->id }}">{{ $city->name }}</option>

                            @endforeach

                          </select>
                        </div>
                        <!-- /.form-group -->

                        <!-- /.form-group -->
                      </div>

                      <div class="col-md-6">
                         <div class="form-group">
                          <label>Role NAme</label>
                          <select class="form-control select2" id="role_id" name="role_id"  style="width: 100%;">
                            @foreach ($roles as $role)
                            <option value="{{ $role->id }}">{{ $role->name }}</option>

                            @endforeach

                          </select>
                        </div>
                        <!-- /.form-group -->

                        <!-- /.form-group -->
                      </div>
                    </div>

                      <div class="row">

                      <div class="form-group col-md-6">
                        <label for="first_name">First Name of Admin</label>
                      <input type="text" class="form-control" name="first_name" id="first_name" placeholder="Enter Name of Admin">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="last_name">Last Name of Admin</label>
                      <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Enter Name of Admin">
                    </div>
                    </div>

                    <div class="row">

                        <div class="form-group col-md-6">
                          <label for="email">Email of Admin</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="Enter Name of Admin">
                      </div>
                      <div class="form-group col-md-6">
                          <label for="password">Password</label>
                        <input type="password" class="form-control" name="password" id="password" placeholder="Enter Name of Admin">
                      </div>
                      </div>
                    <div class="row">

                        <div class="form-group col-md-6">
                          <label for="mobile">Mobile of Admin</label>
                        <input type="text" class="form-control" name="mobile" id="mobile" placeholder="Enter Name of Admin">
                      </div>
                      <div class="form-group col-md-6">
                          <label for="address"> Address of Admin</label>
                        <input type="text" class="form-control" name="address" id="address" placeholder="Enter Name of Admin">
                      </div>
                      </div>

                      <div class="row">

                        <div class="form-group col-md-6">
                          <label for="date">Date of Bitrh</label>
                        <input type="date" class="form-control" name="date" id="date" placeholder="Enter Name of Admin">
                      </div>
                      <div class="form-group col-md-6">
                          <label for="image"> Choose File</label>
                        <input type="file" class="form-control" name="image" id="image" placeholder="Enter Name of Admin">
                      </div>
                    </div>

                    <div class="row">

                    <div class="form-group col-md-6">
                        <label for="gender">Gender</label>
                        <select name="gender" id="gender" class="form-select form-select-sm" style="width: 100%;">
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="status">Status</label>
                        <select name="status" id="status" class="form-select form-select-sm" style="width: 100%;">
                            <option value="Active">Active</option>
                            <option value="Inactive">In Active</option>
                        </select>
                    </div>

                </div>

            </div>

              </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <button type="button" onclick=" performUpdate() " class="btn btn-primary">Update</button>

                <a href="{{route('admins.index')}}" type="submit" class="btn btn-info">Cancel</a>

              </div>
            </form>
          </div>
          <!-- /.card -->


        </div>

        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>


@endsection


@section('scripts')

<script>
     function performUpdate(){
        let formData = new FormData();

        formData.append('first_name',document.getElementById('first_name').value );
        formData.append('last_name',document.getElementById('last_name').value );
        formData.append('mobile',document.getElementById('mobile').value );
        formData.append('address',document.getElementById('address').value );
        formData.append('date',document.getElementById('date').value );
        formData.append('gender',document.getElementById('gender').value );
        formData.append('status',document.getElementById('status').value );
        formData.append('email',document.getElementById('email').value );
        // formData.append('password',document.getElementById('password').value );
        formData.append('city_id',document.getElementById('city_id').value );
        formData.append('image',document.getElementById('image').files[0] );


        storeRoute('/cms/admin/update_profile'  , formData);
    }
</script>

@endsection
