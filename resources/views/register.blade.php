<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="logo.ico" type="image/x-icon">
    <title>كلية كير</title>
    <!-- Pages All Style Links-->
    <link href="/assets/scss/header.css" rel="stylesheet"> <!--header style -->
    <link href="/assets/scss/register.css" rel="stylesheet"> <!--pages style -->
    <link href="/assets/scss/footer.css" rel="stylesheet"> <!--footer style -->
</head>
    <body>
        @extends('layouts.app')

        @section('content')
        <section class="page-intro">
            <div class="info">
                <h2>انضم الان, لتبدأ رحلة علاجك بكل سهولة</h2>
            </div>
        </section>

            <section class="register-form">
                <div class="container">
                    <div class="contact-form">
                        <h2 class="title"> <i class='bx bxs-user-plus mt-3'></i>
                        انشاء حساب جديد</h2>
                        <form method="POST" action="{{ route('users.store') }}">
                            @csrf
                            <div class="row">
                                        <div class="col-md-6 box">
                                            <label>
                                            <span class="text-danger">*</span>
                                                الاسم الاول
                                            </label>
                                            <input type="text" placeholder="الاسم الاول" required name="name" value="{{ old('name') }}">
                                        </div>
                                        <div class="col-md-6 box">
                                            <label>
                                            <span class="text-danger">*</span>
                                                الاسم الأب
                                            </label>
                                            <input type="text" placeholder="الاسم الأخير" required name="l_name" value="{{ old('l_name') }}">
                                        </div>
                                        <div class="col-md-6 box">
                                            <label>
                                            <span class="text-danger">*</span>
                                                الاسم الجد
                                            </label>
                                            <input type="text" placeholder="الاسم الأخير" required name="g_name" value="{{ old('g_name') }}">
                                        </div>
                                        <div class="col-md-6 box">
                                            <label>
                                            <span class="text-danger">*</span>
                                                الاسم العائلة
                                            </label>
                                            <input type="text" placeholder="الاسم الأخير" required name="f_name" value="{{ old('f_name') }}">
                                        </div>
                                        <div class="col-md-6 box">
                                            <label>
                                            <span class="text-danger">*</span>
                                                رقم الهاتف
                                            </label>
                                            <input type="text" placeholder="رقم الهاتف" required name="phone" value="{{ old('phone') }}">
                                        </div>
                                        <div class="col-md-6 box">
                                           <label>
                                           <span class="text-danger">*</span>
                                            تاريخ الميلاد

                                           </label>
                                            <input type="date"  placeholder=" تاريخ الميلاد" required name="dob" value="{{ old('dob') }}">
                                        </div>
                                        <div class="col-md-6 box">
                                            <label>
                                            <span class="text-danger">*</span>
                                                 الايميل
                                            </label>
                                            <input type="text" placeholder="الايميل " required name="email" value="{{ old('email') }}">
                                        </div>
                                        <div class="col-md-6 box">
                                            <label>
                                            <span class="text-danger">*</span>
                                                رقم الهوية
                                            </label>
                                            <input type="text" placeholder=" رقم الهوية" required name="id_number" value="{{ old('id_number') }}">
                                        </div>
                                        <div class="col-md-6 box">
                                            <label>
                                            <span class="text-danger">*</span>
                                                كلمة المرور
                                            </label>
                                            <input type="text" placeholder=" كلمة المرور" required name="password">
                                        </div>
                                        <div class="col-md-6 box">
                                            <label>
                                            <span class="text-danger">*</span>
                                               تاكيد كلمة المرور
                                            </label>
                                            <input type="text" placeholder="تاكيد كلمة المرور " required name="con_password">
                                        </div>
                                        <div class="msg-error mt-2 d-flex algin-item-end text-danger">
                                            @if ($errors->any())
                                            <div class="msg-error mt-2 d-flex algin-item-end text-danger">
                                                <i class='bx bxs-error-circle mx-1 mt-1'></i>
                                                <ul>
                                                    @foreach ($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif                                        </div>
                                        <div class="col-md-12 box">
                                            <button type="submit"> انشاء حساب</button>
                                        </div>
                                        <p> لديك حساب قم <a href="{{ auth()->check() ? '#' : '/login' }}"> الدخول الى حسابك</a></p>
                                    </div>
                                </form>
                            </div>
                </div>
            </section>

        @endsection
    </body>
</html>
