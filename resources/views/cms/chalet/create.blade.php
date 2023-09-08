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

                <div class="form-group">
                    <label>City</label>
                    <select class="form-control select2" id="city_id" name="city_id"  style="width: 100%;">
                      @foreach ($cities as $city)
                      <option value="{{ $city->id }}">{{ $city->name }}</option>

                      @endforeach

                    </select>
                  </div>

                  <div class="form-group">
                    <label>Country NAme</label>
                    <select class="form-control select2" id="country_id" name="country_id"  style="width: 100%;">
                      @foreach ($countries as $country)
                      <option value="{{ $country->id }}">{{ $country->name }}</option>

                      @endforeach

                    </select>
                  </div>
  </div>
                <div class="row">

                    <div class="form-group col-md-6">
                        <label for="title">الاسم</label>
                  <input type="text" class="form-control" name="title" id="title" placeholder="Enter title of Chalet">
                </div>


                <div class="form-group col-md-6">
                  <label for="description">عنوان قصير</label>
            <input type="text" class="form-control" name="description" id="description" placeholder="Enter short description of Chalet">
          </div>

            </div>
            <div class="row">

            <div class="form-group col-md-12">
              <label for="image"> اضافة الصور</label>
        <input type="file" class="form-control" name="image" id="image" multiple=4 placeholder="اضف صور ">
      </div>

        </div>


        <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                  <label for="description2"> المعلومات العامة</label>
                      <textarea class="form-control" style="resize: none;" id="description2" name="description2" rows="4"
                      placeholder="المعلومات العامة " cols="50"></textarea>
              </div>
          </div>
        </div>
        <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                  <label for="description3"> المواصفات التفصيلية</label>
                      <textarea class="form-control" style="resize: none;" id="description3" name="description3" rows="4"
                      placeholder="المواصفات التفصيلية " cols="1000"></textarea>
              </div>
          </div>
        </div>
        <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                  <label for="description4"> المرافق والمحتويات</label>
                      <textarea class="form-control" style="resize: none;" id="description4" name="description4" rows="4"
                      placeholder="المرافق والمحتويات " cols="50"></textarea>
              </div>
          </div>
        </div>
        <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                  <label for="description5"> المميزات</label>
                      <textarea class="form-control" style="resize: none;" id="description5" name="description5" rows="4"
                      placeholder="المميزات " cols="50"></textarea>
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
        formData.append('description2',document.getElementById('description2').value);
        formData.append('description3',document.getElementById('description3').value);
        formData.append('description4',document.getElementById('description4').value);
        formData.append('description5',document.getElementById('description5').value);
        formData.append('city_id',document.getElementById('city_id').value );
        formData.append('country_id',document.getElementById('country_id').value );

        formData.append('image',document.getElementById('image').files[0]);

        store('/cms/admin/chalets' , formData);
    }
</script>

@endsection
