@extends('layouts.app')

@section('content')
<b-container>
    <b-row align-h="center">
        <b-col cols="6">

             
            <b-card title="Inicio de Sesión" class="my-3">


                @if ($errors->any())
                <b-alert show variant="danger">
                    <ul class="mb-0">
                        @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </b-alert>
                @else
                    <b-alert show>
                        Por favor ingrese sus datos:
                    </b-alert>
                @endif
                
                <b-form method="POST" action="">
                    {{ csrf_field() }}

                    <b-form-group 
                                  label="Usuario:"
                                  label-for="usuario"
                                  >
                        <b-form-input id="usuario"
                                      type="text"
                                      name="usuario" 
                                      required
                                      autofocus
                                      maxlength ="25"
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

                    <b-form-group>
                        <b-form-checkbox name="remember" 
                        {{ old('remember') ? 'checked="true"' : '' }}
                        >
                        Recordar sesión
                        </b-form-checkbox>
                    </b-form-group>

                    <b-button type="submit" variant="primary">Ingresar</b-button>
                    
                    <b-button 
                        href=""
                        variant="link">Olvidaste tu contraseña?
                    </b-button>
                    


                </b-form>

            </b-card>
        </b-col>
    </b-row>
</b-container>
@endsection