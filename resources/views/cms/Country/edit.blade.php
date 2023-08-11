@extends('cms.parent')

@section('title' , 'Edit Country')

@section('main_title' , 'Edit Country')

@section('sub_title' , 'Edit Country')


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
              <h3 class="card-title">Edit Data of Country</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form>
              <div class="card-body">
                <div class="form-group">
                  <label for="name">Name of Country</label>
                  <input type="text" class="form-control" name="name" id="name"
                  value="{{ $countries->name }}" placeholder="Enter Name of Country">
                </div>
                <div class="form-group">
                  <label for="code">Code</label>
                  <input type="text" class="form-control" name="code" id="code"
                  value="{{$countries->code}}" placeholder="Enter Code of Country">
                </div>

              </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <button type="button" onclick="performUpdate({{ $countries->id }})" class="btn btn-primary">Update</button>
                <a href="{{route('countries.index')}}" type="submit" class="btn btn-info">Cancel</a>

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
    function performUpdate(id){
       let formData = new FormData();

       formData.append('name',document.getElementById('name').value);
       formData.append('code',document.getElementById('code').value);

       storeRoute('/cms/admin/countries-update/'+id , formData);
   }
</script>
@endsection
