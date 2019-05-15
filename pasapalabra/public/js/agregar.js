$("#agregaS").click(function() {
	var data=$("#palabra").val();
	var route="http://localhost:8000/agregar";
	var token=$("#token"),val();
	$.ajax({
		url:route,
		headers:{'X-CSRF-TOKEN':token},
		type:'POST',
		dataType:'json',
		data:$("#formAgregar").first().serialize()
	})
});