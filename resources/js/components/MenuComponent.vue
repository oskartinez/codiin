<template>
<div style="background: lightblue;">

  <b-dropdown id="dropdown-1"  size="sm" text="Presentaciones" class="m-2">
    <b-dropdown-item href="/presentacion">Novedades</b-dropdown-item>
    <b-dropdown-item href="/presentacion/sinenviar">En trámite</b-dropdown-item>
    <b-dropdown-item href="/presentacion/enviadas">Enviadas</b-dropdown-item>
    <b-dropdown-divider></b-dropdown-divider>
    <b-dropdown-item href="/presentacion/recibidas">Ingresos</b-dropdown-item>
  </b-dropdown>
  
  <b-dropdown id="dropdown-1"  size="sm" text="Administración" class="m-2">
        <b-dropdown-item href="/oficina/datos">Datos de la Oficina</b-dropdown-item>
        <b-dropdown-item href="/oficina/accesos">Acceso al Personal</b-dropdown-item>
  </b-dropdown>


                    
                    <b-dropdown text="Opciones" size="sm" right style="float:right; padding:6px; padding-right:14px;">
                        <b-dropdown-item href="/login" @click="logout">
                        <b-icon icon="power" aria-hidden="true"></b-icon> 
                        Cerrar Sesión
                        </b-dropdown-item>
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