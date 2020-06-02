@extends('layouts.app', ['page' => __('Officer'), 'pageSlug' => 'average_score'])

@section('content')

<div class="row">
    <div class="col-12">
        <div class="card card-chart">
            <h4 class="card-header" style="background-color: #89e3fa ">
                <ul class="row">
                    <div class="col-md-6">
                        <img src="{{ asset('white') }}/img/icon/exam.png" style="width: 8%;" alt="homepage" class="img-responsive" />
                        คะแนนประเมินเฉลี่ย
                    </div>
                    <div class="col-md-6 text-right">
                        <a href="{{ url('officer/average_score')}}"><button class="btn btn-info">ย้อนกลับ</button></a>
                    </div>            
                </ul> 
            </h4>
        </div>
    </div>
</div>



<div class="col-12">
    <div class="card card-chart">
        <div class="card-header" style="background-color: #ffffff ">
            <div class="container">
                <div class="card wow bounceInUp">

           
                    <hr>
                    @include('alert._messages')
                    {{-- {!! Form::open(['route' => 'average_score.store', 'methot' => 'POST']) !!} --}}
                    {!! Form::model($averages, ['route' => ['average_score.update', $averages->stu_companies_id], 'method' => 'PUT']) !!}
        

                    {{-- @foreach ($averages as $average) --}}
                    {{-- <input type="hidden" name="stu_companies_id" value="{{$average->stu_companies->stu_companies_id}}"> --}}
                    <div class="form-row">
                      <div class="col-sm-1"> รหัสนักศึกษา : </div>
                      <div class="col-sm-5">
                       {!! Form::text('code_stu',$averages->students->code, ['style'=>"color:blue" ,'class' => 'form-control','id' => 'code_stu','disabled'])  !!}
                      </div>

          
                      <div class="col-sm-1"> ชื่อ-นามสกุล : </div>
                      <div class="col-sm-5">
                        {!! Form::text('stu_name',$averages->students->stu_name, ['style'=>"color:blue" ,'class' => 'form-control','id' => 'name','disabled']) !!}

                      </div><br>
                      <br>
                      <br>
                      <div class="col-sm-1"> บริษัท: </div>
                      <div class="col-sm-5">
                        {!! Form::text('companies_name',$averages->companies->first()->companies_name, ['style'=>"color:blue" ,'class' => 'form-control','companies_name' => 'average','disabled']) !!}
                      </div>
                      <div class="col-sm-1"> ประเมิน: </div>
                      <div class="col-sm-5">
                        {!! Form::number('score', null, ['class' => 'form-control','step'=>'0.01','id' => 'score']) !!}
                        
                      </div>

                    
                    </div><br>
                    <div class="form-row">
                      <div class="col-sm-1"> ข้อเสนอแนะ : </div>
                      <div class="col-sm-11">
                        {!! Form::textarea('detail', null, ['class' => 'form-control', 'id' => 'detail']) !!}
                      </div>
                    </div><br>


          
                    @if ($errors->any())
                        <div class="alert alert-danger">
                           <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                      @endif
          
                      {{-- @endforeach --}}

                      <div class="text-right">{!! Form::submit('บันทึก', ['class' =>'btn btn-primary']) !!}</div>

                     
                    
                    {!! Form::close() !!}
          
                    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
                    <script>
                        CKEDITOR.replace( 'details' );
                    </script>


                </div>
            </div>
        </div>
    </div>
</div>



@endsection

{{-- @push('scripts')
<script>
 
</script>
@endpush --}}