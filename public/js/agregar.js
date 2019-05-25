
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



  