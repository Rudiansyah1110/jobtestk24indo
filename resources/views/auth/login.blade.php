@extends('main-template')

@section('container')

<div class="container main_content">
    <div class="row justify-content-center">
        <div class="col-sm-6">
            <div class="card">
                <div class="card-header card-header-admin text-center">
                    Login Admin
                </div>

                <form method="POST" action="{{ route('login') }}">
                    
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-12">
                            @csrf
                            <div class="form-group row">
                                <label for="email" class="col-sm-3 col-form-label col-form-label-sm">Email</label>
                                <div class="col-sm-9">
                                    <input type="email" name="email" class="form-control form-control-sm @error('email') is-invalid @enderror" id="email" placeholder="Enter your Email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="inputPassword" class="col-sm-3 col-form-label col-form-label-sm">Password</label>
                                <div class="col-sm-9">
                                    <input type="password" name="password" class="form-control form-control-sm @error('password') is-invalid @enderror" id="inputPassword" placeholder="Enter your Password" required autocomplete="current-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="card-footer card-footer-admin d-flex justify-content-center">
                    <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection