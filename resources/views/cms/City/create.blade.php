@extends('cms.parent')

@section('title' , 'Create City')

@section('main_title' , 'Create City')

@section('sub_title' , 'Create City')


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
              <h3 class="card-title">Add Data of City</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form>

                <div class="card-body">
                    <div class="row">

                    <div class="col-md-6">
                        <div class="form-group">
                          <label>Country NAme</label>
                          <select class="form-control select2" id="country_id" name="country_id"  style="width: 100%;">
                            @foreach ($countries as $country)
                            <option value="{{ $country->id }}">{{ $country->name }}</option>

                            @endforeach

                          </select>
                        </div>
                        <!-- /.form-group -->

                        <!-- /.form-group -->
                      </div>
                    </div>

                      </div>
                      <div class="row">

                      <div class="form-group col-md-6">
                        <label for="name">Name of City</label>
                      <input type="text" class="form-control" name="name" id="name" placeholder="Enter Name of City">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="street">Street of City</label>
                      <input type="text" class="form-control" name="street" id="street" placeholder="Enter Street of City">
                    </div>
                    </div>

                  </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <button type="button" onclick=" performStore() " class="btn btn-primary">Store</button>

                <a href="{{route('cities.index')}}" type="submit" class="btn btn-info">Cancel</a>

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
        formData.append('street',document.getElementById('street').value);
        formData.append('country_id',document.getElementById('country_id').value );


        store('/cms/admin/cities' , formData);
    }
</script>

@endsection
