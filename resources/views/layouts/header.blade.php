

<!DOCTYPE html>
<html lang="en">
<body>
    
<header>
    <div class="top-header">
       <div class="container h-100">
            <div class="row h-100">
                <div class="h-100 col-md-6 col-sm-12">
                    <ul class="socail-media-link">
                        @auth

                        <form method="POST" action="{{ route('logout') }}">
                        <li>
                                @csrf
                                <a href="#" onclick="event.preventDefault(); this.closest('form').submit();">
                                    <i class='bx bx-log-in'></i>
                                </a>
                            </li>
                        </form>
                        @endauth
                        @if (!auth()->check())

                        <li>
                            <a href="{{ auth()->check() ? '#' : '/register' }}" >
                                <i class='bx bx-user-plus'></i>
                            </a>
                        </li>
                        @endif

                        @if (auth()->check())

                        <li>
                            <a href="{{ auth()->check() ? '/profile' : '#' }}" >
                                <i class='bx bx-user'></i>
                            </a>
                        </li>
                        @endif
                        <li>
                            <a href="#" target="_blank">
                                <i class='bx bxl-facebook'></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank">
                                <i class='bx bxl-instagram'></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank">
                                <i class='bx bxl-snapchat' ></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank">
                                <i class='bx bxl-linkedin'></i>
                            </a>
                        </li>
                    </ul>
                </div>
                
                <div class="h-100 col-md-6 col-sm-12 text-end d-flex justify-content-end align-items-center">
                    <div class="h-100 phone d-flex justify-content-center align-items-center">
                        022271017
                        <i class='bx bxs-phone'></i>
                    </div>

                    <div class="h-100 email d-flex justify-content-center align-items-center">
                        info.killiya_care@gmail.com
                        <i class='bx bxs-envelope' ></i>
                    </div>
                </div>
            </div>
       </div>
    </div>

    <nav class="navbar navbar-expand-lg navbar-light bg-light" id="navbar">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img class="img-fluid" src={{asset("assets/img/nav-logo.png")}} alt="logo-img">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link home-link" aria-current="page" href="{{'/' }}">الرئيسية</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link about-us-link" href="{{'/about-us' }}">من نحن</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link services-link" href="{{'/services' }}">خدماتنا</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link news-link" href="{{'/news' }}">نصائح</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link contact-us-link" href="{{'/contact-us' }}">اتصل بنا</a>
                    </li>
                </ul>
                <div class="h-100 contact-info d-flex justify-content-center align-items-center">
                    <div class="icon">
                        <i class='bx bx-support'></i>
                    </div>
                    <div class="info">
                        <h2>022271017</h2>
                        <p>أحد-خميس : 24 ساعة</p>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="/assets/js/main.js"></script>
</body>
</html>