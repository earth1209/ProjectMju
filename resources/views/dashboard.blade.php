@extends('layouts.app', ['pageSlug' => 'dashboard'])

@section('content')
<div class="container">
    <section class="section_offset relative wrapper" style="margin-top: 0px;">
        <div class="video_wrap">
            <video autoplay="autoplay" muted="muted" loop="loop">
                <source src="{{ asset('white') }}/img/video.mp4" alt="">
            </video>
        </div>
        <div class="container">
            <div data-appear-animation="fadeInUp" data-appear-animation-delay="800" class="relative appear-animation fadeInUp appear-animation-visible" style="animation-delay: 800ms;">
                <div class="text-center"><br><br><br>
                    <p class="font"><b>Welcome To Internship Manager</b></p><br><br><br>
                </div>
            </div>
        </div>
    </section>
    <div class="row">
        <div class="col-12">
            <h5 class="box_title icon-box wow fadeInUp" style="margin-back-to-top: 0px"><img class="icon" src=""/></h5>
          <div class="card wow bounceInUp" >

            <table class="table table-hover table-striped">
             <tbody>
                <thead class="table-info text-primary">
                    <tr>
                        <th width="15%" scope="row" class="text-center">บริษัท</th>
                        <th width="15%" scope="row" class="text-center">เกรดเฉลี่ย</th>
                        <th width="5%" scope="row" class="text-center">จำนวนที่รับ</th>
                        <th width="5%" scope="row" class="text-center">ความสามารถ</th>
                        <th width="5%" scope="row" class="text-center">วันที่เปิดรับ</th>
                    </tr> 
                </thead>
                @foreach($recruits_news as $announce)
                  <tr>
                    <td width="15%" scope="row" class="text-center"><a href="">{{ $announce->companies->first()->company_name}}</a></td>
                    <td width="15%" scope="row" class="text-center">{{$announce['gpa']}}</td>
                    <td width="5%" scope="row" class="text-center">{{$announce['student_number']}}</td>
                    <td width="5%" scope="row" class="text-center">@foreach($announce->recruits_skills as $item)
                                    
                        {{ $item->recruits_skill->skill_name }},
                        
                        
                        @endforeach</td>
                    <td width="5%" scope="row" class="text-center"><a class="badge badge-success" href="">{{$announce['created_at']}}</a></td>
                  </tr>
                @endforeach
             </tbody>
           </table>
         </div><br>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-4">
            
        </div>
        <div class="col-lg-4">
            
        </div>
        <div class="col-lg-4">
            
        </div>
    </div>
    <div class="row">
        
            
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
