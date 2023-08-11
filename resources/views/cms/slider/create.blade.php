@extends('cms.parent')

@section('title' , 'Create Slider')

@section('main_title' , 'Create Slider')

@section('sub_title' , 'Create Slider')


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
              <h3 class="card-title">Add Data of Slider</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form>
              <div class="card-body">


                <div class="row">

                    <div class="form-group col-md-6">
                        <label for="title">Name of Slider</label>
                  <input type="text" class="form-control" name="title" id="title" placeholder="Enter title of Slider">
                </div>

              
                <div class="form-group col-md-6">
                  <label for="description">short description of Slider</label>
            <input type="text" class="form-control" name="description" id="description" placeholder="Enter short description of Slider">
          </div>

            </div>
            <div class="row">

            <div class="form-group col-md-12">
              <label for="image">Choose Image</label>
        <input type="file" class="form-control" name="image" id="image" placeholder="Enter short description of Slider">
      </div>

        </div>

        
              </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <button type="button" onclick=" performStore() " class="btn btn-primary">Store</button>

                <a href="{{route('sliders.index')}}" type="submit" class="btn btn-info">Cancel</a>

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
     function performStore(){
        let formData = new FormData();

        formData.append('title',document.getElementById('title').value);
        formData.append('description',document.getElementById('description').value);
        formData.append('image',document.getElementById('image').files[0]);

        store('/cms/admin/sliders' , formData);
    }
</script>

@endsection
