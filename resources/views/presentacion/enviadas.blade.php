@extends('layouts.appmenu')

@section('content')
<b-container fluid>
    <b-row align-h="center">
        <b-col cols="12">
            <b-card title="Presentaciones ENVIADAS" class="my-3">
                @if ($errors->any())
                <b-alert show variant="danger">
                    <ul class="mb-0">
                        @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </b-alert>
                @endif

                <b-button v-b-toggle.collapse-1 variant="primary">
                    <b-icon icon="search"></b-icon>
                    B&uacute;squeda</b-button>
                    <b-collapse id="collapse-1" class="mt-2">
                        <b-card>
                            <buscador-enviadas-component>
                            </buscador-enviadas-component>
                        </b-card>
                </b-collapse>

                <pager-component>
                </pager-component>
                <table-listado-enviadas-component class="mt-2">
                </table-listado-enviadas-component>
                <pager-component>
                </pager-component>
                

            </b-card>
        </b-col>
    </b-row>
</b-container>


</script>

@endsection

