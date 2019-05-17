/*$("#enviar").click(function() {
	var palabra=$("#Palabra").val();
	var desc=$("#Descripcion").val();
	var dific=$("#Dificultad").val();
	var route="http://localhost:8000/agregar";
	var token=$("#token").val();
	$.ajax({
		url:route,
		headers:{'X-CSRF-TOKEN':token},
		type:'POST',
		dataType:'json',
		data:{palabra:palabra,desc:desc,dfici:dific}

		success:function(){
			$("#msj-success").fadeIn();
		}
	})
});*/
/*$(document).ready(function(){
	$.ajaxSetup({
		headers:{'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')}
	})
})
$('#frm-insert').on('submit',function(e){
	e.preventDefault();
	var url=$(this).attr('action');
	var post=$(this).attr('method');
	var data=$(this).serialize();

	$.ajax({
		type: post,
		url: url,
		data: data,
		success:function(data){
			$("#msj-success").fadeIn();
		}
	})
	
})*/

