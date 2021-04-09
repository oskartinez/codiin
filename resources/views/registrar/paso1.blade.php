@extends('layouts.app')

@section('content')
<b-container>
    <b-row align-h="center">
        <b-col cols="8">

             
            <b-card title="Registrar nueva Oficina - Unidad Policial" class="my-3">


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
                        En este proceso deberá proporcionar los datos de su Oficina para su registro.
                    </b-alert>
                @endif

                <b-form method="POST" action="{{ url('/registrar_1') }}">
                    {{ csrf_field() }}
                    <p> Escriba las letras de la siguiente imagen para continuar: </p>
                    <p>{!! captcha_img() !!}</p>
                    <b-form-input placeholder="..." type="text" name="captcha"></b-form-input>

                    <br/>
                    <b-button type="submit" size="sm" variant="outline-primary" href="{{ url('/') }}"><< Volver </b-button>
                    <b-button type="submit" size="sm" variant="primary" href="{{ url('/registrar_1') }}">
                    <b-icon icon="arrow-repeat" aria-hidden="true"></b-icon>
                    Recargar
                    </b-button>
                    <b-button type="submit" size="sm" variant="success">Siguiente >></b-button>

                </b-form>
                    

            </b-card>
        </b-col>
    </b-row>
</b-container>
@endsection