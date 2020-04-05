<div class="sidebar" data="skypurple">
    <div class="sidebar-wrapper">
        <div class="logo">
            {{-- <a href="#" class="simple-text logo-mini">{{ _('') }}</a> --}}
           <a href="#" class="simple-text logo-normal text-center">{{ _('เมนู') }} <b>{{ old('type_name_thai', auth()->user()->type_name_thai) }} </b></a>
            
        </div>
        <ul class="nav">

            @if(!Auth::guest() && Auth::user()->type==1)
                <li>
                    <li @if ($pageSlug == 'dashboard') class="active" @endif>
                        <a href="{{ route('home') }}">
                            <i class="tim-icons icon-bank"></i>
                            <p>{{ _('หน้าหลัก') }}</p>
                        </a>
                    </li>
                    <li>
                        <a data-toggle="collapse" href="#table" aria-expanded="true">
                        <i class="tim-icons icon-badge"></i>
                            <span class="nav-link-text" >{{ __('จัดการข้อมูลผู้ใช้งาน') }}</span>
                            <b class="caret mt-1"></b>
                        </a>

                        <div class="collapse show" id="table">
                            <ul class="nav pl-4">
                                <li @if ($pageSlug == 'superadmins') class=" " @endif>
                                    <a href="{{ url('/admin/superadmins')  }}">
                                        <i class="tim-icons icon-shape-star"></i>
                                        <p>{{ _('การจัดการสิทธิ์') }}</p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </li>
            @endif

            @if(!Auth::guest() && Auth::user()->type==2)
                <li @if ($pageSlug == 'dashboard') class="active" @endif>
                    <a href="{{ route('home') }}">
                        <i class="tim-icons icon-bank"></i>
                        <p>{{ _('หน้าหลัก') }}</p>
                    </a>
                </li>
                <li @if ($pageSlug == 'student_status') class="" @endif>
                    <a href="{{ route('officer.student_status') }}">
                        <i class="tim-icons icon-badge"></i>
                        <p>{{ _('ข้อมูลนักศึกษา') }}</p>
                    </a>
                </li>
                <li @if ($pageSlug == 'name_list_bycompany') class="" @endif>
                    <a href="{{ route('officer.name_list_by_company') }}">
                        <i class="tim-icons icon-badge"></i>
                        <p>{{ _('ข้อมูลนักศึกษาที่เลือกบริษัท') }}</p>
                    </a>
                </li>
                <li @if ($pageSlug == 'internship_document') class="" @endif>
                    <a href="{{ route('officer.internship_document') }}">
                        <i class="tim-icons icon-paper"></i>
                        <p>{{ _('เอกสาร') }}</p>
                    </a>
                </li>
                <li @if ($pageSlug == 'notifications') class="" @endif>
                    <a href="{{ route('officer.announce') }}">
                        <i class="tim-icons icon-volume-98"></i>
                        <p>{{ _('ประชาสัมพันธ์ข่าวสาร') }}</p>
                    </a>
                </li>
                <li @if ($pageSlug == 'account') class="" @endif>
                    <a href="{{ route('officer.account') }}">
                        <i class="tim-icons icon-simple-add"></i>
                        <p>{{ _('จัดการข้อมูลบริษัท') }}</p>
                    </a>
                </li>
                <li @if ($pageSlug == 'name_list_by_company') class="" @endif>
                    <a href="{{ route('officer.name_list_by_company') }}">
                        <i class="tim-icons icon-bullet-list-67"></i>
                        <p>{{ _('รายชื่อน.ศ.ที่บริษัทรับฝึกงาน') }}</p>
                    </a>
                </li>
                <li @if ($pageSlug == 'icons') class="" @endif>
                    <a href="{{ route('pages.icons') }}">
                        <i class="tim-icons icon-bullet-list-67"></i>
                        <p>{{ _('icon') }}</p>
                    </a>
                </li>
                <br><br>
                <br> <br> <br> <br>         
            @endif

            @if(!Auth::guest() && Auth::user()->type==3)
                <li @if ($pageSlug == 'dashboard') class="" @endif>
                    <a href="{{ route('home') }}">
                        <i class="tim-icons icon-bank"></i>
                        <p>{{ _('หน้าหลัก') }}</p>
                    </a>
                </li>
                <li @if ($pageSlug == 'regulation') class="" @endif>
                    <a href="{{ route('student.show_regulation') }}">
                        <i class="tim-icons icon-alert-circle-exc"></i>
                        <p>{{ _('ข้อกำหนดก่อนไปฝึกงาน') }}</p>
                    </a>
                </li>
                <li @if ($pageSlug == 'compa_information') class=" " @endif>
                    <a href="{{ route('student.compa_information') }}">
                        <i class="tim-icons icon-chart-bar-32"></i>
                        <p>{{ _('ข้อมูลบริษัท') }}</p>
                    </a>
                </li>
                <li @if ($pageSlug == 'diaries') class=" " @endif>
                    <a href="{{ route('student.show_diaries') }}">
                        <i class="tim-icons icon-book-bookmark"></i>
                        <p>{{ _('บันทึกประจำวัน') }}</p>
                    </a>
                </li>
                <li @if ($pageSlug == 'name_list_by_company') class=" " @endif>
                    <a href="{{ route('officer.name_list_by_company') }}">
                        <i class="tim-icons icon-chat-33"></i>
                        <p>{{ _('รายชื่อน.ศ.ที่บริษัทรับฝึกงาน') }}</p>
                    </a>
                </li>

            @endif

            @if(!Auth::guest() && Auth::user()->type==4)
                <li @if ($pageSlug == 'dashboard') class="active" @endif>
                    <a href="{{ route('home') }}">
                        <i class="tim-icons icon-bank"></i>
                        <p>{{ _('หน้าหลัก') }}</p>
                    </a>
                </li>
                <li @if ($pageSlug == 'resume') class=" " @endif>
                    <a href="{{ route('company.resume') }}">
                        <i class="tim-icons icon-chart-pie-36"></i>
                        <p>{{ _('ข้อมูลนักศึกษา') }}</p>
                    </a>
                </li>
                
                <li @if ($pageSlug == 'icons') class=" " @endif>
                    <a href="{{ route('pages.icons') }}">
                        <i class="tim-icons icon-atom"></i>
                        <p>{{ _('บันทึกประจำวัน') }}</p>
                    </a>
                </li>
            @endif

            @if(!Auth::guest() && Auth::user()->type==5)
                <li @if ($pageSlug == 'dashboard') class="active" @endif>
                    <a href="{{ route('company.index') }}">
                        <i class="tim-icons icon-bank"></i>
                        <p>{{ _('หน้าหลัก') }}</p>
                    </a>
                </li>
                <li @if ($pageSlug == 'resume') class=" " @endif>
                    <a href="{{ route('company.resume') }}">
                        <i class="tim-icons icon-chart-pie-36"></i>
                        <p>{{ _('รายชื่อนักศึกษา') }}</p>
                    </a>
                </li>
                
                <li @if ($pageSlug == 'icons') class=" " @endif>
                    <a href="{{ route('pages.icons') }}">
                        <i class="tim-icons icon-atom"></i>
                        <p>{{ _('บันทึกประจำวันน.ศ.') }}</p>
                    </a>
                </li>
                <li @if ($pageSlug == 'notifications') class=" " @endif>
                    <a href="{{ route('pages.notifications') }}">
                        <i class="tim-icons icon-bell-55"></i>
                        <p>{{ _('ติดต่อเจ้าหน้าที่') }}</p>
                    </a>
                </li>
                <li @if ($pageSlug == 'tables') class=" " @endif>
                    <a href="{{ route('pages.tables') }}">
                        <i class="tim-icons icon-puzzle-10"></i>
                        <p>{{ _('ประเมินนักศึกษา') }}</p>
                    </a>
                </li>

                @endif

                {{-- <li @if ($pageSlug == 'typography') class="active " @endif>
                    <a href="{{ route('pages.typography') }}">
                        <i class="tim-icons icon-align-center"></i>
                        <p>{{ _('Typography') }}</p>
                    </a>
                </li>
                <li @if ($pageSlug == 'rtl') class="active " @endif>
                    <a href="{{ route('pages.rtl') }}">
                        <i class="tim-icons icon-world"></i>
                        <p>{{ _('RTL Support') }}</p>
                    </a>
                </li>
                <li class=" {{ $pageSlug == 'upgrade' ? 'active' : '' }}">
                    <a href="{{ route('pages.upgrade') }}">
                        <i class="tim-icons icon-spaceship"></i>
                        <p>{{ _('Upgrade to PRO') }}</p>
                    </a>
                </li> --}}
        </ul>
    </div>
</div>
