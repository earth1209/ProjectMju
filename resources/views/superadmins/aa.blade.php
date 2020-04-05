@extends('layouts.app', [ 'pageSlug' => 'superadmins'])


@section('content')

<style>
  .ps--active-x>.ps__rail-x{
    display: none !important;
    
  }

</style>


{{-- @if($errors->any())
<div class="alert alert-dander">
  <strong>Sorry</strong>5555 <br><br>
  <ul>
    @foreach ($errors->all as $error)
  <li>{{$error}}</li>
        
    @endforeach
  </ul>

</div>
@endif --}}

@if($message = Session::get('success'))
<div class="alert alert-info">
<p>{{$message}}</p>
</div>
@endif

<div class="row">
    <div class="col-12">
        <div class="card card-chart">
            <div class="card-header " style="background-color: #11cdef">
                <h3>- การจัดการสิทธิ์การเข้าถึง -</h3>
            </div>
        </div>
    </div>
</div>

      {{-- @php
          print_r ($superadmins) ;
      @endphp --}}

{{-- @foreach($superadmins as $key => $superadmin)

         {{$key}} {{$superadmin}} <br>

@endforeach --}}
    
      {{-- <div class="card-body"> --}}
        <div class="  table-responsive" >
          
          <table class="table" >
            <thead class="table-info text-primary form-group">
              {{-- <div > --}}
              <tr class="row">

                {{-- <th class=" text-center col-md-3">
                  การจัดการสิทธิ์การเข้าถึง
                  </th> --}}

                <th class=" text-center col-md-3">
                การจัดการสิทธิ์การเข้าถึง
                </th>
                <th class="text-center col-md" >
                  เจ้าหน้าที่
                </th>
                <th class="text-center col-md">
                  นักศึกษา
                </th>
                <th class="text-center col-md">
                 อาจารย์
                </th>
                <th class="text-center col-md">
                  บริษัท
                </th>
                <th class="text-center col-md">
                  admin
                </th>
                <th class="text-center col-md">
                  action
                </th>


              </tr>
            {{-- </div> --}}
          </thead>
            </table>

          @foreach($superadmins as $key => $superadmin)


          <form action="{{ route('superadmins.update',$superadmin->id) }}" method="post">
            <input type="hidden" name="dbid" value="{{$superadmin->id}}">

            @csrf
            @method('PUT')


            <table class="table " id="data-table">

  

            <tbody>

              {{-- @foreach($superadmins as $key => $superadmin) --}}


           <tr class="row">
            <div class="form-group">


           {{-- <td scope="row" class="text-center col-md-2">{{++$key}}</td> --}}
           {{-- <th clsss="col-1">{{$superadmin->id}}</th> --}}
           <td class="col-md-3"  >&nbsp;&nbsp;
            <p style="padding-left: 2em ">
             {{$superadmin->name_ac}} 
            </p>
            </td>

           <td class="text-center col-md">
              <select class="form-control" name="officer" velue="{{$superadmin->officer}}" id="officer" >
                @if($superadmin->officer =='1') 
                {
                 <option name="1" value="1">ไม่มีสิทธิ์</option>
                }
                  @elseif($superadmin->officer =='2') 
                  {
                  <option name="2" value="2">ดูอย่างเดียว</option>
                  }
                    @elseif($superadmin->officer =='3') 
                    {
                      <option name="3" value="3">ดูและแก้ไข</option>
                      }
                @endif
                <option name="1"  value="1">ไม่มีสิทธิ์</option>
                <option name="2"  value="2">ดูอย่างเดียว</option>
                <option name="3"  value="3">ดูและแก้ไข</option>
                </select>  
            </td>

            <td class="text-center col-md">
                <select class="form-control" name="student" velue="{{$superadmin->student}}" id="student">
                  @if($superadmin->student =='1') 
                {
                 <option name="1"  value="1">ไม่มีสิทธิ์</option>
                }
                  @elseif($superadmin->student =='2') 
                  {
                  <option name="2"  value="2">ดูอย่างเดียว</option>
                  }
                    @elseif($superadmin->student =='3') 
                    {
                      <option name="3"  value="3">ดูและแก้ไข</option>
                      }
                @endif
                <option name="1"  value="1">ไม่มีสิทธิ์</option>
                <option name="2"  value="2">ดูอย่างเดียว</option>
                <option name="3"  value="3">ดูและแก้ไข</option>
                </select>   
             </td>

            <td  class="text-center col-md">
                <select class="form-control" name="teacher" velue="{{$superadmin->teacher}}" id="teacher">
                  @if($superadmin->teacher =='1') 
                  {
                   <option name="1" value="1">ไม่มีสิทธิ์</option>
                  }
                    @elseif($superadmin->teacher =='2') 
                    {
                    <option name="2" value="2">ดูอย่างเดียว</option>
                    }
                      @elseif($superadmin->teacher =='3') 
                      {
                        <option name="3" value="3">ดูและแก้ไข</option>
                        }
                  @endif
                  <option name="1"  value="1">ไม่มีสิทธิ์</option>
                  <option name="2"  value="2">ดูอย่างเดียว</option>
                  <option name="3"  value="3">ดูและแก้ไข</option>
                  </select>    
              
            </td>

            <td class="text-center col-md">
                <select class="form-control" name="company" velue="{{$superadmin->company}}" id="company">
                  @if($superadmin->company =='1') 
                  {
                   <option name="1" value="1">ไม่มีสิทธิ์</option>
                  }
                    @elseif($superadmin->company =='2') 
                    {
                    <option name="2" value="2">ดูอย่างเดียว</option>
                    }
                      @elseif($superadmin->company =='3') 
                      {
                        <option name="3" value="3">ดูและแก้ไข</option>
                        }
                  @endif
                  <option name="1"  value="1">ไม่มีสิทธิ์</option>
                  <option name="2"  value="2">ดูอย่างเดียว</option>
                  <option name="3"  value="3">ดูและแก้ไข</option>
                  </select>      
             </td>

            <td class="text-center col-md">
                <select class="form-control" name="admin"  velue="{{$superadmin->admin}}" id="admin">
                  @if($superadmin->admin =='1') 
                  {
                   <option name="1"  value="1">ไม่มีสิทธิ์</option> 
                  }
                    @elseif($superadmin->admin =='2') 
                    {
                    <option name="2"  value="2">ดูอย่างเดียว</option>
                    }
                      @elseif($superadmin->admin =='3') 
                      {
                        <option name="3"  value="3">ดูและแก้ไข</option>
                       
                  @endif

                  <option name="1"  value="1">ไม่มีสิทธิ์</option>
                  <option name="2"  value="2">ดูอย่างเดียว</option>
                  <option name="3"  value="3">ดูและแก้ไข</option>
                  </select>    
            </td>

            <td class="text-center col-md" >
              {{-- <a href="{{ route('superadmins.update',$superadmin->id) }}" class="btn btn-warning">show</a> --}}
                 {{-- <form action="{{ route('superadmins.destroy',$superadmin->id) }}" method="post"> 
                <button type="submit" class="btn btn-danger">Delete</button>
                <a href="{{ route('superadmins.show',$superadmin->id) }}" class="btn btn-warning">show</a>
                <a href="{{ route('superadmins.edit',$superadmin) }}" class="btn btn-info">edit</a> 
                
             </form>  --}}
             {{-- <form action="{{ route('superadmins.update',$superadmin->id) }}" method="post"> 
              @csrf
              @method('PUT') --}}

              {{-- <button type="submit"  class="btn btn-info" data-dismiss="alert" >update</button> --}}


              <button type="submit"  class="btn btn-info ">update</button>
.            {{-- </form> --}}





            </td>

            </div>
         </tr>
            </tbody>
         
          </table>

        </form>

          @endforeach 

      

       
        </div>
      {{-- </div> --}}
    </div>
  </div>
</div>


@endsection



