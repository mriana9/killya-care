<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="logo.ico" type="image/x-icon">
    <title>كلية كير | خدماتنا</title>
    <!-- Pages All Style Links-->
    <link href="/assets/scss/header.css" rel="stylesheet"> <!--header style -->
    <link href="/assets/scss/services.css" rel="stylesheet"> <!--pages style -->
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
                <li class="breadcrumb-item active mt-1" aria-current="page">خدماتنا</li>
            </ol>
            </nav>
        </section>

        <section class="our-services">
            <div class="category">كلية كير</div>
            <h2 class="section-title">ما الخدمات التي نقدمها</h2>
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="service-box">
                            <div class="service-img">
                                <img src="assets/img/service1.jpg" alt="about-img">
                            </div>
                            <div class="service-info">
                                الحصول على استشارة 
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="service-box">
                            <div class="service-img">
                                <img src="assets/img/service2.jpg" alt="about-img">
                            </div>
                            <div class="service-info">
                                 تقديم الوقاية لمرضى الفشل الكلوي
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="service-box">
                            <div class="service-img">
                                <img src="assets/img/service3.jpg" alt="about-img">
                            </div>
                            <div class="service-info">
                                حجز موعد الجلسة 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="what-we-do">
                <div class="container h-100">
                    <div class="category">كلية كير  </div>
                    <h2 class="section-title">أعراض الفشل الكلوي</h2>
                    <div class="row">
                        <div class="col-md-3 text-center">
                            <div class="img-box">
                                <span>01</span>
                                <img src="assets/img/about-img-1.png" alt="about-img">
                                <p class="title">انتفاخ حول العينين والارجل</p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="img-box">
                                <span>02</span>
                                <img src="assets/img/about-img-2.png" alt="about-img">
                                <p class="title"> الصداع المتكرر وفقدان الشهية</p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="img-box">
                                <span>03</span>
                                <img src="assets/img/about-img-3.png" alt="about-img">
                                <p class="title"> فقر الدم وارتفاع ضغط الدم</p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="img-box">
                                <span>04</span>
                                <img src="assets/img/about-img-4.png" alt="about-img">
                                <p class="title"> وجود ألم في الخاصرتين وخروج دم مع البول </p>
                            </div>
                        </div>
                    </div>
                </div>
        </section>

        <section class="out-last-news">
            <div class="category">كلية كير</div>
            <h2 class="section-title"> أخر النصائح التي نقدمها</h2>
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="news-box">
                            <div class="news-image">
                            <img src="assets/img/blog1.jpg" alt="about-img">
                            </div>
                            <div class="news-content">
                                <div class="news-header">
                                    <div class="user-name d-flex">
                                        <i class='bx bxs-user'></i>
                                        <span>Admin</span>
                                    </div>
                                    <div class="comments mx-3 d-flex">
                                        <i class='bx bxs-chat'></i>
                                        <span> 0 تعليقات</span>
                                    </div>
                                </div>
                                <div class="news-info">
                                    <div class="title">أسباب الفشل الكلوي</div>
                                    <div class="description">
                                    حدث الفشل الكلوي الحاد عندما تعجز الكلى فجأةً عن تنقية الفضلات من الدم. وعندما تفقد الكليتان وظيفتهما على القيام بعملية التنقية، فقد تتزايد مستويات الفضلات الخطرة مما قد يتسبب في إحداث خلل بالتركيب الكيميائي للدم.
                                    </div>
                                    <div class="read-more">
                                        <a href="#">قراءة المزيد <i class='bx bx-plus'></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="news-box">
                            <div class="news-image">
                            <img src="assets/img/blog2.jpg" alt="about-img">
                            </div>
                            <div class="news-content">
                                <div class="news-header">
                                    <div class="user-name d-flex">
                                        <i class='bx bxs-user'></i>
                                        <span>Admin</span>
                                    </div>
                                    <div class="comments mx-3 d-flex">
                                        <i class='bx bxs-chat'></i>
                                        <span> 0 تعليقات</span>
                                    </div>
                                </div>
                                <div class="news-info">
                                    <div class="title">أسباب الفشل الكلوي</div>
                                    <div class="description">
                                    حدث الفشل الكلوي الحاد عندما تعجز الكلى فجأةً عن تنقية الفضلات من الدم. وعندما تفقد الكليتان وظيفتهما على القيام بعملية التنقية، فقد تتزايد مستويات الفضلات الخطرة مما قد يتسبب في إحداث خلل بالتركيب الكيميائي للدم.
                                    </div>
                                    <div class="read-more">
                                        <a href="#">قراءة المزيد <i class='bx bx-plus'></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="news-box">
                            <div class="news-image">
                            <img src="assets/img/blog3.jpg" alt="about-img">
                            </div>
                            <div class="news-content">
                                <div class="news-header">
                                    <div class="user-name d-flex">
                                        <i class='bx bxs-user'></i>
                                        <span>Admin</span>
                                    </div>
                                    <div class="comments mx-3 d-flex">
                                        <i class='bx bxs-chat'></i>
                                        <span> 0 تعليقات</span>
                                    </div>
                                </div>
                                <div class="news-info">
                                    <div class="title">أسباب الفشل الكلوي</div>
                                    <div class="description">
                                    حدث الفشل الكلوي الحاد عندما تعجز الكلى فجأةً عن تنقية الفضلات من الدم. وعندما تفقد الكليتان وظيفتهما على القيام بعملية التنقية، فقد تتزايد مستويات الفضلات الخطرة مما قد يتسبب في إحداث خلل بالتركيب الكيميائي للدم.
                                    </div>
                                    <div class="read-more">
                                        <a href="#">قراءة المزيد <i class='bx bx-plus'></i></a>
                                    </div>
                                </div>
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
