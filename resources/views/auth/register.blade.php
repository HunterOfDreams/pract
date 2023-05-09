@extends('layouts.auth-master')

@section('content')
    <form method="post" action="{{ route('register.perform') }}" align=”center”>

        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        <!--img class="mb-4" src="{!! url('images/bootstrap-logo.svg') !!}" alt="" width="72" height="57"-->
        
        <h1 class="h3 mb-3 fw-normal">Register</h1>

        <div class="form-group form-floating mb-3">
            <input type="text" class="form-control" name="username" value="{{ old('username') }}" placeholder="Username" required="required" autofocus>
            <label for="floatingName">Username</label>
            @if ($errors->has('username'))
                <span class="text-danger text-left">{{ $errors->first('username') }}</span>
            @endif
        </div>

        <div class="form-group form-floating mb-3">
            <input type="text" class="form-control" name="surename" value="{{ old('surename') }}" placeholder="Surename" required="required" autofocus>
            <label for="floatingSureame">Surename</label>
            @if ($errors->has('surename'))
                <span class="text-danger text-left">{{ $errors->first('surename') }}</span>
            @endif
        </div>

        <div class="form-group form-floating mb-3">
            <select name="sex" type="text" class="form-control" value="{{ old('sex') }}" placeholder="Стать" required="required" autofocus>
                    <option value="" >Стать</option>
                    <option value="1">Чоловіча</option>
                    <option value="2">Жіноча</option>
            </select>
            <!--input type="text" class="form-control" name="sex" value="{{ old('sex') }}" placeholder="Sex" required="required" autofocus-->
            <label for="floatingSex">Sex</label>
            @if ($errors->has('sex'))
                <span class="text-danger text-left">{{ $errors->first('sex') }}</span>
            @endif
        </div>

        <div class="form-group form-floating mb-3">
            <input type="text" class="form-control" name="nationality" value="{{ old('nationality') }}" placeholder="Nationality" required="required" autofocus>
            <label for="floatingNationality">Nationality</label>
            @if ($errors->has('nationality'))
                <span class="text-danger text-left">{{ $errors->first('nationality') }}</span>
            @endif
        </div>

        <div class="form-group form-floating mb-3">
            <input type="text" class="form-control" name="organisation" value="{{ old('organisation') }}" placeholder="Organisation" required="required" autofocus>
            <label for="floatingOrganisation">Organisation</label>
            @if ($errors->has('organisation'))
                <span class="text-danger text-left">{{ $errors->first('organisation') }}</span>
            @endif
        </div>

        <div class="form-group form-floating mb-3">
            <input type="text" class="form-control" name="position" value="{{ old('position') }}" placeholder="Position" required="required" autofocus>
            <label for="floatingName">Position</label>
            @if ($errors->has('position'))
                <span class="text-danger text-left">{{ $errors->first('position') }}</span>
            @endif
        </div>

        <div class="form-group form-floating mb-3">
            <input type="date" class="form-control" name="date" value="{{ old('date') }}" placeholder="Date" required="required" autofocus>
            <label for="floatingDate">Date</label>
            @if ($errors->has('date'))
                <span class="text-danger text-left">{{ $errors->first('date') }}</span>
            @endif
        </div>

        <div class="form-group form-floating mb-3">
            <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="name@example.com" required="required" autofocus>
            <label for="floatingEmail">Email address</label>
            @if ($errors->has('email'))
                <span class="text-danger text-left">{{ $errors->first('email') }}</span>
            @endif
        </div>
        
        <div class="form-group form-floating mb-3">
            <input type="password" class="form-control" name="password" value="{{ old('password') }}" placeholder="Password" required="required">
            <label for="floatingPassword">Password</label>
            @if ($errors->has('password'))
                <span class="text-danger text-left">{{ $errors->first('password') }}</span>
            @endif
        </div>

        <div class="form-group form-floating mb-3">
            <input type="password" class="form-control" name="password_confirmation" value="{{ old('password_confirmation') }}" placeholder="Confirm Password" required="required">
            <label for="floatingConfirmPassword">Confirm Password</label>
            @if ($errors->has('password_confirmation'))
                <span class="text-danger text-left">{{ $errors->first('password_confirmation') }}</span>
            @endif
        </div>

        <button class="w-100 btn btn-lg btn-primary" type="submit">Register</button>
        
        @include('auth.partials.copy')
    </form>
@endsection