<template>
  <div>
    <b-form-radio-group
      v-model="selectNuevoExistente"
      :options="options"
      class="mb-3"
      value-field="item"
      text-field="name"
      disabled-field="notEnabled"
    ></b-form-radio-group>
    
    <b-card v-show="selectNuevoExistente == 'A'">
        <b-form-group 
          label="Oficina Judicial de Destino:"
          label-for="oficina_judicial_destino"
          >
          <b-form-select class="mb-3" v-model="oficinaDestino">
              <b-form-select-option value="1" checked>MUIIT - Mesa Unica de Ingreso e Intervención Temprana</b-form-select-option>
          </b-form-select>
        </b-form-group>

        

    </b-card >
    <b-card v-show="selectNuevoExistente == 'B'">
        <b-form-radio-group
          v-model="buscarPor"
          :options="optionsPor"
          class="mb-3"
          value-field="item"
          text-field="name"
          disabled-field="notEnabled"
        ></b-form-radio-group>

        <b-card v-show="buscarPor == '1'">
          <b-form inline>
            <b-form-group 
                      label="Expediente Policial:"
                      label-for="expte_pol_buscar"
                      >
              <b-form-input id="expte_pol_buscar"
                          type="text"
                          name="expte_pol_buscar" 
                          maxlength ="50"
                          class="mb-2 ml-sm-2 mr-sm-2 mb-sm-0"
            >
              </b-form-input>
            </b-form-group>
            <b-button variant="primary">Buscar</b-button>
          </b-form>
        </b-card>
        <b-card v-show="buscarPor == '2'">
          <b-form-group 
              label="Fuero:"
              label-for="fuero"
              >
              <b-form-select class="mb-3">
                  <b-form-select-option value="1">Civil y Comercial</b-form-select-option>
                  <b-form-select-option value="2">Contencioso Administrativo</b-form-select-option>
                  <b-form-select-option value="3">Laboral</b-form-select-option>
                  <b-form-select-option value="4">Menor y Familia</b-form-select-option>
                  <b-form-select-option value="5">Paz y Faltas</b-form-select-option>
                  <b-form-select-option value="6">Penal</b-form-select-option>
              </b-form-select>
          </b-form-group>
          <b-form-group 
              label="Circunscripción:"
              label-for="circunscripcion"
              >
              <b-form-select class="mb-3">
                  <b-form-select-option value="1">Provincial</b-form-select-option>
                  <b-form-select-option value="2">I - Resistencia</b-form-select-option>
                  <b-form-select-option value="3">II - Pcia. Roque Sáenz Peña</b-form-select-option>
                  <b-form-select-option value="4">III - Villa Ángela</b-form-select-option>
                  <b-form-select-option value="5">IV - Charata</b-form-select-option>
                  <b-form-select-option value="6">V - Gral. San Martín</b-form-select-option>
                  <b-form-select-option value="7">VI - Juan José Castelli</b-form-select-option>
              </b-form-select>
          </b-form-group>          
          <b-form-group 
              label="Fuero:"
              label-for="fuero"
              >
              <b-form-select class="mb-3">
                  <b-form-select-option value="1">Cámara de Apelaciones en lo Criminal y Correcional</b-form-select-option>
                  <b-form-select-option value="2">Cámara Primera en lo Criminal</b-form-select-option>
                  <b-form-select-option value="3">Equipo Fiscal N° 1</b-form-select-option>
                  <b-form-select-option value="4">Fiscalía Antidrogas</b-form-select-option>
                  <b-form-select-option value="5">Juzgado Correcional N° 1</b-form-select-option>
                  <b-form-select-option value="6">Juzgado de Garantías</b-form-select-option>
              </b-form-select>
          </b-form-group>

          <b-form inline>
            <b-form-group 
                        label="Expediente Judicial:"
                        label-for="expte_judicial_buscar"
                        
                        >
                <b-form-input id="expte_judicial_buscar"
                            type="text"
                            name="expte_judicial_buscar" 
                            maxlength ="50"
                            class="mb-2 ml-sm-2 mr-sm-2 mb-sm-0"
              >
                </b-form-input>
              </b-form-group>
              <b-button variant="primary">Buscar</b-button>
          </b-form>

        </b-card>


    </b-card>

</div>

</template>

<script>
  export default {
    data() {
      return {
        oficinaDestino: '1',
        selectNuevoExistente: 'A',
        options: [
          { item: 'A', name: 'Nuevo (sin vinculación)' },
          { item: 'B', name: 'Existente (buscar...)' }
        ],
        buscarPor: '1',
        optionsPor: [
          { item: '1', name: 'Por Expediente Policial'},
          { item: '2', name: 'Por Expediente Judicial'}
        ]
      }
    }
  }
</script>