<script type="text/javascript">
$(document).on('click', '#search' , function()){
	var start_date = $('#start_date').val();
	var end_date = $('#end_date').val();
	$('.notifyjs-corner').html('');

	if (start_date = '') {
		$.notify("Start Date required", {globalPosition: 'top right', className: 'error'});
		return false;
	}
if (end_date = '') {
		$.notify("Start Date required", {globalPosition: 'top right', className: 'error'});
		return false;
	}

	$.ajax({
		url: "{{route('route name')}}",
		type: "GET",
		data: {'start_date' : start_date, 'end_date': end_date},
		beforeSend: function() {

		},
		success: function (data){
			var source = $("#document-template").html();
			var template = Handlebars.complie(source);
			var html = template(data);
			$('#DocumentResults').html(html);
			$('[data-toggle="tooltip"]').tooltip();
		}
	}):

}



</script>