<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/x-icon" href="./assets/images/fav.png">
    <title>Edu Digit</title>
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/responsive.css">
</head>

<body>
<div class="loader" id="loader">
    <div class="dot"></div>
    <div class="dot"></div>
    <div class="dot"></div>
    <div class="dot"></div>
    <div class="dot"></div>
</div>
<nav>
    <div class="container">
        <div class="row">
            <div class="col-6 "> <a href="{{route('home')}}"><img src="./assets/images/edulogo-1.png" alt="img" class="logo"></a></div>
{{--            <div class="col-6 ">--}}
{{--                <div class="d-flex justify-content-end align-items-center h-100 gap-20">--}}
{{--                    <a href="{{ url()->current() }}?change_language=ar" class="d-flex align-items-center gap-10"><img src="./assets/images/ksa.svg" alt="img" class="width-30"> AR </a>--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>
    </div>
</nav>
<main>
    <div class="hero-section min-h-100  flex-column">
        <div id="particles" class="particles"></div>
        <svg class="bg-shape" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1205.46 968.93">
            <path d="M1212.38,50.21l-86,684.35a35,35,0,0,1-25.1,29.31l-749,214.52a35,35,0,0,1-42.72-22.14L9.18,94.48A35,35,0,0,1,41.11,47.94l1135.38-37.1A35,35,0,0,1,1212.38,50.21Z" transform="translate(-7.2 -10.82)" />
        </svg>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-5 ">
                    <div class="login p-3 p-md-5">
                        <h2 class="text-uppercase text-center mb-5">sign in</h2>
                        <form action="{{route('login.post')}}" method="post">
                            @csrf
                            <div class="row g-3">

                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="">email </label>
                                        <input type="email" name="email" placeholder="email" id="" required>
                                        @if($errors->has('email'))
                                            <p style="color:red;" class="error">{{ $errors->first('email') }}</p>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="">password </label>
                                        <input type="password" name="password" placeholder="password" id="" required>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <button type="submit">submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyrights mt-5">
            <span class="text-white"> powered by</span> <a href="#" target="_blank"><img src="./assets/images/uktralogo.png" alt=""></a>
        </div>
    </div>
</main>
<button class="to-top">
    <img src="./assets/images/scroll.gif" alt="">
</button>
<script src="./assets/js/bootstrap.bundle.min.js"></script>
<script src="./assets/js/particles.min.js"></script>
<script src="./assets/js/main.js"></script>
</body>

</html>
