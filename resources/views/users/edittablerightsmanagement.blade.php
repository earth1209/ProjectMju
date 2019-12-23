@extends('layouts.app', ['page' => __(''), 'pageSlug' => 'tablerightsmanagement'])

@section('content')

<div class="row">
    <div class="col-12">
        <div class="card card-chart">
            <div class="card-header " style="background-color: #11cdef">
                <h3>- การจัดการสิทธิ์การเข้าถึง -</h3>
            </div>
        </div>
    </div>
</div>

      
      <div class="card-body">
        <div class="  table-responsive" >
          <table class="table tablesorter " id="data-table">
            <thead class="table-info text-primary">
              <tr>
                <th>
                การจัดการสิทธิ์การเข้าถึง
                </th>
                <th>
                  เจ้าหน้าที่
                </th>
                <th>
                  นักศึกษา
                </th>
                <th>
                 อาจารย์
                </th>
                <th>
                  บริษัท
                </th>
                <th>
                  supperadmin
                </th>
              
               
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                ดูข้อมูล GPA นักศึกษา
                </td>
                <td>
                <div class="form-group">
                <select class="form-control" id="sel1">
                 <option>1</option>
                <option>2</option>
                <option>3</option>
               </select>  
                </div>             
                 </td>
                 <td>
                 <div class="form-group">
                <select class="form-control" id="sel1">
                 <option>1</option>
                <option>2</option>
                <option>3</option>
               </select>  
                </div>            
                   </td>
                <td>
                <div class="form-group">
                <select class="form-control" id="sel1">
                 <option>1</option>
                <option>2</option>
                <option>3</option>
               </select>  
                </div>             
                   </td>
                <td>
                <div class="form-group">
                <select class="form-control" id="sel1">
                 <option>1</option>
                <option>2</option>
                <option>3</option>
               </select>  
                </div>           
                     </td>
                <td>
                <div class="form-group">
                <select class="form-control" id="sel1">
                 <option>1</option>
                <option>2</option>
                <option>3</option>
               </select>  
                </div>                
                </td>
              </tr>
            </tbody>
          </table>

          <div class="text-center">
          <button type="submit" class="btn btn-success mt-4">{{ __('Save') }}</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection



