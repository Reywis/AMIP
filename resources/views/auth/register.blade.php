@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="codigo-qr" class="col-md-4 col-form-label text-md-end">Código QR</label>

                            <div class="col-md-6">
                               <textarea name="" id="" cols="15" rows="5">aquí va la imagen del código qr</textarea>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

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
                              <input type="text" class="form-control" name="name"  autofocus>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="codigo-qr" class="col-md-4 col-form-label text-md-end">primer apellido</label>

                            <div class="col-md-6">
                              <input  type="text" class="form-control" name="name"  autofocus>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="codigo-qr" class="col-md-4 col-form-label text-md-end">segundo apellido</label>

                            <div class="col-md-6">
                              <input  type="text" class="form-control" name="name"  autofocus>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

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
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="codigo-qr" class="col-md-4 col-form-label text-md-end">tipo de identificación</label>

                            <div class="col-md-6">
                            <div class="dropdown">
                                <button class="btn btn-secondary btn-block dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  Default
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                    <button class="dropdown-item" type="button">CÉDULA DE CIUDADANÍA</button>
                                    <button class="dropdown-item" type="button">CÉDULA DE EXTRANJERIA</button>
                                    <button class="dropdown-item" type="button">PERMISO PROTECCION TEMPORAL</button>
                                    <button class="dropdown-item" type="button">PASAPORTE</button>
                                    <button class="dropdown-item" type="button">DOCUMENTO DE OTRO PAIS</button>
                                </div>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="codigo-qr" class="col-md-4 col-form-label text-md-end">Número de Identificación</label>

                            <div class="col-md-6">
                              <input  type="text" class="form-control" name="name"  autofocus>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="codigo-qr" class="col-md-4 col-form-label text-md-end">Fecha de Nacimiento</label>

                            <div class="col-md-6">
                              <input  type="date" class="form-control" name="name"  autofocus>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="codigo-qr" class="col-md-4 col-form-label text-md-end">Ciudad de Nacimiento</label>

                            <div class="col-md-6">
                              <input  type="text" class="form-control" name="name"  autofocus>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="codigo-qr" class="col-md-4 col-form-label text-md-end">Departamento de Nacimiento</label>

                            <div class="col-md-6">
                              <input  type="text" class="form-control" name="name"  autofocus>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="codigo-qr" class="col-md-4 col-form-label text-md-end">Estado Civil</label>

                            <div class="col-md-6">
                            <div class="dropdown">
                                <button class="btn btn-secondary btn-block dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Default
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                    <button class="dropdown-item" type="button">Soltero (a)</button>
                                    <button class="dropdown-item" type="button">Casado (a)</button>
                                    <button class="dropdown-item" type="button">Viudo (a)</button>
                                  
                                </div>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="codigo-qr" class="col-md-4 col-form-label text-md-end">Celular</label>

                            <div class="col-md-6">
                              <input  type="tel" class="form-control" name="name"  autofocus>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="codigo-qr" class="col-md-4 col-form-label text-md-end">E-mail</label>

                            <div class="col-md-6">
                              <input  type="email" class="form-control" name="name"  autofocus>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="codigo-qr" class="col-md-4 col-form-label text-md-end">Dirección de la Iglesia</label>

                            <div class="col-md-6">
                              <input  type="text" class="form-control" name="name"  autofocus>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="codigo-qr" class="col-md-4 col-form-label text-md-end">Ciudad donde está ubicada la Iglesia</label>

                            <div class="col-md-6">
                              <input  type="text" class="form-control" name="name"  autofocus>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="codigo-qr" class="col-md-4 col-form-label text-md-end">Departamento donde está ubicada la Iglesia</label>

                            <div class="col-md-6">
                              <input  type="text" class="form-control" name="name"  autofocus>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="codigo-qr" class="col-md-4 col-form-label text-md-end">Zona a la que pertenece</label>

                            <div class="col-md-6">
                            <div class="dropdown">
                                <button class="btn btn-secondary btn-block dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Default
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                    <button class="dropdown-item" type="button">1</button>
                                    <button class="dropdown-item" type="button">2</button> 
                                    <button class="dropdown-item" type="button">3</button>
                                    <button class="dropdown-item" type="button">4</button>           
                                    <button class="dropdown-item" type="button">5</button> 
                                    <button class="dropdown-item" type="button">6</button>
                                    <button class="dropdown-item" type="button">7</button>           
                                    <button class="dropdown-item" type="button">8</button> 
                                </div>
                                </div>
                            </div>
                        </div>


                        <div class="row mb-3">
                            <label for="codigo-qr" class="col-md-4 col-form-label text-md-end">EPS</label>

                            <div class="col-md-6">
                              <input  type="text" class="form-control" name="name"  autofocus>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="codigo-qr" class="col-md-4 col-form-label text-md-end">Régimen</label>

                            <div class="col-md-6">
                            <div class="dropdown">
                                <button class="btn btn-secondary btn-block dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Default
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                    <button class="dropdown-item" type="button">SUBSIDIADO</button>
                                    <button class="dropdown-item" type="button">CONTRIBUTIVO COTIZANTE</button>
                                    <button class="dropdown-item" type="button">CONTRIBUTIVO BENEFICIARIO</button>
                                  
                                </div>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="codigo-qr" class="col-md-4 col-form-label text-md-end">Aporta Ahorro Vejéz</label>

                            <div class="col-md-6">
                            <div class="dropdown">
                                <button class="btn btn-secondary btn-block dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Default
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                    <button class="dropdown-item" type="button">Si</button>
                                    <button class="dropdown-item" type="button">No</button>
                                </div>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="codigo-qr" class="col-md-4 col-form-label text-md-end">Bautizado en el Espíritu Santo</label>

                            <div class="col-md-6">
                            <div class="dropdown">
                                <button class="btn btn-secondary btn-block dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Default
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                    <button class="dropdown-item" type="button">Sí</button>
                                    <button class="dropdown-item" type="button">No</button>                
                                </div>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="codigo-qr" class="col-md-4 col-form-label text-md-end">Grado Ministerial</label>

                            <div class="col-md-6">
                            <div class="dropdown">
                                <button class="btn btn-secondary btn-block dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Default
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                    <button class="dropdown-item" type="button">OBRERO LAICO</button>
                                    <button class="dropdown-item" type="button">PASTOR LICENCIADO</button>           
                                    <button class="dropdown-item" type="button">MINISTRO ORDENADO</button>                
                                </div>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="codigo-qr" class="col-md-4 col-form-label text-md-end">Cargo que Ejerce</label>

                            <div class="col-md-6">
                              <input  type="text" class="form-control" name="name"  autofocus>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="codigo-qr" class="col-md-4 col-form-label text-md-end">Perfil Ministerial</label>

                            <div class="col-md-6">
                              <textarea name="" id="" cols="40" rows="5"></textarea>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="codigo-qr" class="col-md-4 col-form-label text-md-end">Fecha de Presentación en IAMES (AMIP)</label>

                            <div class="col-md-6">
                            <input  type="date" class="form-control" name="name"  autofocus>
                            </div>
                        </div>
    
                        <div class="row mb-3">
                            <label for="codigo-qr" class="col-md-4 col-form-label text-md-end">Ascensos o Nombramientos</label>

                            <div class="col-md-6">
                              <textarea name="" id="" cols="40" rows="5"></textarea>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="codigo-qr" class="col-md-4 col-form-label text-md-end">Formación Académica dentro de IAMES (AMIP)</label>

                            <div class="col-md-6">
                              <textarea name="" id="" cols="40" rows="5"></textarea>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="codigo-qr" class="col-md-4 col-form-label text-md-end">Novedades</label>

                            <div class="col-md-6">
                              <textarea name="" id="" cols="40" rows="5"></textarea>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="codigo-qr" class="col-md-4 col-form-label text-md-end">Tiene Credencial Vigente</label>

                            <div class="col-md-6">
                            <div class="dropdown">
                                <button class="btn btn-secondary btn-block dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Default
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                    <button class="dropdown-item" type="button">Si</button>
                                    <button class="dropdown-item" type="button">No</button>  
                                </div>
                                </div>
                            </div>
                        </div>


                        <div class="row mb-3">
                            <label for="codigo-qr" class="col-md-4 col-form-label text-md-end">Estado actual</label>

                            <div class="col-md-6">
                            <div class="dropdown">
                                <button class="btn btn-secondary btn-block dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Default
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                    <button class="dropdown-item" type="button">Activo</button>
                                    <button class="dropdown-item" type="button">Inactivo</button>           
                                    <button class="dropdown-item" type="button">Retirado</button>   
                                    <button class="dropdown-item" type="button">Suspendido</button>              
                                </div>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-3">
                          
                            <div class="col-md-12">
                              <H1>Aquí se genera el código QR</H1>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">Primer Nombre</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control " name="name">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="codigo-qr" class="col-md-4 col-form-label text-md-end">segundo nombre</label>

                            <div class="col-md-6">
                              <input type="text" class="form-control" name="name"  autofocus>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="codigo-qr" class="col-md-4 col-form-label text-md-end">primer apellido</label>

                            <div class="col-md-6">
                              <input  type="text" class="form-control" name="name"  autofocus>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="codigo-qr" class="col-md-4 col-form-label text-md-end">segundo apellido</label>

                            <div class="col-md-6">
                              <input  type="text" class="form-control" name="name"  autofocus>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="codigo-qr" class="col-md-4 col-form-label text-md-end">tipo de identificación</label>

                            <div class="col-md-6">
                            <div class="dropdown">
                                <button class="btn btn-secondary btn-block dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  Default
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                    <button class="dropdown-item" type="button">CÉDULA DE CIUDADANÍA</button>
                                    <button class="dropdown-item" type="button">CÉDULA DE EXTRANJERIA</button>
                                    <button class="dropdown-item" type="button">PERMISO PROTECCION TEMPORAL</button>
                                    <button class="dropdown-item" type="button">PASAPORTE</button>
                                    <button class="dropdown-item" type="button">DOCUMENTO DE OTRO PAIS</button>
                                </div>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="codigo-qr" class="col-md-4 col-form-label text-md-end">Número de Identificación</label>

                            <div class="col-md-6">
                              <input  type="text" class="form-control" name="name"  autofocus>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="codigo-qr" class="col-md-4 col-form-label text-md-end">Grado Ministerial</label>

                            <div class="col-md-6">
                            <div class="dropdown">
                                <button class="btn btn-secondary btn-block dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Default
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                    <button class="dropdown-item" type="button">OBRERO LAICO</button>
                                    <button class="dropdown-item" type="button">PASTOR LICENCIADO</button>           
                                    <button class="dropdown-item" type="button">MINISTRO ORDENADO</button>                
                                </div>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="codigo-qr" class="col-md-4 col-form-label text-md-end">Estado Civil</label>

                            <div class="col-md-6">
                            <div class="dropdown">
                                <button class="btn btn-secondary btn-block dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Default
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                    <button class="dropdown-item" type="button">Soltero (a)</button>
                                    <button class="dropdown-item" type="button">Casado (a)</button>
                                    <button class="dropdown-item" type="button">Viudo (a)</button>
                                  
                                </div>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="codigo-qr" class="col-md-4 col-form-label text-md-end">Zona a la que pertenece</label>

                            <div class="col-md-6">
                            <div class="dropdown">
                                <button class="btn btn-secondary btn-block dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Default
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                    <button class="dropdown-item" type="button">1</button>
                                    <button class="dropdown-item" type="button">2</button> 
                                    <button class="dropdown-item" type="button">3</button>
                                    <button class="dropdown-item" type="button">4</button>           
                                    <button class="dropdown-item" type="button">5</button> 
                                    <button class="dropdown-item" type="button">6</button>
                                    <button class="dropdown-item" type="button">7</button>           
                                    <button class="dropdown-item" type="button">8</button> 
                                </div>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-3">
                        <label for="codigo-qr" class="col-md-4 col-form-label text-md-end">Genere el código QR</label>
                          
                            <div class="col-md-6">
                              <button class="btn btn-block btn-primary">Generar Código QR</button>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="codigo-qr" class="col-md-4 col-form-label text-md-end">Código QR</label>

                            <div class="col-md-6">
                               <textarea name="" id="" cols="40" rows="5">aquí va la imagen del código qr</textarea>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
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
