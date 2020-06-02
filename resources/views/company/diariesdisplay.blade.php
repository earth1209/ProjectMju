
@extends('layouts.app',['pageSlug' => 'comments'])

@section('content')

<style>
.textarea.form-control {
    border: none !important;
    /* border-radius: 0 !important;   */
}
</style>


<div class='container'>
<div class="row">
    <div class="col-12">
    <div class="card card-chart">
        <h4 class="card-header" style="background-color: #89e3fa ">
        <ul class="row">
            <div class="col-md-3">
            <img src="{{ asset('white') }}/img/icon/book.png" style="width: 20%;" alt="homepage"class="img-responsive" />
            บันทึกประจำวัน 
                
            </div>

        </ul>
        </h4>
    </div>

<h1>บันทึกประจำวัน : {{$stu->students->stu_name}}</h1>

    @foreach ($stu->diaries as $dia)
    
        <div class="container">
            <div class="card border border-primary">
            <div class="card-body">
                <h5 class="card-title">บันทึกประจำวันที่ ::  {{$dia->created_at->toFormattedDateString()}}</h5>
                <p class="card-text">Description: {!!strip_tags($dia->description) !!} </p> 
            </div>
            </div>
        </div>   
    
        {{-- {!! Form::open(['route' => '']) !!} --}}

        <div class="text-right">
            *นักศึกษาได้ทำงานตามที่ได้บันทึกจริง? :
            {!! Form::submit('Submit', ['class' =>'btn btn-primary ']) !!}
        </div><hr>
            
            
  {{-- {!! Form::close() !!} --}}
    @endforeach

   
  
    
</div>
</div>


@endsection