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
                        {{-- <a href="{{ route('officer.form_status') }}"><button type="submit" class="btn btn-info">บันทึกข้อมูล</button></a> --}}
                    </div>
                    
                </div>
            </nav>
        {{-- </div> --}}
    </div>
    
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="col-12">
        <div class="card card-chart">
            <div class="card-header" style="background-color: #ffffff ">
                <div class="container">
                    <div class="card wow bounceInUp">
                        <div class="table-responsive"> 
                            @include('alert._messages')

                            {!! Form::model($stu_status, ['route' => ['stu_companies.update', $stu_status->stu_companies_id], 'method' => 'PUT']) !!}
                            {{-- {!! Form::model($averages, ['route' => ['average_score.update', $averages->stu_companies_id], 'method' => 'PUT']) !!} --}}

                            <div class="form-row">
                                <div class="col-sm-1"> รหัสนักศึกษา : </div>
                                <div class="col-sm-5">
                                    {!! Form::number('code', $stu_status->students->code, ['style'=>"color:blue",'class' => 'form-control','id' => 'code','disabled']) !!}
                                </div>
                    
                                <div class="col-sm-1"> ชื่อ-นามสกุล : </div>
                                <div class="col-sm-5">
                                    {!! Form::text('stu_name', $stu_status->students->stu_name, ['style'=>"color:blue",'class' => 'form-control','id' => 'stu_name','disabled']) !!}
          
                                </div><br>
                                <br>
                                <br>

                                <div class="col-sm-1"> สถานที่ฝึกงาน: </div>
                                <div class="col-sm-5">
                                    {!! Form::text('companies_id', $stu_status->companies->first()->companies_name, ['style'=>"color:blue",'class' => 'form-control','id' => 'internship_stt_id','disabled']) !!}
                                </div>

                                <div class="col-sm-1"> ตรวจสอบฝึกงาน: </div>
                                <div class="col-sm-5">
                                    @php
                                    $interns_stt = [];
                                    foreach ($internship_stt as $value) {
                                      #array_push($division_contact,($value->divisions_ct_id => $value->division_name));
                                      $interns_stt[$value->internship_stt_id] = $value->internship_stt_name;
                                    } 
                                  @endphp
                                  {!! Form::select('internship_stt_id', $interns_stt, null, ['class' => 'form-control']) !!}
                                </div>
                                <br>
                                <br><br>

                                <div class="col-sm-1"> สถานะการติดต่อ: </div>
                                <div class="col-sm-5">
                                    @php
                                        $contact = [];
                                        foreach ($contact_stt as $value) {
                                        #array_push($division_contact,($value->divisions_ct_id => $value->division_name));
                                        $contact[$value->ct_status_id] = $value->contact_name ;
                                        } 
                                    @endphp
                                  {!! Form::select('ct_status_id', $contact, null, ['class' => 'form-control']) !!}
                                </div>
                              
                                <div class="col-sm-1"> ทางเลือกนักศึกษา: </div>
                                <div class="col-sm-5">
                                    @php
                                        $stu_options = [];
                                        foreach ($stu_option as $value) {
                                        #array_push($division_contact,($value->divisions_ct_id => $value->division_name));
                                        $stu_options[$value->stu_option_stt_id] = $value->stu_option_stt_name;
                                        } 
                                    @endphp
                                  {!! Form::select('stu_option_stt_id', $stu_options, null, ['class' => 'form-control']) !!}
                                </div>
                              </div><br>
                              <div class="text-right">{!! Form::submit('บันทึก', ['class' =>'btn btn-primary']) !!}</div>
                            {!! Form::close() !!}
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