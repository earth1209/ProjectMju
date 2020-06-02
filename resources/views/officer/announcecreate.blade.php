@extends('layouts.app', ['page' => __('Officer'), 'pageSlug' => 'announcecreate'])

@section('content')

<div class="row">
    <div class="col-12">
        <div class="card card-chart">
            <h4 class="card-header" style="background-color: #89e3fa ">
                <ul class="row">
                    <div class="col-md-6">
                        <img src="{{ asset('white') }}/img/shout.png" style="width: 7%;" alt="homepage" class="img-responsive" />
                        ประกาศข่าวสาร
                    </div>
                    <a href="{{ route('officer.announce') }}">
                    <div class="col-md-6 text-right">
                        {{-- <button class="btn btn-primary-title"><i class="tim-icons icon-simple-add"></i>  กลับ</button> --}}
                    </div>
                    </a>             
                </ul> 
            </h4>
        </div>
    </div>
    @if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <div class="col-12">
        <div class="card card-chart">
            <div class="card-header" style="background-color: #ffffff ">
              <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            {{-- <h5 class="title">{{ _('Edit Profile') }}</h5> --}}
                        </div>
                        {{-- <form action="{{ route('officer.store') }}" method="POST"> --}}
                          {!! Form::open(['route' => 'diariesa.store', 'methot' => 'POST']) !!}
                          {{-- @csrf --}}
                            <div class="card-body">
                                    {{-- @method('put') --}}
                                    
                                    <div class="form-row">
                                      <div class="col-md-4">
                                        <label>{{ _('ชื่อบริษัท :') }}</label>
                                          {{-- <input type="text" name="company_name" class="form-control" placeholder="{{ _('Company Name') }}" value=""> --}}
                                          {!! Form::text('company_name', null, ['class' => 'form-control', 'id' => '','placeholder' => 'Company Name']) !!}
                                      </div>
                                      <div class="col-md-2">
                                        <label>{{ _('gpa :') }}</label>
                                         {{-- <input type="text" name="gpa" class="form-control" placeholder="{{ _('Address') }}" value=""> --}}
                                         {!! Form::text('gpa', null, ['class' => 'form-control', 'id' => '','placeholder' => 'gpa']) !!}
                                      </div>
                                      <div class="col-md-2">
                                        <label>{{ _('จำนวนที่รับ :') }}</label>
                                          {{-- <input type="text" name="student_number" class="form-control" placeholder="{{ _('Number') }}" value=""> --}}
                                          {!! Form::text('student_number', null, ['class' => 'form-control', 'id' => '','placeholder' => 'Student number']) !!}
                                      </div>
                                      <div class="col-md-4">
                                        <label>{{ _('วันที่เปิดรับ :') }}</label>
                                         {{-- <input type="date" name="created_at" class="form-control" placeholder="{{ _('Date') }}" value=""> --}}
                                         {!! Form::date('created_at', null, ['class' => 'form-control', 'id' => '','placeholder' => 'date']) !!}
                                      </div>
                                    </div>
{{-- 
                                    <div class="form-row">
                                      <div class="col-md-12">
                                        <label>{{ _('ความสามารถ :') }}</label>
                                          <input type="text" name="skill" class="form-control" placeholder="{{ _('skill') }}" value="">
                                      </div>
                                    </div> --}}

                                    <div class="form-row">
                                      <label>{{ _('ความสามารถ :') }}</label>
                                      
                                      {{-- <button id="myBtn" type="button" class="btn btn-fill btn-primary">{{ _('เพิ่ม') }}</button> --}}
                                        <div class="col-md-12">
                                          @foreach ($skill as $skills)
                                          <div class="form-check-inline">
                                            <label class="form-check-label">
                                              {{-- <input type="checkbox" class="form-check-input" name="skill" value="{{ $skills->skill_id }}">{{ $skills->skill_name }} --}}
                                              {!! Form::checkbox('skill',$skills->skill_id,['class' => 'form-control','id' => ''])!!}
                                              {{-- {!! Form::select('select', $list, null, ['class' => 'form-control']) !!} --}}
                                              {{ $skills->skill_name }}
                                              {{-- {!! Form::checkbox($name, $value, $checked, [$options]) !!} --}}
                                            </label> 
                                          </div> 
                                          @endforeach
                                          <div class="form-check-inline">
                                            <label class="form-check-label">
                                              <a href="#">
                                                <img type="submit" id="myBtn" src="{{ asset('white') }}/img/icon/plus.png" style="width: 7%;" alt="homepage" class="img-responsive" />
                                                อื่นๆ
                                              </a>
                                            </label>
                                          </div>
                                        </div>
                                      </div>
                                    
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-fill btn-primary">{{ _('ประกาศ') }}</button>
                            </div>
                          {!! Form::close() !!}
                        {{-- </form> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- <button id="myBtn">Open Modal</button> --}}

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="container">
    <div class="modal-content">
      <span class="close text-right">&times;</span>
        <label for="">ความสามารถอื่นๆ :</label>
          <div class="card-body">
            {{-- <form action="/company/resume" method="get"> --}}
            {!! Form::open(['route' => 'recruits_news.store', 'methot' => 'POST']) !!}
              <div class="form-row">
                <div class="col-sm-9">
                  {!! Form::text($skill, null,['class' => 'form-control','placeholder'=>'อื่นๆ'])!!}
                  {{-- {!! Form::text('skill[]', $skills->skill_id,['class' => 'form-control','placeholder'=>'อื่นๆ'])!!} --}}
                  {{-- {!! Form::text($name, $value, [$options]) !!} --}}
                  {{-- {!! Form::checkbox($name, $value, $checked, [$options]) !!} --}}
                  {{-- <input type="text" name="number" class="form-control" placeholder="{{ _('อื่นๆ') }}" value=""><br> --}}
                </div>
                <div class="col-sm-3">
                  {{-- <button id="myBtn" type="submit" class="btn btn-fill btn-primary text-center">{{ _('บันทึก') }}</button> --}}
                  {!! Form::submit('เพิ่ม', ['class' =>'btn btn-primary']) !!}
                </div>
              </div>
            {!! Form::close() !!}
            {{-- </form> --}}
          </div>
    </div>
  </div>
</div>

<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>


@endsection

