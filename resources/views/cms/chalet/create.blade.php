@extends('cms.parent')

@section('title' , 'Create Chalet')

@section('main_title' , 'Create Chalet')

@section('sub_title' , 'Create Chalet')


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
              <h3 class="card-title">Add Data of Chalet</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form>
              <div class="card-body">


                <div class="row">

                    <div class="form-group col-md-6">
                        <label for="title">Name of Chalet</label>
                  <input type="text" class="form-control" name="title" id="title" placeholder="Enter title of Chalet">
                </div>


                <div class="form-group col-md-6">
                  <label for="description">short description of Chalet</label>
            <input type="text" class="form-control" name="description" id="description" placeholder="Enter short description of Chalet">
          </div>

            </div>
            <div class="row">

            <div class="form-group col-md-12">
              <label for="image">Choose Image</label>
        <input type="file" class="form-control" name="image" id="image" multiple placeholder="Enter short description of Chalet">
      </div>

        </div>


        <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                  <label for="description2"> Description of Chalet</label>
                      <textarea class="form-control" style="resize: none;" id="description2" name="description2" rows="4"
                      placeholder="Enter Description of Category " cols="50"></textarea>
              </div>
          </div>
        </div>

              </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <button type="button" onclick=" performStore() " class="btn btn-primary">Store</button>

                <a href="{{route('chalets.index')}}" type="submit" class="btn btn-info">Cancel</a>

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
        formData.append('description',document.getElementById('description2').value);

        formData.append('image',document.getElementById('image').files[0]);

        store('/cms/admin/chalets' , formData);
    }
</script>

@endsection
