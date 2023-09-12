
@extends('chalets.parent2')

@section('title' , 'Temp')


@section('styles')

@endsection



@section('content')


<div class="hero">
    <h3>شاليه صلاح</h3>
    <div class="form">
        <form action="">
            <input class="text" type="text" required   name="text" placeholder="ادخل رمز الامان من فضلك">
        </form>

            <div class="label">
            <label style="font-family: Traditional Arabic; font-size: 18pt; font-weight: bold; color: white"  class="label1">مشرف عام</label>
            <label style="font-family: Traditional Arabic; font-size: 18pt; font-weight: bold; color: #c0a375"  class="label2">مساعد مشرف</label>
            </div>
            
           <a href="http://127.0.0.1:8000/cms/admin/login"> <button class="button">تسجيل الدخول</button></a>
        </div>
 </div>
















 

@endsection



@section('scripts')

@endsection
