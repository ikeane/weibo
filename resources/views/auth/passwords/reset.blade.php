@extends('layouts.default')
@section('title', '更新密码')

@section('content')
    <div class="offset-md-1 col-md-10">
        <div class="card">
            <div class="card-header">
                <h5>更新密码</h5>
            </div>

            <div class="card-body">
                <form action="{{ route('password.update') }}" method="POST">
                    @csrf

                    <input type="hidden" name="token" value="{{ $token }}">

                    <div class="form-group row">
                        <label for="email" class="col-md-4 col-form-label text-md-right">Email地址</label>
                        <div class="col-md-6">
                            <input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                name="email" id="email" value="{{ $email ?? old('email') }}" required autofocus>

                            @if($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password" class="col-md-4 col-form-label text-md-right">密码</label>
                        <div class="col-md-6">
                            <input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                name="password" id="password" required>

                            @if($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password-confirm" class="col-md-4 col-form-label text-md-right">确认密码</label>
                        <div class="col-md-6">
                            <input type="password" class="form-control" name="password_confirmation" id="password-confirm"
                                required>
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="offset-md-4 col-md-6">
                            <button class="btn btn-primary" type="submit">重置密码</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
