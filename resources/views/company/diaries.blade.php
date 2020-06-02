@extends('layouts.app', ['pageSlug' => 'diaryshow'])

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card card-chart">
            <div class="card-header form-inline" style="background-color: #89e3fa">
                <img src="{{ asset('/white/'.'/img/'.'/dr.png/') }}" width="80" height="80" alt="Profile Photo">
                <h3>&nbsp;บันทึกประจำวันของนักศึกษาฝึกงาน</h3>
                <div class="col-sm-6 textcenter d-flex justify-content-end">
                    <div class="form-inline">
                     <label for="">ปีการศึกษา :&nbsp;</label>
                    <!-- <iframe name="votar" style="display:none;"></iframe> -->
                     <form action="/company/diaries" method="get" id="my-form">
                         <select class="form-control mr-sm-2" id="year1" name="year1" style="width: 95px;background: #ffffff">
                            <option value="">--ทุกปี--</option>
                             @php 
                             
                                 $year = date('Y');
                                 $min = $year - 5;
                                 $max = $year;
                                 for( $i=$max; $i>=$min; $i-- ) {
                                     if(isset($_REQUEST["year1"]) && ($_REQUEST["year1"] == $i)) {
                                 
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
                                 $filter = $_REQUEST["year1"]; 
                             }                               
                     @endphp
                    
                     </div>
                 </div>
            </div>
            
        </div>
    </div>
</div>



<!-- ตารางแสดงบันทึกการฝึกงานประจำวันของนักศึกษาฝึกงาน -->
<div class='container'>
    <div class="row">
       <div class="col-12">
            <div class="card card-chart">
                <div class="card-header" style="background-color: #ffffff ">
                    <div class="container">
                        <div class="table-responsive">
 
                            <table class="table tablesorter" id="table4" >
                                <thead class="table-info text-primary">
                                <tr class="text-center">
                                    <th scope="col" width="15%">รหัสนักศึกษา</th>
                                    <th scope="col" width="35%">ชื่อ-นามสกุล</th>
                                    <th scope="col" width="35%">วันที่เขัาฝึกงาน</th>
                                    <th scope="col" width="15%">บันทึกการฝึกงาน</th> 
                                    
                                </tr>
                                </thead>
                               
                                <tbody>
                                 @foreach ($diaries as $item)

                                    <tr>
                                        <td class="text-center">{{$item->students->code}}</td>
                                        <td class="text-center">{{$item->students->stu_name}}</td>
                                        <td class="text-center">{{$item->created_at->toDateString()}}</td>
                                        <td class="text-center">
                                            <a href="{{route('approve.show',$item->stu_companies_id)}}">
                                                <button name="diary-item" type="button" id="diary-item" style ="background-color:#ffffff;" >
                                                    <img src="{{ asset('/white/'.'/img/'.'/diary.png/') }}" width="40" height="40" alt="">
                                                </button>
                                            </a>
                                        </td>
                                        
                                    </tr>
                                    @endforeach
                                    
                                </tbody>
                               
                            </table>
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
        $('#table4').DataTable();
         
    } );
    
</script>
    
@endpush