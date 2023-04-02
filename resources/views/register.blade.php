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
                    <form>
                        <div class="row">
                                    <div class="col-md-6 box">
                                        <label>
                                        <span class="text-danger">*</span>
                                            الاسم الاول 
                                        </label>
                                        <input type="text" placeholder="الاسم الاول" require>
                                    </div>
                                    <div class="col-md-6 box">
                                        <label>
                                        <span class="text-danger">*</span>
                                            الاسم الأخير
                                        </label>
                                        <input type="text" placeholder="الاسم الأخير" require>
                                    </div>
                                    <div class="col-md-6 box">
                                        <label>
                                        <span class="text-danger">*</span>
                                            رقم الهاتف
                                        </label>
                                        <input type="text" placeholder="رقم الهاتف" require>
                                    </div>
                                    <div class="col-md-6 box">
                                       <label> 
                                       <span class="text-danger">*</span>
                                        تاريخ الميلاد 
                                    
                                       </label>
                                        <input type="date"  placeholder=" تاريخ الميلاد" require>
                                    </div>
                                    <div class="col-md-6 box">
                                        <label>
                                        <span class="text-danger">*</span>
                                             الايميل
                                        </label>
                                        <input type="text" placeholder="الايميل " require>
                                    </div>
                                    <div class="col-md-6 box">
                                        <label>
                                        <span class="text-danger">*</span>
                                            كلمة المرور 
                                        </label>
                                        <input type="text" placeholder=" كلمة المرور" require>
                                    </div>
                                    <div class="msg-error mt-2 d-flex algin-item-end text-danger">
                                        <i class='bx bxs-error-circle mx-1 mt-1'></i>
                                        رقم الهاتف مطلوب
                                    </div>
                                    <div class="col-md-12 box">
                                        <button type="submit"> انشاء حساب</button>
                                    </div>
                                    <p> لديك حساب قم <a href="#"> الدخول الى حسابك</a></p>
                                </div>
                            </form>
                        </div>
            </div>
        </section>
        @endsection
    </body>
</html>