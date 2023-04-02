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
                    <div class="col-md-3">
                        <div class="image">
                        <img src="assets/img/user.png" alt="service-img">
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="info">
                            <ul class="user-info">
                                <li>
                                    <div class="d-flex align-item-center justify-content-between">
                                        <div>
                                            <i class='bx bxs-user' ></i>
                                            الاسم:  
                                            <p>
                                                ماريانا ربحي احمد الغافي
                                            </p>
                                        </div>
                                        <div class="edit" id="edit1">
                                            <i class='bx bxs-edit-alt bx-flip-horizontal' ></i>
                                        </div>
                                    </div>
                                    <div class="edit-input">
                                            <input class="show-input" id="show-input1" type="text" placeholder=" تعديل الاسم ">
                                    </div>
                                </li>

                                <li>
                                    <div class="d-flex align-item-center justify-content-between">
                                        <div>
                                        <i class='bx bxs-phone bx-flip-horizontal' ></i>
                                        رقم الهاتف :
                                        <p>
                                            0591234567
                                        </p>
                                        </div>
                                        <div class="edit" id="edit2">
                                            <i class='bx bxs-edit-alt bx-flip-horizontal' ></i>
                                        </div>
                                    </div>
                                    <div class="edit-input">
                                            <input class="show-input" id="show-input2" type="text" placeholder=" تعديل الاسم ">
                                    </div>
                                </li>
                                
                                <li>
                                    <div class="d-flex align-item-center justify-content-between">
                                        <div>
                                        <i class='bx bxs-user-detail'></i>
                                        رقم الهوية :
                                    <p>
                                        404008799
                                    </p>
                                        </div>
                                        <div class="edit" id="edit3">
                                            <i class='bx bxs-edit-alt bx-flip-horizontal' ></i>
                                        </div>
                                    </div>
                                    <div class="edit-input">
                                            <input class="show-input" id="show-input3" type="text" placeholder=" تعديل الاسم ">
                                    </div>
                                </li>

                                <li>
                                    <div class="d-flex align-item-center justify-content-between">
                                        <div>
                                        <i class='bx bx-calendar' ></i>
                                        تاريخ الميلاد :
                                        <p>
                                            12/6/1980
                                        </p>
                                        </div>
                                        <div class="edit" id="edit4">
                                            <i class='bx bxs-edit-alt bx-flip-horizontal' ></i>
                                        </div>
                                    </div>
                                    <div class="edit-input">
                                            <input class="show-input" id="show-input4" type="text" placeholder=" تعديل الاسم ">
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @endsection
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script>
		$(document).ready(function() {
			$("#edit1").click(function() {
				$("#show-input1").toggle();
			});
            $("#edit2").click(function() {
				$("#show-input2").toggle();
			});
            $("#edit3").click(function() {
				$("#show-input3").toggle();
			});
            $("#edit4").click(function() {
				$("#show-input4").toggle();
			});
		});
	</script>
    </body>
</html>