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
                        <button class="btn btn-primary"><i class="tim-icons icon-book-bookmark"></i>  บันทึกประจำวันของฉัน</button>
                      </div>
                      <div class="col-md-3 text-right">
                        {{-- <button type="submit" class="btn btn-primary-title" onclick="{{ Redirect::to('student.show_write_diary')}}"><i class="tim-icons icon-simple-add"></i>  เขียนรายการใหม่</button> --}}
                        <button type="submit" class="btn btn-info" onclick="window.location='{{ route("student.show_write_diary") }}'"><i class="tim-icons icon-simple-add"></i>  เพิ่มบันทึกประจำวัน</button>
                      </div>     
                  </ul> 
              </h4>
          </div>
          <div class="col-12 mt2">
            <div class="card card-chart">
              <div class="card-header" style="background-color: #9febffad ">
                  <ul class="row">
                      <div class="col-md-5">
                        <p style="line-height: 50px;"> รายการไดอารี่</p>
                      </div>
                      <div class="col-md-4 text-right">
                        <input style="margin: 7px 1px;" type="text" name="search" value="" class="form-control" id="diarysearch" placeholder="คำหลัก" autocomplete="entrysearch">
                      </div>
                      <div class="col-md-3 text-right">
                        <input type="hidden" name="action" value="lookup">
                        <button type="submit" class="btn btn-info"><i class="fa fa-search"></i> ค้นหา</button>
                      </div>             
                  </ul> 
              </div>
            </div>
          </div>
          <form action="" method="post">
            {{ csrf_field() }}
              Task name:
              <br />
              <input type="text" name="name" />
              <br /><br />
              Task description:
              <br />
              <textarea name="description"></textarea>
              <br /><br />
              Start time:
              <br />
              <input type="text" name="task_date" class="date" />
              <br /><br />
              <input type="submit" value="Save" />
          </form>
          
      </div>
  </div>
</div>
   
    
@endsection

@push('js')
    <script src="{{ asset('white') }}/js/plugins/chartjs.min.js"></script>
    <script>
        $(document).ready(function() {
          demo.initDashboardPageCharts();
        });
    </script>
@endpush
