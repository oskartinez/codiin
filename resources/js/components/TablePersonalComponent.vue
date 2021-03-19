<template>
  <div>
    <b-table striped hover :items="items" :fields="fields">

        <template #cell(actions)="row">
            <b-button size="sm" @click="info(row.item, row.index, $event.target)" class="mr-1">
            Editar
            </b-button>
            <b-button size="sm" @click="info(row.item, row.index, $event.target)" class="mr-1">
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
        
          { id: 1, apellido: 'SUAREZ', nombre: 'Fernando', cargo: 'Subjefe', nro_policial: "45444-5", tipo_doc: 'DNI', nro_doc: '15437444', habilitado: 'si', perfil: "RESPONSABLE"},
         { id: 2, apellido: 'PEREZ', nombre: 'Rodrigo', cargo: 'Auxiliar', nro_policial: "45454-5", tipo_doc: 'DNI', nro_doc: '1634544', habilitado: '--', perfil: "EDITOR"},
         { id: 3, apellido: 'RODRIGUEZ', nombre: 'Johnatan', cargo: 'Cabo', nro_policial: "422344-5", tipo_doc: 'DNI', nro_doc: '173344', habilitado: 'si', perfil: "EDITOR"},
         { id: 4, apellido: 'ALVAREZ', nombre: 'Ricardo', cargo: 'Principal', nro_policial: "457544-5", tipo_doc: 'DNI', nro_doc: '175544', habilitado: 'si', perfil: "AUDITOR"},

          
        ],
        fields: [
          { key: 'id', label: '#'},
          { key: 'apellido', label: 'Apellido' },
          { key: 'nombre', label: 'Nombre' },
          { key: 'cargo', label: 'Cargo' },
          { key: 'nro_policial', label: 'Nro Policial/Legajo' },
          { key: 'tipo_doc', label: 'Tipo Doc.' },
          { key: 'nro_doc', label: 'Nro. Doc' },
          { key: 'habilitado', label: 'Activo' },
          { key: 'perfil', label: 'Perfil' },
          { key: 'actions', label: 'Acciones' }

        ],

      }
    }
  }
</script>