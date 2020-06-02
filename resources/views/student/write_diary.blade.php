@extends('layouts.app', ['page' => __('Student'),'pageSlug' => 'write_diary'])

@section('content')

<div class='container'>
  <div class="row">
     <div class="col-12">
          <div class="card card-chart">
              <h4 class="card-header" style="background-color: #89e3fa ">
                  <ul class="row">
                      <div class="col-md-6">
                        <img src="{{ asset('white') }}/img/icon/book.png" style="width:10%;" alt="homepage" class="img-responsive" />
                          บันทึกประจำวัน
                      </div>
                      <div class="col-md-6 text-right">
                        <button class="btn btn-primary"><i class="tim-icons icon-book-bookmark"></i>  บันทึกประจำวันของฉัน</button>
                      </div>         
                  </ul> 
              </h4>
          </div>
          <div class="col-12 mt2">
            <div class="card card-chart">
              <div class="card-header" style="background-color: #ffffff ">
                  {{-- <ul class="row">
                      <div class="col-md-2">
                        <p style="line-height: 50px;">วันที่</p>
                      </div>
                      <div class="col-md-4" align = 'left'>
                        <input style="margin: 7px 1px;" type="text" name="search" value="" class="form-control" id="diarysearch" placeholder="yyyy-mm-dd hh:mm:ss" autocomplete="entrysearch">
                      </div>
                      <div class="col-md-6" align = 'right' >
                        <input type="hidden" name="action" value="lookup">
                        <button type="submit" class="btn btn-default"><i class="fa fa-search"></i> ค้นหา</button>
                      </div>             
                  </ul>  --}}

                <table id="table3wd">
                  <tbody>
                    <tr>
                      <td>
                        <b class="pad">วันที่</b>
                      </td>
                      <td>
                        <input class="form-control" id="" type="text" name="udato" autocomplete="on" value="" placeholder="yyyy-mm-dd hh:mm:ss">
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <b class="pad">หัวข้อ</b>
                      </td>
                      <td>
                        <input class="form-control" id="" type="text" name="udato" autocomplete="on" value="" placeholder="">
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <b class="pad">เนื้อหา</b>
                      </td>
                      <td>
                        <textarea class="form-control1" id="udato" type="text" name="udato" autocomplete="on" value="" placeholder="" style="width:99%;"></textarea>
                        {{-- <textarea id="" name="entry" rows="10" wrap="soft" required="" class="form-control1" style=""></textarea> --}}
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <button class="btn btn-primary">บันทึก</button>
                      </td>
                    </tr>
                  </tbody>
                </table>

              </div>
            </div>
          </div>
          
      </div>
  </div>
</div>
   
    
@endsection

@endsection

@push('scripts')
<script>
$(document).ready(function() {
    $('#table3wd').DataTable();
} );
</script>
@endpush