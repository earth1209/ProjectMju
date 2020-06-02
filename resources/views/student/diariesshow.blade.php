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
                        บันทึกประจำวัน
                      </div>
                      <div class="col-md-6 text-right">

                         <a type="button" href="{{ url('/student/diariesa') }}" class="btn btn-primary" >
                          <i class="tim-icons icon-book-bookmark"></i> หน้าหลักบันทึกประจำวัน</a>
                        {{-- <button class="btn btn-primary"><i class="tim-icons icon-book-bookmark"></i> บันทึกประจำวันของฉัน</button> --}}
                      </div>
                      <div class="col-md-3 text-right">
                        <a type="button" href="{{route('diariesa.create')}}" class="btn btn-info" >
                          <i class="tim-icons icon-simple-add"></i> สร้างบันทึกประจำวัน</a>
                      </div>     
                  </ul> 
              </h4>
          </div>

          <div class="container">
            <div class="card border border-primary">
              <div class="card-body">
                <h5 class="card-title">บันทึกประจำวันที่ ::  {{$diaries->created_at->toFormattedDateString()}}</h5>
                <p class="card-text">Description: {!!$diaries->description!!}</p>
              </div>
            </div>
          </div>
          

  


      </div>
  </div>
</div>
   
    
@endsection
