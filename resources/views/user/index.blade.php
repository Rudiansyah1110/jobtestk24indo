@extends('main-template')

@section('container')

<div class="container-fluid main_content_dashboard">
    <div class="row">
        <div class="col-sm-4">
            <div class="row card-identity shadow">
                <div class="col-4">
                    <img src="{{ asset('all_photo/'.Auth::user()->photo) }}" class="img-fluid rounded-circle">
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
                    <h5 class="text-muted text-center">Data User Login</h5>
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <table class="table table-sm table-bordered table-striped text-center">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Username</th>
                                <th scope="col">Email</th>
                                <th scope="col">Time</th>
                                <th scope="col">Setting</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $x = 1;?>
                            @foreach($response['datanya'] as $row)
                            <tr>
                                <th scope="row">{{$x++}}</th>
                                <td>{{ucwords($row->username)}}</td>
                                <td>{{$row->email}}</td>
                                <td>{{ucwords($row->created_at)}}</td>
                                <td>
                                    <a href="/user/delete-user/{{$row->id}}" class="btn btn-sm btn-danger">Delete</a>
                                    <a href="/user/edit-data/{{$row->id}}" class="btn btn-sm btn-success">Edit</a>
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
        
@endsection