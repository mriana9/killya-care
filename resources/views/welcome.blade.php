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
    <link href="/assets/scss/home-page.css" rel="stylesheet"> <!--pages style -->
    <link href="/assets/scss/footer.css" rel="stylesheet"> <!--footer style -->
</head>
    <body>
        @extends('layouts.app')

        @section('content')
            <!--home-slider-->
            <section class="home-slider">
                <div id="carouselExampleCaptions" class="carousel" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="assets/img/1.jpg"  alt="slide-img">
                        <div class="carousel-caption d-md-block">
                            <h1>مرحبا في كلية كير</h1>
                            <p>المساهمة في تقديم الخدمات الصحية و الاجتماعية و الوقائية لمرضى الفشل الكلوي</p>
                            <div class="home-page-btn">
                                <a href="#" class="primarily-button">تسجيل دخول</a>
                                <a href="#" class="primarily-button"> انشاء حساب</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="assets/img/2.jpg" class="d-block img-fluid" alt="slide-img">
                        <div class="carousel-caption text-center d-md-block">
                            <img src="assets/img/logo.png" class=" slider-logo" alt="slide img">
                            <p>المساهمة في تقديم الخدمات الصحية و الاجتماعية و الوقائية لمرضى الفشل الكلوي</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="assets/img/3.jpg" class="d-block img-fluid" alt="slide-img">
                        <div class="carousel-caption d-md-block">
                            <p>نهدف  إلى تقديم خدماتنا و تشمل هذه الخدمات مساعدة مرضى الفشل الكلوي المحتاجين, و المستلزمات الطبية الخاصة بالفشل الكلوي, تشجيع ودعم البحث العلمي وبرامج التوعية الخاصة.</p>
                            <div class="home-page-btn">
                                <a href="#" class="primarily-button"> تواصل معنا </a>
                            </div>
                        </div>
                    </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </section>

            <!--make-a-appointment-->
            <section class="make-a-appointment">
                <div class="make-a-appointment-box">
                    <div class="row">
                        <div class="col-md-4">
                            <input type="text" placeholder="الاسم الاول">
                        </div>
                        <div class="col-md-4">
                            <input type="text" placeholder="الاسم الأخير">
                        </div>
                        <div class="col-md-4">
                            <input type="text" placeholder="رقم الهاتف">
                        </div>
                        <div class="col-md-4">
                            <input type="date"  placeholder=" تاريخ الميلاد">
                        </div>
                        <div class="col-md-4">
                            <input type="datetime-local"  placeholder=" اختار الموعد">
                        </div>
                        <div class="col-md-4">
                            <button type="submit"> حجز موعد</button>
                        </div>
                    </div>
                </div>
            </section>

            <!--about-us-->
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
                                <div class="category">كلية كير</div>
                                <h2 class="section-title">كلية كير, لتنظيم حجوزات مرضى الفشل الكلوي</h2>
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

            <!--whate-we-do-->
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

            <!--contact-us-->
            <section class="contact-us">
                <div class="container">
                   <div class="info">
                        <h2>ابدأ رحلتك العلاجية الان, تواصل معنا واحجز جلستك</h2>
                        <div class="contact-buttons">
                            <a href="#" class="primarily-button">تسجيل دخول</a>
                            <a href="#" class="primarily-button"> انشاء حساب</a>
                        </div>
                   </div>
                </div>
            </section>

            <!--our-services-->
            <section class="our-services">
                <div class="w-100 container text-center">
                    <div class="category m-auto">كلية كير  </div>
                    <h2 class="section-title"> الخدمات التي يقدمها كلية كير</h2>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="service-box">
                                <div class="icon">
                                    <img src="assets/img/2.svg" alt="service-img">
                                </div>
                                <div class="title"> حجز موعد</div>
                                <div class="description"> حجز موعد لجلسة غسيل الكلى تناسب المريض من المنزل</div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="service-box">
                                <div class="icon">
                                    <img src="assets/img/3.svg" alt="service-img">
                                </div>
                                <div class="title"> الحصول على استشارة</div>
                                <div class="description"> الحصول على استشارة من خلال اطباء متخصصين</div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="service-box">
                                <div class="icon">
                                    <img src="assets/img/1.svg" alt="service-img">
                                </div>
                                <div class="title"> الوقاية من الفشل الكلوي</div>
                                <div class="description"> تقديم نصائح مجانية للوقاية من مرض الفشل الكلوي</div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        @endsection
    </body>
</html>