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
                <li class="breadcrumb-item">
                    <a href="{{'/news' }}"> نصائحنا</a>
                </li>
                <li class="breadcrumb-item active mt-1" aria-current="page"> {{$advise->title}}  </li>
            </ol>
            </nav>
        </section>

        <section class="our-news news-details">
            <div class="container">
            <div class="row">
                    <div class="col-md-12">
                        <div class="news-box">
                            <div class="title"> {{$advise->title}} </div>
                            <div class="news-image">
                                <img src="{{ asset('storage/' . $advise->image) }}" alt="about-img">
                            </div>
                            <div class="description">
                                {{$advise->body}}
                            </div>
                        </div>
                    </div>
            </div>
            </div>
        </section>



        <section class="comments">
            <div class="container">
                <div class="title"> {{ $advise->comments->count() }} تعليقات</div>
                @foreach($advise->comments as $comment)
                <div class="comment-box">
                    <div class="user-name"> <i class="bx bx-user"></i> {{ $comment->user->name }}</div>
                    <div class="user-comment">{{ $comment->comment }}</div>

                    <form class="w-100 d-flex justify-content-end">
                        <button type="submit" style="border: none"><i class="bx bx-trash text-danger"></i></button>
                    </form>  
                </div>
                @endforeach


                <div class="form-comments">
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
                    <form action="{{ route('comment') }}" method="post">
                        @csrf <!-- Add CSRF token for security -->
                        <input type="text" hidden value="{{$advise->id}}" name="news_id">
                        <textarea name="comment" placeholder="اكتب تعليقك هنا"></textarea>
                        <button type="submit">ارسال</button>
                    </form>
                </div>
            </div>
        </section>
        @endsection

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    </body>
</html>
