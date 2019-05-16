/*$("#agregaS").click(function() {
	var data=$("#palabra").val();
	var route="http://localhost:8000/agregar";
	var token=$("#token").val();
	$.ajax({
		url:route,
		headers:{'X-CSRF-TOKEN':token},
		type:'POST',
		dataType:'json',
		data:$("#formAgregar").first().serialize()

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


  $(document).on("click",".pagination li a",function(e){
  e.preventDefault();

  var url=$(this).attr("href");
  

  console.log(url);

  $.ajax({
    type:'get',
    url:url,
    success: function(data){
      $("#nPalabra").empty().html(data);
    }
  });

 
  });