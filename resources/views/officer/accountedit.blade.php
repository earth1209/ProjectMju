@extends('layouts.app', ['page' => __('Officer'), 'pageSlug' => 'accountedit'])

@section('content')

<div class="row">
    <div class="col-12">
        <div class="card card-chart">
            <h4 class="card-header" style="background-color: #89e3fa ">
                <ul class="row">
                    <div class="col-md-6">
                        <img src="{{ asset('white') }}/img/icon/form.png" style="width: 7%;" alt="homepage" class="img-responsive" />
                        แบบฟอร์มเพิ่มบริษัท
                    </div>
                    <a href="{{ route('officer.announce') }}">
                    <div class="col-md-6 text-right">
                      <a type="button" href="{{ url('/officer/register') }}" class="btn btn-primary" >
                        <i class="tim-icons icon-double-left"></i> กลับ</a>
                    </div>
                    </a>             
                </ul> 
            </h4>
        </div>
    </div>
    {{-- @if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif --}}
    <div class="col-12">
        <div class="card card-chart">
            <div class="card-header" style="background-color: #ffffff ">
              <div class="col-md-12">
                @include('alert._messages')
                {{-- <form action="{{ route('officer.store_account') }}" method="POST">
                  @csrf --}}
                  {{-- {!! Form::open(['route' => 'register.store', 'methot' => 'POST']) !!} --}}
                  {!! Form::model($register, ['route' => ['register.update', $register->companies_id], 'method' => 'PUT']) !!}
                  <div class="form-row">
                    <div class="col-sm-2"> ชื่อบริษัท : </div>
                    <div class="col-sm-4">
                      {!! Form::text('companies_name', null, ['class' => 'form-control','id' => 'companies_name','placeholder' => 'ชื่อบริษัท']) !!}
                      {{-- <input  name="company_name" type="text" required class="form-control" id="company_name" placeholder="ชื่อบริษัท"   /> --}}
                    </div>
                    <div class="col-sm-2 text-right"> อีเมล : </div>
                    <div class="col-sm-4">
                      {!! Form::text('email', null, ['class' => 'form-control','id' => 'email','placeholder' => 'อีเมล']) !!}
                      {{-- <input  name="company_name" type="text" required class="form-control" id="company_name" placeholder="อีเมล"   /> --}}
                    </div>
                  </div><br>

                  <div class="form-row">
                    <div class="col-sm-2"> ที่อยู่ : </div>
                    <div class="col-sm-10">
                      {!! Form::textarea('address', null, ['class' => 'form-control','id' => 'address','placeholder' => 'ที่อยู่']) !!}
                      {{-- <input  name="company_name" type="text" required class="form-control" id="company_name" placeholder="ชื่อบริษัท"   /> --}}
                    {{-- <textarea name="company_name" id="" cols="100" rows="5" class="form-control" required id="company_name" placeholder="ที่อยู่"></textarea> --}}
                    </div>
                  </div><br>

                  <div class="form-row">
                    <div class="col-sm-2"> เว็บไซต์ : </div>
                    <div class="col-sm-4"> 
                      {!! Form::text('website', null, ['class' => 'form-control','id' => 'website','placeholder' => 'เว็บไซต์']) !!}
                    </div>
                  </div><br>

                  <div class="form-row">
                    <div class="col-sm-2"> แผนกที่มาติดต่อ : </div>
                    <div class="col-sm-4">
                      @php
                          $division_contact = [];
                          foreach ($dv as $value) {
                            #array_push($division_contact,($value->divisions_ct_id => $value->division_name));
                            $division_contact[$value->divisions_ct_id] = $value->division_name;
                          } 
                      @endphp
                        {!! Form::select('divisions_ct_id', $division_contact,null, ['class' => 'form-control']) !!}
                    </div>
                  </div><br>

                  {{-- <div class="form-row">
                    <div class="col-sm-1"> ชื่อผู้ใช้ : </div>
                    <div class="col-sm-3">
                      {!! Form::text('website', null, ['class' => 'form-control','id' => 'website','placeholder' => 'ชื่อผู้ใช้']) !!}
                      <input  name="password" type="text" required class="form-control" id="number" placeholder="ชื่อผู้ใช้" />
                    </div>
                    <div class="col-sm-1"> รหัสผ่าน : </div>
                    <div class="col-sm-3">
                      <input  name="password" type="text" required class="form-control" id="number" placeholder="รหัสผ่าน" />
                    </div>
                    <div class="col-sm-1"> ยืนยันรหัส : </div>
                    <div class="col-sm-3">
                      <input  name="password" type="text" required class="form-control" id="number" placeholder="ยืนยัน" />
                    </div>
                  </div><br> --}}

                  <input type="hidden" name="location_id" value="0">
                  <input type="hidden" name="users_id" value="0">
                  <input type="hidden" name="email" value="NULL">




                  <div class="form-row">
                    <div class="col-sm-12 text-right">
                      {{-- {!! Form::submit('สมัคร', ['class' => 'btn btn-info text-center','id' => '']) !!} --}}
                      {!! Form::submit('ตกลง', ['class' =>'btn btn-primary']) !!}

                      {{-- <button type="submit" class="btn btn-info text-center" id="btn">  สมัคร  </button> --}}
                    </div>
                  </div>
                {{-- </form> --}}
                {!! Form::close() !!}
              </div>
            </div>
        </div>
    </div>
</div>

@endsection

