@extends('layouts.app', ['page' => __('Officer'), 'pageSlug' => 'add_announce'])

@section('content')

<style>
  body {font-family: Arial, Helvetica, sans-serif;}
  
  /* The Modal (background) */
  .modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  }
  
  /* Modal Content */
  .modal-content {
    background-color: #fefefe;
    margin: auto;
    padding: 20px;
    border: 1px solid #888;
    width: 80%;
  }
  
  /* The Close Button */
  .close {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
  }
  
  .close:hover,
  .close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
  }
  </style>

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
                        <form action="{{ route('officer.store') }}" method="POST">
                          @csrf
                            <div class="card-body">
                                    {{-- @method('put') --}}
                                    
                                    <div class="form-row">
                                      <div class="col-md-3">
                                        <label>{{ _('ชื่อบริษัท :') }}</label>
                                          <input type="text" name="company_name" class="form-control" placeholder="{{ _('Company Name') }}" value="">
                                      </div>
                                      <div class="col-md-9 ">
                                        <label>{{ _('ที่อยู่ :') }}</label>
                                         <input type="text" name="address" class="form-control" placeholder="{{ _('Address') }}" value="">
                                      </div>
                                    </div>

                                    <div class="form-row">
                                      <div class="col-md-3">
                                        <label>{{ _('จำนวนที่รับ :') }}</label>
                                          <input type="text" name="number" class="form-control" placeholder="{{ _('Number') }}" value="">
                                      </div>
                                      <div class="col-md-3 ">
                                        <label>{{ _('วันที่เปิดรับ :') }}</label>
                                         <input type="date" name="date" class="form-control" placeholder="{{ _('Date') }}" value="">
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
                                              <input type="checkbox" class="form-check-input" name="java" value="java">{{ $skills->skill_name }}
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
                        </form>
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
  <div class="modal-content">
    <span class="close">&times;</span>
      <label for="">ความสามารถอื่นๆ :</label>
      <form action="/company/resume" method="get">
        <div class="form-row">
          <div class="col-md-9">
              <input type="text" name="number" class="form-control" placeholder="{{ _('อื่นๆ') }}" value=""><br>
          </div>
          <div class="col-md-3">
            <button id="myBtn" type="submit" class="btn btn-fill btn-primary text-center">{{ _('บันทึก') }}</button>
          </div>
        </div>
    </form>
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

