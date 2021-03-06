@extends('layouts.app', ['page' => __('Student'),'pageSlug' => 'diaries'])

@section('content')

<style>

  div.b {
  white-space: nowrap; 
  width: 100px; 
  overflow: hidden;
  text-overflow: ellipsis; 
  /* border: 1px solid #000000; */
}

</style>

<div class='container'>
  <div class="row">
     <div class="col-12">
          <div class="card card-chart">
              <h4 class="card-header" style="background-color: #89e3fa ">
                  <ul class="row">
                      <div class="col-md-3">
                        <img src="{{ asset('white') }}/img/icon/book.png" style="width: 20%;" alt="homepage" class="img-responsive" />
                        {{-- <a href="diaries.create">   </a> --}}
                        {{-- <a href="diariesa/create" >บันทึกประจำวัน</a>  --}}
                        <strong>บันทึกประจำวัน</strong>

                      </div>
                      <div class="col-md-6 text-right">
                        {{-- <a type="button" href="{{route('diariesa.create')}}" class="btn btn-primary" >
                          <i class="tim-icons icon-book-bookmark"></i> สร้างบันทึกประจำวัน</a> --}}
                      </div>

                      <div class="col-md-3 text-right">
                        <a type="button" href="{{route('diariesa.create')}}" class="btn btn-info" >
                          <i class="tim-icons icon-simple-add"></i> สร้างบันทึกประจำวัน</a>
                      </div> 


                  </ul>
              </h4>
          </div>
          
          @include('alert._messages')
          
      <table class="table table-striped" id="table3d">
        <thead class="">
          <tr class="table-info">
            <th scope="col" class="text-center" >ลำดับที่</th>
            {{-- <th scope="col">Task Description</th> --}}
            <th scope="col" class="text-center">วันที่</th>
            <th scope="col" class="text-center">รายละเอียด</th>
            <th scope="col" class="text-center">การกรระทำ</th>
          </tr>
        </thead>
        <tbody>
          @foreach($diaries as $diariesa)
          <tr>

            <th scope="row" class="text-center">{{$diariesa->id}}</th>
            {{-- <td>{{$diariesa->description}}</td> --}}
            <td class="text-center">{{$diariesa->created_at->toFormattedDateString()}}</td>
            <td class="text-center">  
              {{-- <span class="text-truncate">               --}}
                <div class="b">
              <a href="{{route('diariesa.show', $diariesa->id)}}">
                {!!strip_tags($diariesa->description) !!}
              </a>
            </div>
            {{-- </span>  --}}
            </td>

            <td class="text-center" >
            <div class="btn-group" role="group" aria-label="Basic example">
                {{-- <a href="{{route('diariesa.show', $diariesa->id)}}">
                  <button type="button" class="btn btn-warning">View</button>
                </a>&nbsp; --}}

                <a href="{{route('diariesa.edit', $diariesa->id)}}">
                  <button type="button" class="btn btn-warning">
                    <i class="tim-icons icon-pencil" aria-hidden="true"></i></button>
                </a>&nbsp;

                {{-- <form action="{{url('student', [$diariesa->id])}}" method="POST">
                  <input type="hidden" name="_method" value="DELETE">
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  <input type="submit" class="btn btn-danger" value="Delete"/>
                </form> --}}

                {!! Form::open(['route' => ['diariesa.destroy', $diariesa->id], 'method' => 'DELETE']) !!}
                  {!! Form::submit('ลบ', ['class' => 'btn btn-danger']) !!}
                {!! Form::close() !!}

            </div>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
     </div>
  </div>
</div>

   
    
@endsection

@push('scripts')
<script>
$(document).ready(function() {
    $('#table3d').DataTable();
} );
</script>
@endpush