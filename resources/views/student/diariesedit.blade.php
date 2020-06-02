@extends('layouts.app', ['page' => __('Student'),'pageSlug' => 'diaries'])

@section('content')



<div class='container'>
  <div class="row">
     <div class="col-12">
          <div class="card card-chart">
              <h4 class="card-header" style="background-color: #89e3fa ">
                  <ul class="row">
                      <div class="col-md-3">
                        <img src="{{ asset('white') }}/img/icon/book.png" style="width: 20%;" alt="homepage" class="img-responsive" />
                        {{-- <a href="diaries.create">   </a> --}}
                        บันทึกประจำวัน

                      </div>
                      {{-- <div class="col-md-6 text-right">
                        <button class="btn btn-primary">ย้อนกลับ</button>
                      </div> --}}
                  </ul>
              </h4>
          </div>

          <h1>แก้ไขบันทึกประจำวัน</h1>
          <hr>

          {!! Form::model($diaries, ['route' => ['diariesa.update', $diaries->id], 'method' => 'PUT']) !!}
            {{-- {!! Form::time($name, $value, [$options]) !!}
            {!! Form::email('email', null, ['class' => 'form-control']) !!} --}}
          
          

           <div class="form-row">
            <div class="col-sm-1"> เวลาเริ่มงาน : </div>
            <div class="col-sm-5">
              {{-- <input type="datetime-local" class="form-control" id="start_time"  name="start_time" value="{{old($diaries->start_time)}}"> --}}
             {{-- {{$diaries->start_time}} --}}
             {!! Form::datetime('start_time', null, ['class' => 'form-control','id' => 'start_time']) !!}
            </div>
            {{-- <input type="text" name="name" value="{{ old('name', $DB->default-value) }}" /> --}}

            <div class="col-sm-1"> เวลาเลิกงาน : </div>
            <div class="col-sm-5">
              {!! Form::datetime('break_time', null, ['class' => 'form-control','id' => 'break_time']) !!}
              {{-- <input type="datetime-local" class="form-control" id="break_time"  name="break_time" value="{{old($diaries->break_time)}}"> --}}
            </div>
          </div><br>

            <div class="form-row">
              <div class="col-sm-1"> รายละเอียด : </div>
              <div class="col-sm-11">
              {!! Form::textarea('description', null, ['class' => 'form-control', 'id' => 'summary-ckeditor1']) !!}
              {{-- <textarea type="text" class="form-control" id="taskDescription" name="description" rows="3" value="{{old($diaries->description)}}"> </textarea> --}}
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

            {{-- <button type="submit" class="btn btn-primary">Submit</button> --}}
            {!! Form::submit('บันทึก', ['class' =>'btn btn-primary']) !!}
          {!! Form::close() !!}
          

          <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
          <script>
              CKEDITOR.replace( 'summary-ckeditor1' );
          </script>

     </div>
  </div>
</div>

@endsection



{{-- @extends('layout.layout')

@section('content')
    <h1>Add New Task</h1>
    <hr>
     <form action="" method="post">

     {{ csrf_field() }}
      <div class="form-group">
        <label for="title">Task Title</label>
        <input type="text" class="form-control" id="taskTitle"  name="title">
      </div>
      <div class="form-group">
        <label for="description">Task Description</label>
        <input type="text" class="form-control" id="taskDescription" name="description">
      </div>
      @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
      @endif
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection --}}