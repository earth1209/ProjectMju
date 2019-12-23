@extends('layouts.app', ['page' => __('Company'), 'pageSlug' => 'intern'])

@section('content')

<div class="row">
    <div class="col-12">
        <div class="card card-chart">
            <div class="card-header " style="background-color: #f7b3ff">
                <h3>- รายชื่อนักศึกษาที่ต้องการฝึกงานกับบริษัท -</h3>
            </div>
        </div>
    </div>
</div>

    <div class="col-lg-6 col-md-12">
            <div class="card ">
            <div class="card-header">
                <h5 class="card-category">Date : 00/00/00 Time : 00:00:00</h5>
            </div>
            <div class="card-body">
                <div class="">
                <div class="col-lg-5">
                    <div class="photo">
                        <img src="white/img/anime6.png" alt="Profile Photo">
                    </div>  
                </div><br>
                <div class="col-lg-7">
                    <span><i class="tim-icons icon-chart-pie-36"></i> ชื่อ-นามสกุล : สายใจ</span><br>
                    <span>GPA : </span><br>
                    <span>ความถนัด : </span><br>
                    <span>ช่องทางติดต่อ : </span>
                </div>
            </div><br>
            <div class="row">
                <div class="col-12 text-right">
                    <a href="http://localhost:8000/user/create" class="btn btn-sm btn-primary">Add user</a>
                </div>
            </div>
            <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div>
        </div>
    </div>
</div>
@endsection

