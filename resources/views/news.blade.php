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
    <link href="/assets/scss/news.css" rel="stylesheet"> <!--pages style -->
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
                <li class="breadcrumb-item active mt-1" aria-current="page"> نصائحنا</li>
            </ol>
            </nav>
        </section>

        <section class="our-news">
            <div class="container">
            <div class="category">كلية كير</div>
            <h2 class="section-title">النصائح التي نقدمها</h2>
            <div class="row">


                @foreach(App\Models\AMedical::all() as $advise)

                <div class="col-md-4">
                    <div class="news-box">
                        <div class="news-image">
                        <img src="storage/{{ $advise->image }}" alt="about-img">
                        </div>
                        <div class="news-content">
                            <div class="news-info">
                                <div class="title">  {{$advise->title}}</div>
                                <div class="description">
                                    {{$advise->sub_title}}
                                </div>
                                <div class="read-more">
                                    <a href={{route('news-details' ,['id'=>$advise->id])}}>قراءة المزيد <i class='bx bx-plus'></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
{{--
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
                    </div> --}}
                </div>
            </div>
        </section>
        @endsection

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    </body>
</html>
