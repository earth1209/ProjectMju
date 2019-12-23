<div class="sidebar" data="skypurple">
    <div class="sidebar-wrapper">
        <div class="logo">
            <a href="#" class="simple-text logo-mini">{{ _('WD') }}</a>
            <a href="#" class="simple-text logo-normal">{{ _('White Dashboard') }}</a>
        </div>
        <ul class="nav">
            <li @if ($pageSlug == 'dashboard') class="active " @endif>
                <a href="{{ route('home') }}">
                    <i class="tim-icons icon-chart-pie-36"></i>
                    <p>{{ _('Dashboard') }}</p>
                </a>
            </li>
            <li>
                <a data-toggle="collapse" href="#laravel-examples" aria-expanded="true">
                    <i class="fab fa-laravel" ></i>
                    <span class="nav-link-text" >{{ __('Laravel Examples') }}</span>
                    <b class="caret mt-1"></b>
                </a>

                <div class="collapse show" id="laravel-examples">
                    <ul class="nav pl-4">
                        <li @if ($pageSlug == 'profile') class="active " @endif>
                            <a href="{{ route('profile.edit')  }}">
                                <i class="tim-icons icon-single-02"></i>
                                <p>{{ _('User Profile') }}</p>
                            </a>
                        </li>
                        <li @if ($pageSlug == 'users') class="active " @endif>
                            <a href="{{ route('user.index')  }}">
                                <i class="tim-icons icon-bullet-list-67"></i>
                                <p>{{ _('User Management') }}</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>


            <li>
                <a data-toggle="collapse" href="#table" aria-expanded="true">
                <i class="tim-icons icon-badge"></i>
                    <span class="nav-link-text" >{{ __('จัดการข้อมูลผู้ใช้งาน') }}</span>
                    <b class="caret mt-1"></b>
                </a>

                
                <div class="collapse show" id="table">
                    <ul class="nav pl-4">
                        <li @if ($pageSlug == 'tablerightsmanagement') class="active " @endif>
                            <a href="{{ route('users.tablerightsmanagement')  }}">
                                <i class="tim-icons icon-shape-star"></i>
                                <p>{{ _('การจัดการสิทธิ์') }}</p>
                            </a>
                        </li>
                       
                    </ul>
                </div>

       
            </li>




            <li>
                <a data-toggle="collapse" href="#stdIntern" aria-expanded="true">
                <i class="tim-icons icon-single-02"></i>
                    <span class="nav-link-text" >{{ __('นักศึกษาที่ขอฝึกงาน') }}</span>
                    <b class="caret mt-1"></b>
                </a>

                <div class="collapse show" id="stdIntern">
                    <ul class="nav pl-4">
                        <li @if ($pageSlug == 'intern') class="active " @endif>
                            <a href="{{ route('pages.intern')  }}">
                                <i class="tim-icons icon-single-02"></i>
                                <p>{{ _('นักศึกษาที่ขอฝึกงาน') }}</p>
                            </a>
                        </li>
                        <li @if ($pageSlug == 'users') class="active " @endif>
                            <a href="{{ route('user.index')  }}">
                                <i class="tim-icons icon-bullet-list-67"></i>
                                <p>{{ _('User Management') }}</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li @if ($pageSlug == 'icons') class="active " @endif>
                <a href="{{ route('pages.icons') }}">
                    <i class="tim-icons icon-atom"></i>
                    <p>{{ _('Icons') }}</p>
                </a>
            </li>
            <li @if ($pageSlug == 'maps') class="active " @endif>
                <a href="{{ route('pages.maps') }}">
                    <i class="tim-icons icon-pin"></i>
                    <p>{{ _('Maps') }}</p>
                </a>
            </li>
            <li @if ($pageSlug == 'notifications') class="active " @endif>
                <a href="{{ route('pages.notifications') }}">
                    <i class="tim-icons icon-bell-55"></i>
                    <p>{{ _('Notifications') }}</p>
                </a>
            </li>
            
            <li @if ($pageSlug == 'tables') class="active " @endif>
                <a href="{{ route('pages.tables') }}">
                    <i class="tim-icons icon-puzzle-10"></i>
                    <p>{{ _('Table List') }}</p>
                </a>
            </li>
            <li @if ($pageSlug == 'typography') class="active " @endif>
                <a href="{{ route('pages.typography') }}">
                    <i class="tim-icons icon-align-center"></i>
                    <p>{{ _('Typography') }}</p>
                </a>
            </li>
            <br><br>
        </ul>
    </div>
</div>
