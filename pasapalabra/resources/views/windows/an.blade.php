<!-- 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body"><h5 class="card-title text-center">Administracion de palabras</h5></div>

                <div class="card-body">
                    <form method="get" action="{{ route('agregar_index') }}">
                        {{ csrf_field() }}

                        <input type="submit" id="agregarAdm" class="btn btn-success" value="Añadir palabra"></input>
                    </form>
                <div class="card-body">
                  <table class="table table-hover">
                      <thead class="thead-dark">
                        <tr>
                          <th scope="col">Id</th>
                          <th scope="col">Palabra</th>
                          <th scope="col">Descripcion</th>
                          <th scope="col">Dificultad</th>
                          <th scope="col"></th>
                          
                        </tr>
                      </thead>
                    @foreach($palabras as $dato)
                    
                      <tbody>
                        <tr>
                          <td>{{ $dato->id }}</td>
                          <td>{{ $dato->Palabra }}</td>
                          <td>{{ $dato->Descripcion }}</td>
                          <td>{{ $dato->Dificultad }}</td>
                          <td><button type="button" class="btn btn-danger">Editar</button></td>
                          
                        </tr>
                        
                      </tbody>
                   
                    @endforeach
                       
                <div id="PalabrasTabla">{!!$palabras->render()!!}</div>
                <div id="pag"></div>
              </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
 /*<script type="text/javascript">
  $(document).ready(function(){
  agregar();
})
var agregar=function(){
  $.ajax({
    type:"get",
    url:"{{ url('adm_index')}}",
    success:function(data){
      $("#nPalabra").empty().html(data);
    }
  });
}*/

</script>

 -->