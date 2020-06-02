@extends('Layouts.app',['page' => __('Officer'), 'pageSlug' => 'student_statuscreate'])

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
                            {{-- <div class="form-inline float-right">
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
                                    <button type="submit" class="btn"><i class="tim-icons icon-zoom-split" aria-hidden="true"></i></button>     
                                </form>    
                            </div> --}}
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
{{--                     
                    @foreach ($stu_status as $status)
                      @if ($status->students->academic_year == 2559) --}}
                      <div class="form-row">
                        <div class="col-sm-2">รหัสนักศึกษา :</div>
                        <div class="col-sm-4">
                          {{-- {!! Form::text('code',$status->students->code, ['style'=>"color:blue" ,'class' => 'form-control','id' => 'code_stu','disabled'])  !!} --}}
                        </div>
            
                        <div class="col-sm-2">ชื่อ-นามสกุล :</div>
                        <div class="col-sm-4">
                          {{-- {!! Form::text('stu_name',$status->students->stu_name, ['style'=>"color:blue" ,'class' => 'form-control','id' => 'name','disabled']) !!} --}}
                        </div><br><br><br>
                        
                        <div class="col-sm-2">เกรดเฉลี่ย:</div>
                        <div class="col-sm-4">
                          {{-- {!! Form::text('stu_name',$status->students->gpa, ['style'=>"color:blue" ,'class' => 'form-control','id' => 'name','disabled']) !!} --}}
                        </div>

                        <div class="col-sm-2">สถานะการฝึกงาน:</div>
                        <div class="col-sm-4">
                          {{-- @php
                            $interns_stt = [];
                            foreach ($internship_stt as $value) {
                              $interns_stt[$value->internship_stt_id] = $value->internship_stt_name;
                            } 
                          @endphp
                          {!! Form::select('internship_stt_id', $interns_stt, null, ['class' => 'form-control']) !!} --}}
                        </div><br><br><br>

                        <div class="col-sm-2">ทางเลือกนักศึกษา:</div>
                        <div class="col-sm-4">
                          {{-- @php
                            $option_stt = [];
                            foreach ($stu_option_stt as $value) {
                              $option_stt[$value->stu_option_stt_id] = $value->stu_option_stt_name;
                            } 
                          @endphp
                            {!! Form::select('stu_option_stt_id', $option_stt, null, ['class' => 'form-control']) !!} --}}
                        </div>

                        <div class="col-sm-2">สถานะการติดต่อ:</div>
                        <div class="col-sm-4">
                          {{-- @php
                            $contact_stt = [];
                            foreach ($stu_contact_stt as $value) {
                              $contact_stt[$value->ct_status_id] = $value->contact_name;
                            } 
                          @endphp
                            {!! Form::select('ct_status_id', $contact_stt, null, ['class' => 'form-control']) !!} --}}
                        </div><br><br><br>
                        
                        <div class="col-sm-2">บริษัท:</div>
                        <div class="col-sm-4">
                          <input type="text" name="companies_id" id="companies_id" class="form-control" placeholder="สถานที่ฝึกงาน">
                        </div><br><br><br>

                      {{-- @endif
                    @endforeach --}}
                        <div class="col-sm-2"></div>
                          <div class="col-sm-4 text-right">
                            <button type="submit" class="btn btn-info px-3">บันทึก</button>
                          </div>
                        </div>
                      </div><br><br><br>
                  </div>
              </div>
          </div>
        </div>
    </div>
    
@endsection