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
                        <h5>En trámite...</h5>
                            <b-list-group>
                                <item-pres-sin-enviar-component></item-pres-sin-enviar-component>
                                <item-pres-sin-enviar-component></item-pres-sin-enviar-component>
                                <item-pres-sin-enviar-component></item-pres-sin-enviar-component>
                                <item-pres-sin-enviar-component></item-pres-sin-enviar-component>
                                <item-pres-sin-enviar-component></item-pres-sin-enviar-component>
                                <item-pres-sin-enviar-component></item-pres-sin-enviar-component>

                                
                                <b-list-group-item class="text-right">
                                        <b-button  href="{{ url('/presentacion/recibidos') }}" variant="link">Ver todos ...</b-button>
                                </b-list-group-item>
                                <b-list-group-item class="text-center">
                                    <b-button variant="primary" href="{{ url('/presentacion/alta') }}">
                                        <b-icon icon="file-earmark"></b-icon>
                                        Nueva Presentaci&oacute;n
                                    </b-button>
                                </b-list-group-item>
                            </b-list-group>
                        </b-col>
                        <b-col>
                        <h5>Ingresos desde una Oficina Judicial</h5>
                            <b-list-group>
                                <item-ingresos-of-judicial-component></item-ingresos-of-judicial-component>
                                <item-ingresos-of-judicial-component></item-ingresos-of-judicial-component>
                                <item-ingresos-of-judicial-component></item-ingresos-of-judicial-component>
                                <item-ingresos-of-judicial-component></item-ingresos-of-judicial-component>
                                <item-ingresos-of-judicial-component></item-ingresos-of-judicial-component>
                                <item-ingresos-of-judicial-component></item-ingresos-of-judicial-component>


                                
                                <b-list-group-item class="text-right"><b-button  href="{{ url('/presentacion/recibidos') }}" variant="link">Ver todos ...</b-button></b-list-group-item>
                            </b-list-group>
                        </b-col>
                    </b-row>
                </b-container>

                

            </b-card>
        </b-col>

        
    </b-row>
</b-container>



</script>

@endsection

