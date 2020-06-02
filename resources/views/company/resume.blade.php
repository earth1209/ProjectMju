@extends('layouts.app', ['page' => __(''), 'pageSlug' => 'resumeshow'])

@section('content')

<div class="row">
    <div class="col-12">
        <div class="card card-chart">
            <div class="card-header " style="background-color: #89e3fa">
                <h3>- รายชื่อนักศึกษาที่สมัครเข้าฝึกงานกับบริษัท -</h3>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-12 textcenter d-flex justify-content-end">
           <div class="form-inline">
            <label for="">ปีที่นักศึกษาสมัครเข้าฝึกงาน :&nbsp;</label>
            {{-- <iframe name="votar" style="display:none;"></iframe> --}}
            <form action="/company/resume" method="GET" id="my-form">
                <select class="form-control mr-sm-2" id="year" name="year" style="width: 95px;background: #ffffff">
                   <option value="">--ทุกปี--</option>
                    @php 
                    
                        $year = date('Y');
                        $min = $year - 5;
                        $max = $year;
                        for( $i=$max; $i>=$min; $i-- ) {
                            if(isset($_REQUEST["year"]) && ($_REQUEST["year"] == $i)) {
                        
                                $selected = 'selected="selected"';
                            } else {
                                $selected='';
                            }
                            echo "<option value=$i $selected>$i</option>";
                        }
                        
                    @endphp
                </select>
                <button name="filter" id="filter"  type="submit" class="btn">Filter</button>   
                       
            </form>
            @php
                    if(isset($_REQUEST["filter"]))
                    {
                        $filter = $_REQUEST["year"]; 
                    }                               
            @endphp
           
            </div>
        </div>
        
    {{--   --}}
</div>
<br>

