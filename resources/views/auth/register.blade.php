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
                            <label for="second_name" class="col-md-4 col-form-label text-md-end">segundo nombre</label>

                            <div class="col-md-6">
                              <input type="text" class="inp" name="second_name"  autofocus>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="first_lastname" class="col-md-4 col-form-label text-md-end">primer apellido</label>

                            <div class="col-md-6">
                              <input  type="text" class="inp" name="first_lastname"  autofocus>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="second_lastname" class="col-md-4 col-form-label text-md-end">segundo apellido</label>

                            <div class="col-md-6">
                              <input  type="text" class="inp" name="second_lastname"  autofocus>
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
                            <label for="lang" class="col-md-4 col-form-label text-md-end">tipo de identificación</label>

                            <div class="col-md-6">
                           
                                <select name="tipoidentificacion" class="inp" id="lang" style="padding:13px;">
                                    <option class="inpb" value=""></option>
                                    <option class="inpb" value="CÉDULA DE CIUDADANÍA">CÉDULA DE CIUDADANÍA</option>
                                    <option class="inpb" value="CÉDULA DE EXTRANJERIA">CÉDULA DE EXTRANJERIA</option>
                                    <option class="inpb" value="PERMISO PROTECCION TEMPORAL">PERMISO PROTECCION TEMPORAL</option>
                                    <option class="inpb" value="PASAPORTE">PASAPORTE</option>
                                    <option class="inpb" value="DOCUMENTO DE OTRO PAIS">DOCUMENTO DE OTRO PAIS</option>
                                </select>
                              
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="number_identification" class="col-md-4 col-form-label text-md-end">Número de Identificación</label>

                            <div class="col-md-6">
                              <input  type="text" class="inp" name="number_identification"  autofocus>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="date_birth" class="col-md-4 col-form-label text-md-end">Fecha de Nacimiento</label>

                            <div class="col-md-6">
                              <input  type="date" class="inp" name="date_birth"  autofocus>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="city_birth" class="col-md-4 col-form-label text-md-end">Ciudad de Nacimiento</label>

                            <div class="col-md-6">
                              <input  type="text" class="inp" name="city_birth"  autofocus>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="department_birth" class="col-md-4 col-form-label text-md-end">Departamento de Nacimiento</label>

                            <div class="col-md-6">
                              <input  type="text" class="inp" name="department_birth"  autofocus>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="sc" class="col-md-4 col-form-label text-md-end">Estado Civil</label>

                            <div class="col-md-6">
                            <select name="estadocivil" class="inp" id="sc" style="padding:13px;">
                                    <option class="inpb" value=""></option>
                                    <option class="inpb" value="Soltero (a)">Soltero (a)</option>
                                    <option class="inpb" value="Casado (a)">Casado (a)</option>
                                    <option class="inpb" value="Viudo (a)">Viudo (a)</option>
                                </select>
                              
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="cell_phone" class="col-md-4 col-form-label text-md-end">Celular</label>

                            <div class="col-md-6">
                              <input  type="tel" class="inp" name="cell_phone"  autofocus>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="address_church" class="col-md-4 col-form-label text-md-end">Dirección de la Iglesia</label>

                            <div class="col-md-6">
                              <input  type="text" class="inp" name="address_church"  autofocus>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="city_located_church" class="col-md-4 col-form-label text-md-end">Ciudad donde está ubicada la Iglesia</label>

                            <div class="col-md-6">
                              <input  type="text" class="inp" name="city_located_church"  autofocus>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="department_church_located" class="col-md-4 col-form-label text-md-end">Departamento donde está ubicada la Iglesia</label>

                            <div class="col-md-6">
                              <input  type="text" class="inp" name="department_church_located"  autofocus>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="z" class="col-md-4 col-form-label text-md-end">Zona a la que pertenece</label>

                            <div class="col-md-6">
                            <select name="zona" class="inp" id="z" style="padding:13px;">
                                    <option class="inpb" value=""></option>
                                    <option class="inpb" value="1">1</option>
                                    <option class="inpb" value="2">2</option>
                                    <option class="inpb" value="3">3</option>
                                    <option class="inpb" value="4">4</option>
                                    <option class="inpb" value="5">5</option>
                                    <option class="inpb" value="6">6</option>
                                    <option class="inpb" value="7">7</option>
                                    <option class="inpb" value="8">8</option>
                                </select>
                              
                            </div>
                        </div>


                        <div class="row mb-3">
                            <label for="eps" class="col-md-4 col-form-label text-md-end">EPS</label>

                            <div class="col-md-6">
                              <input  type="text" class="inp" name="eps"  autofocus>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="Regimen" class="col-md-4 col-form-label text-md-end">Régimen</label>

                            <div class="col-md-6">
                            <select name="regimen" class="inp" id="Regimen" style="padding:13px;">
                                    <option class="inpb" value=""></option>
                                    <option class="inpb" value="SUBSIDIADO">SUBSIDIADO</option>
                                    <option class="inpb" value="CONTRIBUTIVO COTIZANTE">CONTRIBUTIVO COTIZANTE</option>
                                    <option class="inpb" value="CONTRIBUTIVO BENEFICIARIO">CONTRIBUTIVO BENEFICIARIO</option>
                                </select>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="ah" class="col-md-4 col-form-label text-md-end">Aporta Ahorro Vejéz</label>

                            <div class="col-md-6">
                            <select name="ahorrovejez" class="inp" id="ah" style="padding:13px;">
                                    <option class="inpb" value=""></option>
                                    <option class="inpb" value="si">si</option>
                                    <option class="inpb" value="no">no</option>
                                </select>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="bau" class="col-md-4 col-form-label text-md-end">Bautizado en el Espíritu Santo</label>

                            <div class="col-md-6">
                                <select name="bautizosanto" class="inp" id="bau" style="padding:13px;">
                                    <option class="inpb" value=""></option>
                                    <option class="inpb" value="si">si</option>
                                    <option class="inpb" value="no">no</option>
                                </select>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="gradmin" class="col-md-4 col-form-label text-md-end">Grado Ministerial</label>

                            <div class="col-md-6">
                               <select name="gradoministerial" class="inp" id="gradmin" style="padding:13px;">
                                    <option class="inpb" value=""></option>
                                    <option class="inpb" value="OBRERO LAICO">OBRERO LAICO</option>
                                    <option class="inpb" value="PASTOR LICENCIADO">PASTOR LICENCIADO</option>
                                    <option class="inpb" value="MINISTRO ORDENADO">MINISTRO ORDENADO</option>
                                </select>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="cargo_ejerce" class="col-md-4 col-form-label text-md-end">Cargo que Ejerce</label>

                            <div class="col-md-6">
                              <input  type="text" class="inp" name="cargo_ejerce"  autofocus>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="ministerial_profile" class="col-md-4 col-form-label text-md-end">Perfil Ministerial</label>

                            <div class="col-md-6">
                              <textarea class="inp" name="" id="" cols="40" rows="5"></textarea>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="date_presentation_iames" class="col-md-4 col-form-label text-md-end">Fecha de Presentación en IAMES (AMIP)</label>

                            <div class="col-md-6">
                            <input  type="date" class="inp" name="date_presentation_iames"  autofocus>
                            </div>
                        </div>
    
                        <div class="row mb-3">
                            <label for="pointments" class="col-md-4 col-form-label text-md-end">Ascensos o Nombramientos</label>

                            <div class="col-md-6">
                              <textarea class="inp" name="" id="" cols="40" rows="5"></textarea>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="formación_academica_iames" class="col-md-4 col-form-label text-md-end">Formación Académica dentro de IAMES (AMIP)</label>

                            <div class="col-md-6">
                              <textarea class="inp" name="" id="" cols="40" rows="5"></textarea>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="news" class="col-md-4 col-form-label text-md-end">Novedades</label>

                            <div class="col-md-6">
                              <textarea class="inp" name="" id="" cols="40" rows="5"></textarea>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="crevi" class="col-md-4 col-form-label text-md-end">Tiene Credencial Vigente</label>

                            <div class="col-md-6">
                            <select name="credencialvigente" class="inp" id="crevi" style="padding:13px;">
                                    <option class="inpb" value=""></option>
                                    <option class="inpb" value="si">si</option>
                                    <option class="inpb" value="no">no</option>
                                </select>
                            </div>
                        </div>


                        <div class="row mb-3">
                            <label for="estact" class="col-md-4 col-form-label text-md-end">Estado actual</label>

                            <div class="col-md-6">
                            <select name="estadoactual" class="inp" id="estact" style="padding:13px;">
                                    <option class="inpb" value=""></option>
                                    <option class="inpb" value="Activo">Activo</option>
                                    <option class="inpb" value="Inactivo">Inactivo</option>
                                    <option class="inpb" value="Retirado">Retirado</option>
                                    <option class="inpb" value="Suspendido">Suspendido</option>
                                </select>
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
