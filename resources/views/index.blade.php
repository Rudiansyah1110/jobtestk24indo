<!doctype html>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

<link rel="stylesheet" type="text/css" href="{{ asset('css/style_landing.css') }}">

<title>Login Admin</title>
</head>

<body>
<!-- NavBar Header -->

<nav class="navbar navbar-expand-lg bg-success fixed-top">
    <div class="container">
        <a class="navbar-brand" href="">Job-Test</a>
    </div>
</nav>

<div class="container main_content">
    <div class="row">
        
        <div class="col-sm-8">
            <div class="row">
                <div class="col-sm-6 mb-3">
                    <div class="card shadow">
                        <div class="card-body">
                            <h5 class="card-title">Registration Administrator</h5>
                            <p class="card-text">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit, sed do eiusmod
                               ,
                            </p>
                            <a href="/register" class="btn btn-outline-light btn-sm btn-block btn-home">Show</a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 mb-3">
                    <div class="card shadow">
                        <div class="card-body">
                            <h5 class="card-title">Login Administrator</h5>
                            <p class="card-text">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod,
                            </p>
                            <a href="/login" class="btn btn-outline-light btn-sm btn-block btn-home">Show</a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 mb-3">
                    <div class="card shadow">
                        <div class="card-body">
                            <h5 class="card-title">Registration Member</h5>
                            <p class="card-text">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod,
                            </p>
                            <a href="/register-member" class="btn btn-outline-light btn-sm btn-block btn-home">Show</a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 mb-3">
                    <div class="card shadow">
                        <div class="card-body">
                            <h5 class="card-title">Login Member</h5>
                            <p class="card-text">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod,
                            </p>
                            <a href="/login-member" class="btn btn-outline-light btn-sm btn-block btn-home">Show</a>
                        </div>
                    </div>
                </div>

            </div>    
        </div>

        <div class="col-sm-4">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card shadow card_right">
                        <div class="card-body">
                            <h5 class="card-title">List Data Member</h5>
                            <p class="card-text">
                                JSON Format / API Endpoint
                            </p>
                            <a href="/api/" class="btn btn-outline-light btn-sm btn-block btn-home">Show</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>


<!-- Optional JavaScript -->
<script src="{{ asset('js/jquery-3.6.0.js') }}" ></script>
<script src="{{ asset('js/popper.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
  </body>
</html>