{{-- //// --}}
<div class="row">


    
    @foreach ($resumes as $resume)
     
    <div class="col-md-6">
        <div class="card" id="card_resume" name="card_resume">
            <div class="form-inline">
                
                <div class="card-header col-md-9" >
                    <h5 class="card-category" style="color: silver">Date/Time: {{ $resume->created_at }}</h5>
                </div>
                <div class="card-header col-md-3">
                    {{-- <span class="badge badge-pill badge-danger">{{ $resume->status }}</span> --}}
                   
                    {{-- @if(($resume->status())==0)
                        <span class="badge badge-pill badge-danger">กำลังหาที่ฝึกงาน</span>
                    
                    @else
                        <span class="badge badge-pill badge-success">ได้ที่ฝึกงานแล้ว</span>
                    @endif --}}
                    

                </div>
               
                
            </div>
            <div class="card-body">
                <div class="row">
                    
                    <div class="col-lg-4">
                        <div class="photo">
                            <img src="{{ asset('/white/'.'/img/'.'/student/'.$resume->img) }}" width="150" height="125" alt="Profile Photo">
                        </div>
                    </div>
                    <br>
                    <div class="col-lg-8">
                        <span id="resume_name" name="resume_name"><i class="tim-icons icon-badge" ></i> รหัสนักศึกษา
                            : &nbsp;{{ $resume->code }}</span><br> {{-- ดึงข้อมูจากฐานข้อมูล --}}
                        <span id="resume_name" name="resume_name"><i class="tim-icons icon-single-02" ></i> ชื่อ-นามสกุล
                            : &nbsp;{{ $resume->stu_name }}
                            </span><br>
                        <span id="resume_name" name="resume_name"><i class="tim-icons icon-gift-2" ></i> วันเกิด
                            : &nbsp;{{ $resume->birthday }}</span><br>
                        &emsp;<span id="resume_name" name="resume_name"></i> อายุ
                            : &nbsp;{{ $resume->age }} &nbsp;ปี</span><br>
                        &emsp;<span id="resume_name" name="resume_name"> สัญชาติ
                            : &nbsp;{{ $resume->nationality }}</span>&emsp;&emsp;&emsp;&emsp;
                        <span id="resume_name" name="resume_name"> เชื้อชาติ
                            : &nbsp;{{ $resume->race }}</span><br>
                        
                        <span id="resume_lname" name="resume_lname"><i class="tim-icons icon-single-copy-04"></i> GPA :
                            &nbsp;{{ $resume->gpa }}</span><br>
                        
                        <span id="resume_name" name="resume_name"><i class="tim-icons icon-chat-33" ></i> ภาษา
                                : &nbsp;{{ $resume->language }}</span><br>
                        
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <span id="skill_id" name="skil_id"><i class="tim-icons icon-bulb-63"></i> ความถนัด : &nbsp;
                        @foreach ($resume->resume_skills as $item)
                            
                             {{ $item->resume_skill->skill_name }},

                        @endforeach  
                        </span><br>
                        <span id="resume_name" name="resume_name" ><i class="tim-icons icon-shape-star" ></i> จุดมุ่งหมาย
                            : <br>&emsp;&nbsp;{{ $resume->aim }}</span><br>
                        <span id="resume_name" name="resume_name"><i class="tim-icons icon-satisfied" ></i> งานอดิเรก
                            : &nbsp;{{ $resume->hobby }}</span><br>
                        <span id="resume_name" name="resume_name"><i class="tim-icons icon-bank" ></i> การศึกษา
                            : &nbsp;{{ $resume->education }}</span><br>
                        <span id="resume_name" name="resume_name"><i class="tim-icons icon-molecule-40" ></i> ประสบการณ์
                            : &nbsp;{{ $resume->experience }}</span><br>
                        <span id="resume_name" name="resume_name"><i class="tim-icons icon-user-run" ></i> กิจกรรม
                            : &nbsp;{{ $resume->event }}</span><br>
                        <span id="resume_contact" name="resume_contact"><i class="tim-icons 
                            icon-tablet-2"></i>
                            ช่องทางการติดต่อ : &nbsp;{{ $resume->contact }}</span><br>
                        <span id="resume_name" name="resume_name"><i class="tim-icons icon-map-big" ></i> ที่อยู่
                            : &nbsp;</span><br>
                    </div>
                </div>
                {{-- <div class="row">
                    <div class="col-12 text-right">
                        <div class="form-check">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" name="check[]" id="check[]"
                                    value="{{ $resume->id }}">
                                <span class="form-check-sign">
                                    <span class="check"></span>
                                </span>
                            </label>
                        </div><br>
                    </div>
                </div> --}}

            </div>
        </div>
    </div>
    
    @endforeach
    
</div>

{{-- <div class="col-lg-12 lg-auto mr-auto">
    <div class="row">
        <div class="col-md-4">
            <input class="btn btn-fill btn-block" type="button" id="selectall" onclick='selectAll()' value="เลือกทั้งหมด"  />
        </div>
        <div class="col-md-4">
            <input class="btn btn-fill btn-block" type="button" id="notselectall" onclick='UnSelectAll()' value="ยกเลิกทั้งหมด"/>
        </div>
        <div class="col-md-4">
            <input class="btn btn-fill btn-block" type="submit" id="btn-submit" value="บันทึก" />  
        </div>
    </div>
</div> --}}




{{-- <script type="text/javascript">
//script checkbox 
    function selectAll() {
        var items = document.getElementsByName('check[]');
        for (var i = 0; i < items.length; i++) {
            if (items[i].type == 'checkbox')
                items[i].checked = true;
        }
    }

    function UnSelectAll() {
        var items = document.getElementsByName('check[]');
        for (var i = 0; i < items.length; i++) {
            if (items[i].type == 'checkbox')
                items[i].checked = false;
        }
    }	
//disable
    $(document).ready(function () {


            // var $d= new Date().getYear();
            // var $y = $d.getYear();
            var $year = document.getElementById("year");


            if ($year == new Date().getYear()) {
                $("#btn-submit, #selectall, #notselectall").attr("disabled", false);
            }else{
                $("#btn-submit, #selectall, #notselectall").attr("disabled", true);
            }
        
    });
</script> --}}





@endsection