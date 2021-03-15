@extends('layouts.app')

@section('content')
<b-container fluid>
    <b-row align-h="center">
        <b-col cols="12">
            <b-card title="Nueva Presentación" class="my-3">
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
                                  label="Tipo de presentación:"
                                  label-for="tipo_presentacion"
                                  >
                        <b-form-select class="mb-3" autofocus>
                            <b-form-select-option value="1">Informe</b-form-select-option>
                            <b-form-select-option value="2">Actuación</b-form-select-option>
                            <b-form-select-option value="3">Oficio</b-form-select-option>
                            <b-form-select-option value="4">Otro</b-form-select-option>
                        </b-form-select>
                    </b-form-group>

                    <b-form-group 
                                  label="Asunto:"
                                  label-for="asunto"
                                  >
                        <b-form-input id="asunto"
                                      type="text"
                                      name="asunto" 
                                      maxlength ="800"
                                      required
                        >
                        </b-form-input>
                    </b-form-group>

                    <b-form-group 
                      label="Expediente Policial:"
                      label-for="expte_pol"
                      >
                        <b-form-input id="expte_pol"
                                        type="text"
                                        name="expte_pol" 
                                        maxlength ="50"
                            >
                            </b-form-input>
                        </b-form-group>

                        <b-form-group 
                                    label="Sumario Policial:"
                                    label-for="sum_pol"
                                    >
                            <b-form-input id="sum_pol"
                                        type="text"
                                        name="sum_pol" 
                                        maxlength ="50"
                            >
                            </b-form-input>
                    </b-form-group>

                    <b-button v-b-toggle.collapse-1 variant="primary">Vinculación con causa</b-button>
                    <b-collapse id="collapse-1" class="mt-2">
                        <b-card>
                            <select-nuevo-existente-component>
                            </select-nuevo-existente-component>
                        </b-card>
                    </b-collapse>

                    <b-form-group>
                        <b-form-checkbox name="reservado" class="mt-2"                       
                        >
                        Presentación con contenido de carácter RESERVADO 
                        </b-form-checkbox>
                    </b-form-group>

                        <editor-html-component >
                        </editor-html-component>
                        


                    <b-form-group label="Adjunto (pdf):">
                        <b-form-file id="adjunto"></b-form-file>
                    </b-form-group>

                    <b-form-group 
                                    label="Observaciones:"
                                    label-for="observaciones"
                                    >
                        <b-form-textarea
                            id="Observaciones" class="mb-2"
                            rows="4"
                        ></b-form-textarea>
                    </b-form-group>


                    <b-button type="submit" variant="primary">Guardar</b-button>
                    <b-button type="submit" variant="secondary">Firmar y Enviar</b-button>
                    


                </b-form>

            </b-card>
        </b-col>
    </b-row>
</b-container>


</script>

@endsection