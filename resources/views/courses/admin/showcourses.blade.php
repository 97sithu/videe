@extends("layouts.menubar")
@extends("layouts.app")
@section("content")
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<div class="main1">
	<a href="{{url('courses/admin/courseAdd')}}" class="add">+ADD</a>
	<input type="search" id="myInput" onkeyup="myFunction()" placeholder="secarch here" class="search">
	<table cellpadding="0" cellspacing="0" border="1" class="table" id="myTable">
	<thead>
		<tr>
			<th>Name</th>
			<th>Group</th>
			<th>Lecturer</th>
			<th>Language</th>
			<th>Start Date</th>
			<th>Remark</th>
			<th colspan="2" style="text-align: center;">Action</th>
		</tr>
	</thead>
	<tbody>
		@foreach($courses as $course)
		<tr class="gradeX">
			<td>{{$course->name}}</td>
			<td>{{$course->group}}</td>
			<td>{{$course->lecturer}}</td>
			<td>{{$course->language->name}}</td>
			<td>{{$course->start_date}}</td>
			<td>{{$course->remark}}</td>
			<td><a href="{{url("courses/admin/courseEdit/$course->id")}}" style="background: green">Edit</a></td>
			<td><a href="{{url("courses/admin/courseDelete/$course->id")}}" style="background: red">Delete</a></td>
		</tr>
		@endforeach
	</tbody>
</table>
<div style="float: right;">{{$courses->links() }}</div>	
</div>
<script>
function filterTable(event) {
    var filter = event.target.value.toUpperCase();
    var rows = document.querySelector("#myTable tbody").rows;
    
    for (var i = 0; i < rows.length; i++) {
        var firstCol = rows[i].cells[0].textContent.toUpperCase();
        var secondCol = rows[i].cells[1].textContent.toUpperCase();
        var thirdCol= rows[i].cells[2].textContent.toUpperCase();
        var forthCol= rows[i].cells[3].textContent.toUpperCase();
        var fifthCol= rows[i].cells[4].textContent.toUpperCase();
        if (firstCol.indexOf(filter) > -1 || secondCol.indexOf(filter) > -1 || thirdCol.indexOf(filter) > -1 || forthCol.indexOf(filter) > -1 || fifthCol.indexOf(filter) > -1) {
            rows[i].style.display = "";
        } else {
            rows[i].style.display = "none";
        }      
    }
}
document.querySelector('#myInput').addEventListener('keyup', filterTable, false);
</script>

@endsection