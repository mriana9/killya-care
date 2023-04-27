<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="logo.ico" type="image/x-icon">
    <title>كلية كير | الملف الشخصي</title>
    <!-- Pages All Style Links-->
    <link href="/assets/scss/header.css" rel="stylesheet"> <!--header style -->
    <link href="/assets/scss/profile.css" rel="stylesheet"> <!--pages style -->
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
                <li class="breadcrumb-item active mt-1" aria-current="page">صفحة المريض</li>
            </ol>
        </nav>
        </section>

        <section class="user-profile">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 mt-3">
                        <div class="profile-card">
                            <div class="profile-card-header">
                                <p>المعلومات الشخصية</p>
                            </div>
                            <div class="card-icon">
                                <i class='bx bx-user'></i>
                            </div>
                            <div class="card-info">
                                    <div class="d-flex justify-content-between">
                                        <div class="d-flex align-items-start justify-content-between">
                                            <i class='bx bxs-user'></i>
                                            <p class="px-2">
                                                {{ auth()->user()->name }}
                                            </p>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <div class="d-flex align-items-start justify-content-between">
                                            <i class='bx bxs-phone bx-flip-horizontal'></i>
                                            <p class="px-2">
                                                {{ auth()->user()->phone }}
                                            </p>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <div class="d-flex align-items-start justify-content-between">
                                            <i class='bx bxs-user-detail'></i>
                                            <p class="px-2">
                                                {{ auth()->user()->id_number }}
                                            </p>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <div class="d-flex align-items-start justify-content-between">
                                            <i class='bx bx-calendar'></i>
                                            <p class="px-2">
                                                {{ date('F d, Y', strtotime(auth()->user()->dob)) }}
                                            </p>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 mt-3">
                        <div class="profile-card">
                            <div class="profile-card-header">
                                <p> الحجوزات الخاصة بي</p>
                            </div>
                            <div class="card-icon">
                                <i class='bx bx-calendar'></i>
                            </div>
                            <div class="card-info">
                                    <div class="">
                                    @foreach(App\Models\Appointment::where('user_id', auth()->user()->id)
                                                ->orderBy('appointment')->get() as $appointment)
                                                <div class="col-md-12">
                                                    <div class="box pt-4">
                                                        <h3><i class='bx bx-calendar'></i>{{ \Carbon\Carbon::parse($appointment->appointment)->locale('ar')->isoFormat('dddd DD-M-YYYY') }}</h3>
                                                        <p>{{ \Carbon\Carbon::parse($appointment->appointment)->locale('ar')->isoFormat('h:mm A') }} - {{ \Carbon\Carbon::parse($appointment->appointment)->addHours(1)->addMinutes(30)->locale('ar')->isoFormat('h:mm A') }}</p>
                                                    </div>
                                                </div>
                                    @endforeach
                                    </div>
                            </div>
                            <button class="primarily-button" data-bs-toggle="modal" data-bs-target="#exampleModal"> حجز موعد</button>

                        </div>
                    </div>

                    <div class="col-md-12 mt-3">
                        <div class="profile-card">
                            <div class="profile-card-header">
                                <p> الرسائل الخاصة بي</p>
                            </div>
                            <div class="card-icon">
                            <i class='bx bx-chat'></i>
                            </div>
                            <div class="card-info">
                                @foreach(App\Models\Contact::where('user_id', auth()->user()->id)->orderBy('created_at')->get() as $contact)
                                    <div class="col-md-12">
                                        <div class="box pt-4" style="direction: rtl; text-align: right;">
                                            <p > السؤال : {{$contact->message}}</p>
                                            @if($contact->answer)
                                                <p >الجواب: {{$contact->answer->answers}}</p>
                                            @endif
                                        </div>
                                    </div>
                                @endforeach

                            </div>
                            <a href="{{'/contact-us' }}" class="primarily-button"> ارسال رسالة</a>
                        </div>
                    </div>


                </div>
            </div>
        </section>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl">
            <div class="modal-content ">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"> حجز موعد</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <div class="make-a-appointment-box">

                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

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

                <form class="row"  method="POST" action="{{ route('appointments.store') }}">
                    @csrf
                    <div class="col-md-6">
                        <label> الاسم الاول</label>
                        <input type="text" placeholder="الاسم الاول" name="name" required
                        {{ auth()->check() ? 'value=' . auth()->user()->name . ' disabled' : '' }}>
                    </div>
                    <div class="col-md-6">
                        <label>الاسم الأخير</label>
                        <input type="text" placeholder="الاسم الأخير" name="l_name" required
                        {{ auth()->check() ? 'value=' . auth()->user()->l_name . ' disabled' : '' }}>
                    </div>
                    <div class="col-md-6">
                    <label>رقم الهاتف</label>
                        <input type="text" placeholder="رقم الهاتف" name="phone" required
                        {{ auth()->check() ? 'value=' . auth()->user()->phone . ' disabled' : '' }}>
                    </div>
                    <div class="col-md-6">
                    <label>تاريخ الميلاد</label>
                        <input type="date"  placeholder=" تاريخ الميلاد" name="dob" required
                        {{ auth()->check() ? 'value=' . auth()->user()->dob . ' disabled' : '' }}>
                    </div>
                    <div class="col-md-6">
                    <label>اختار الموعد</label>
                        <input type="datetime-local"  placeholder=" اختار الموعد" name="appointment" required>
                    </div>
                    <div class="col-md-6 mt-4">
                        <button type="submit" > حجز موعد</button>
                    </div>
                </form>

                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">اغلاق</button>
            </div>
            </div>
        </div>
        </div>
        @endsection

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        
    </body>
</html>
