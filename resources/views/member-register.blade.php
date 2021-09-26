@extends('main-template')

@section('container')

<div class="container main_content">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header text-center">
                    Registration Member
                </div>
                <form method="POST" action="{{ route('add-member') }}" enctype="multipart/form-data">
                <div class="card-body">
                    <div class="row">
                        @csrf
                        <div class="col-sm-6">
                            <div class="form-group row">
                                <label for="name" class="col-sm-3 col-form-label col-form-label-sm">Name</label>
                                <div class="col-sm-9">
                                    <input type="text" name="name" class="form-control form-control-sm @error('name') is-invalid @enderror" value="{{ old('name') }}" required autocomplete="name" autofocus placeh
                                    older="Enter your Name">

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
                                    <input type="email" name="email" class="form-control form-control-sm @error('email') is-invalid @enderror" id="email"  value="{{ old('email') }}" required autocomplete="email" placeholder="Enter your Email">

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
                                    <input type="password" name="password" class="form-control form-control-sm @error('password') is-invalid @enderror" id="inputPassword" placeholder="Enter your Password" required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password-confirm" class="col-sm-3 col-form-label col-form-label-sm">Confirm Password</label>
                                <div class="col-sm-9">
                                    <input type="password" name="password_confirmation" required autocomplete="new-password" class="form-control form-control-sm" id="password-confirm" placeholder="Confirm Password">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="phone" class="col-sm-3 col-form-label col-form-label-sm">No Phone</label>
                                <div class="col-sm-9">
                                    <input type="text" name="phone" class="form-control form-control-sm @error('phone') is-invalid @enderror" value="{{ old('phone') }}" required autocomplete="phone" id="phone" placeholder="Enter your Number Phone">

                                    @error('phone')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>  
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group row">
                                <label for="birth_day" class="col-sm-3 col-form-label col-form-label-sm @error('birth_day') is-invalid @enderror">Tanggal Lahir</label>
                                <div class="col-sm-9">
                                    <input type="date" name="birth_day" class="form-control form-control-sm" id="birth_day" value="{{ old('birth_day') }}" required autocomplete="birth_day">
                                    @error('birth_day')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="gender" class="col-sm-3 col-form-label col-form-label-sm">Jenis Kelamin</label>
                                <div class="col-sm-9">
                                    <select class="form-control form-control-sm @error('gender') is-invalid @enderror" name="gender" id="gender">
                                        <option value="">-- Select Gender --</option>
                                        <option value="laki-laki">Laki - Laki</option>
                                        <option value="perempuan">Perempuan</option>
                                    </select>
                                    @error('gender')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="ktp" class="col-sm-3 col-form-label col-form-label-sm">No KTP</label>
                                <div class="col-sm-9">
                                    <input type="text" name="ktp" class="form-control form-control-sm @error('ktp') is-invalid @enderror" id="ktp" placeholder="Enter your Identity Number" value="{{ old('ktp') }}" required autocomplete="ktp">

                                    @error('ktp')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="photo" class="col-sm-3 col-form-label col-form-label-sm ">Foto Diri</label>
                                <div class="col-sm-9">
                                    <div class="custom-file">
                                    <input type="file" name="image" class="form-control-file @error('image') is-invalid @enderror">
                                    @error('image')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="card-footer d-flex justify-content-center">
                    <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection