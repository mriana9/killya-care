<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="logo.ico" type="image/x-icon">
    <title>كلية كير | من نحن</title>
    <!-- Pages All Style Links-->
    <link href="/assets/scss/header.css" rel="stylesheet"> <!--header style -->
    <link href="/assets/scss/home-page.css" rel="stylesheet"> <!--pages style -->
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
                    <a href="#"> <i class='bx bx-home'></i> الرئيسية</a>
                </li>
                <li class="breadcrumb-item active mt-1" aria-current="page">من نحن</li>
            </ol>
            </nav>
        </section>

        <section class="about-us">
                <div class="container">
                    <div class="row h-100 d-flex align-item-center">
                        <div class="col-md-6 col-sm-12">
                            <div class="about-us-img">
                                <div class="about-img-bg">
                                    <img src="assets/img/about-4.jpg" alt="slide img">
                                </div>

                                <div class="about-img-top">
                                <p>كلية كير, لتنظيم حجوزات مرضى الفشل الكلوي</p>                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-sm-12">
                            <div class="about-us-info">
                                <h2 class="section-title text-start">كلية كير, لتنظيم حجوزات مرضى الفشل الكلوي في مستشفى أبو الحسن القاسم</h2>
                                <div class="description">
                                    <p>المساهمة في تقديم الخدمات الصحية و الاجتماعية و الوقائية لمرضى الفشل الكلوي</p>
                                    <p> نهدف إلى تقديم خدماتنا و تشمل هذه الخدمات مساعدة مرضى الفشل الكلوي المحتاجين, و المستلزمات الطبية الخاصة بالفشل الكلوي, تشجيع ودعم البحث العلمي وبرامج التوعية الخاصة.</p>
                                </div>

                                <div class="benefits">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <i class='bx bx-check'></i>
                                            مساعدة مرضى غسيل الكلى على اجتياز عقبة المواعيد والأماكن الفارغة على مقاعد الغسيل الكلوي في المستشفى
                                        </div>

                                        <div class="col-md-6">
                                            <i class='bx bx-check'></i>
                                            العمل على خلق بيئة تفاعلية خاصة بالمرضى والقسم التابعين له لتسهيل عملية التواصل دون تكبد أي عناء أو مشقة
                                        </div>

                                        <div class="col-md-6">
                                            <i class='bx bx-check'></i>
                                            مواكبة التطورات الحديثة وتلبية حاجة من حاجات المجتمع باستخدام التكنولوجيا
                                        </div>

                                        <div class="col-md-6">
                                            <i class='bx bx-check'></i>
                                            سهولة التصفح والحجز بواسطة الموقع وأنت في بيتك
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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