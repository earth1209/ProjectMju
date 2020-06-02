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
                        <a href="{{route('document.create')}}"><button class="btn btn-info">เพิ่มเอกสาร</button></a>
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
                        <table class="table table-hover" id="table2id">
                            <thead class="table-info text-primary">
                            <tr>
                                <th class="text-center" scope="col">ชื่อเอกสาร</th>
                                <th class="text-center" scope="col">Action</th>
                            </tr>
                            </thead>
                            @foreach ($document as $documents)
                            <tbody>
                                <td>{{ $documents->name_documents }}</td>
                                <td class="text-center">
                                    <div class="btn-group" role="group" aria-label="Basic example">

                                        <a href="{{route('document.download',$documents->documents_id)}}">
                                            <button type="button" class="btn btn-info waves-effect px-3">
                                                {{-- <i class="bi bi-file-arrow-down" aria-hidden="true"></i> --}}
                                                <i class="fa fa-download" aria-hidden="true"></i>
                                            </button>
                                        </a>&nbsp;
                                        
                                    <form action="{{route('document.destroy',$documents->documents_id)}}" method="post">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                         <button type="submit" class="btn btn-danger px-3" onclick="return confirm('คุณต้องการลบข้อมูลนี้หรือไม่ ?')"><i class="fa fa-trash"></i></button>

                                        {{-- <input type="submit" class="btn btn-danger btn-block" onclick="return confirm('คุณต้องการลบข้อมูลนี้หรือไม่ ?')" value="DELETE"> --}}
                                    </form>

                                    </div>
                                </td>
                             </tbody>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    
</div>


@endsection

@push('scripts')
<script>
$(document).ready(function() {
    $('#table2id').DataTable();
} );

</script>
@endpush
