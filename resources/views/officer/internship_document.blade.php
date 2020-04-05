@extends('layouts.app', ['page' => __('Officer'), 'pageSlug' => 'document'])

@section('content')

<div class="row">
    <div class="col-12">
        <div class="card card-chart">
            <h4 class="card-header" style="background-color: #89e3fa ">
                <ul class="row">
                    <div class="col-md-6">
                        <img src="{{ asset('white') }}/img/icon/folder.png" style="width: 7%;" alt="homepage" class="img-responsive" />
                        เอกสารการฝึกงาน
                    </div>
                    <div class="col-md-6 text-right">
                        {{-- <button class="btn btn-primary-title"><i class="tim-icons icon-simple-add"></i>  เพิ่มเอกสาร</button> --}}
                    </div>             
                </ul> 
            </h4>
        </div>
    </div>
    <div class="col-12">
        <div class="card card-chart">
            <div class="card-header" style="background-color: #ffffff ">
                <div class="container">
                    <div class="card wow bounceInUp">
                        <table class="table table-hover" >
                            <thead class="table-info text-primary">
                            <tr>
                                <th class="text-center" scope="col">เอกสารก่อนฝึกงาน</th>
                                <th class="text-center" scope="col">ชื่อเอกสาร</th>
                                <th class="text-center" scope="col"><button class="btn btn-info"><i class="tim-icons icon-simple-add"></i>  เพิ่มเอกสาร</button></center></th>
                            </tr>
                            </thead>
                            <tbody>
                                @for ( $i=0 ; $i < 5; $i++)
                                <tr>
                                    <td class="text-center">
                                        <div class="photo">
                                            <img src="{{ asset('white') }}/img/icon/contract.png" alt="{{ __('icon pdf') }}">    
                                        </div>
                                    </td>
                                    <td class="text-center">แบบฟอร์มเสนอรายชื่อสถานประกอบการเพื่อฝึกงาน/สหกิจ สาขาวิทยาการคอมพิวเตอร์ </td>
                                    <td class="text-center">
                                        <a>
                                            <button name="" type="submit" class="btn btn-primary">  แก้ไข</button>
                                        </a>
                
                                        <a>
                                            <button name="delete" type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">  ลบ</button>
                                        </a>
                                    </td>
                                </tr>
                                @endfor
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="card card-chart">
            <div class="card-header" style="background-color: #ffffff ">
                <div class="container">
                    <div class="card wow bounceInUp">
                        <table class="table table-hover" >
                            <thead class="table-info text-primary">
                            <tr>
                                <th scope="col"><center>เอกสารระหว่างฝึกงาน</center></th>
                                <th scope="col"><center>ชื่อเอกสาร</center></th>
                                <th scope="col"><center><button class="btn btn-primary-title"><i class="tim-icons icon-simple-add"></i>  เพิ่มเอกสาร</button></center></th>
                            </tr>
                            </thead>
                            <tbody>
                                @for ( $i=1 ; $i < 5; $i++)
                                <tr>
                                    <td class="text-center">
                                        <div class="photo">
                                            <img src="{{ asset('white') }}/img/icon/contract.png" alt="{{ __('icon pdf') }}">    
                                        </div>
                                    </td>
                                    <td class="text-center"><center>เอกสารส่งตัว ครั้งแรกก่อนฝึกงาน</center></td>
                                    <td>
                                    <center>
                                        <a>
                                            <button name="" type="submit" class="btn btn-primary">  แก้ไข</button>
                                        </a>
                
                                        <a>
                                            <button name="delete" type="submit" class="btn btn-primary1" onclick="return confirm('Are you sure?')">  ลบ</button>
                                        </a>
                                    </center>
                                    </td>
                                </tr>
                                @endfor
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="card card-chart">
            <div class="card-header" style="background-color: #ffffff ">
                <div class="container">
                    <div class="card wow bounceInUp">
                        <table class="table table-hover" >
                            <thead class="table-info text-primary">
                            <tr>
                                <th scope="col"><center>เอกสารหลังฝึกงาน</center></th>
                                <th scope="col"><center>ชื่อเอกสาร</center></th>
                                <th scope="col"><center><button class="btn btn-primary-title"><i class="tim-icons icon-simple-add"></i>  เพิ่มเอกสาร</button></center></th>
                            </tr>
                            </thead>
                            <tbody>
                                @for ( $i=1 ; $i < 5; $i++)
                                <tr>
                                    <td class="text-center">
                                        <div class="photo">
                                            <img src="{{ asset('white') }}/img/icon/contract.png" alt="{{ __('icon pdf') }}">    
                                        </div>
                                    </td>
                                    <td class="text-center"><center>เอกสารหลังฝึกงานเสร็จสิ้น</center></td>
                                    <td>
                                    <center>
                                        <a>
                                            <button name="" type="submit" class="btn btn-primary">  แก้ไข</button>
                                        </a>
                
                                        <a>
                                            <button name="delete" type="submit" class="btn btn-primary1" onclick="return confirm('Are you sure?')">  ลบ</button>
                                        </a>
                                    </center>
                                    </td>
                                </tr>
                                @endfor
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div> --}}
    </div>
</div>
{{-- @foreach($users as $row) --}}

<div class="row">
    <div class="col-md-6">    
            
    </div>
</div>
{{-- @endforeach --}}

@endsection

