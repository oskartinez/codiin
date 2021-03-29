<template>
<div>
          <vue-bootstrap-typeahead @hit="onArticuloSeleccionado" :serializer="serializarValor" @input="buscarArticulos"
       v-model="busqueda" :data="dependencias" placeholder="Busca algo en la Wikipedia" />
    
        <div class="mt-2 alert alert-success">
        Artículo seleccionado es:
        {{ elementosSeleccionado}}
        </div> 
</div>
</template>
<script>
  export default {

    data: () => ({
		busqueda: "",
		dependencias: [],
		elementosSeleccionado: {},
	}),
	methods: {
		// Función que se invoca cuando el texto de búsqueda cambia
		async buscarArticulos() {
			// La búsqueda como string. La tomamos del campo de texto
			const busqueda = this.busqueda;
			// Hacemos la petición a nuestra API pasándole la búsqueda. En este caso consulto la wikipedia
			const respuesta = await fetch(`/api/dependencias`);
			/**
			 * Pequeña gran nota: En este caso primero decodifico como texto, luego quito el HTML
			 * y después hago un JSON.parse así:
			 			let datos = await respuesta.text();
						datos = this.quitarHTML(datos);
						datos = JSON.parse(datos);
			 * En tu caso, si tu API no devuelve HTML (como debería ser) simplemente haz un:
			      const datos = await respuesta.json();
			 */
			let dep = await respuesta.text();
            
			//articulosWikipedia = this.quitarHTML(articulosWikipedia);
            let dependenciasObj = JSON.parse(dep); //transforma el texto que devuelve el servidor en un objeto
            
			// Aquí todo depende de la respuesta de tu servidor. Si el mismo solo te da un arreglo, entonces asigna con:
			// this.articulos = datos;
			//Pero en este caso la API nos regresa un objeto que tiene la propiedad "query" y dentro de la misma tiene la propiedad search
			this.dependencias = dependenciasObj;
            console.log(dependenciasObj);
		},
		// Función que convierte el objeto a cadena. Es llamado para mostrarse en la lista
		serializarValor(dependencias) {
			return  dependencias.id + " - " + dependencias.nombre;
		},
		onArticuloSeleccionado(dependencias) {
			this.elementosSeleccionado = dependencias;
		}
	}


  }
</script>