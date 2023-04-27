<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="logo.ico" type="image/x-icon">
    <title>كلية كير |  نصائحنا</title>
    <!-- Pages All Style Links-->
    <link href="/assets/scss/header.css" rel="stylesheet"> <!--header style -->
    <link href="/assets/scss/not-found.css" rel="stylesheet"> <!--pages style -->
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
            </ol>
            </nav>
        </section>

        <section class="not-found">
            <h1>404</h1>
            <p>الصفحة غير موجودة</p>
            <div class="back-to-home">
                <a href="{{'/' }}" class="primarily-button"> العودة للصفحة الرئيسية</a>
            </div>
        </section>
        @endsection

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    </body>
</html>