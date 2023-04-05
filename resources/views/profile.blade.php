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
                <div class="row">
                    <!-- <div class="col-md-3">
                        <div class="image">
                        <img src="assets/img/user.png" alt="service-img">
                        </div>
                    </div> -->
                    <div class="col-md-12">
                        <div class="info">
                        <div class="edit w-100 d-flex justify-content-end align-items-end">
                            <button class="btn btn-success save-btn"  id="edit2">حفظ</button>
                            <button class="btn btn-primary edit-btn" id="edit1">تعديل</button>
                        </div>
                        <form method="POST" action="{{ route('profile.update') }}">
                            @csrf

                            <ul class="user-info">
                                <li>
                                    <div class="d-flex justify-content-between">
                                        <div class="d-flex align-items-start justify-content-between">
                                            <i class='bx bxs-user'></i>
                                            <p class="px-2">
                                                {{ auth()->user()->name }}
                                            </p>
                                        </div>
                                    </div>
                                    <div class="edit-input">
                                        <input class="show-input" type="text" placeholder="تعديل الاسم" name="name" value="{{ auth()->user()->name }}">
                                    </div>
                                </li>

                                <li>
                                    <div class="d-flex justify-content-between">
                                        <div class="d-flex align-items-start justify-content-between">
                                            <i class='bx bxs-phone bx-flip-horizontal'></i>
                                            <p class="px-2">
                                                {{ auth()->user()->phone }}
                                            </p>
                                        </div>
                                    </div>
                                    <div class="edit-input">
                                        <input class="show-input" type="text" placeholder="تعديل رقم الهاتف" name="phone" value="{{ auth()->user()->phone }}">
                                    </div>
                                </li>

                                <li>
                                    <div class="d-flex justify-content-between">
                                        <div class="d-flex align-items-start justify-content-between">
                                            <i class='bx bxs-user-detail'></i>
                                            <p class="px-2">
                                                {{ auth()->user()->id_number }}
                                            </p>
                                        </div>
                                    </div>
                                    <div class="edit-input">
                                        <input class="show-input" type="text" placeholder="تعديل رقم الهوية" name="id_number" value="{{auth()->user()->id_number}}">
                                    </div>
                                </li>

                                <li>
                                    <div class="d-flex justify-content-between">
                                        <div class="d-flex align-items-start justify-content-between">
                                            <i class='bx bx-calendar'></i>
                                            <p class="px-2">
                                                {{ date('F d, Y', strtotime(auth()->user()->dob)) }}
                                            </p>
                                        </div>
                                    </div>
                                    <div class="edit-input">
                                        <input class="show-input" type="date" placeholder="تعديل تاريخ الميلاد" name="dob" value="{{ date('Y-m-d', strtotime(auth()->user()->dob)) }}">
                                    </div>
                                </li>
                            </ul>

                            <button type="submit">Save Changes</button>

                        </form>

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="user-appointments">
            <div class="container">
            <div class="info">
                <h2> جميع الحجوزات الخاصة بك </h2>
            </div>
                <div class="row">


                    @foreach(App\Models\Appointment::where('user_id', auth()->user()->id)
                            ->orderBy('appointment')->get() as $appointment)
                            <div class="col-md-2">
                                <div class="box">
                                    <h3>{{ \Carbon\Carbon::parse($appointment->appointment)->locale('ar')->isoFormat('dddd DD-M-YYYY') }}</h3>
                                    <p>{{ \Carbon\Carbon::parse($appointment->appointment)->locale('ar')->isoFormat('h:mm A') }} - {{ \Carbon\Carbon::parse($appointment->appointment)->addHours(1)->addMinutes(30)->locale('ar')->isoFormat('h:mm A') }}</p>
                                </div>
                            </div>
                        @endforeach
                </div>
            </div>
        </section>
        @endsection

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script>
		$(document).ready(function() {
			$("#edit1").click(function() {
				$(".show-input").toggle();
                $('.save-btn').toggleClass('show');
                $('.edit-btn').toggleClass('show');
			});
            $("#edit2").click(function() {
                $('.edit-btn').toggleClass('show');
			});
		});
	</script>
    </body>
</html>
