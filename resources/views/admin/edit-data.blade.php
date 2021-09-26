@extends('main-template')

@section('container')

<div class="container main_content">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header text-center">
                    Edit Data
                </div>
                <form method="POST" action="{{ route('admin.process-update') }}" enctype="multipart/form-data">
                <div class="card-body">
                    <div class="row">
                        @csrf

                        <input type="hidden" name="id" value="{{ $response['datanya']->id }}">
                        <input type="hidden" name="current_image" value="{{ $response['datanya']->photo }}">

                        <div class="col-sm-6">
                            <div class="form-group row">
                                <label for="name" class="col-sm-3 col-form-label col-form-label-sm">Name</label>
                                <div class="col-sm-9">
                                    <input type="text" name="name" class="form-control form-control-sm @error('name') is-invalid @enderror" value="{{ $response['datanya']->name }}" required autocomplete="name" autofocus placeholder="Enter your Name">

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="role" class="col-sm-3 col-form-label col-form-label-sm">User Akses</label>
                                <div class="col-sm-9">
                                    <select class="form-control form-control-sm @error('role') is-invalid @enderror" name="role" id="role">
                                        @if($response['datanya']->role == "1")
                                            <option value="1" Selected>Admin</option>
                                            <option value="2">Users</option>
                                        @else
                                            <option value="1">Admin</option>
                                            <option value="2" Selected>Users</option>
                                        @endif
                                    </select>

                                    @error('role')
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

                            <div class="form-group row">
                                <label for="phone" class="col-sm-3 col-form-label col-form-label-sm">No Phone</label>
                                <div class="col-sm-9">
                                    <input type="text" name="phone" class="form-control form-control-sm @error('phone') is-invalid @enderror" value="{{ $response['datanya']->phone }}" required autocomplete="phone" id="phone" placeholder="Enter your Number Phone">

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
                                    <input type="date" name="birth_day" class="form-control form-control-sm" id="birth_day" value="{{ $response['datanya']->birth_day }}" required autocomplete="birth_day">
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
                                        @if($response['datanya']->gender == "laki-laki")
                                            <option value="laki-laki" Selected>Laki - Laki</option>
                                            <option value="perempuan">Perempuan</option>
                                        @else
                                            <option value="laki-laki">Laki - Laki</option>
                                            <option value="perempuan" Selected>Perempuan</option>
                                        @endif
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
                                    <input type="text" name="ktp" class="form-control form-control-sm @error('ktp') is-invalid @enderror" id="ktp" placeholder="Enter your Identity Number" value="{{ $response['datanya']->ktp }}" required autocomplete="ktp">

                                    @error('ktp')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="photo" class="col-sm-3 col-form-label col-form-label-sm">Foto Diri</label>
                                <div class="col-sm-9">
                                    <div class="custom-file">
                                    <input type="file" name="image" class="form-control-file">
                                    </div>
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