@extends('layouts.app', ['page' => __('Officer'), 'pageSlug' => 'account'])

@section('content')

<div class='container'>
    <div class="row">
        <div class="col-12">
            <div class="card card-chart">
                <h4 class="card-header" style="background-color: #89e3fa ">
                    <ul class="row">
                        <div class="col-md-6">
                            <img src="{{ asset('white') }}/img/add.png" style="width: 7%;" alt="homepage" class="img-responsive" />
                            บัญชีผู้ใช้  
                        
                        </div>
                        <div class="col-md-6 text-right">
                            {{-- <a href="{{ route('register') }}">
                                <button class="btn btn-info"><i class="tim-icons icon-simple-add"></i>  เพิ่มบัญชีบริษัท</button>
                            </a> --}}
                            <a href="{{ route('officer.add_account') }}" class="link footer-link">{{ _('Create Account') }}</a>


                            {{-- <a href="{{ route('auth.register') }}" class="btn btn-info">เพิ่มบัญชีบริษัท</a> --}}
                            {{-- D:\internship2\resources\views\auth\register.blade.php --}}



                        </div>             
                    </ul> 
                </h4>
            </div>
        </div>
        <div class="col-12">
            <div class="card card-chart">
                <div class="card-header" style="background-color: #ffffff ">
                    <div class="container">
                        <div class="table-responsive">
                            <table class="table tablesorter" >
                                <thead class="table-info text-primary">
                                <tr class="text-center">
                                    <th scope="col">บริษัท</th>
                                    <th scope="col">ที่อยู่</th>
                                    <th scope="col">action</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @for ( $i=1 ; $i < 5; $i++)
                                    <tr>
                                        <td class="text-center">โกเด้ง จำกัด</td>
                                        <td class="text-center">5/4 ต.หนองหาร อ.สันทราย จ.เชียงใหม่ </td>
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

