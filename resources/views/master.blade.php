<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-comm Project</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>

<body>
    @include('header')
    @yield('content')
    @include('footer')

</body>
<style>
    .navbar-default{
        background-color: rgba(0,0,0,0.7);
        font-size: large;
        height: 7rem;
    }

    .search-box {
        width: 50rem !important;
    }

    .custom-login {
        height: 80vh;
        width: 50%;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .custom-login-form{
        font-size: large;
        border: 2px solid grey;
        background-color: lightgray;
        border-radius: 1rem;
        padding: 10rem;
    }
    
    .custom-product {
        height: 83vh
    }

    img.slider-img {
        height: 40rem !important;
    }

    .slider-text {
        background-color: #35443585 !important;
    }

    
    .trending-wrapper {
        margin: 30px;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    
    .trending-item {
        text-align: center;
        width: 100%;
    }
    
    .trending-item a{
        text-decoration: none;
        color: gray;
    }
    
    .trending-image {
        height: 11rem;
    }

    .detail-img {
        height: 40rem;
    }

    .detail-row{
        height: 82vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .custom-order{
        height: 81vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .custom-cart{
        width: 100%;
        display: flex;
        justify-content: center;
        height: 81vh;
        border: 1px solid;
    }

    .cart-wrapper .row{
        margin: 5rem;
        display: flex;
        align-items: center;
        justify-content: center;
        border-bottom: 0.2rem solid darkgray;
        padding: 2rem
    }

    .order-wrapper .row{
        border-bottom: 0.2rem solid darkgray;
        padding: 2rem
    }

    .result-wrapper{
        display: flex;
        justify-content: center;
    }

    .result-wrapper .searched-item{
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
    }

    .panel-footer{
        background-color: rgba(0,0,0,0.7);
        color: white;
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: large;
        height: 7rem;
    }
</style>

</html>