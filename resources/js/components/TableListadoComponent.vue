<template>
  <div>
    <b-table striped hover :items="items" :fields="fields">

        <template #cell(actions)="row">
            <b-button size="sm" @click="info(row.item, row.index, $event.target)" class="mr-1">
            Editar
            </b-button>
            <b-button size="sm" @click="row.toggleDetails">
            Eliminar
            </b-button>
        </template>
      </b-table>
  </div>
</template>

<script>
  export default {
    data() {
      return {
        items: [
        
          { id: 40, asunto: 'SUAREZ, LOPEZ s/ DENUNCIA ART 35 CF', tipo: 'Expediente', exptepol: '150-135/455-65', sumpol: '165-777/321', reservado: 'si', oficina_destino: "Juzgado Correccional N°1"},
          { id: 52, asunto: 'PEREZ, GOMEZ s/ SUP. INF. ART 15 CF', tipo: 'Expediente', exptepol: '150-135/455-65', sumpol: '165-777/321', reservado: '--', oficina_destino: "Juzgado Garantias"},
          { id: 86, asunto: 'SOSA, GONZALEZ s/ SUP. INF ART 80 CF', tipo: 'Expediente', exptepol: '150-135/455-65', sumpol: '165-777/321', reservado: 'si', oficina_destino: "Equipo Fiscal"},
          { id: 86, asunto: 'SOSA, GONZALEZ s/ SUP. INF ART 80 CF', tipo: 'Expediente', exptepol: '150-135/455-65', sumpol: '165-777/321', reservado: 'si', oficina_destino: "Equipo Fiscal"},
          { id: 40, asunto: 'SUAREZ, LOPEZ s/ DENUNCIA ART 35 CF', tipo: 'Expediente', exptepol: '150-135/455-65', sumpol: '165-777/321', reservado: 'si', oficina_destino: "Juzgado Correccional N°1"},
          { id: 52, asunto: 'PEREZ, GOMEZ s/ SUP. INF. ART 15 CF', tipo: 'Expediente', exptepol: '150-135/455-65', sumpol: '165-777/321', reservado: '--', oficina_destino: "Juzgado Garantias"},
          { id: 86, asunto: 'SOSA, GONZALEZ s/ SUP. INF ART 80 CF', tipo: 'Expediente', exptepol: '150-135/455-65', sumpol: '165-777/321', reservado: 'si', oficina_destino: "Equipo Fiscal"},
          { id: 86, asunto: 'SOSA, GONZALEZ s/ SUP. INF ART 80 CF', tipo: 'Expediente', exptepol: '150-135/455-65', sumpol: '165-777/321', reservado: 'si', oficina_destino: "Equipo Fiscal"},
          { id: 40, asunto: 'SUAREZ, LOPEZ s/ DENUNCIA ART 35 CF', tipo: 'Expediente', exptepol: '150-135/455-65', sumpol: '165-777/321', reservado: 'si', oficina_destino: "Juzgado Correccional N°1"},
          { id: 52, asunto: 'PEREZ, GOMEZ s/ SUP. INF. ART 15 CF', tipo: 'Expediente', exptepol: '150-135/455-65', sumpol: '165-777/321', reservado: '--', oficina_destino: "Juzgado Garantias"},
          { id: 86, asunto: 'SOSA, GONZALEZ s/ SUP. INF ART 80 CF', tipo: 'Expediente', exptepol: '150-135/455-65', sumpol: '165-777/321', reservado: 'si', oficina_destino: "Equipo Fiscal"},
          { id: 86, asunto: 'SOSA, GONZALEZ s/ SUP. INF ART 80 CF', tipo: 'Expediente', exptepol: '150-135/455-65', sumpol: '165-777/321', reservado: 'si', oficina_destino: "Equipo Fiscal"},
          { id: 40, asunto: 'SUAREZ, LOPEZ s/ DENUNCIA ART 35 CF', tipo: 'Expediente', exptepol: '150-135/455-65', sumpol: '165-777/321', reservado: 'si', oficina_destino: "Juzgado Correccional N°1"},
          { id: 52, asunto: 'PEREZ, GOMEZ s/ SUP. INF. ART 15 CF', tipo: 'Expediente', exptepol: '150-135/455-65', sumpol: '165-777/321', reservado: '--', oficina_destino: "Juzgado Garantias"},
          { id: 86, asunto: 'SOSA, GONZALEZ s/ SUP. INF ART 80 CF', tipo: 'Expediente', exptepol: '150-135/455-65', sumpol: '165-777/321', reservado: 'si', oficina_destino: "Equipo Fiscal"},
          { id: 86, asunto: 'SOSA, GONZALEZ s/ SUP. INF ART 80 CF', tipo: 'Expediente', exptepol: '150-135/455-65', sumpol: '165-777/321', reservado: 'si', oficina_destino: "Equipo Fiscal"},
          { id: 40, asunto: 'SUAREZ, LOPEZ s/ DENUNCIA ART 35 CF', tipo: 'Expediente', exptepol: '150-135/455-65', sumpol: '165-777/321', reservado: 'si', oficina_destino: "Juzgado Correccional N°1"},
          { id: 52, asunto: 'PEREZ, GOMEZ s/ SUP. INF. ART 15 CF', tipo: 'Expediente', exptepol: '150-135/455-65', sumpol: '165-777/321', reservado: '--', oficina_destino: "Juzgado Garantias"},
          { id: 86, asunto: 'SOSA, GONZALEZ s/ SUP. INF ART 80 CF', tipo: 'Expediente', exptepol: '150-135/455-65', sumpol: '165-777/321', reservado: 'si', oficina_destino: "Equipo Fiscal"},
          { id: 86, asunto: 'SOSA, GONZALEZ s/ SUP. INF ART 80 CF', tipo: 'Expediente', exptepol: '150-135/455-65', sumpol: '165-777/321', reservado: 'si', oficina_destino: "Equipo Fiscal"},
          
          
        ],
        fields: [
          { key: 'id', label: '#'},
          { key: 'asunto', label: 'Asunto' },
          { key: 'tipo', label: 'Tipo' },
          { key: 'exptepol', label: 'Expte. Policial' },
          { key: 'sumpol', label: 'Sum. Policial' },
          { key: 'reservado', label: 'Reservado' },
          { key: 'oficina_destino', label: 'Of. Destino' },
          { key: 'actions', label: 'Acciones' }
        ],

      }
    }
  }
</script>