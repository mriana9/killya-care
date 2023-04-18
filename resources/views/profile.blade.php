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
                                    لا يوجد رسائل حاليا
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @endsection

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    </body>
</html>
