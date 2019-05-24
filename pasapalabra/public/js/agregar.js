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
	agregar();
})
var agregar=function(){
	$.ajax({
		type:"get",
		url:"{{ url("adm")}}",
		success:function(data){
			$("#nPalabra").empty().html(data);
		}
	})
}*/

//Paginacion
  $(document).on("click",".pagination li a",function(e){
  e.preventDefault();

  var url=$(this).attr("href");
  

  console.log(url);

  $.ajax({
  	headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
    type:'get',
    url:url,
    success: function(data){
      $("#nPalabra").empty().html(data);
    }
  });

 
  });



  