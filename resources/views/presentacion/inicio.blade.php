@extends('layouts.appmenu')

@section('content')
<b-container fluid>
    <b-row align-h="center">
        <b-col cols="12">
            <b-card title="Novedades" class="my-3">
                @if ($errors->any())
                <b-alert show variant="danger">
                    <ul class="mb-0">
                        @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </b-alert>
                @endif

               
                <b-container class="bv-example-row">
                    <b-row>
                        <b-col>
                        <h5>Recibidos</h5>
                            <b-list-group>
                                <b-list-group-item><b-icon icon="arrow-down-circle" aria-hidden="true"></b-icon> <b-button href="" variant="link"> SUAREZ, LOPEZ s/ DENUNCIA. . .</b-button></b-list-group-item>
                                <b-list-group-item><b-icon icon="arrow-down-circle" aria-hidden="true"></b-icon> <b-button href="" variant="link">PEREZ, GOMEZ s/ SUP. INF. ART 15 CF...</b-button></b-list-group-item>
                                <b-list-group-item><b-icon icon="arrow-down-circle" aria-hidden="true"></b-icon> <b-button href="" variant="link">SOSA, GONZALEZ s/ SUP. INF ART 80 CF...</b-button></b-list-group-item>
                                <b-list-group-item class="text-right"><b-button  href="{{ url('/presentacion/recibidos') }}" variant="link">Ver todos ...</b-button></b-list-group-item>
                            </b-list-group>
                        </b-col>
                        <b-col>
                        <h5>Sin enviar</h5>
                            <b-list-group>
                                <b-list-group-item><b-icon icon="caret-right" aria-hidden="true"></b-icon> <b-button href="" variant="link"> SUAREZ, LOPEZ s/ DENUNCIA. . .</b-button></b-list-group-item>
                                <b-list-group-item><b-icon icon="caret-right" aria-hidden="true"></b-icon> <b-button href="" variant="link">PEREZ, GOMEZ s/ SUP. INF. ART 15 CF...</b-button></b-list-group-item>
                                <b-list-group-item><b-icon icon="caret-right" aria-hidden="true"></b-icon> <b-button href="" variant="link">SOSA, GONZALEZ s/ SUP. INF ART 80 CF...</b-button></b-list-group-item>
                                <b-list-group-item class="text-right"><b-button  href="{{ url('/presentacion/sinenviar') }}" variant="link">Ver todos ...</b-button></b-list-group-item>
                            </b-list-group>

                        </b-col>

                    </b-row>
                </b-container>

                <b-button variant="primary" href="{{ url('/presentacion/alta') }}" class="mt-4">
                <b-icon icon="file-earmark"></b-icon>
                Nueva Presentaci&oacute;n
                </b-button>

            </b-card>
        </b-col>

        
    </b-row>
</b-container>



</script>

@endsection

