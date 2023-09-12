@extends('chalets.parent')

@section('title' , 'تواصل معنا')


@section('styles')

@endsection



@section('content')


    <!-- Page Content -->
    <div class="container">

      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3">Contact
        <small>Subheading</small>
      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="{{ route('chalets.home2') }}">Home</a>
        </li>
        <li class="breadcrumb-item active">Contact</li>
      </ol>

      <!-- Content Row -->
      <div class="row">
        <!-- Map Column -->
        <div class="col-lg-8 mb-4">
          <!-- Contact Form -->

          <h3>تواصل معنا </h3>
          <form name="sentMessage" id="contactForm" novalidate>
            <div class="control-group form-group">
              <div class="controls">
                <label>الاسم الكامل:</label>
                <input type="text" class="form-control" id="fullname" name="fullname" >
                <p class="help-block"></p>
              </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <label>رقم الجوال:</label>
                <input type="tel" class="form-control" id="mobile" name="mobile" data-validation-required-message="Please enter your phone number.">
              </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <label>البريد الالكتروني:</label>
                <input type="email" class="form-control" id="email" name="email" >
              </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <label>الرسالة:</label>
                <textarea rows="10" cols="100" class="form-control" id="message" name="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
              </div>
            </div>
            <div id="success"></div>
            <!-- For success/fail messages -->
            <button type="buuton" onclick=" performContact()" class="btn btn-primary" id="sendMessageButton">Send Message</button>
          </form>
        </div>
        <!-- Contact Details Column -->
        <div class="col-lg-4 mb-4">
          <h3>تفاصيل الاتصال</h3>
          <p>
            3481 Melrose Place
            <br>Beverly Hills, CA 90210
            <br>
          </p>
          <p>
            <abbr title="Phone">P</abbr>: (123) 456-7890
          </p>
          <p>
            <abbr title="Email">E</abbr>:
            <a href="mailto:name@example.com">name@example.com
            </a>
          </p>
          <p>
            <abbr title="Hours">H</abbr>: Monday - Friday: 9:00 AM to 5:00 PM
          </p>
        </div>
      </div>
      <!-- /.row -->



      <!-- /.row -->

    </div>
    <!-- /.container -->

@endsection



@section('scripts')

<script src="{{ asset('chalets/js/jqBootstrapValidation.js') }}"></script>
<script src="{{ asset('chalets/js/contact_me.js') }}"></script>
<script src="{{ asset('cms/js/crud.js') }}"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>



<script>
  function performContact(){
        let formData = new FormData();

        formData.append('fullname',document.getElementById('fullname').value);
        formData.append('mobile',document.getElementById('mobile').value);
        formData.append('email',document.getElementById('email').value);
        formData.append('message',document.getElementById('message').value);

        store('/home2/contact' , formData)


    }
</script>

@endsection
