@extends('cms.parent')

@section('title' , 'Edit City')

@section('main_title' , 'Edit City')

@section('sub_title' , 'Edit City')


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
              <h3 class="card-title">Edit Data of City</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form>

              <div class="card-body">
                <div class="row">

                <div class="col-md-6">
                    <div class="form-group">
                      <label>Country Name</label>
                      <select class="form-control select2" id="country_id" name="country_id"  style="width: 100%;">
                       
                        {{-- <option selected> {{ $cities->country->name }} </option> --}}

                        @foreach ($countries as $country)
                        {{-- <option value="{{ $country->id }}">{{ $country->name }}</option> --}}
                      
                        <option @if ($country->id == $cities->country_id) selected @endif value="{{ $country->id }}">
                          {{ $country->name }}</option>
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
                  <input type="text" class="form-control" name="name" id="name" 
                  value="{{ $cities->name }}" placeholder="Enter Name of City">
                </div>
                <div class="form-group col-md-6">
                    <label for="street">Street of City</label>
                  <input type="text" class="form-control" name="street" id="street"
                  value="{{ $cities->street }}" placeholder="Enter Street of City">
                </div>
                </div>

              </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <button type="button" onclick=" performUpdate({{ $cities->id }}) " class="btn btn-primary">Update</button>

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
     function performUpdate(id){
        let formData = new FormData();

        formData.append('name',document.getElementById('name').value );
        formData.append('street',document.getElementById('street').value );
        formData.append('country_id',document.getElementById('country_id').value );

        storeRoute('/cms/admin/cities-update/'+id , formData);
    }
</script>

@endsection
