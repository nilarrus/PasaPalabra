<!-- <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center">Login</h5>
            <form class="form-signin" method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}
              <div class="form-label-group {{$errors->has('email') ? 'has-error : '' }}">
                <label for="inputEmail">Email</label>
                <input type="email" id="inputEmail" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email" required autofocus>
                {!! $errors->first('email', '<span class="help-block">:message</span>') !!}
                
              </div>

              <div class="form-label-group {{$errors->has('password') ? 'has-error : '' }}">
                <label for="inputPassword">Contraseña</label>
                <input type="password" id="inputPassword" class="form-control" name="password" placeholder="Password" required>
                {!! $errors->first('password', '<span class="help-block">:message</span>') !!}
                
              </div>

              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Iniciar</button>
              
              
            </form>
          </div>
        </div>
      </div>
    </div> -->
    


    



    