@extends('cms.parent')

@section('title' , 'Edit Language')

@section('main_title' , 'Edit Language')

@section('sub_title' , 'Edit Language')


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
              <h3 class="card-title">Edit Data of Language</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form>

              <div class="card-body">
                <div class="row">


                  <div class="form-group col-md-6">
                    <label for="first_name"> Name of Language</label>
                  <input type="text" value="{{$languages->name}}" class="form-control" name="name" id="name" placeholder="Enter Name of Language">
                </div>
           
                </div>

           
            </div>

              </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <button type="button" onclick=" performUpdate({{$languages->id}}) " class="btn btn-primary">Update</button>

                <a href="{{route('languages.index')}}" type="submit" class="btn btn-info">Cancel</a>

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

        formData.append('name',document.getElementById('name').value );
      
        storeRoute('/cms/admin/languages-update/'+id , formData);
   }
</script>

@endsection
