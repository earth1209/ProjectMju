@extends('Layouts.app',['page' => __('Officer'), 'pageSlug' => 'stu_activity_hours'])

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
                                    <button type="submit" class="btn"><i class="tim-icons icon-zoom-split" aria-hidden="true"></i></button>     
                                </form>    
                            </div>
                        </div>             
                    </ul> 
                </h4>
            </div>
        </div>
    </div>
    <div class="col-12">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="col-md-6">
                    <div class="navbar-nav">
                        <a class="nav-item nav-link" href="{{ url('officer/stu_companies') }}">สถานะการฝึกงานของนักศึกษา<span class="sr-only">(current)</span></a>
                        <a class="nav-item nav-link active" href="{{ route('officer.stu_activity_hours') }}">ชั่วโมงกิจกรรม</a>
                    </div>
                </div>
                <div class="col-md-6 text-right">
                    <a href="{{ route('officer.form_status') }}"><button type="submit" class="btn btn-info">บันทึกข้อมูล</button></a>
                </div>
            </div>
          </nav>
    </div>
    
    <div class="col-12">
        <div class="card card-chart">
            <div class="card-header" style="background-color: #ffffff ">
                <div class="container">
                    <div class="card wow bounceInUp">
                        <table class="table table-hover table-striped table-bordered" id="table2sah">
                            <thead class="table-info text-primary">
                            <tr>
                                <th class="text-center" scope="col" rowspan="3">ลำดับ</th>
                                <th class="text-center" scope="col" rowspan="3">รหัสนักศึกษา</th>
                                <th class="text-center" scope="col" rowspan="3">ตรวจสอบสหกิจ</th>
                                <th class="text-center" scope="col" colspan="4">ตรวจสอบเกรดวิชาบังคับ(กรณีสหกิจ)</th>
                                <th class="text-center" scope="col" colspan="13">ชั่วโมงกิจกรรม (อย่างน้อย 30 ชม.)</th>
                                <th class="text-center" scope="col" colspan="2"></th>
                            </tr>
                            <tr>
                                <th class="text-center" scope="col" rowspan="1">คพ213</th>
                                <th class="text-center" scope="col" rowspan="1">คพ313</th>
                                <th class="text-center" scope="col" rowspan="1">คพ343</th>
                                <th class="text-center" scope="col" rowspan="1">คพ320</th>
                                <th class="text-center" scope="col" colspan="6">ชั่วโมงกิจกรรมสาขา</th>
                                <th class="text-center" scope="col" colspan="6">ชั่วโมงกิจกรรมมหาลัย</th>
                                <th class="text-center" scope="col" colspan="1">รวม</th>
                                <th class="text-center" scope="col" colspan="2">การกระทำ</th>
                            </tr>
                            <tr>
                                <th class="text-center" scope="col" ></th>
                                <th class="text-center" scope="col" ></th>
                                <th class="text-center" scope="col" ></th>
                                <th class="text-center" scope="col" ></th>
                                <th class="text-center" scope="col" >c1</th>
                                <th class="text-center" scope="col" >c2</th>
                                <th class="text-center" scope="col" >c3</th>
                                <th class="text-center" scope="col" >c4</th>
                                <th class="text-center" scope="col" >c5</th>
                                <th class="text-center" scope="col" >c6</th>
                                <th class="text-center" scope="col" >u1</th>
                                <th class="text-center" scope="col" >u2</th>
                                <th class="text-center" scope="col" >u3</th>
                                <th class="text-center" scope="col" >u4</th>
                                <th class="text-center" scope="col" >u5</th>
                                <th class="text-center" scope="col" >u6</th>
                                <th class="text-center" scope="col" ></th>
                                <th class="text-center" scope="col" >edit</th>
                                <th class="text-center" scope="col" >delete</th>
                            </tr>
                            </thead>
                            <tbody>
                                {{-- @foreach ($stu_company as $stu_companies) --}}
                                <tr>
                                    {{-- @for ( $i=1 ; $i < 5; $i++)
                                    <td class="text-center">{{$i}}</td>
                                    @endfor --}}
                                    <td class="text-center">1</td>
                                    <td class="text-center">5904101362</td>
                                    <td class="text-center">ได้</td>
                                    <td class="text-center">ผ่าน</td>
                                    <td class="text-center">ผ่าน</td>
                                    <td class="text-center">ผ่าน</td>
                                    <td class="text-center">ผ่าน</td>
                                    <td class="text-center">3</td>
                                    <td class="text-center">4</td>
                                    <td class="text-center">8</td>
                                    <td class="text-center">6</td>
                                    <td class="text-center">14</td>
                                    <td class="text-center">3</td>
                                    <td class="text-center">3</td>
                                    <td class="text-center">3</td>
                                    <td class="text-center">3</td>
                                    <td class="text-center">3</td>
                                    <td class="text-center">3</td>
                                    <td class="text-center">3</td>
                                    <td class="text-center">56</td>
                                    <td class="text-center"><button type="button" class="btn btn-warning waves-effect px-3"><i class="tim-icons icon-pencil" aria-hidden="true"></i></button></td>
                                    <td class="text-center"><button type="button" class="btn btn-danger  px-3"><i class="tim-icons icon-trash-simple" aria-hidden="true"></i></button></td>
                                </tr>
                                {{-- @endforeach --}}
                                
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
    $('#table2sah').DataTable();
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