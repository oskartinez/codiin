@extends('layouts.app')

@section('content')
<b-container>
    <b-row align-h="center">
        <b-col cols="10">

             
            <b-card title="Nuevo Personal" class="my-3">


                @if ($errors->any())
                <b-alert show variant="danger">
                    <ul class="mb-0">
                        @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </b-alert>
                @endif
                
                <b-form method="POST" action="{{ route('registro_envio') }}" enctype="multipart/form-data">
                    {{ csrf_field() }}

                    <b-form-group 
                                  label="Cargo/Título:"
                                  label-for="cargo"
                                  >
                        <b-form-input id="cargo"
                                      type="text"
                                      name="cargo" 
                                      maxlength ="25"
                                      required
                        >
                        </b-form-input>
                    </b-form-group>
                    <b-form-group 
                                  label="Apellido/s:"
                                  label-for="apellido"
                                  >
                        <b-form-input id="apellido"
                                      type="text"
                                      name="apellido" 
                                      maxlength ="35"
                                      required
                        >
                        </b-form-input>
                    </b-form-group>
                    <b-form-group 
                                  label="Nombre/s:"
                                  label-for="nombre"
                                  >
                        <b-form-input id="nombre"
                                      type="text"
                                      name="nombre" 
                                      maxlength ="35"
                                      required
                        >
                        </b-form-input>
                    </b-form-group>


                    <b-form-group 
                                  label="Nro Policial / Legajo:"
                                  label-for="nro_policial"
                                  >
                        <b-form-input id="nro_policial"
                                      type="text"
                                      name="nro_policial" 
                                      maxlength ="35"
                                      required
                        >
                        </b-form-input>
                    </b-form-group>

                    <b-form-group 
                                  label="Tipo Documento:"
                                  label-for="tipo_documento"
                                  >
                                <b-form-select class="mb-3">
                                    <b-form-select-option value="dni">DNI</b-form-select-option>
                                    <b-form-select-option value="ci">C&eacute;dula</b-form-select-option>
                                    <b-form-select-option value="lc">Libreta C&iacute;vica</b-form-select-option>
                                    <b-form-select-option value="le">Libreta Enrolamiento</b-form-select-option>
                                    <b-form-select-option value="pasaporte">Pasaporte</b-form-select-option>
                                </b-form-select>
                    </b-form-group>


                    <b-form-group 
                                  label="Perfil:"
                                  label-for="perfil"
                                  >
                    <b-form-select class="mb-3">
                            <b-form-select-option value="1">EDITOR</b-form-select-option>
                            <b-form-select-option value="2">LECTOR</b-form-select-option>
                        </b-form-select>
                    </b-form-group>

                    <b-form-group 
                                  label="Usuario:"
                                  label-for="usuario"
                                  >
                        <b-form-input id="usuario"
                                      type="text"
                                      name="usuario" 
                                      maxlength ="25"
                                      required
                        >
                        </b-form-input>
                    </b-form-group>

                    <b-form-group 
                                  label="Clave:"
                                  label-for="password"
                                  >
                        <b-form-input id="password"
                                      type="password"
                                      name="password" 
                                      maxlength ="20"
                                      required
                        >
                        </b-form-input>
                    </b-form-group>

                    <b-button type="submit" variant="primary">Registrar</b-button>

                </b-form>
            </b-card>
        </b-col>
    </b-row>
</b-container>
@endsection