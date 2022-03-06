@extends("layouts.menubar")
@extends("layouts.app")
@section("content")
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<div class="main1">
	<a href="{{url('courses/admin/languageAdd')}}" class="add">+ADD</a>
	<input type="search" id="myInput" onkeyup="myFunction()" placeholder="secarch here" class="search">
	<table cellpadding="0" cellspacing="0" border="1" class="table" id="myTable">
	<thead>
		<tr>
			<th>Name</th>
			<th colspan="2" style="text-align: center;">Action</th>
		</tr>
	</thead>
	<tbody>
		@foreach($languages as $language)
		<tr>
			<td>{{$language->name}}</td>
			<td><a href="{{url("courses/admin/languageupdate/$language->id")}}" style="background: green;">Edit</a></td>
			<td><a href="{{url("courses/admin/languageDelete/$language->id")}}" style="background: red">Delete</a></td>
		</tr>
		@endforeach
	</tbody>
</table>

</div>
<script>
function filterTable(event) {
    var filter = event.target.value.toUpperCase();
    var rows = document.querySelector("#myTable tbody").rows;
    
    for (var i = 0; i < rows.length; i++) {
        var firstCol = rows[i].cells[0].textContent.toUpperCase();
        if (firstCol.indexOf(filter) > -1) {
            rows[i].style.display = "";
        } else {
            rows[i].style.display = "none";
        }      
    }
}
document.querySelector('#myInput').addEventListener('keyup', filterTable, false);
</script>

@endsection