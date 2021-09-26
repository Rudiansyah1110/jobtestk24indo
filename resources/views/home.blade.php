<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/style_temp.css') }}">
    <title>Dashboard Admin</title>

</head>
<body>

<nav class="navbar navbar-expand-lg bg-success fixed-top">
    <div class="container">
        <a class="navbar-brand" href="/">Job-Test</a>
    </div>
</nav>

<div class="container-fluid main_content_dashboard">
    <div class="row">
        <div class="col-sm-4">
            <div class="row card-identity shadow">
                <div class="col-4">
                    <img src="{{ asset('img/sample1.jpg') }}" class="img-fluid rounded-circle">
                </div>
                <div class="col-1"></div>
                <div class="col-7">
                    <h5 class="text-muted">{{Auth::user()->name}}</h5>
                    <p>{{Auth::user()->email}}</p>
                    <a class="btn btn-sm btn-danger btn-block" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </div>
        </div>

        <div class="col-sm-8">
            <div class="row my-4">
                <div class="col-sm-12">
                    <h5 class="text-muted text-center">Data User's</h5>
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <table class="table table-sm table-bordered table-striped text-center">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Jenis Kelamin</th>
                                <th scope="col">Tgl Lahir</th>
                                <th scope="col">Setting</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $x = 1;?>
                            @foreach($response['datanya'] as $row)
                            <tr>
                                <th scope="row">{{$x++}}</th>
                                <td>{{ucwords($row->name)}}</td>
                                <td>{{ucwords($row->email)}}</td>
                                <td>{{ucwords($row->gender)}}</td>
                                <td>{{ucwords($row->birth_day)}}</td>
                                <td>
                                    <button class="btn btn-sm btn-danger">Delete</button>
                                    <button class="btn btn-sm btn-success">Edit</button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
        

<script src="{{ asset('js/jquery-3.6.0.js') }}" ></script>
<script src="{{ asset('js/popper.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>