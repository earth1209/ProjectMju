@extends('layouts.app', ['page' => __('Company'), 'pageSlug' => 'diaryshow'])

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card card-chart">
            <div class="card-header form-inline" style="background-color: #89e3fa">
                <img src="{{ asset('/white/'.'/img/'.'/dr.png/') }}" width="80" height="80" alt="Profile Photo">
                <h3>&nbsp;บันทึกการฝึกงานประจำวันของนักศึกษาฝึกงาน</h3>
            </div>
        </div>
    </div>
</div>

<div class='container'>
    <div class="row">
       <div class="col-12">
            <div class="card card-chart">
                <div class="card-header" style="background-color: #ffffff ">
                    <div class="container">
                        <div class="table-responsive">
                            <table class="table tablesorter" >
                                <thead class="table-info text-primary">
                                <tr class="text-center">
                                    <th scope="col">รหัสนักศึกษา</th>
                                    <th scope="col">ชื่อ-นามสกุล</th>
                                    <th scope="col">เวลาเข้างาน</th>
                                    <th scope="col">เวลาออกงาน</th>
                                    <th scope="col">บันทึกประจำวัน</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @for ( $i=1 ; $i < 5; $i++)
                                    <tr>
                                        <td class="text-center">6404101365</td>
                                        <td class="text-center">Jennin  Arck </td>
                                        <td class="text-center">8:00:00</td>
                                        <td class="text-center">18:00:00</td>
                                        <td class="text-center">
                                            <a>
                                                <button name="diary-item" type="button" id="diary-item" style ="background-color:#ffffff;" >
                                                <img src="{{ asset('/white/'.'/img/'.'/diary.png/') }}" width="40" height="40" alt="">
                                                </button>
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
        </div>
    </div>
</div>


@endsection
