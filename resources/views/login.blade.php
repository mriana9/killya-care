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
                <h2> اهلا بك </h2>
            </div>
        </section>
        <section class="register-form">
            <div class="container">
                <div class="contact-form">
                    @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                    @endif
                    <form method="POST" action="{{ route('login.submit') }}">
                       @csrf
                        <div class="row">
                                    <div class="col-md-6 box">
                                        <label>
                                        <span class="text-danger">*</span>
                                             الايميل
                                        </label>
                                        <input type="text" placeholder="الايميل  " required name="email">
                                    </div>
                                    <div class="col-md-6 box">
                                        <label>
                                        <span class="text-danger">*</span>
                                            كلمة المرور
                                        </label>
                                        <input type="text" placeholder=" كلمة المرور" required name="password">
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
                                    @endif
                                    </div>
                                    <div class="col-md-12 box">
                                        <button type="submit"> تسجيل دخول</button>
                                    </div>

                                    <p>ليس لديك حساب قم <a href="#">بانشاء حساب جديد</a></p>
                                </div>
                            </form>
                        </div>
            </div>
        </section>
        @endsection
    </body>
</html>
