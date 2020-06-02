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
                        <a href="{{ route('recruits_news.create') }}">
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

                        <table class="table table-hover table-striped" id="table2an">
                            <thead class="table-info text-primary">
                            <tr>
                                <th class="text-center" scope="col">บริษัท</th>
                                <th class="text-center" scope="col">จำนวนที่รับ</th>
                                <th class="text-center" scope="col">เกรดเฉลี่ย</th>
                                <th class="text-center" scope="col">ความสามารถ</th>
                                <th class="text-center" scope="col">วันที่เปิดรับ</th>
                                <th class="text-center" scope="col">
                                    <div class="form-inline float-right">
                                        <label for="">หาข้อมูลแต่ละปี :&nbsp;</label>
                                        <form action="/company/resume" method="get">
                                            <select class="form-control mr-sm-2" name="" style="width: 95px;background: #ffffff">
                                                @php $firstYear = (int)date('Y')-5; @endphp
                                                @php $thisYear = $firstYear+5; @endphp
                                                @php for($i=$firstYear;$i<=$thisYear;$i++) 
                                                    { 
                                                        echo '<option value=' .$i.'>ปี '.$i.'</option>';
                                                    }
                                                @endphp
                                            </select>
                                            <button type="submit" class="btn"><i class="tim-icons icon-zoom-split" aria-hidden="true"></i></button>     
                                        </form>    
                                    </div>
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($recruits_news as $announce){{--ตัวแปรต้องเหมือนใน controller function ที่ส่งค่ามา--}}
                                <tr>
                                    {{-- <td class="text-center">{{ $announce->company_name }}</td> --}}
                                    <td class="text-center">{{ $announce->companies->first()->companies_name}}</td>
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
                                            <button name="" type="submit" class="btn btn-warning "><i class="tim-icons icon-pencil" aria-hidden="true"></i></button>
                                        </a>
                                            {{-- @csrf
                                            @method('DELETE') --}}
                                        <a>
                                            <button name="delete" type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')"><i class="tim-icons icon-trash-simple" aria-hidden="true"></i></button>
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

@push('scripts')
<script>
$(document).ready(function() {
    $('#table2an').DataTable();
} );

// $(document).ready(function() {
//     var table = $('#example').DataTable( {
//         lengthChange: false,
//         buttons: [ 'copy', 'excel', 'pdf', 'colvis' ]
//     } );
//     table.buttons().container()
//         .appendTo( '#example_wrapper .col-md-6:eq(0)' );
// } );

</script>
@endpush