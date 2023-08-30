@extends('cms.parent')

@section('title' , 'Change Password ')

@section('main_title' , 'Change Password')

@section('sub_title' , 'Change Password')


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
              <h3 class="card-title">Change Password</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form>
              <div class="card-body">
                <div class="row">

                    <div class="form-group col-md-6">
                        <label for="password">Password</label>
                  <input type="password" class="form-control" name="password" id="password" placeholder="Enter Password">
                </div>

                <div class="row">

                    <div class="form-group col-md-6">
                        <label for="new_password">New Password </label>
                  <input type="password" class="form-control" name="new_password" id="new_password" placeholder="Enter New Password ">
                </div>


                <div class="row">

                    <div class="form-group col-md-6">
                        <label for="new_password_confirmation">New Password Confirmation</label>
                  <input type="password" class="form-control" name="new_password_confirmation" id="new_password_confirmation" placeholder="Enter New Password Confirmation">
                </div>





              </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <button type="button" onclick=" updatePassword() " class="btn btn-primary">Change Password</button>

                {{-- <a href="{{route('categories.index')}}" type="submit" class="btn btn-info">Cancel</a> --}}

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
     function updatePassword(){
        let formData = new FormData();

        formData.append('password',document.getElementById('password').value);
        formData.append('new_password',document.getElementById('new_password').value);
        formData.append('new_password_confirmation',document.getElementById('new_password_confirmation').value);

        store('/cms/admin/update_password' , formData);
    }
</script>

@endsection

