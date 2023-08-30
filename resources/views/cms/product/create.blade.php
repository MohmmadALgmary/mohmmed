@extends('cms.parent')

@section('title' , 'Create Product')

@section('main_title' , 'Create Product')

@section('sub_title' , 'Create Product')


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
              <h3 class="card-title">Add Data of Product</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form>
              <div class="card-body">
                <div class="row">

                    <div class="form-group col-md-6">
                        <label for="name">Name of Product</label>
                  <input type="text" class="form-control" name="name" id="name" placeholder="Enter Name of Product">
                </div>

                <div class="form-group col-md-6">
                    <label for="status">Status</label>
                    <select name="status" id="status" class="form-select form-select-sm" style="width: 100%;">

                        <option value="Active">Active</option>
                        <option value="Inactive">In Active</option>
                    </select>
                </div>
            </div>

                <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                          <label for="description"> Description of Product</label>
                              <textarea class="form-control" style="resize: none;" id="description" name="description" rows="4"
                              placeholder="Enter Description of Product " cols="50"></textarea>
                      </div>
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

              </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <button type="button" onclick=" performStore() " class="btn btn-primary">Store</button>

                <a href="{{route('products.index')}}" type="submit" class="btn btn-info">Cancel</a>

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

        formData.append('name',document.getElementById('name').value);
        formData.append('description',document.getElementById('description').value);
        formData.append('status',document.getElementById('status').value);
        formData.append('date',document.getElementById('date').value );
        formData.append('image',document.getElementById('image').files[0] );


        store('/cms/admin/products' , formData);
    }
</script>

@endsection
