@extends('layouts.app', ['page' => __(''), 'pageSlug' => 'supertable'])

@section('content')

<div class="row">
    <div class="col-12">
        <div class="card card-chart">
            <div class="card-header " style="background-color: #11cdef">
                <h3>- การจัดการสิทธิ์การเข้าถึง -</h3>
            </div>
        </div>
    </div>
</div>


      @if(Session::has('message'))
      @endif
      {{-- <div class="alert alert-info">{{Session::get('message')}}</div> --}}
      <div class="card-body">
        <div class="  table-responsive" >

          <form method="post" action="{{ route('admin.update') }}" autocomplete="off">
{{-- 
            <form action="{{ route('user.update', $admin) }}" method="post"> --}}
        {{-- <form action="{{url('admin',[$admin])}}" method="post"> --}}
          <input type="hidden" name="_method" value="PUT">
          {{ csrf_field() }}

          

          <table class="table " id="data-table">
            <thead class="table-info text-primary">
              <tr>
                <th >
                การจัดการสิทธิ์การเข้าถึง
                </th>
                <th class="text-center">
                  เจ้าหน้าที่
                </th>
                <th class="text-center">
                  นักศึกษา
                </th>
                <th class="text-center">
                 อาจารย์
                </th>
                <th class="text-center">
                  บริษัท
                </th>
                <th class="text-center">
                  admin
                </th>
              </tr>
            </thead>
            <tbody>
                  @foreach($admin as $accessrights)
           <tr>
            <th scope="row" name="name_ac">{{$accessrights->name_ac}}</th>

            <td scope="row" class="text-center">
              <div class="form-group">
                  {{-- <option> {{$accessrights->officer}}</option> --}}
                  @if($accessrights->officer =='1') 
                  ไม่มีสิทธิ์
                   @elseif($accessrights->officer =='2') 
                    ดูอย่างเดียว
                    @elseif($accessrights->officer =='3') 
                      ดูและแก้ไข
                      @endif
                </div>  
              </td>
              <td scope="row" class="text-center">
                <div class="form-group">
                    {{-- <option>  {{$accessrights->student}}</option> --}}
                    @if($accessrights->student =='1') 
                        ไม่มีสิทธิ์
                    @elseif($accessrights->student =='2') 
                            ดูอย่างเดียว
                      @elseif($accessrights->student =='3') 
                                 ดูและแก้ไข
                        @endif
                    </div>
               </td>

               <td scope="row" class="text-center">
                <div class="form-group">
                    {{-- <option>   {{$accessrights->teacher}}</option> --}}
                    @if($accessrights->teacher =='1') 
                    ไม่มีสิทธิ์
                      @elseif($accessrights->teacher =='2') 
                      ดูอย่างเดียว
                        @elseif($accessrights->teacher =='3') 
                        ดูและแก้ไข
                         @endif
                </div>
              </td>

              <td scope="row" class="text-center">
                <div class="form-group">
                    {{-- <option>  {{$accessrights->company}}</option> --}}
                    @if($accessrights->company =='1') 
                  ไม่มีสิทธิ์
                      @elseif($accessrights->company =='2') 
                      ดูอย่างเดียว
                        @elseif($accessrights->company =='3') 
                        ดูและแก้ไข
                    @endif
                </div>
                </td>

            <td scope="row" class="text-center">
                <div class="form-group">
                    @if($accessrights->admin =='1') 
                     ไม่มีสิทธิ์
                      @elseif($accessrights->admin =='2') 
                          ดูอย่างเดียว
                        @elseif($accessrights->admin =='3') 
                              ดูและแก้ไข
                    @endif
                </div>  
            </td>
           </tr>
           @endforeach
            </tbody>
          </table>
     

          <div class="text-right">
     

          @if($errors->any())
          <div class="alert alert-danger">
            <ul>
              @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
                  
              @endforeach
            </ul>
          </div>
          @endif


                  <button type="submit" class="btn btn-warning  mt-4">{{ __('แก้ไข') }}</button>
  
        {{-- <button type="submit" class="btn btn-success mt-4">{{ __('บันทึก') }}</button> --}}

          {{-- <button type="submit" class="btn btn-primary">Sumbit</button> --}}


        </div>
        </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection



