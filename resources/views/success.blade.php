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
<!-- replace with form tag  -->
<div class="appointment" id="appointment">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 text-white text-center">
                <h2 class="text-white">request appointment</h2>
            </div>
            <div class="col-md-8 col-lg-6">
                <div class="form-success text-center text-white">
                    <img src="./assets/images/Check.png" alt="img" class="my-5" width="146">
                    <h2 class="text-white">thank you</h2>
                    <p>Your request has been sent Will Reach You Soon. </p>
                    <div class="col-12">
                        <a href="{{route('home')}}" class="button-submit" type="submit">done</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="./assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>
