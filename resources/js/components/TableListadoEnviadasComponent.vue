<template>
  <div>
    <b-table striped hover :items="items" :fields="fields">

        <template #cell(actions)="row">
            <b-button size="sm" @click="info(row.item, row.index, $event.target)" class="mr-1">
            Constancia
            </b-button>
            <b-button size="sm" @click="info(row.item, row.index, $event.target)" class="mr-1">
            Ver PDF
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
        
          { id: 40, asunto: 'SUAREZ, LOPEZ s/ DENUNCIA ART 35 CF', fecha_envio: '17/03/2021', tipo: 'Expediente', exptepol: '150-135/455-65', sumpol: '165-777/321', reservado: 'si', oficina_destino: "MUIIT"},
          { id: 52, asunto: 'PEREZ, GOMEZ s/ SUP. INF. ART 15 CF', fecha_envio: '17/03/2021',tipo: 'Expediente', exptepol: '150-135/455-65', sumpol: '165-777/321', reservado: '--', oficina_destino: "MUIIT"},
          { id: 86, asunto: 'SOSA, GONZALEZ s/ SUP. INF ART 80 CF', fecha_envio: '17/03/2021',tipo: 'Expediente', exptepol: '150-135/455-65', sumpol: '165-777/321', reservado: 'si', oficina_destino: "MUIIT"},
          { id: 86, asunto: 'SOSA, GONZALEZ s/ SUP. INF ART 80 CF', fecha_envio: '14/03/2021',tipo: 'Expediente', exptepol: '150-135/455-65', sumpol: '165-777/321', reservado: 'si', oficina_destino: "MUIIT"},
          { id: 40, asunto: 'SUAREZ, LOPEZ s/ DENUNCIA ART 35 CF', fecha_envio: '14/03/2021',tipo: 'Expediente', exptepol: '150-135/455-65', sumpol: '165-777/321', reservado: 'si', oficina_destino: "Juzgado de Garantias N°1"},
          { id: 52, asunto: 'PEREZ, GOMEZ s/ SUP. INF. ART 15 CF', fecha_envio: '11/03/2021',tipo: 'Expediente', exptepol: '150-135/455-65', sumpol: '165-777/321', reservado: '--', oficina_destino: "MUIIT"},
          { id: 86, asunto: 'SOSA, GONZALEZ s/ SUP. INF ART 80 CF', fecha_envio: '11/03/2021',tipo: 'Expediente', exptepol: '150-135/455-65', sumpol: '165-777/321', reservado: 'si', oficina_destino: "MUIIT"},
          { id: 86, asunto: 'SOSA, GONZALEZ s/ SUP. INF ART 80 CF', fecha_envio: '10/03/2021',tipo: 'Expediente', exptepol: '150-135/455-65', sumpol: '165-777/321', reservado: 'si', oficina_destino: "MUIIT"},
          { id: 40, asunto: 'SUAREZ, LOPEZ s/ DENUNCIA ART 35 CF', fecha_envio: '09/03/2021',tipo: 'Expediente', exptepol: '150-135/455-65', sumpol: '165-777/321', reservado: 'si', oficina_destino: "Juzgado Correccional N°1"},
          { id: 52, asunto: 'PEREZ, GOMEZ s/ SUP. INF. ART 15 CF', fecha_envio: '09/03/2021',tipo: 'Expediente', exptepol: '150-135/455-65', sumpol: '165-777/321', reservado: '--', oficina_destino: "MUIIT"},
          { id: 86, asunto: 'SOSA, GONZALEZ s/ SUP. INF ART 80 CF', fecha_envio: '05/03/2021',tipo: 'Expediente', exptepol: '150-135/455-65', sumpol: '165-777/321', reservado: 'si', oficina_destino: "MUIIT"},
          { id: 86, asunto: 'SOSA, GONZALEZ s/ SUP. INF ART 80 CF', fecha_envio: '04/03/2021',tipo: 'Expediente', exptepol: '150-135/455-65', sumpol: '165-777/321', reservado: 'si', oficina_destino: "MUIIT"},
          { id: 40, asunto: 'SUAREZ, LOPEZ s/ DENUNCIA ART 35 CF', fecha_envio: '04/03/2021',tipo: 'Expediente', exptepol: '150-135/455-65', sumpol: '165-777/321', reservado: 'si', oficina_destino: "MUIIT"},
          { id: 52, asunto: 'PEREZ, GOMEZ s/ SUP. INF. ART 15 CF', fecha_envio: '02/03/2021',tipo: 'Expediente', exptepol: '150-135/455-65', sumpol: '165-777/321', reservado: '--', oficina_destino: "MUIIT"},
          { id: 86, asunto: 'SOSA, GONZALEZ s/ SUP. INF ART 80 CF', fecha_envio: '27/02/2021',tipo: 'Expediente', exptepol: '150-135/455-65', sumpol: '165-777/321', reservado: 'si', oficina_destino: "Equipo Fiscal"},
          { id: 86, asunto: 'SOSA, GONZALEZ s/ SUP. INF ART 80 CF', fecha_envio: '27/02/2021',tipo: 'Expediente', exptepol: '150-135/455-65', sumpol: '165-777/321', reservado: 'si', oficina_destino: "MUIIT"},
          { id: 40, asunto: 'SUAREZ, LOPEZ s/ DENUNCIA ART 35 CF', fecha_envio: '27/02/2021',tipo: 'Expediente', exptepol: '150-135/455-65', sumpol: '165-777/321', reservado: 'si', oficina_destino: "Juzgado Correccional N°1"},
          { id: 52, asunto: 'PEREZ, GOMEZ s/ SUP. INF. ART 15 CF', fecha_envio: '26/02/2021',tipo: 'Expediente', exptepol: '150-135/455-65', sumpol: '165-777/321', reservado: '--', oficina_destino: "Juzgado Garantias"},
          { id: 86, asunto: 'SOSA, GONZALEZ s/ SUP. INF ART 80 CF', fecha_envio: '26/02/2021',tipo: 'Expediente', exptepol: '150-135/455-65', sumpol: '165-777/321', reservado: 'si', oficina_destino: "Equipo Fiscal"},
          { id: 86, asunto: 'SOSA, GONZALEZ s/ SUP. INF ART 80 CF', fecha_envio: '25/02/2021',tipo: 'Expediente', exptepol: '150-135/455-65', sumpol: '165-777/321', reservado: 'si', oficina_destino: "MUIIT"},
          
          
        ],
        fields: [
          { key: 'id', label: '#'},
          { key: 'fecha_envio', label: 'Fecha Envio' },
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