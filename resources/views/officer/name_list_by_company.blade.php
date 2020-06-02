@extends('layouts.app', ['page' => __('Officer'), 'pageSlug' => 'name_list_bycompany'])

@section('content')

<div class="row">
    <div class="col-12">
        <div class="card card-chart">
            <h4 class="card-header" style="background-color: #89e3fa ">
                <ul class="row">
                    <div class="col-md-6">
                        <img src="{{ asset('white') }}/img/icon/folder.png" style="width: 7%;" alt="homepage" class="img-responsive" />
                        สถานที่ฝึกงานของนักศึกษา
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
                                <button type="submit" class="btn"><i class="tim-icons icon-zoom-split" aria-hidden="true"></i></button>     
                            </form>    
                        </div>
                    </div>             
                </ul> 
            </h4>
        </div>
    </div>
</div>
{{-- <div class="row">
    <div class="col-sm-12 textcenter d-flex justify-content-end">
           <div class="form-inline">
            <label for="">ปีที่นักศึกษาสมัครเข้าฝึกงาน :&nbsp;</label>
            <form action="#" method="get">
                <select class="form-control mr-sm-2" name="year" style="width: 95px;background: #ffffff">
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
    
</div> --}}
    <div class="col-12">
        <div class="card card-chart">
            <div class="card-header" style="background-color: #ffffff ">
                <div class="container">
                    <div class="card wow bounceInUp">
                        <table class="table table-hover table-striped table-bordered" id="table2nlbc">
                            <thead class="table-info text-primary">
                            <tr>
                                <th class="text-center" scope="col" rowspan="2">จังหวัดที่ไปฝึก</th>
                                <th class="text-center" scope="col" rowspan="2">สถานที่</th>
                                <th class="text-center" scope="col" rowspan="2">จำนวน</th>
                                <th class="text-center" scope="col" rowspan="2">รหัส</th>
                                <th class="text-center" scope="col" rowspan="2">ชื่อ-สกุล</th>
                                <th class="text-center" scope="col" rowspan="2">สถานะทางเอกสาร</th>
                                <th class="text-center" scope="col" rowspan="2">สิ่งที่นักศึกษาต้องทำ</th>
                                <th class="text-center" scope="col" rowspan="2">แนะนำวิชาหลังฝึกงาน</th>
                                <th class="text-center" scope="col" rowspan="1">แก้ไข</th>
                                <th class="text-center" scope="col" rowspan="1">ลบ</th>
                            </tr>
                            </thead>
                            <tbody>
                                {{-- @for ( $i=0 ; $i < 5; $i++) --}}
                                <tr>
                                    <td class="text-center">เชียงใหม่</td>
                                    <td class="text-center">สาขาวิชา</td>
                                    <td class="text-center">1</td>
                                    <td class="text-center">5904101362</td>
                                    <td class="text-center">น.ส.วิลัยวรรณ กันญาณะ</td>
                                    <td class="text-center">ตอบรับแล้ว</td>
                                    <td class="text-center">เตรียมตัวฝึกงาน</td>
                                    <td class="text-center">วท498</td>
                                    <td class="text-center"><button type="button" class="btn btn-warning waves-effect px-3"><i class="tim-icons icon-pencil" aria-hidden="true"></i></button></td>
                                    <td class="text-center"><button type="button" class="btn btn-danger  px-3"><i class="tim-icons icon-trash-simple" aria-hidden="true"></i></button></td>
                                </tr>
                                <tr>
                                    <td class="text-center">..</td>
                                    <td class="text-center">..</td>
                                    <td class="text-center">2</td>
                                    <td class="text-center">5904101365</td>
                                    <td class="text-center">น.ส.วีรยา พงศ์พิทยุตม์</td>
                                    <td class="text-center">ตอบรับแล้ว</td>
                                    <td class="text-center">เตรียมตัวฝึกงาน</td>
                                    <td class="text-center">วท498</td>
                                    <td class="text-center"><button type="button" class="btn btn-warning waves-effect px-3"><i class="tim-icons icon-pencil" aria-hidden="true"></i></button></td>
                                    <td class="text-center"><button type="button" class="btn btn-danger  px-3"><i class="tim-icons icon-trash-simple" aria-hidden="true"></i></button></td>
                                </tr>
                                <tr>
                                    <td class="text-center">..</td>
                                    <td class="text-center">..</td>
                                    <td class="text-center">3</td>
                                    <td class="text-center">5904101375</td>
                                    <td class="text-center">น.ส.ศุภิสรา จันทร์แดง</td>
                                    <td class="text-center">ตอบรับแล้ว</td>
                                    <td class="text-center">เตรียมตัวฝึกงาน</td>
                                    <td class="text-center">วท498</td>
                                    <td class="text-center"><button type="button" class="btn btn-warning waves-effect px-3"><i class="tim-icons icon-pencil" aria-hidden="true"></i></button></td>
                                    <td class="text-center"><button type="button" class="btn btn-danger  px-3"><i class="tim-icons icon-trash-simple" aria-hidden="true"></i></button></td>
                                </tr>
                                <tr>
                                    <td class="text-center">..</td>
                                    <td class="text-center">สถาบันวิจัยดาราศาสตร์ อ.แม่ริม</td>
                                    <td class="text-center">1</td>
                                    <td class="text-center">5904101367</td>
                                    <td class="text-center">นายศรายุธ สีแบน</td>
                                    <td class="text-center">รอผลสัมภาษณ์ 19 มี.ค.63</td>
                                    <td class="text-center">รอผล</td>
                                    <td class="text-center">วท498</td>
                                    <td class="text-center"><button type="button" class="btn btn-warning waves-effect px-3"><i class="tim-icons icon-pencil" aria-hidden="true"></i></button></td>
                                    <td class="text-center"><button type="button" class="btn btn-danger  px-3"><i class="tim-icons icon-trash-simple" aria-hidden="true"></i></button></td>
                                </tr>
                                <tr>
                                    <td class="text-center">กรุงเทพ</td>
                                    <td class="text-center">บริษัทเดิฟเฟิร์ส</td>
                                    <td class="text-center">1</td>
                                    <td class="text-center">5904101368</td>
                                    <td class="text-center">นายศักดิ์สิทธิ์ สีแก้ว</td>
                                    <td class="text-center">ตอบรับแล้ว</td>
                                    <td class="text-center">รอผล</td>
                                    <td class="text-center">วท498</td>
                                    <td class="text-center"><button type="button" class="btn btn-warning waves-effect px-3"><i class="tim-icons icon-pencil" aria-hidden="true"></i></button></td>
                                    <td class="text-center"><button type="button" class="btn btn-danger  px-3"><i class="tim-icons icon-trash-simple" aria-hidden="true"></i></button></td>
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

@push('scripts')
<script>
$(document).ready(function() {
    $('#table2nlbc').DataTable();
} );

// $(document).ready(function() {
//     var table = $('#example').DataTable( {
//         lengthChange: false,
//         buttons: [ 'copy', 'excel', 'pdf', 'colvis' ]
//     } );
//     table.buttons().container()
//         .appendTo( '#example_wrapper .col-md-6:eq(0)' );
// } );

</script>
@endpush