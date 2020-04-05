@extends('layouts.app', ['class' => 'login-page', 'page' => _('Login Page'), 'contentClass' => 'login-page'])

@section('content')
    {{-- <div class="col-md-10 text-center ml-auto mr-auto">
        <h3 class="mb-5"></h3>
    </div> --}}

    <section class="section_offset relative wrapper" style="margin-top: 0px;">
        <div class="video_wrap">
            <video autoplay="autoplay" muted="muted" loop="loop">
                {{-- <source src="{{ asset('white') }}/img/video.mp4" type="video/mp4">
                <source src="{{ asset('white') }}/img/video.mp4" type="video/webm"> --}}
            </video>
        </div>
        <div class="container">
            <div data-appear-animation="fadeInUp" data-appear-animation-delay="800" class="relative appear-animation fadeInUp appear-animation-visible" style="animation-delay: 800ms;">
                <div class="text-center"><br><br><br>
                    <div class="col-lg-4 col-md-6 ml-auto mr-auto">

                        <form class="form" method="post" action="{{ route('login') }}">
                            @csrf
                
                            <div class="card card-login card-white" >
                                <div class="card-header">
                                    {{-- <img src="{{ asset('white') }}/img/icon/unicon6.jpg" alt="" sizes="cover" > --}}
                                    <h1 class="card-title text-center">{{ _('Log in') }}</h1>
                                </div>
                                <div class="card-body">
                                    {{-- <p class="text-dark mb-2">Sign in with <strong>admin@white.com</strong> and the password <strong>secret</strong></p> --}}
                                    <div class="input-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <i class="tim-icons icon-email-85"></i>
                                            </div>
                                        </div>
                                        <input type="email" name="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="{{ _('Email') }}">
                                        @include('alerts.feedback', ['field' => 'email'])
                                    </div>
                                    <div class="input-group{{ $errors->has('password') ? ' has-danger' : '' }}">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <i class="tim-icons icon-lock-circle"></i>
                                            </div>
                                        </div>
                                        <input type="password" placeholder="{{ _('Password') }}" name="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}">
                                        @include('alerts.feedback', ['field' => 'password'])
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" href="" class="btn btn-primary btn-lg btn-block mb-3">{{ _('Get Started') }}</button>
                                    <div class="pull-left">
                                        <h6>
                                            <a href="{{ route('register') }}" class="link footer-link">{{ _('Create Account') }}</a>
                                        </h6>
                                    </div>
                                    <div class="pull-right">
                                        <h6>
                                            <a href="{{ route('password.request') }}" class="link footer-link">{{ _('Forgot password?') }}</a>
                                        </h6>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    


    {{-- <section class="section_offset relative wrapper" style="margin-top: 0px;">
        <div class="video_wrap">
            <video autoplay="autoplay" muted="muted" loop="loop">
                <source src="{{ asset('white') }}/img/video.mp4" alt="">
            </video>
        </div>
        <div class="container">
            <div data-appear-animation="fadeInUp" data-appear-animation-delay="800" class="relative appear-animation fadeInUp appear-animation-visible" style="animation-delay: 800ms;">
                <div class="row">
                    <div class="create_account_form_wrap r_corners w_xs_full" style="margin: 0px auto;">
                        <h4>เข้าสู่ระบบ</h4>
                        <form name="frmMain" method="post" action="login.php" class="create_account_form">
                            <ul>
                                <li class="m_bottom_10 m_xs_bottom_15 relative">
                                    <i class="icon-user login_icon fs_medium color_grey_light_2"></i> 
                                    <input type="text" name="username" id="big-username" size="40" value="" placeholder="ชื่อผู้ใช้" class="r_corners bg_light w_full border_none">
                                </li> 
                                <li class="m_bottom_20 m_xs_bottom_15 relative">
                                    <i class="icon-lock login_icon fs_medium color_grey_light_2"></i> 
                                    <input type="password" name="password" id="big-password" size="40" value="" placeholder="รหัสผ่าน" class="r_corners bg_light w_full border_none"></li> 
                                    <li class="t_align_c">
                                        <input name="remember_me" type="checkbox" id="big-remember_me" value="1" class="d_none"> 
                                        <label for="big-remember_me" class="d_inline_m m_right_10"> จำข้อมูลการล็อกอินไว้</label> 
                                        <button type="submit" name="login" id="login" value="Login" class="button_type_2 d_inline_b color_purple r_corners tr_all fw_light">
                                            <i class="icon-key"></i> เข้าสู่ระบบ
                                        </button>
                                    </li>
                                </li>
                            </ul>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

@endsection
