@extends('auth.contenido')

@section('login')
<div class="row justify-content-center">
      <div class="col-md-8" >
        <div class="card-group mb-0">
          <div class="card p-4 bg-dark">
          <form class="form-horizontal was-validated" method="POST" action="{{ route('login')}}">
          {{ csrf_field() }}
              <div class="card-body text-white">
              <h1>Acceder</h1>
              <p class="text-muted ">Control de Acceso al Sistema</p>
              <div class="form-group mb-3{{$errors->has('usuario' ? 'is-invalid' : '')}}">
                <span class="input-group-addon text-danger bg-dark"><i class="icon-user"></i></span>
                <input type="text" value="{{old('usuario')}}" name="usuario" id="usuario" class="form-control" placeholder="Usuario">
                {!!$errors->first('usuario','<span class="invalid-feedback">:message</span>')!!}
              </div>
              <div class="form-group mb-4{{$errors->has('password' ? 'is-invalid' : '')}}">
                <span class="input-group-addon text-danger bg-dark"><i class="icon-lock"></i></span>
                <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                {!!$errors->first('password','<span class="invalid-feedback">:message</span>')!!}
              </div>
              <div class="row bg-dark">
                <div class="col-6">
                  <button type="submit" class="btn btn-danger px-4">Acceder</button>
                </div>
              </div>
            </div>
          </form>
          </div>
          <div class="card text-white bg-dark py-5 d-md-down-none" style="width:44%">
            <div class="card-body text-center">
              <div><br>
                <h2>RECREO TURÍSTICO ECOLÓGICO</h2>  
                <h1>"ARCA DE MAX"</h1>    <br>
               <div class="text-muted"><p>Sistema de Ventas desarrollado en PHP utilizando el Framework Laravel y Vue Js</p></div> 
              <a href="https://web.whatsapp.com/" target="_blank" class="btn btn-dark active mt-3">Ver al desarrollador</a>            
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection
