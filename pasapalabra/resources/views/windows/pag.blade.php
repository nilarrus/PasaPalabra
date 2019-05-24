
<script type="text/javascript">
  //Eliminar palabra
  $(document).on('click','.btn-dell',function(e){
    var id=$(this).val();
    $.ajax({
       headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
      type: 'post',
      url: "{{url('delete')}}",
      data: {id:id},
      dataType: 'json',
      success:function(data){
        $('tbody tr.id'+id).remove();
      }
    });
  })




  
</script>



<div class="daP">
<div class="card-body" >

                  <table id="tabla" class="table table-hover">
                      <thead class="thead-">
                        <tr>
                          <th scope="col">Id</th>
                          <th scope="col">Tipo</th>
                          <th scope="col">Letra</th>
                          <th scope="col">Palabra</th>
                          
                          <th scope="col">Dificultad</th>
                          <th scope="col">Operaciones</th>

                          
                        </tr>
                      </thead>
                    @foreach($palabras as $dato)
                      <tbody>
                        <tr class="id{{$dato->id}}">
                          <td>{{ $dato->id }}</td>
                          <td>{{ $dato->Letra }}</td>
                          <td>{{ $dato->Tipo }}</td>
                          <td>{{ $dato->Palabra }}</td>

                          
                          

                          <?php
                            $aux = $dato->Dificultad;
                            if($aux == 0){
                              //var_dump("Facil:".$aux);
                              echo "<td>Facil</td>";
                            }elseif($aux == 1){
                              echo "<td>Normal</td>";
                            }elseif ($aux == 2) {
                              echo "<td>Dificil</td>";
                            }                            
                          ?>        
                          <td><a href="{{route('edit_index',$dato->id)}}" value="{{$dato->id}}" type="button" class="btn btn-primary btn-sm btn-edit">Editar</a> <button  type="button" class="btn btn-danger btn-sm btn-dell" value="{{$dato->id}}">Eliminar</button></td>

                          
                          
                        </tr>
                        
                      </tbody>
                   
                    @endforeach
                       
                <div id="PalabrasTabla">{!!$palabras->render()!!}</div>
              </div>

</div>

