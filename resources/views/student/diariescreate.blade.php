@extends('layouts.app', ['page' => __('Student'),'pageSlug' => 'diaries'])

@section('content')

<style>
  .textarea.form-control{
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

          @include('alert._messages')

          <h1>เพิ่มบันทึกประจำวัน</h1>
          <hr>
          {!! Form::open(['route' => 'diariesa.store', 'methot' => 'POST']) !!}
          <div class="form-row">
            <div class="col-sm-1"> เวลาเริ่มงาน : </div>
            <div class="col-sm-5">
              {!! Form::datetimeLocal('start_time', null, ['class' => 'form-control','id' => 'start_time']) !!}
            </div>

            <div class="col-sm-1"> เวลาเลิกงาน : </div>
            <div class="col-sm-5">
              {!! Form::datetimeLocal('break_time', null, ['class' => 'form-control','id' => 'break_time']) !!}
            </div>
          </div><br>
          <div class="form-row">
            <div class="col-sm-1"> รายละเอียด : </div>
            <div class="col-sm-11">
              {!! Form::textarea('description', null, ['class' => 'form-control', 'id' => 'summary-ckeditor']) !!}
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

            {!! Form::submit('บันทึก', ['class' =>'btn btn-primary']) !!}
          
          {!! Form::close() !!}

          {{-- <textarea class="form-control" id="summary-ckeditor" name="summary-ckeditor"></textarea> --}}
          <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
          <script>
              CKEDITOR.replace( 'summary-ckeditor' );
          </script>
       
     </div>
  </div>
</div>


@endsection



