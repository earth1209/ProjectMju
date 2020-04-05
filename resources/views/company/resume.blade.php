@extends('layouts.app', ['page' => __('Company'), 'pageSlug' => 'resume'])

@section('content')

<div class="row">
    <div class="col-12">
        <div class="card card-chart">
            <div class="card-header " style="background-color: #89e3fa">
                <h3>- รายชื่อนักศึกษาที่สมัครเข้าฝึกงานกับบริษัท -</h3>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-12 textcenter d-flex justify-content-end">
           <div class="form-inline">
            <label for="">ปีที่นักศึกษาสมัครเข้าฝึกงาน :&nbsp;</label>
            <form action="/company/resume" method="get">
                <select class="form-control mr-sm-2" name="year" style="width: 95px;background: #ffffff">
                    @php $firstYear = (int)date('Y')-5; @endphp
                    @php $thisYear = $firstYear+5; @endphp
                    @php for($i=$firstYear;$i<=$thisYear;$i++) 
                        { 
                            echo '<option value=' .$i.'>ปี '.$i.'</option>';
                        }
                    @endphp
                </select>
                <button type="submit" class="btn">Filter</button>     
            </form>
            
            </div>
        </div>
        
  
    {{--   --}}
</div>
<br>
{{-- pagination in year --}}

{{-- //// --}}
<div class="row">

    @foreach ($resumes as $resume)
    <div class="col-md-6">
        <div class="card" id="card_resume" name="card_resume">
            <div class="card-header" onclick="sortTable(0)">
                <h5 class="card-category" >Date/Time: {{ $resume->created_at }}</h5>
            </div>
            <div class="card-body">
                <div class="row">
                    
                    <div class="col-lg-4">
                        <div class="photo">
                            <img src="{{ asset('white/img/anime3.png') }}" width="100" height="100" alt="Profile Photo">
                        </div>
                    </div>
                    <br>
                    <div class="col-lg-8">
                        <span id="resume_name" name="resume_name" onclick="sortTable(1)"><i class="tim-icons icon-single-02" ></i> ชื่อ-นามสกุล
                            : {{ $resume->resume_name }}
                            {{ $resume->resume_lname }}</span><br>
                        <span id="resume_lname" name="resume_lname" onclick="sortTable(2)"><i class="tim-icons icon-single-copy-04"></i> GPA :
                            {{ $resume->resume_grade }}</span><br>
                        <span id="skill_id" name="skil_id" onclick="sortTable(3)"><i class="tim-icons icon-bulb-63"></i> ความถนัด :
                            {{ $resume->skill_name }}</span><br>
                        <span id="resume_contact" name="resume_contact" onclick="sortTable(4)"><i class="tim-icons icon-chat-33"></i>
                            ช่องทางติดต่อ : {{ $resume->resume_contact }}</span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 text-right">
                        <div class="form-check">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" name="check[]"
                                    value="{{ $resume->resume_id }}">
                                <span class="form-check-sign">
                                    <span class="check"></span>
                                </span>
                            </label>
                        </div><br>
                    </div>
                </div>

            </div>
        </div>
    </div>
    @endforeach

</div>

<div class="col-lg-12 lg-auto mr-auto">
    <div class="row">
        <div class="col-md-4">
            <input class="btn btn-fill btn-block" type="button" onclick='selectAll()' value="เลือกทั้งหมด" />
        </div>
        <div class="col-md-4">
            <input class="btn btn-fill btn-block" type="button" onclick='UnSelectAll()' value="ยกเลิกทั้งหมด" />
        </div>
        <div class="col-md-4">
            <input class="btn btn-fill btn-block" type="button" onclick='' value="บันทึก">
        </div>
    </div>
</div>



{{-- script checkbox --}}
<script type="text/javascript">
    function selectAll() {
        var items = document.getElementsByName('check[]');
        for (var i = 0; i < items.length; i++) {
            if (items[i].type == 'checkbox')
                items[i].checked = true;
        }
    }

    function UnSelectAll() {
        var items = document.getElementsByName('check[]');
        for (var i = 0; i < items.length; i++) {
            if (items[i].type == 'checkbox')
                items[i].checked = false;
        }
    }			
</script>
{{-- script select year --}}
<script>
    function sortTable(n) {
        var card, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
        card = document.getElementById("card_resume");
        switching = true;
        // Set the sorting direction to ascending:
        dir = "asc";
        /* Make a loop that will continue until
        no switching has been done: */
        while (switching) {
            // Start by saying: no switching is done:
            switching = false;
            rows = card.rows;
            /* Loop through all table rows (except the
            first, which contains table headers): */
            for (i = 1; i < (rows.length - 1); i++) {
                // Start by saying there should be no switching:
                shouldSwitch = false;
                /* Get the two elements you want to compare,
                one from current row and one from the next: */
                x = rows[i].getElementsByTagName("TD")[n];
                y = rows[i + 1].getElementsByTagName("TD")[n];
                /* Check if the two rows should switch place,
                based on the direction, asc or desc: */
                if (dir == "asc") {
                    if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
                        // If so, mark as a switch and break the loop:
                        shouldSwitch = true;
                        break;
                    }
                } else if (dir == "desc") {
                    if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
                        // If so, mark as a switch and break the loop:
                        shouldSwitch = true;
                        break;
                    }
                }
            }
            if (shouldSwitch) {
                /* If a switch has been marked, make the switch
                and mark that a switch has been done: */
                rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
                switching = true;
                // Each time a switch is done, increase this count by 1:
                switchcount++;
            } else {
                /* If no switching has been done AND the direction is "asc",
                set the direction to "desc" and run the while loop again. */
                if (switchcount == 0 && dir == "asc") {
                    dir = "desc";
                    switching = true;
                }
            }
        }
    }
    </script>




@endsection