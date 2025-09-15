@extends('layouts.front.app')
@section('css')
<style>
    .error{
            color:red !important;
        }
</style>
@endsection
@section('content')

    @if(Session::has('error'))
    <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('error') }}</p>
    @endif

    <div class="login-register-page">
        <div class="container">
            <div class="accounts-heading text-center">
                {!! __('myaccount.heading') !!}
            </div>
            <div class="login-reg-wraper">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="login-block-wrap login-reg-block">
                            <div class="heading-div-lock">
                                {{ __('myaccount.loginTitle') }}
                            </div>
                            <div class="login-reg-box">
                                <form id="loginCustomers" action="{{route('login-customers')}}" method="POST">
                                    @csrf
                                    <div class="checkout-form-group">
                                        <label class="input-label">{{ __('myaccount.emailAddressLogin') }} <abbr class="required">*</abbr></label>
                                        <input type="text" required="required" name="email" id="email" class="form-control">
                                    </div>
                                    <div class="checkout-form-group">
                                        <label class="input-label">{{ __('myaccount.passwordLogin') }}  <abbr class="required">*</abbr></label>
                                        <input type="password" required="required" name="password" id="password" class="form-control">
                                    </div>
                                    <div class="action-login">
                                        <button class="btn-bg-small" type="submit">{{ __('myaccount.loginButton') }}</button>
                                            <label class="rememberme">
                                                <input type="checkbox">
                                                <span>{{ __('myaccount.loginRemeber') }}</span>
                                            </label>
                                        </div>
                                    <div class="lostpassword">
                                        <a href="/users/forget-password">{{ __('myaccount.lostPassword') }}</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6">
                        <div class="login-block-wrap login-reg-block">
                            <div class="heading-div-lock">
                                {{ __('myaccount.registerTitle') }}
                            </div>
                            <div class="login-reg-box">
                                <form id="registerCustomers" action="{{route('register-customers')}}" method="POST">
                                    @csrf
                                    <div class="checkout-form-group">
                                        <label class="input-label"> {{ __('myaccount.registerUsername') }} <abbr class="required">*</abbr></label>
                                        <input type="text" name="username" id="username" required="required" class="form-control {{ $errors->has('username') ? 'error' : '' }}">
                                        @if ($errors->has('username'))
                                            <div class="error">
                                                {{ $errors->first('username') }}
                                            </div>
                                        @endif
                                    </div>
                                    <div class="checkout-form-group">
                                        <label class="input-label">{{ __('myaccount.registerEmail') }} <abbr class="required">*</abbr></label>
                                        <input type="email" name="email" id="email" required="required" class="form-control {{ $errors->has('email') ? 'error' : '' }}">
                                        @if ($errors->has('email'))
                                        <div class="error">
                                            {{ $errors->first('email') }}
                                        </div>
                                        @endif
                                    </div>
                                    <div class="checkout-form-group">
                                        <label class="input-label">{{ __('myaccount.registerPassword') }}  <abbr class="required">*</abbr></label>
                                        <input type="password" name="password" id="password" required="required" class="form-control {{ $errors->has('password') ? 'error' : '' }}">
                                        @if ($errors->has('password'))
                                            <div class="error">
                                                {{ $errors->first('password') }}
                                            </div>
                                        @endif
                                    </div>
                                    <div class="log-privacy-policy-text">
                                        {!! __('myaccount.registerText') !!} 
                                    </div>
                                    <div class="action-login">
                                        <button class="btn-bg-small" type="submit">{!! __('myaccount.registerButton') !!} </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection

@section('js')
@endsection
