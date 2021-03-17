<template>
<div style="background: lightblue;">

  <b-dropdown id="dropdown-1"  size="sm" text="Presentaciones" class="m-2">
    <b-dropdown-item href="/presentacion">Novedades</b-dropdown-item>
    <b-dropdown-item href="/presentacion/sinenviar">Sin enviar</b-dropdown-item>
    <b-dropdown-item href="/presentacion/enviadas">Enviadas</b-dropdown-item>
    <b-dropdown-divider></b-dropdown-divider>
    <b-dropdown-item href="/presentacion/recibidas">Recibidas</b-dropdown-item>
  </b-dropdown>
  
  <b-dropdown id="dropdown-1"  size="sm" text="Administración" class="m-2">
        <b-dropdown-item href="/oficina/datos">Datos de la Oficina</b-dropdown-item>
        <b-dropdown-item href="/oficina/accesos">Acceso al Personal</b-dropdown-item>
  </b-dropdown>

</div>
</template>

<script>
  export default {
    data() {
      return {
        
      }
    }
  }
</script>