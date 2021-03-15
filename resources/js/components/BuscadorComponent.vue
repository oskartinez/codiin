<template>
<b-container fluid>
    <b-row  class="mt-2">
    <b-col> 
            <b-form-input id="asunto"
                            type="text"
                            name="asunto" 
                            maxlength ="800"
                            placeholder="Asunto"
            ></b-form-input>

    </b-col>
    <b-col>            
        <b-form-input id="exp_policial"
                        type="text"
                        name="exp_policial" 
                        maxlength ="50"
                        placeholder="Expte. Policial"
        ></b-form-input>
    </b-col>
    <b-col>
        <b-form-input id="sum_policial"
                        type="text"
                        name="sum_policial" 
                        maxlength ="50"
                        placeholder="Sum. Policial"
        ></b-form-input>
    </b-col>
    </b-row>
    <!-- SEGUNDA FILA -->
    
    <b-row  class="mt-2">
    <b-col>            
        <b-form-select class="mb-3" autofocus>
            <b-form-select-option value="0">-- Todas --</b-form-select-option>
            <b-form-select-option value="1">Informe</b-form-select-option>
            <b-form-select-option value="2">Actuación</b-form-select-option>
            <b-form-select-option value="3">Oficio</b-form-select-option>
            <b-form-select-option value="4">Otro</b-form-select-option>
        </b-form-select>
    </b-col>
    <b-col>
        <b-form-input id="oficina_destino"
                        type="text"
                        name="oficina_destino" 
                        maxlength ="50"
                        placeholder="Oficina destino"
        ></b-form-input>
    </b-col>
    <b-col>
        <b-form-checkbox name="reservado" class="mt-2"                       
                        >
                        Reservado 
        </b-form-checkbox>
    </b-col>
  </b-row>
  <b-row>
      <b-col>
          <b-button variant="success">Aplicar filtros</b-button>
          <b-button variant="primary">Borrar</b-button>
      </b-col>
  </b-row>
</b-container>
</template>

<script>
  export default {
    data() {
      return {
        
      }
    }
  }
</script>