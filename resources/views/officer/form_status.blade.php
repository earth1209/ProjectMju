@extends('Layouts.app',['page' => __('Officer'), 'pageSlug' => 'form_status'])

@section('content')

    <div class="row">
        <div class="col-12">
            <div class="card card-chart">
                <h4 class="card-header" style="background-color: #89e3fa ">
                    <ul class="row">
                        <div class="col-md-6">
                            <img src="{{ asset('white') }}/img/icon/folder.png" style="width: 7%;" alt="homepage" class="img-responsive" />
                            ฟอร์มข้อมูลนักศึกษา
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
                            <a class="nav-item nav-link active" href="{{ route('officer.form_status') }}">ฟอร์มสถานะการฝึกงานของนักศึกษา<span class="sr-only">(current)</span></a>
                            <a class="nav-item nav-link" href="{{ route('officer.form_activity_hours') }}">ฟอร์มชั่วโมงกิจกรรม</a>
                        </div>
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
                        <div class="col-md-12">
                          <form action="{{ route('officer.store_status') }}" method="POST">
                            @csrf
                          @foreach ($stu_status as $status)
                              <div class="form-row">
                                <div class="col-sm-1"> รหัส : </div>
                                <div class="col-sm-2">
                                  <h5 style="color:blue;">{{ $status->code }} </h5> 
                                </div>
                                <div class="col-sm-1"> ชื่อ-สกุล : </div>
                                <div class="col-sm-2">
                                  <h5 style="color:blue;">{{ $status->name }} </h5>
                                </div>
                                <div class="col-sm-1"> GPA : </div>
                                <div class="col-sm-2">
                                  <h5 style="color:blue;">{{ $status->gpa }} </h5>
                                </div>
                                <input type="hidden" name="student_id" value="{{ $status->id }}">
                                  
                                <div class="col-sm-2"> ตรวจสอบฝึกงาน : </div>
                                <div class="col-sm-1">
                                  <select class="form-control" name="check_status" velue="" id="check_status" >
                                    <option name="13"  value="13">ได้</option>
                                    <option name="14"  value="14">ไม่ได้</option>
                                  </select> 
                                </div>
                              </div><br>
                              <div class="form-row">
                                <div class="col-sm-1"> สถานะการติดต่อ : </div>
                                <div class="col-sm-3">
                                  <select class="form-control" name="contact_status" velue="" id="contact_status" >
                                    <option name="1"  value="1">ได้ที่ฝึกงานแล้ว และแจ้งสาขาแล้วให้ทำใบอนุเคราะห์รับเข้าฝึกงาน</option>
                                    <option name="2"  value="2">สาขากำลังทำใบขอความอนุเคราะห์รับเข้าฝึกงาน </option>
                                    <option name="3"  value="3">นักศึกษามารับเอกสารไปยื่น ณ สถานที่ฝึกงานแล้ว </option>
                                    <option name="4"  value="4">ได้รับใบตอบรับเข้าฝึกงานแล้ว </option>
                                    <option name="5"  value="5">นักศึกษาเตรียมตัวและรอฝึกงาน ในเดือน พ.ค.-ก.ค.63 </option>
                                    <option name="6"  value="6">นักศึกษาเกรดเฉลี่ยน้อยกว่า 2.00 รอฝึกงานที่สาขา  </option>
                                  </select> 
                                </div>
                                <div class="col-sm-1"> สถานที่ฝึกงาน : </div>
                                <div class="col-sm-4">
                                  <input type="text" name="stu_internship_location" id="stu_internship_location" class="form-control" placeholder="สถานที่ฝึกงาน">
                                </div>
                                <div class="col-sm-2"> ทางเลือกของนักศึกษา หรือคำแนะนำ : </div>
                                <div class="col-sm-1">
                                  <select class="form-control" name="student_options" velue="" id="student_options" >
                                    <option name="2"  value="2">project </option>
                                    <option name="3"  value="3">สหกิจ </option>
                                    <option name="5"  value="5">project หรือ สหกิจ  </option>
                                  </select> 
                                </div>
                              </div><br><hr>
                              @endforeach
            
                              <div class="form-row">
                                <div class="col-sm-12 text-right">
                                  <button type="submit" class="btn btn-primary text-center" id="btn">  บันทึก  </button>
                                </div>
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