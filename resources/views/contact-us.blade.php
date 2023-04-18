<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="logo.ico" type="image/x-icon">
    <title>كلية كير |  تواصل معنا</title>
    <!-- Pages All Style Links-->
    <link href="/assets/scss/header.css" rel="stylesheet"> <!--header style -->
    <link href="/assets/scss/contact.css" rel="stylesheet"> <!--pages style -->
    <link href="/assets/scss/footer.css" rel="stylesheet"> <!--footer style -->
</head>
    <body>
        @extends('layouts.app')

        @section('content')
        <section class="page-intro">
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb info">
                <li class="breadcrumb-item">
                    <a href="{{'/' }}"> <i class='bx bx-home'></i> الرئيسية</a>
                </li>
                <li class="breadcrumb-item active mt-1" aria-current="page">  تواصل معنا</li>
            </ol>
            </nav>
        </section>

        <section class="contact-us">
            <div class="container">
            <div class="category">كلية كير</div>
            <h2 class="section-title">   كيف يمكننا مساعدتك تواصل معنا الان </h2>
            <form>
                <div class="row">
                    <div class="col-md-12 box">
                        <label>
                            <span class="text-danger">*</span>
                            الاسم الرباعي
                        </label>
                        <input type="text" required name="name" value="{{ old('name') }}">
                    </div>
                    <div class="col-md-12 box">
                        <label>
                            <span class="text-danger">*</span>
                            رقم الهاتف       
                        </label>
                        <input type="text" required name="l_name" value="{{ old('l_name') }}">
                    </div>
                    <div class="col-md-12 box">
                        <label>
                            <span class="text-danger">*</span>
                            الرسالة
                        </label>
                        <textarea placeholder="اكتب رسالتك هنا"></textarea>
                    </div>
                    <div class="col-md-12 box">
                        <button type="submit">  ارسال</button>
                    </div>
                </div>
            </form>
            </div>
        </section>
        @endsection

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    </body>
</html>