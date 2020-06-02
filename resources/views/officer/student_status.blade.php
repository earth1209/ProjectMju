@extends('Layouts.app',['page' => __('Officer'), 'pageSlug' => 'student_status'])

@section('content')

    <div class="row">
        <div class="col-12">
            <div class="card card-chart">
                <h4 class="card-header" style="background-color: #89e3fa ">
                    <ul class="row">
                        <div class="col-md-6">
                            <img src="{{ asset('white') }}/img/icon/folder.png" style="width: 7%;" alt="homepage" class="img-responsive" />
                            ข้อมูลนักศึกษา
                        </div>
                        <div class="col-md-6 ">
                            <div class="form-inline float-right">
                                <label for="">หาข้อมูลแต่ละปี :&nbsp;</label>
                                <form action="/company/resume" method="get">
                                    <select class="form-control mr-sm-2" name="" style="width: 95px;background: #ffffff">
                                        @php $firstYear = (int)date('Y')-5; @endphp
                                        @php $thisYear = $firstYear+5; @endphp
                                        @php for($i=$firstYear;$i<=$thisYear;$i++) 
                                            { 
                                                echo '<option value=' .$i.'>ปี '.$i.'</option>';
                                            }
                                        @endphp
                                    </select>
                                    {{ Form::button('<i class="tim-icons icon-zoom-split" aria-hidden="true"></i>', ['type' => 'submit', 'class' => 'btn btn-info waves-effect px-3'] ) }}
                                </form>    
                            </div>
                        </div>             
                    </ul> 
                </h4>
            </div>
        </div>
    </div>
    <div class="col-12">
        {{-- <div class="row"> --}}
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="col-md-6">
                        <div class="navbar-nav">
                            <a class="nav-item nav-link active" href="{{ url('officer/stu_companies') }}">สถานะการฝึกงานของนักศึกษา<span class="sr-only">(current)</span></a>
                            <a class="nav-item nav-link" href="{{ route('officer.stu_activity_hours') }}">ชั่วโมงกิจกรรม</a>
                        </div>
                    </div>
                    <div class="col-md-6 text-right">
                        {{-- <a href="{{ route('stu_companies.create') }}">
                            {{ Form::button('บันทึกข้อมูล', ['type' => 'submit', 'class' => 'btn btn-info waves-effect px-3'] ) }}
                            
                        </a> --}}
                    </div>
                    
                </div>
            </nav>
        {{-- </div> --}}
    </div>
     
    <div class="col-12">
        <div class="card card-chart">
            <div class="card-header" style="background-color: #ffffff ">
                <div class="container">
                    <div class="card wow bounceInUp">
                        <div class="table-responsive">
                            <table class="table table-hover table-striped table-bordered" id="table2ss" >
                                @include('alert._messages')

                                <thead class="table-info text-primary">
                                <tr>
                                    <th class="text-center" scope="col" rowspan="">ลำดับ</th>
                                    <th class="text-center" scope="col" rowspan="">รหัสนักศึกษา</th>
                                    <th class="text-center" scope="col" rowspan="">ชื่อ-สกุล</th>
                                    <th class="text-center" scope="col" rowspan="">เกรดเฉลี่ย</th>
                                    <th class="text-center" scope="col" rowspan="">ตรวจสอบฝึกงาน</th>
                                    <th class="text-center" scope="col" rowspan="">ทางเลือกของนักศึกษา</th>
                                    <th class="text-center" scope="row" rowspan="">สถานที่ฝึกงาน</th>
                                    <th class="text-center" scope="row" rowspan="">สถานะการติดต่อ</th>
                                    <th class="text-center" scope="row" rowspan="">แก้ไข</th>
                                    <th class="text-center" scope="col" rowspan="">ลบ</th>
                                </tr>
                                </thead>
                                <tbody>
                                    {{-- @for ( $i=0 ; $i < 5; $i++) --}}
                                    @foreach ($stu_company as $stu_companies)
                                        @if ($stu_companies->students->academic_year == 2559)
                                    <tr>
                                        <td class="text-center">{{ $stu_companies->stu_companies_id }}</td>
                                        <td class="text-center">{{ $stu_companies->students->code }}</td>
                                        <td class="text-center">{{ $stu_companies->students->stu_name }}</td>
                                        <td class="text-center">{{ $stu_companies->students->gpa }}</td>
                                        @if ($stu_companies->internship_stt_id ==1)
                                            <td class="text-center"><img src="{{ asset('white') }}/img/icon/tick.png" style="width: 25px;" salt="tack" class="img-responsive" /></td>
                                            @elseif($stu_companies->internship_stt_id ==2)
                                                <td class="text-center"><img src="{{ asset('white') }}/img/icon/cancel.png" style="width: 25px;" salt="tack" class="img-responsive" /></td>
                                            @else
                                                <td><font color="red" >ยังไม่ดำเนินการ</font> </td>
                                        @endif
                                        
                                        @if ($stu_companies->stu_option_stt_id ==1)
                                            <td class="text-center">
                                                <a href="#" data-toggle="tooltip" title="โปรเจค">
                                                    <img src="{{ asset('white') }}/img/icon/project.png" style="width: 40px;" salt="parking" class="img-responsive" />
                                                </a>    
                                            </td>
                                            @elseif($stu_companies->stu_option_stt_id ==2)
                                                <td class="text-center">
                                                    <a href="#" data-toggle="tooltip" title="สหกิจ">
                                                        <img src="{{ asset('white') }}/img/icon/co-op2.png" style="width: 40px;" salt="tack" class="img-responsive" />
                                                    </a>
                                                </td>
                                            @elseif($stu_companies->stu_option_stt_id ==3)
                                                <td class="text-center">
                                                    <a href="#" data-toggle="tooltip" title="โปรเจค หรือ สหกิจ">
                                                        <img src="{{ asset('white') }}/img/icon/pc.jpg" style="width: 40px;" salt="tack" class="img-responsive" />
                                                    </a>    
                                                </td>
                                            @elseif($stu_companies->stu_option_stt_id ==4)
                                                <td class="text-center">
                                                    <a href="#" data-toggle="tooltip" title="โปรเจค หรือ สหกิจปีถัดไป!">
                                                        <img src="{{ asset('white') }}/img/icon/s.png" style="width: 40px;" salt="tack" class="img-responsive" />
                                                    </a>
                                                </td>            
                                            @elseif($stu_companies->stu_option_stt_id ==5)
                                                <td class="text-center">
                                                    <a href="#" data-toggle="tooltip" title="เตรียมหัวข้อโครงงานสหกิจที่ชัดเจน!">
                                                        <img src="{{ asset('white') }}/img/icon/s.png" style="width: 40px;" salt="tack" class="img-responsive" />
                                                    </a>
                                                </td>
                                            @elseif($stu_companies->stu_option_stt_id ==5) 
                                                <td class="text-center">
                                                    <a href="#" data-toggle="tooltip" title="โปรเจค แต่ปีนี้ต้องฝึกงาน ไม่งั้นไม่สามารถลงทะเบียนเทอม 1 หรือ 2 ได้!">
                                                        <img src="{{ asset('white') }}/img/icon/s.png" style="width: 40px;" salt="tack" class="img-responsive" />
                                                    </a>
                                                </td>
                                            @else
                                                <td><font color="red" >ยังไม่ดำเนินการ</font> </td>
                                        @endif
                                        <td class="text-center">{{ $stu_companies->companies->first()->companies_name}}</td>

                                        @if ($stu_companies->ct_status_id ==1)
                                            <td class="text-center">
                                                    <img src="{{ asset('white') }}/img/icon/one.png" style="width: 20px;" salt="parking" class="img-responsive" data-toggle="tooltip" title="ได้ที่ฝึกงานแล้ว และแจ้งสาขาแล้วให้ทำใบอนุเคราะห์รับเข้าฝึกงาน"/>
                                            </td>
                                            @elseif($stu_companies->ct_status_id ==2)
                                                <td class="text-center">
                                                        <img src="{{ asset('white') }}/img/icon/one.png" style="width: 20px;" salt="parking" class="img-responsive" data-toggle="tooltip" title="ได้ที่ฝึกงานแล้ว และแจ้งสาขาแล้วให้ทำใบอนุเคราะห์รับเข้าฝึกงาน"/>
                                                        <img src="{{ asset('white') }}/img/icon/two.png" style="width: 20px;" salt="parking" class="img-responsive" data-toggle="tooltip" title="สาขากำลังทำใบขอความอนุเคราะห์รับเข้าฝึกงาน "/>
                                                </td>
                                            @elseif($stu_companies->ct_status_id ==3)
                                                <td class="text-center">
                                                        <img src="{{ asset('white') }}/img/icon/one.png" style="width: 20px;" salt="parking" class="img-responsive" data-toggle="tooltip" title="ได้ที่ฝึกงานแล้ว และแจ้งสาขาแล้วให้ทำใบอนุเคราะห์รับเข้าฝึกงาน"/>
                                                        <img src="{{ asset('white') }}/img/icon/two.png" style="width: 20px;" salt="parking" class="img-responsive" data-toggle="tooltip" title="สาขากำลังทำใบขอความอนุเคราะห์รับเข้าฝึกงาน  ค"/>
                                                        <img src="{{ asset('white') }}/img/icon/three.png" style="width: 20px;" salt="parking" class="img-responsive" data-toggle="tooltip" title="นักศึกษามารับเอกสารไปยื่น ณ สถานที่ฝึกงานแล้ว"/>
                                                </td>
                                            @elseif($stu_companies->ct_status_id ==4)
                                                <td class="text-center">
                                                        <img src="{{ asset('white') }}/img/icon/one.png" style="width: 20px;" salt="parking" class="img-responsive" data-toggle="tooltip" title="ได้ที่ฝึกงานแล้ว และแจ้งสาขาแล้วให้ทำใบอนุเคราะห์รับเข้าฝึกงาน"/>
                                                        <img src="{{ asset('white') }}/img/icon/two.png" style="width: 20px;" salt="parking" class="img-responsive" data-toggle="tooltip" title="สาขากำลังทำใบขอความอนุเคราะห์รับเข้าฝึกงาน "/>
                                                        <img src="{{ asset('white') }}/img/icon/three.png" style="width: 20px;" salt="parking" class="img-responsive" data-toggle="tooltip" title="นักศึกษามารับเอกสารไปยื่น ณ สถานที่ฝึกงานแล้ว"/>
                                                        <img src="{{ asset('white') }}/img/icon/four.png" style="width: 20px;" salt="parking" class="img-responsive" data-toggle="tooltip" title="ได้รับใบตอบรับเข้าฝึกงานแล้ว"/>
                                                </td>
                                            @elseif($stu_companies->ct_status_id ==5)
                                                <td class="text-center">
                                                        <img src="{{ asset('white') }}/img/icon/one.png" style="width: 20px;" salt="parking" class="img-responsive" data-toggle="tooltip" title="ได้ที่ฝึกงานแล้ว และแจ้งสาขาแล้วให้ทำใบอนุเคราะห์รับเข้าฝึกงาน"/>
                                                        <img src="{{ asset('white') }}/img/icon/two.png" style="width: 20px;" salt="parking" class="img-responsive" data-toggle="tooltip" title="สาขากำลังทำใบขอความอนุเคราะห์รับเข้าฝึกงาน "/>
                                                        <img src="{{ asset('white') }}/img/icon/three.png" style="width: 20px;" salt="parking" class="img-responsive" data-toggle="tooltip" title="นักศึกษามารับเอกสารไปยื่น ณ สถานที่ฝึกงานแล้ว"/>
                                                        <img src="{{ asset('white') }}/img/icon/four.png" style="width: 20px;" salt="parking" class="img-responsive" data-toggle="tooltip" title="ได้รับใบตอบรับเข้าฝึกงานแล้ว"/>
                                                        <img src="{{ asset('white') }}/img/icon/five.png" style="width: 20px;" salt="parking" class="img-responsive" data-toggle="tooltip" title="นักศึกษาเตรียมตัวและรอฝึกงาน ในเดือน พ.ค.-ก.ค. .."/>
                                                </td>
                                        @else
                                        <td><font color="red" >ยังไม่ดำเนินการ</font> </td>
                                        @endif
                                        {{-- <td class="text-center">{{ $stu_companies->contact_statuses->contact_name}}</td> --}}
                                        {{-- <td class="text-center">{{ $stu_companies->ct_status_id}}</td> --}}
                                        <td class="text-center">
                                            <a href="{{route('stu_companies.edit', $stu_companies->stu_companies_id)}}">
                                                {{ Form::button('<i class="tim-icons icon-pencil"></i>', ['type' => 'submit', 'class' => 'btn btn-warning waves-effect px-3'] ) }}
                                            </a>
                                        </td>
                                        
                                        <td class="text-center">
                                            {!! Form::open(['route' => ['stu_companies.destroy', $stu_companies->stu_companies_id], 'method' => 'DELETE']) !!}
                                            <button type="submit" class="btn btn-danger px-3" onclick="return confirm('คุณต้องการลบข้อมูลนี้หรือไม่ ?')"><i class="fa fa-trash"></i></button>
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                        
                                        @endif
                                    @endforeach
                                    {{-- @endfor --}}
                                </tbody>
                            </table><br>


                            <div class="container-fluid">
                                <h2>หมายเหตุ</h2>
                                <div class="row">
                                    <div class="col-12">
                                        <p></p>
                                        <div class="row">
                                            <div class="col-md-2">ทางเลือกของนักศึกษา</div>
                                            <div class="col-md-4">
                                                <img src="{{ asset('white') }}/img/icon/project.png" style="width: 30px;" salt="project" class="img-responsive" />
                                                   &nbsp; โปรเจค<br>
                                                <img src="{{ asset('white') }}/img/icon/co-op2.png" style="width: 30px;" salt="co-op2" class="img-responsive" />
                                                    &nbsp; สหกิจ<br>
                                                <img src="{{ asset('white') }}/img/icon/pc.jpg" style="width: 30px;" salt="pc" class="img-responsive" />
                                                    &nbsp;โปรเจค หรือ สหกิจ<br>
                                                <img src="{{ asset('white') }}/img/icon/s.png" style="width: 30px;" salt="s" class="img-responsive" />
                                                    &nbsp; อื่นๆ
                                            </div><div class="col-md-2">ตรวจสอบฝึกงาน</div>
                                            <div class="col-md-4">
                                                <img src="{{ asset('white') }}/img/icon/tick.png" style="width: 20px;" salt="tack" class="img-responsive" />
                                                    &nbsp; สามารถไปฝึกงานได้
                                            <br>
                                                <img src="{{ asset('white') }}/img/icon/cancel.png" style="width: 20px;" salt="cancel" class="img-responsive" />
                                                    &nbsp; ไม่สามารถไปฝึกงานได้
                                            </div>
                                        </div>
                                    </div><br>
                                    <div class="col-12"><p>สถานะการติดต่อ</p>
                                        <div class="row">
                                            <div class="col-md-2"></div>
                                            <div class="col-md-10">
                                                <img src="{{ asset('white') }}/img/icon/one.png" style="width: 30px;" salt="parking" class="img-responsive" />
                                                    &nbsp; ได้ที่ฝึกงานแล้ว และแจ้งสาขาแล้วให้ทำใบอนุเคราะห์รับเข้าฝึกงาน<br>
                                                <img src="{{ asset('white') }}/img/icon/two.png" style="width: 30px;" salt="tack" class="img-responsive" />
                                                    &nbsp; สาขากำลังทำใบขอความอนุเคราะห์รับเข้าฝึกงาน <br>
                                                <img src="{{ asset('white') }}/img/icon/three.png" style="width: 30px;" salt="parking" class="img-responsive" />
                                                    &nbsp; นักศึกษามารับเอกสารไปยื่น ณ สถานที่ฝึกงานแล้ว<br>
                                                <img src="{{ asset('white') }}/img/icon/four.png" style="width: 30px;" salt="tack" class="img-responsive" />
                                                    &nbsp; ได้รับใบตอบรับเข้าฝึกงานแล้ว<br>
                                                <img src="{{ asset('white') }}/img/icon/five.png" style="width: 30px;" salt="parking" class="img-responsive" />
                                                    &nbsp; นักศึกษาเตรียมตัวและรอฝึกงาน ในเดือน พ.ค.-ก.ค.63<br>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    
@endsection

@push('scripts')
<script>
$(document).ready(function() {
    $('#table2ss').DataTable();
} );

// $(document).ready(function() {
//     var table = $('#example').DataTable( {
//         lengthChange: false,
//         buttons: [ 'copy', 'excel', 'pdf', 'colvis' ]
//     } );
//     table.buttons().container()
//         .appendTo( '#example_wrapper .col-md-6:eq(0)' );
// } );
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();   
});


</script>
@endpush