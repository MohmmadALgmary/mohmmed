@extends('cms.parent')

@section('title' , 'Create Category')

@section('main_title' , 'Create Category')

@section('sub_title' , 'Create Category')


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
              <h3 class="card-title">Add Data of Category</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form>
              <div class="card-body">
                <div class="row">

                    <div class="form-group col-md-6">
                        <label for="name">Name of Category</label>
                  <input type="text" class="form-control" name="name" id="name" placeholder="Enter Name of Category">
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
                          <label for="description"> Description of Category</label>
                              <textarea class="form-control" style="resize: none;" id="description" name="description" rows="4"
                              placeholder="Enter Description of Category " cols="50"></textarea>
                      </div>
                  </div>
                </div>



              </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <button type="button" onclick=" performStore() " class="btn btn-primary">Store</button>

                <a href="{{route('categories.index')}}" type="submit" class="btn btn-info">Cancel</a>

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

        store('/cms/admin/categories' , formData);
    }
</script>

@endsection
