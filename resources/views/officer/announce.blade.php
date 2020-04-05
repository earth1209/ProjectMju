@extends('layouts.app', ['page' => __('Officer'), 'pageSlug' => 'announce'])

@section('content')

<div class="row">
    <div class="col-12">
        <div class="card card-chart">
            <h4 class="card-header" style="background-color: #89e3fa ">
                <ul class="row">
                    <div class="col-md-6">
                        <img src="{{ asset('white') }}/img/shout.png" style="width: 7%;" alt="homepage" class="img-responsive" />
                        ประกาศรับนักศึกษาฝึกงาน
                    </div>
                    <div class="col-md-6 text-right">
                        <a href="{{ route('officer.add_news') }}">
                        <button class="btn btn-info"><i class="tim-icons icon-simple-add"></i>  ประกาศรับนักศึกษา</button>
                        </a>
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

                    {{-- @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif --}}

                        <table class="table table-hover table-striped" >
                            <thead class="table-info text-primary">
                            <tr>
                                <th class="text-center" scope="col">บริษัท</th>
                                <th class="text-center" scope="col">จำนวนที่รับ</th>
                                <th class="text-center" scope="col">เกรดเฉลี่ย</th>
                                <th class="text-center" scope="col">ความสามารถ</th>
                                <th class="text-center" scope="col">วันที่เปิดรับ</th>
                                <th class="text-center" scope="col">การกระทำ</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($recruits_news as $announce){{--ตัวแปรต้องเหมือนใน controller function ที่ส่งค่ามา--}}
                                <tr>
                                    {{-- <td class="text-center">{{ $announce->company_name }}</td> --}}
                                    <td class="text-center">{{ $announce->companies->first()->company_name}}</td>
                                    {{-- <td class="text-center">{{ $announce->company_id }}</td> --}}
                                    <td class="text-center">{{ $announce->student_number }}</td>
                                    <td class="text-center">{{ $announce->gpa }}</td>
                                    <td class="text-center">
                                    @foreach($announce->recruits_skills as $item)
                                    
                                    {{ $item->recruits_skill->skill_name }},
                                    
                                    
                                    @endforeach
                                    
                                     {{-- {{ print_r($announce->recruits_skills->first()) }} --}}
                                    </td>
                                    <td class="text-center">{{ $announce->created_at }}</td>
                                    <td class="text-center">
                                        {{-- <form action="{{ route('products.destroy',$product->id) }}" method="POST"> --}}
                                        <a>
                                            <button name="" type="submit" class="btn btn-warning ">  แก้ไข</button>
                                        </a>
                                            {{-- @csrf
                                            @method('DELETE') --}}
                                        <a>
                                            <button name="delete" type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">  ลบ</button>
                                        </a>
                                        {{-- </form> --}}
                          
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- @foreach($users as $row) --}}

<div class="row">
    <div class="col-md-6">    
            
    </div>
</div>
{{-- @endforeach --}}

@endsection

