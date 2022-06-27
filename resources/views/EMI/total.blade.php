
@extends('layouts.admin')

@section('Somiti', 'Small Banking')


@section('content')



<h2 style="text-align: center; color: green;">Total EMI
</h2>


<div class="card-body">

<div class="col-5">
	 <label>Start Date</label>
	 <input type="date" class="form-control col-5" name="start_date" id="start_date"> 

</div>


<div class="col-5">
	  <label>End Date</label>
	  <input type="date" class="form-control col-5" name="end_date" id="end_date">
</div>

<div class="col-5">

	  <a id="search" class="btn btn-success">Check</a>

</div>

	
</div>






<div class="card-body">
	<div id="DocumentResults"> </div>
	<script id="document-template" type="text/x-handlebars-template">

	<table>
		<thead>
			<tr>
			@{{{thsource}}}
			</tr>
		</thead>
		<tbody>
			<tr>
			@{{{tdsource}}}
			</tr>
		</tbody>
	</table>
		
	</script>

	
	
	
</div>


<script type="text/javascript">
$(document).on('click', '#search' , function(){
	var start_date = $('#start_date').val();
	var end_date = $('#end_date').val();
	$('.notifyjs-corner').html('');

	if (start_date =='') {
		$.notify("Start Date required", {globalPosition: 'top right', className: 'error'});
		return false;
	}

	if (end_date =='') {
		$.notify("End Date required", {globalPosition: 'top right', className: 'error'});
		return false;
	}


	$.ajax({
		url: "{{route('Profit.get')}}",
		type: "GET",
		data: {'start_date': start_date, 'end_date': end_date},
		
		
		success: function (data){
			var source = $("#document-template").html();
			var template = Handlebars.compile(source);
			var html = template(data);
			$('#DocumentResults').html(html);
			$('[data-toggle="tooltip"]').tooltip();
		}



	});

});

</script> 











@endsection 





























