@extends('layouts.app', ['page' => __('Officer'), 'pageSlug' => 'document'])

@section('content')
@include('alert._messages')
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
                        <div >
                            

                            {{-- <div class="col-sm-8">
                            {!! Form::open(['route' => 'document.store', 'methot' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                              {!! Form::file('name_documents',null, ['class' => 'form-control','id' => '']) !!}
                              <input type="file" name="name_documents" class="form-control">
                            </div>
                            <div class="col-sm-3">
                                <div class="text-right">{!! Form::submit('บันทึก', ['class' =>'btn btn-primary']) !!}</div>
                            </div>
                            {!! Form::close() !!} --}}

                            <form class="form-row" action="{{ route('document.store') }}" method="POST" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="col-sm-1"> เอกสาร : </div>
                                <div class="col-sm-8">
                                    <input type="file" name="name_documents" class="form-control">
                                </div>
                                <div class="col-sm-3">
                                    <div class="text-right">{!! Form::submit('บันทึก', ['class' =>'btn btn-primary']) !!}</div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    
</div>


{{-- @foreach ($document as $documents)
<a href="{{ asset('storage') }}/file/{{ $documents->name_documents }}">{{ $documents->name_documents }}</a>
@endforeach --}}





    
@endsection

@push('scripts')
<script>

</script>
@endpush
