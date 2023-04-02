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
    <link href="/assets/scss/profile.css" rel="stylesheet"> <!--pages style -->
    <link href="/assets/scss/footer.css" rel="stylesheet"> <!--footer style -->
</head>
    <body>
        @extends('layouts.app')

        @section('content')
        <section class="page-intro">
            <div class="info">
                <h2>صفحة المريض</h2>
                <a href="#"> <i class='bx bx-home'></i> الرئيسية</a>
            </div>
        </section>

        <section class="profile-info">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 bg-danger">
                        <div class="image">
                        <img src="assets/img/user.png" alt="service-img">
                        </div>
                    </div>
                    <div class="col-md-9 bg-info">
                        <div class="info">
                            <h2> ماريانا ربحي احمد الغافي</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @endsection
    </body>
</html>