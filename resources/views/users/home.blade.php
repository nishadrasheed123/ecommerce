<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>REDBERRY</title>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Font Awesome 5 CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,100,300,700" rel="stylesheet" type="text/css">

    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!-- header -->
     @include('users.template.header')
     <!-- header -->



<!-- DEMO HTML -->
<div class="container bg-white">
    <nav class="navbar navbar-expand-md navbar-light bg-white">
        <div class="container-fluid p-0">
            <a class="navbar-brand text-uppercase fw-800" href="#"><span class="border-red pe-2"></span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#myNav" aria-controls="myNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="fas fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="myNav">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link active" aria-current="page" href="#">All</a>
                    <a class="nav-link" href="#">Women's</a>
                    <a class="nav-link" href="#">Men's</a>
                    <a class="nav-link" href="#">Kid's</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="row">
        <div class="col-lg-3 col-sm-6 d-flex flex-column align-items-center justify-content-center product-item my-3">
            <div class="product">
                <img src="https://images.pexels.com/photos/54203/pexels-photo-54203.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="">
                <ul class="d-flex align-items-center justify-content-center list-unstyled icons">
                    <li class="icon"><span class="fas fa-expand-arrows-alt"></span></li>
                    <li class="icon mx-3"><span class="far fa-heart"></span></li>
                    <li class="icon"><span class="fas fa-shopping-bag"></span></li>
                </ul>
            </div>
            
            <div class="title pt-4 pb-1">Winter Sweater</div>
            <div class="d-flex align-content-center justify-content-center">
                <span class="fas fa-star"></span>
                <span class="fas fa-star"></span>
                <span class="fas fa-star"></span>
                <span class="fas fa-star"></span>
                <span class="fas fa-star"></span>
            </div>
            <div class="price">$60.00</div>
        </div>
        <div class="col-lg-3 col-sm-6 d-flex flex-column align-items-center justify-content-center product-item my-3">
            <div class="product">
                <img src="https://images.pexels.com/photos/6764040/pexels-photo-6764040.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="">
                <ul class="d-flex align-items-center justify-content-center list-unstyled icons">
                    <li class="icon"><span class="fas fa-expand-arrows-alt"></span></li>
                    <li class="icon mx-3"><span class="far fa-heart"></span></li>
                    <li class="icon"><span class="fas fa-shopping-bag"></span></li>
                </ul>
            </div>
            
            <div class="title pt-4 pb-1">Denim Dresses</div>
            <div class="d-flex align-content-center justify-content-center">
                <span class="fas fa-star"></span>
                <span class="fas fa-star"></span>
                <span class="fas fa-star"></span>
                <span class="fas fa-star"></span>
                <span class="fas fa-star"></span>
            </div>
            <div class="price">$55.00</div>
        </div>
        <div class="col-lg-3 col-sm-6 d-flex flex-column align-items-center justify-content-center product-item my-3">
            <div class="product">
                <img src="https://images.pexels.com/photos/914668/pexels-photo-914668.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="">
                <ul class="d-flex align-items-center justify-content-center list-unstyled icons">
                    <li class="icon"><span class="fas fa-expand-arrows-alt"></span></li>
                    <li class="icon mx-3"><span class="far fa-heart"></span></li>
                    <li class="icon"><span class="fas fa-shopping-bag"></span></li>
                </ul>
            </div>
            
            <div class="title pt-4 pb-1">Empire Waist Dresses</div>
            <div class="d-flex align-content-center justify-content-center">
                <span class="fas fa-star"></span>
                <span class="fas fa-star"></span>
                <span class="fas fa-star"></span>
                <span class="fas fa-star"></span>
                <span class="fas fa-star"></span>
            </div>
            <div class="price">$70.00</div>
        </div>
		
        <div class="col-lg-3 col-sm-6 d-flex flex-column align-items-center justify-content-center product-item my-3">
            <div class="product">
                <img src="https://images.pexels.com/photos/6311392/pexels-photo-6311392.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="">
                <ul class="d-flex align-items-center justify-content-center list-unstyled icons">
                    <li class="icon"><span class="fas fa-expand-arrows-alt"></span></li>
                    <li class="icon mx-3"><span class="far fa-heart"></span></li>
                    <li class="icon"><span class="fas fa-shopping-bag"></span></li>
                </ul>
            </div>
            <div class="title pt-4 pb-1">Pinafore Dresses</div>
            <div class="d-flex align-content-center justify-content-center">
                <span class="fas fa-star"></span>
                <span class="fas fa-star"></span>
                <span class="fas fa-star"></span>
                <span class="fas fa-star"></span>
                <span class="fas fa-star"></span>
            </div>
            <div class="price">$60.00</div>
        </div>
    </div>
</div>
<footer>
<div class="container-fluid mt-5">
    <div class="card bg-white mx-5">
        <div class="row mb-4">
            <div class="col-md-4 col-sm-4 col-xs-4">
                <div class="footer-text pull-left">
                    <div class="d-flex">
                        <h1 class="font-weight-bold mr-2 px-3" style="color:white; background-color:#957bda"> Red </h1>
                        <h1 style="color: #957bda">Berry</h1>
                    </div>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi non pariatur numquam animi nam at impedit odit nisi.</p>
                    <div class="social mt-2 mb-3"> <i class="fa fa-facebook-official fa-lg"></i> <i class="fa fa-instagram fa-lg"></i> <i class="fa fa-twitter fa-lg"></i> <i class="fa fa-linkedin-square fa-lg"></i> <i class="fa fa-facebook"></i> </div>
                </div>
            </div>
            <div class="col-md-2 col-sm-2 col-xs-2"></div>
            <div class="col-md-2 col-sm-2 col-xs-2">
                <h5 class="heading">Industries</h5>
                <ul>
                    <li>Retaile</li>
                    <li>Whole Sale</li>
                    <li>E-commerce</li>
                </ul>
            </div>
            <div class="col-md-2 col-sm-2 col-xs-2">
                <h5 class="heading">Address</h5>
                <ul class="card-text">
                    <li>al fahidi streat 
                        meena bazr
                    </li>
                    
                </ul>
            </div>
            <div class="col-md-2 col-sm-2 col-xs-2">
                <h5 class="heading">Company</h5>
                <ul class="card-text">
                    <li>About Us</li>
                    <li>Blog</li>
                    <li>Contact</li>
                    <li>Join Us</li>
                </ul>
            </div>
        </div>
        <div class="divider mb-4"> </div>
        <div class="row" style="font-size:10px;">
            <div class="col-md-6 col-sm-6 col-xs-6">
                <div class="pull-left">
                    <p><i class="fa fa-copyright"></i> 2020 thezpdesign</p>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-6">
                <div class="pull-right mr-4 d-flex policy">
                    <div>Terms of Use</div>
                    <div>Privacy Policy</div>
                    <div>Cookie Policy</div>
                </div>
            </div>
        </div>
    </div>
</div>
</footer>

 </main>
 
  <footer class="credit">Redberry General Tradiing LLC </footer>
    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
