@extends('layouts.appmenu')

@section('content')
<b-container fluid>
    <b-row align-h="center">
        <b-col cols="12">
            <b-card title="Datos Oficina / Responsable" class="my-3">
                @if ($errors->any())
                <b-alert show variant="danger">
                    <ul class="mb-0">
                        @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </b-alert>
                @endif
                
                <b-form method="POST" action="">
                    {{ csrf_field() }}

                    <b-form-group 
                                  label="Nombre del Organismo/Oficina:"
                                  label-for="nombre-organismo"
                                  >
                        <b-form-input id="nombre-organismo"
                                      type="text"
                                      name="nombre-organismo" 
                                      disabled
                                      autofocus
                                      maxlength ="255"
                                      >
                        </b-form-input>
                    </b-form-group>


                    <b-form-group 
                                  label="Dirección:"
                                  label-for="direccion"
                                  >
                        <b-form-input id="direccion"
                                      type="text"
                                      name="direccion" 
                                      required
                                      maxlength ="80"
                                      >
                        </b-form-input>
                    </b-form-group>

                    <b-form-group 
                                  label="Teléfono:"
                                  label-for="telefono"
                                  >
                        <b-form-input id="telefono"
                                      type="text"
                                      name="telefono" 
                                      required
                                      maxlength ="40"
                                      >
                        </b-form-input>
                    </b-form-group>

                    <b-form-group 
                                  label="Email:"
                                  label-for="email"
                                  >
                        <b-form-input id="email"
                                      type="text"
                                      name="email" 
                                      required
                                      maxlength ="40"
                                      >
                        </b-form-input>
                    </b-form-group>

                    <hr/>

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
                                  label="Apellido:"
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
                                  label="Nombre:"
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
                                  label="Nro Policial / Cod. Legajo:"
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

                    <b-form-group label="Fotocopia de Documento de Identidad (jpg, png, pdf) :">
                        <b-form-file id="fotocopia_doc" name="fotocopia_doc"></b-form-file>
                    </b-form-group>

                    <b-form-group label="Fotocopia de designación al cargo o Declaración Jurada de ser máximo responsable de la oficina (jpg, png, pdf) :">
                        <b-form-file id="declar_jurada"></b-form-file>
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
                                  label="Clave anterior:"
                                  label-for="password_anterior"
                                  >
                        <b-form-input id="password_anterior"
                                      type="password_anterior"
                                      name="password_anterior" 
                                      maxlength ="20"
                                      required
                        >
                        </b-form-input>
                    </b-form-group>

                    <b-form-group 
                                  label="Clave nueva:"
                                  label-for="password_nueva"
                                  >
                        <b-form-input id="password_nueva"
                                      type="password_nueva"
                                      name="password_nueva" 
                                      maxlength ="20"
                                      required
                        >
                        </b-form-input>
                    </b-form-group>
                    <b-form-group 
                                  label="Confirme clave nueva:"
                                  label-for="password"
                                  >
                        <b-form-input id="password_confirma"
                                      type="password_confirma"
                                      name="password_confirma" 
                                      maxlength ="20"
                                      required
                        >
                        </b-form-input>
                    </b-form-group>

                    <b-button type="submit" variant="primary">Guardar</b-button>

                    
                </b-form>
         </b-card>
        </b-col>
    </b-row>
</b-container>


</script>

@endsection