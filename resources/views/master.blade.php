<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Commerce</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</head>
<body>
    {{ View::make('header') }}
    @yield('content')
    {{ View::make('footer') }}
</body>
<style>
    .custom-login{
        height: 500px;
    }
    img.slider-img{
        height: 400px !important;
    }
    .custom-product{
        height: 500px;
    }
    .carousel-caption{
        background-color: black !important;
    }
    .trending-img{
        height: 100px;
    }
    .trending-item{
        float: left;
        width: 25%;
    }
    .detail-img{
        height: 300px;
        width: 550px;
    }
    .search-box{
        width: 500px !important;
    }
    .custom-cartlist{
        float: left;
        padding: 5%;
    }
    .custom-filter{
        color: white;
    }
    .cart-list-divider{
        border-bottom: 1px solid #ccc;
        margin-bottom: 20px;
        padding-bottom: 20px;
    }
</style>
</html>