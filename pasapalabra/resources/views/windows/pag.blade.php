
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<div class="daP">
<div class="card-body" >
                  <table class="table table-hover">
                      <thead class="thead-">
                        <tr>
                          <th scope="col">Id</th>
                          <th scope="col">Palabra</th>
                          <th scope="col">Descripcion</th>
                          <th scope="col">Dificultad</th>
                          <th scope="col">Operaciones</th>
                          
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
              </div>
</div>

