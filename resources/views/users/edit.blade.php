@extends('layouts.default')
@section('title', '更新个人资料')
@section('content')
    <div class="offset-md-2 col-md-8">
        <div class="card">
            <div class="card-header">
                <h5>更新个人资料</h5>
            </div>
            <div class="card-body">
                @include('shared._errors')

                <div class="gravatar_edit">
                    <a href="http://gravatar.com/emails" target="_blank">
                        <img src="{{ $user->gravatar('200') }}" alt="{{ $user->name }}" class="gravatar">
                    </a>
                </div>

                <form action="{{ route('users.update', $user->id) }}" method="POST">
                    {{ csrf_field() }}
                    {{ method_field('PATCH') }}

                    <div class="form-group">
                        <label for="name">名称: </label>
                        <input type="text" class="form-control" name="name" value="{{ $user->name }}">
                    </div>

                    <div class="form-group">
                        <label for="email">邮箱: </label>
                        <input type="text" class="form-control" name="email" value="{{ $user->email }}" disabled>
                    </div>

                    <div class="form-group">
                        <label for="password">密码: </label>
                        <input type="password" class="form-control" name="password" value="{{ old('password') }}">
                    </div>

                    <div class="form-group">
                        <label for="password_confirmation">确认密码: </label>
                        <input type="password" class="form-control" name="password_confirmation"
                            value="{{ old('password_confirmation') }}">
                    </div>

                    <button class="btn btn-primary" type="submit">更新</button>
                </form>
            </div>
        </div>
    </div>

@endsection
