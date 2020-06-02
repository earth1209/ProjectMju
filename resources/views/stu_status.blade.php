@extends('Layouts.app',['pageSlug' => 'stu_status'])

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
                                <label for="">รายชื่อนักศึกษาปีที่ต้องเข้าฝึกงาน :&nbsp;</label>
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
                                    <button type="submit" class="btn">Filter</button>     
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
                            <a class="nav-item nav-link active" href="{{ route('stu_status') }}">สถานะการฝึกงานของนักศึกษา<span class="sr-only">(current)</span></a>
                            <a class="nav-item nav-link" href="{{ route('stu_activity_hours') }}">ชั่วโมงกิจกรรม</a>
                        </div>
                    </div>
                    <div class="col-md-6 text-right">
                
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
                        <table class="table table-hover table-striped table-bordered" >
                            <thead class="table-info text-primary">
                            <tr>
                                <th class="text-center" scope="col" rowspan="2">ลำดับ</th>
                                <th class="text-center" scope="col" rowspan="2">รหัสนักศึกษา</th>
                                <th class="text-center" scope="col" rowspan="2">ชื่อ-สกุล</th>
                                <th class="text-center" scope="col" rowspan="2">เกรดเฉลี่ย</th>
                                <th class="text-center" scope="col" rowspan="2">ตรวจสอบฝึกงาน</th>
                                <th class="text-center" scope="col" rowspan="2">ทางเลือกของนักศึกษา</th>
                                <th class="text-center" scope="row" rowspan="2">สถานที่ฝึกงาน</th>
                                <th class="text-center" scope="row" rowspan="2">สถานะการติดต่อ</th>
                            </tr>
                            </thead>
                            <tbody>
                                {{-- @for ( $i=0 ; $i < 5; $i++) --}}
                                {{-- @foreach ($check_status as $checkstatus) --}}
                                    
                                
                                {{-- <tr>
                                    <td class="text-center">1</td>
                                    <td class="text-center">{{ $checkstatus->student_id }}</td>
                                    <td class="text-center">{{ $checkstatus->check_status }}</td>
                                    <td class="text-center">{{ $checkstatus->student_options }}</td>
                                    <td class="text-center">{{ $checkstatus->stu_internship_location }}</td>
                                    <td class="text-center">{{ $checkstatus->contact_status }}</td>
                                    <td class="text-center">สหกิจหรือโปรเจค</td>
                                    <td class="text-center">บริษัทไอเดียเคิล</td>
                                    <td class="text-center"> สาขากำลังทำใบขอความอนุเคราะห์รับเข้าฝึกงาน </td>
                                    <td class="text-center"><button type="button" class="btn btn-warning waves-effect px-3"><i class="tim-icons icon-pencil" aria-hidden="true"></i></button></td>
                                    <td class="text-center"><button type="button" class="btn btn-danger  px-3"><i class="tim-icons icon-trash-simple" aria-hidden="true"></i></button></td>
                                </tr> --}}
                                <tr>
                                    <td class="text-center">1</td>
                                    <td class="text-center">5904101362</td>
                                    <td class="text-left">นางสาววิลัยวรรณ กันญาณะ</td>
                                    <td class="text-center">3.16</td>
                                    <td class="text-center">ได้</td>
                                    <td class="text-center">สหกิจหรือโปรเจค</td>
                                    <td class="text-center">บริษัทไอเดียเคิล</td>
                                    <td class="text-center">สาขากำลังทำใบขอความอนุเคราะห์รับเข้าฝึกงาน</td>
                                </tr>
                                <tr>
                                    <td class="text-center">2</td>
                                    <td class="text-center">5904101365</td>
                                    <td class="text-left">นางสาววีรยา พงศ์พิทยุตม์</td>
                                    <td class="text-center">3.99</td>
                                    <td class="text-center">ได้</td>
                                    <td class="text-center">สหกิจหรือโปรเจค</td>
                                    <td class="text-center">บริษัทไอเดียเคิล</td>
                                    <td class="text-center">สาขากำลังทำใบขอความอนุเคราะห์รับเข้าฝึกงาน</td>
                                </tr>
                                {{-- @endforeach --}}
                                <tr>
                                    <td class="text-center">3</td>
                                    <td class="text-center">5904101375</td>
                                    <td class="text-left">นางสาวศุภิสรา จันทร์แดง</td>
                                    <td class="text-center">3.50</td>
                                    <td class="text-center">ได้</td>
                                    <td class="text-center">สหกิจหรือโปรเจค</td>
                                    <td class="text-center">บริษัทไอเดียเคิล</td>
                                    <td class="text-center">สาขากำลังทำใบขอความอนุเคราะห์รับเข้าฝึกงาน</td>
                                </tr>
                                <tr>
                                    <td class="text-center">4</td>
                                    <td class="text-center">5904101367</td>
                                    <td class="text-left">นายศรายุทธ สีแบน</td>
                                    <td class="text-center">3.16</td>
                                    <td class="text-center">ได้</td>
                                    <td class="text-center">สหกิจหรือโปรเจค</td>
                                    <td class="text-center">บริษัท แซฟไฟร์ รีเสิร์ช แอนด์ ดีเวลล็อปเม็นท์ จํากัด</td>
                                    <td class="text-center"> นักศึกษาเตรียมตัวและรอฝึกงาน ในเดือน พ.ค.-ก.ค.63 </td>
                                </tr>
                                <tr>
                                    <td class="text-center">5</td>
                                    <td class="text-center">5904101368</td>
                                    <td class="text-left">นายศักดิ์สิทธิ์ สีแก้ว</td>
                                    <td class="text-center">1.00</td>
                                    <td class="text-center">ได้</td>
                                    <td class="text-center">โปรเจค</td>
                                    <td class="text-center">สาขา</td>
                                    <td class="text-center"> นักศึกษาเกรดเฉลี่ยน้อยกว่า 2.00 รอฝึกงานที่สาขา </td>
                                </tr>
                                {{-- @endfor --}}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection