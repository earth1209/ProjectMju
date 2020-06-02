@extends('layouts.app', ['page' => __('Officer'), 'pageSlug' => 'account'])

@section('content')

<div class="row">
    <div class="col-12">
        <div class="card card-chart">
            <h4 class="card-header" style="background-color: #89e3fa ">
                <ul class="row">
                    <div class="col-md-6">
                        <img src="{{ asset('white') }}/img/add.png" style="width: 7%;" alt="homepage" class="img-responsive" />
                        จัดการข้อมูลบริษัท
                    </div>
                    <div class="col-md-6 ">
                        <div class="form-inline float-right">
                            {{-- <a type="button" href="{{route('diariesa.create')}}" class="btn btn-info" >
                                <i class="tim-icons icon-simple-add"></i> สร้างบันทึกประจำวัน</a> --}}
                            <a href="{{ route('register.create') }}" class="link footer-link ">
                                {{ Form::button('สร้างบัญชี', ['type' => 'submit', 'class' => 'btn btn-info waves-effect px-3'] ) }}
                            </a>
                        </div>
                        <div class="form-inline float-right">
                            {{-- <a type="button" href="{{route('diariesa.create')}}" class="btn btn-info" >
                                <i class="tim-icons icon-simple-add"></i> สร้างบันทึกประจำวัน</a> --}}
                            <a href="{{ route('register.create') }}" class="link footer-link">
                                
                                {{ Form::button('<i class="tim-icons icon-double-left"></i> กลับ', ['type' => 'submit', 'class' => 'btn btn-primary waves-effect px-3'] ) }}
                            </a>
                        </div>
                    </div>            
                </ul> 
            </h4>
        </div>
    </div>
</div>
    <div class="col-12">
        <div class="card card-chart">
            <div class="card-header" style="background-color: #ffffff ">
                <div class="container">
                    <div class="card wow bounceInUp">
                        <div class="table-responsive">
                            @include('alert._messages')

                            <table class="table table-hover table-striped table-bordered" id="table2ss">
                                <thead class="table-info text-primary">
                                <tr>
                                    <th scope="col" class="text-center">ลำดับ</th>
                                    <th scope="col" class="text-center">บริษัท</th>
                                    <th scope="col" class="text-center">ที่อยู่</th>
                                    {{-- <th scope="col" class="text-center">เว็บไซต์บริษัท</th> --}}
                                    <th scope="col" class="text-center">แผนกที่ติดต่อ</th>
                                    {{-- <th scope="col" class="text-center">ชื่อผู้ใช้</th>
                                    <th scope="col" class="text-center">รหัสผ่าน</th> --}}
                                    <th scope="col" class="text-center">แก้ไข</th>
                                    <th scope="col" class="text-center">ลบ</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach ($register as $registers)
                                    <tr>
                                        <td class="text-center">{!! $registers->companies_id !!}</td>
                                        <td class="text-center">{!! $registers->companies_name !!}</td>
                                        <td class="text-center">{!! $registers->address !!}</td>
                                        {{-- <td class="text-center">http://www.accellence.co.th/</td> --}}
                                        <td class="text-center">แผนกบุคคล</td>
                                        {{-- <td class="text-center">com630101</td>
                                        <td class="text-center">com630101</td> --}}
                                        <td class="text-center">
                                            <a href="{{route('register.edit', $registers->companies_id)}}">
                                                {{ Form::button('<i class="tim-icons icon-pencil"></i>', ['type' => 'submit', 'class' => 'btn btn-warning waves-effect px-3'] ) }}
                                                {{-- <button type="submit" class="btn btn-warning waves-effect px-3">
                                                </button> --}}
                                            </a>
                                        </td>
                                        <td class="text-center">
                                            
                                         
                                            {!! Form::open(['route' => ['register.destroy', $registers->companies_id], 'method' => 'DELETE']) !!}
                                                <button type="submit" class="btn btn-danger px-3" onclick="return confirm('คุณต้องการลบข้อมูลนี้หรือไม่ ?')"><i class="fa fa-trash"></i></button>
                                            {!! Form::close() !!}

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

@endsection

@push('scripts')
<script>
$(document).ready(function() {
    $('#table2ss').DataTable();
} );

// $(document).ready(function() {
//     var table = $('#example').DataTable( {
//         lengthChange: false,
//         buttons: [ 'copy', 'excel', 'pdf', 'colvis' ]
//     } );
//     table.buttons().container()
//         .appendTo( '#example_wrapper .col-md-6:eq(0)' );
// } );
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();   
});


</script>
@endpush