@extends('layouts.app', ['page' => __('Officer'), 'pageSlug' => 'add_account'])

@section('content')

<div class="row">
    <div class="col-12">
        <div class="card card-chart">
            <h4 class="card-header" style="background-color: #89e3fa ">
                <ul class="row">
                    <div class="col-md-6">
                        <img src="{{ asset('white') }}/img/icon/form.png" style="width: 7%;" alt="homepage" class="img-responsive" />
                        ฟอร์มสมัครสมาชิก
                    </div>
                    <a href="{{ route('officer.announce') }}">
                    <div class="col-md-6 text-right">
                        {{-- <button class="btn btn-primary-title"><i class="tim-icons icon-simple-add"></i>  กลับ</button> --}}
                    </div>
                    </a>             
                </ul> 
            </h4>
        </div>
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
              <div class="col-md-12">
                <form action="{{ route('officer.store_account') }}" method="POST">
                  @csrf
                  <div class="form-row">
                    <div class="col-sm-1"> ชื่อบริษัท : </div>
                    <div class="col-sm-5">
                      <input  name="company_name" type="text" required class="form-control" id="company_name" placeholder="ชื่อบริษัท"   />
                    </div>
                    <div class="col-sm-1"> อีเมล : </div>
                    <div class="col-sm-5">
                      <input  name="email" type="text" required class="form-control" id="address" placeholder="อีเมล"/>
                    </div>
                  </div><br>

                  <div class="form-row">
                    <div class="col-sm-1"> รหัส : </div>
                    <div class="col-sm-5">
                      <input  name="password" type="text" required class="form-control" id="number" placeholder="รหัส" />
                    </div>
                    <div class="col-sm-1"> ยืนยันรหัส : </div>
                    <div class="col-sm-5">
                      <input  name="password" type="text" required class="form-control" id="number" placeholder="ยืนยัน" />
                    </div>
                  </div><br>


                  <div class="form-row">
                    <div class="col-sm-12 text-right">
                      <button type="submit" class="btn btn-primary text-center" id="btn">  สมัคร  </button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
        </div>
    </div>
</div>

@endsection

