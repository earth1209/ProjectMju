@extends('Layouts.app',['page' => __('Officer'), 'pageSlug' => 'form_activity_hours'])

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
                            <a class="nav-item nav-link" href="{{ route('officer.form_status') }}">ฟอร์มสถานะการฝึกงานของนักศึกษา<span class="sr-only">(current)</span></a>
                            <a class="nav-item nav-link active" href="{{ route('officer.form_activity_hours') }}">ฟอร์มชั่วโมงกิจกรรม</a>
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
                            <form action="{{ route('officer.store_account') }}" method="POST">
                              @csrf
                              <div class="card-header" style="background-color: #CFCFCF ">
                                    <p>ตรวจสอบเกรดวิชาบังคับ</p> 
                              </div>
                                <div class="card card-chart">
                                    <div class="card-header" style="background-color: #FFFFFF ">
                                        <div class="form-row">
                                            <div class="col-sm-1"> คพ213 : </div>
                                            <div class="col-sm-2">
                                                <select class="form-control" name="officer" velue="" id="officer" >
                                                    <option name="1"  value="1">ผ่าน</option>
                                                    <option name="2"  value="2">ไม่ผ่าน</option>
                                                </select>  
                                            </div>
                                            <div class="col-sm-1"> คพ313 : </div>
                                            <div class="col-sm-2">
                                                <select class="form-control" name="officer" velue="" id="officer" >
                                                    <option name="1"  value="1">ผ่าน</option>
                                                    <option name="2"  value="2">ไม่ผ่าน</option>
                                                </select>
                                            </div>
                                            <div class="col-sm-1"> คพ343 : </div>
                                            <div class="col-sm-2">
                                                <select class="form-control" name="officer" velue="" id="officer" >
                                                    <option name="1"  value="1">ผ่าน</option>
                                                    <option name="2"  value="2">ไม่ผ่าน</option>
                                                </select>
                                            </div>
                                            <div class="col-sm-1"> คพ320 : </div>
                                            <div class="col-sm-2">
                                                <select class="form-control" name="officer" velue="" id="officer" >
                                                    <option name="1"  value="1">ผ่าน</option>
                                                    <option name="2"  value="2">ไม่ผ่าน</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <div class="card-header" style="background-color: #CFCFCF ">
                                <p>ชั่วโมงกิจกรรมสาขา</p> 
                            </div>
                                <div class="card card-chart">
                                    <div class="card-header" style="background-color: #ffffff ">
                                        <div class="form-row">
                                            <div class="col-sm-1"> c1 : </div>
                                            <div class="col-sm-1">
                                                <select class="form-control" name="officer" velue="" id="officer" >
                                                    @for($i=0 ; $i<=20 ; $i++)
                                                        <option name="1"  value="1">{{$i}}</option>
                                                    @endfor
                                                </select>
                                            </div>
                                            <div class="col-sm-1"> c2 : </div>
                                            <div class="col-sm-1">
                                                <select class="form-control" name="officer" velue="" id="officer" >
                                                    @for($i=0 ; $i<=20 ; $i++)
                                                        <option name="1"  value="1">{{$i}}</option>
                                                    @endfor
                                                </select>
                                            </div>
                                            <div class="col-sm-1"> c3 : </div>
                                            <div class="col-sm-1">
                                                <select class="form-control" name="officer" velue="" id="officer" >
                                                    @for($i=0 ; $i<=20 ; $i++)
                                                        <option name="1"  value="1">{{$i}}</option>
                                                    @endfor
                                                </select>
                                            </div>
                                            <div class="col-sm-1"> c4 : </div>
                                            <div class="col-sm-1">
                                                <select class="form-control" name="officer" velue="" id="officer" >
                                                    @for($i=0 ; $i<=20 ; $i++)
                                                        <option name="1"  value="1">{{$i}}</option>
                                                    @endfor
                                                </select>
                                            </div>
                                            <div class="col-sm-1"> c5 : </div>
                                            <div class="col-sm-1">
                                                <select class="form-control" name="officer" velue="" id="officer" >
                                                    @for($i=0 ; $i<=20 ; $i++)
                                                        <option name="1"  value="1">{{$i}}</option>
                                                    @endfor
                                                </select>
                                            </div>
                                            <div class="col-sm-1"> c6 : </div>
                                            <div class="col-sm-1">
                                                <select class="form-control" name="officer" velue="" id="officer" >
                                                    @for($i=0 ; $i<=20 ; $i++)
                                                        <option name="1"  value="1">{{$i}}</option>
                                                    @endfor
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <div class="card-header" style="background-color: #CFCFCF ">
                                <p>ชั่วโมงกิจกรรมมหาลัย</p> 
                            </div>
                                <div class="card card-chart">
                                    <div class="card-header" style="background-color: #ffffff ">
                                        <div class="form-row">
                                            <div class="col-sm-1"> u1 : </div>
                                            <div class="col-sm-1">
                                                <select class="form-control" name="officer" velue="" id="officer" >
                                                    @for($i=0 ; $i<=20 ; $i++)
                                                        <option name="1"  value="1">{{$i}}</option>
                                                    @endfor
                                                </select>
                                            </div>
                                            <div class="col-sm-1"> u2 : </div>
                                            <div class="col-sm-1">
                                                <select class="form-control" name="officer" velue="" id="officer" >
                                                    @for($i=0 ; $i<=20 ; $i++)
                                                        <option name="1"  value="1">{{$i}}</option>
                                                    @endfor
                                                </select>
                                            </div>
                                            <div class="col-sm-1"> u3 : </div>
                                            <div class="col-sm-1">
                                                <select class="form-control" name="officer" velue="" id="officer" >
                                                    @for($i=0 ; $i<=20 ; $i++)
                                                        <option name="1"  value="1">{{$i}}</option>
                                                    @endfor
                                                </select>
                                            </div>
                                            <div class="col-sm-1"> u4 : </div>
                                            <div class="col-sm-1">
                                                <select class="form-control" name="officer" velue="" id="officer" >
                                                    @for($i=0 ; $i<=20 ; $i++)
                                                        <option name="1"  value="1">{{$i}}</option>
                                                    @endfor
                                                </select>
                                            </div>
                                            <div class="col-sm-1"> u5 : </div>
                                            <div class="col-sm-1">
                                                <select class="form-control" name="officer" velue="" id="officer" >
                                                    @for($i=0 ; $i<=20 ; $i++)
                                                        <option name="1"  value="1">{{$i}}</option>
                                                    @endfor
                                                </select>
                                            </div>
                                            <div class="col-sm-1"> u6 : </div>
                                            <div class="col-sm-1">
                                                <select class="form-control" name="officer" velue="" id="officer" >
                                                    @for($i=0 ; $i<=20 ; $i++)
                                                        <option name="1"  value="1">{{$i}}</option>
                                                    @endfor
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                              <div class="form-row">
                                <div class="col-sm-12 text-right">
                                  <button type="submit" class="btn btn-primary text-center" id="btn">  สมัคร  </button>
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