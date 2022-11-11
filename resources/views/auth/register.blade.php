@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card cont">
                <div class="card-header reg">{{ __('Registro') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="inp @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="codigo-qr" class="col-md-4 col-form-label text-md-end">segundo nombre</label>

                            <div class="col-md-6">
                              <input type="text" class="inp" name="name"  autofocus>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="codigo-qr" class="col-md-4 col-form-label text-md-end">primer apellido</label>

                            <div class="col-md-6">
                              <input  type="text" class="inp" name="name"  autofocus>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="codigo-qr" class="col-md-4 col-form-label text-md-end">segundo apellido</label>

                            <div class="col-md-6">
                              <input  type="text" class="inp" name="name"  autofocus>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="inp @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="inp @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="inp" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="codigo-qr" class="col-md-4 col-form-label text-md-end">tipo de identificación</label>

                            <div class="col-md-6">
                            <div class="dropdown">
                                <button class="btn btn-secondary btn-block dropdown-toggle inp inp" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  Default
                                </button>
                                <div class="dropdown-menu cont cont" aria-labelledby="dropdownMenu2">
                                    <button class="dropdown-item inpb inpb" type="button">CÉDULA DE CIUDADANÍA</button>
                                    <button class="dropdown-item inpb inpb" type="button">CÉDULA DE EXTRANJERIA</button>
                                    <button class="dropdown-item inpb inpb" type="button">PERMISO PROTECCION TEMPORAL</button>
                                    <button class="dropdown-item inpb inpb" type="button">PASAPORTE</button>
                                    <button class="dropdown-item inpb inpb" type="button">DOCUMENTO DE OTRO PAIS</button>
                                </div>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="codigo-qr" class="col-md-4 col-form-label text-md-end">Número de Identificación</label>

                            <div class="col-md-6">
                              <input  type="text" class="inp" name="name"  autofocus>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="codigo-qr" class="col-md-4 col-form-label text-md-end">Fecha de Nacimiento</label>

                            <div class="col-md-6">
                              <input  type="date" class="inp" name="name"  autofocus>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="codigo-qr" class="col-md-4 col-form-label text-md-end">Ciudad de Nacimiento</label>

                            <div class="col-md-6">
                              <input  type="text" class="inp" name="name"  autofocus>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="codigo-qr" class="col-md-4 col-form-label text-md-end">Departamento de Nacimiento</label>

                            <div class="col-md-6">
                              <input  type="text" class="inp" name="name"  autofocus>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="codigo-qr" class="col-md-4 col-form-label text-md-end">Estado Civil</label>

                            <div class="col-md-6">
                            <div class="dropdown">
                                <button class="btn btn-secondary btn-block dropdown-toggle inp inp" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Default
                                </button>
                                <div class="dropdown-menu cont cont" aria-labelledby="dropdownMenu2">
                                    <button class="dropdown-item inpb inpb" type="button">Soltero (a)</button>
                                    <button class="dropdown-item inpb inpb" type="button">Casado (a)</button>
                                    <button class="dropdown-item inpb inpb" type="button">Viudo (a)</button>
                                  
                                </div>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="codigo-qr" class="col-md-4 col-form-label text-md-end">Celular</label>

                            <div class="col-md-6">
                              <input  type="tel" class="inp" name="name"  autofocus>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="codigo-qr" class="col-md-4 col-form-label text-md-end">Dirección de la Iglesia</label>

                            <div class="col-md-6">
                              <input  type="text" class="inp" name="name"  autofocus>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="codigo-qr" class="col-md-4 col-form-label text-md-end">Ciudad donde está ubicada la Iglesia</label>

                            <div class="col-md-6">
                              <input  type="text" class="inp" name="name"  autofocus>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="codigo-qr" class="col-md-4 col-form-label text-md-end">Departamento donde está ubicada la Iglesia</label>

                            <div class="col-md-6">
                              <input  type="text" class="inp" name="name"  autofocus>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="codigo-qr" class="col-md-4 col-form-label text-md-end">Zona a la que pertenece</label>

                            <div class="col-md-6">
                            <div class="dropdown">
                                <button class="btn btn-secondary btn-block dropdown-toggle inp" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Default
                                </button>
                                <div class="dropdown-menu cont cont" aria-labelledby="dropdownMenu2">
                                    <button class="dropdown-item inpb" type="button">1</button>
                                    <button class="dropdown-item inpb" type="button">2</button> 
                                    <button class="dropdown-item inpb" type="button">3</button>
                                    <button class="dropdown-item inpb" type="button">4</button>           
                                    <button class="dropdown-item inpb" type="button">5</button> 
                                    <button class="dropdown-item inpb" type="button">6</button>
                                    <button class="dropdown-item inpb" type="button">7</button>           
                                    <button class="dropdown-item inpb" type="button">8</button> 
                                </div>
                                </div>
                            </div>
                        </div>


                        <div class="row mb-3">
                            <label for="codigo-qr" class="col-md-4 col-form-label text-md-end">EPS</label>

                            <div class="col-md-6">
                              <input  type="text" class="inp" name="name"  autofocus>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="codigo-qr" class="col-md-4 col-form-label text-md-end">Régimen</label>

                            <div class="col-md-6">
                            <div class="dropdown">
                                <button class="btn btn-secondary btn-block dropdown-toggle inp" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Default
                                </button>
                                <div class="dropdown-menu cont" aria-labelledby="dropdownMenu2">
                                    <button class="dropdown-item inpb" type="button">SUBSIDIADO</button>
                                    <button class="dropdown-item inpb" type="button">CONTRIBUTIVO COTIZANTE</button>
                                    <button class="dropdown-item inpb" type="button">CONTRIBUTIVO BENEFICIARIO</button>
                                  
                                </div>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="codigo-qr" class="col-md-4 col-form-label text-md-end">Aporta Ahorro Vejéz</label>

                            <div class="col-md-6">
                            <div class="dropdown">
                                <button class="btn btn-secondary btn-block dropdown-toggle inp" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Default
                                </button>
                                <div class="dropdown-menu cont" aria-labelledby="dropdownMenu2">
                                    <button class="dropdown-item inpb" type="button">Si</button>
                                    <button class="dropdown-item inpb" type="button">No</button>
                                </div>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="codigo-qr" class="col-md-4 col-form-label text-md-end">Bautizado en el Espíritu Santo</label>

                            <div class="col-md-6">
                            <div class="dropdown">
                                <button class="btn btn-secondary btn-block dropdown-toggle inp" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Default
                                </button>
                                <div class="dropdown-menu cont" aria-labelledby="dropdownMenu2">
                                    <button class="dropdown-item inpb" type="button">Sí</button>
                                    <button class="dropdown-item inpb" type="button">No</button>                
                                </div>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="codigo-qr" class="col-md-4 col-form-label text-md-end">Grado Ministerial</label>

                            <div class="col-md-6">
                            <div class="dropdown">
                                <button class="btn btn-secondary btn-block dropdown-toggle inp" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Default
                                </button>
                                <div class="dropdown-menu cont" aria-labelledby="dropdownMenu2">
                                    <button class="dropdown-item inpb" type="button">OBRERO LAICO</button>
                                    <button class="dropdown-item inpb" type="button">PASTOR LICENCIADO</button>           
                                    <button class="dropdown-item inpb" type="button">MINISTRO ORDENADO</button>                
                                </div>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="codigo-qr" class="col-md-4 col-form-label text-md-end">Cargo que Ejerce</label>

                            <div class="col-md-6">
                              <input  type="text" class="inp" name="name"  autofocus>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="codigo-qr" class="col-md-4 col-form-label text-md-end">Perfil Ministerial</label>

                            <div class="col-md-6">
                              <textarea class="inp" name="" id="" cols="40" rows="5"></textarea>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="codigo-qr" class="col-md-4 col-form-label text-md-end">Fecha de Presentación en IAMES (AMIP)</label>

                            <div class="col-md-6">
                            <input  type="date" class="inp" name="name"  autofocus>
                            </div>
                        </div>
    
                        <div class="row mb-3">
                            <label for="codigo-qr" class="col-md-4 col-form-label text-md-end">Ascensos o Nombramientos</label>

                            <div class="col-md-6">
                              <textarea class="inp" name="" id="" cols="40" rows="5"></textarea>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="codigo-qr" class="col-md-4 col-form-label text-md-end">Formación Académica dentro de IAMES (AMIP)</label>

                            <div class="col-md-6">
                              <textarea class="inp" name="" id="" cols="40" rows="5"></textarea>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="codigo-qr" class="col-md-4 col-form-label text-md-end">Novedades</label>

                            <div class="col-md-6">
                              <textarea class="inp" name="" id="" cols="40" rows="5"></textarea>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="codigo-qr" class="col-md-4 col-form-label text-md-end">Tiene Credencial Vigente</label>

                            <div class="col-md-6">
                            <div class="dropdown">
                                <button class="btn btn-secondary btn-block dropdown-toggle inp" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Default
                                </button>
                                <div class="dropdown-menu cont" aria-labelledby="dropdownMenu2">
                                    <button class="dropdown-item inpb" type="button">Si</button>
                                    <button class="dropdown-item inpb" type="button">No</button>  
                                </div>
                                </div>
                            </div>
                        </div>


                        <div class="row mb-3">
                            <label for="codigo-qr" class="col-md-4 col-form-label text-md-end">Estado actual</label>

                            <div class="col-md-6">
                            <div class="dropdown">
                                <button class="btn btn-secondary btn-block dropdown-toggle inp" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Default
                                </button>
                                <div class="dropdown-menu cont" aria-labelledby="dropdownMenu2">
                                    <button class="dropdown-item inpb" type="button">Activo</button>
                                    <button class="dropdown-item inpb" type="button">Inactivo</button>           
                                    <button class="dropdown-item inpb" type="button">Retirado</button>   
                                    <button class="dropdown-item inpb" type="button">Suspendido</button>              
                                </div>
                                </div>
                            </div>
                        </div>

                        
                        <div class="row mb-0">
                            <div class="col-md-12 ">
                                <button type="submit" class="btn btn-block regis">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
