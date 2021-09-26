@extends('main-template')

@section('container')

<div class="container main_content">
    <div class="row justify-content-center">
        <div class="col-sm-8">
            <div class="card">
                <div class="card-header text-center">
                    Edit Data
                </div>
                <form method="POST" action="{{ route('user.process-update') }}" enctype="multipart/form-data">
                <div class="card-body">
                    <div class="row justify-content-center">
                        @csrf

                        <input type="hidden" name="id" value="{{ $response['datanya']->id }}">

                        <div class="col-sm-6">
                            <div class="form-group row">
                                <label for="name" class="col-sm-3 col-form-label col-form-label-sm">Name</label>
                                <div class="col-sm-9">
                                    <input type="text" name="name" class="form-control form-control-sm @error('name') is-invalid @enderror" value="{{ $response['datanya']->username }}" required autocomplete="name" autofocus placeholder="Enter your Name" id="name">

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-sm-3 col-form-label col-form-label-sm">Email</label>
                                <div class="col-sm-9">
                                    <input type="email" name="email" class="form-control form-control-sm @error('email') is-invalid @enderror" id="email" value="{{ $response['datanya']->email }}" readonly autocomplete="email" placeholder="Enter your Email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
                <div class="card-footer d-flex justify-content-center">
                    <a href="/admin/dashboard" class="btn btn-danger btn-sm mr-2">Back</a>
                    <button type="submit" class="btn btn-primary btn-sm">Update</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection