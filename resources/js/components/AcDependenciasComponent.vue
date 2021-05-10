<template>
<div>
	<b-form-group 
		label="Nombre de la Oficina:"
		label-for="dependencia"
		>
        <vue-bootstrap-typeahead @hit="onDependenciaSeleccionada" :serializer="serializarValor" @input="buscarDependencia" 
            id="dependencia" name="dependencia"
		    v-model="busqueda" :data="dependencias" />
	</b-form-group>
	<div class="mt-2 alert alert-success d-none">
		Dependencia seleccionada es:
		{{ elementosSeleccionado}}
	</div> 
	<b-form-group 
				label="Código de Oficina:"
				label-for="codigo_oficina"
				>
		<b-form-input id="codigo_oficina"
					type="text"
					v-model="codigoOficina"
					name="codigo_oficina" 
					disabled
					maxlength ="10"
					>
		</b-form-input>
	</b-form-group>
</div>
</template>
<script>
  export default {

    data: () => ({
		busqueda: "",
		dependencias: [],
		elementosSeleccionado: {},
		codigoOficina: ''
	}),
	methods: {
		// Función que se invoca cuando el texto de búsqueda cambia
		async buscarDependencia() {
			// La búsqueda como string. La tomamos del campo de texto
			const busqueda = this.busqueda;
			// Hacemos la petición a nuestra API pasándole la búsqueda. En este caso consulto la wikipedia
			const respuesta = await fetch(`/api/dependencias/${busqueda}`);

            let dep = await respuesta.text();
            
			// dep = this.quitarHTML(dep); // si es que tiene codigo html se lo limpia
            let dependenciasObj = JSON.parse(dep); //transforma el texto que devuelve el servidor en un objeto
            
			// Aquí todo depende de la respuesta de tu servidor. Si el mismo solo te da un arreglo, entonces asigna con:
			// this.dependencias = datos;
			//Pero en este caso la API nos regresa un objeto que tiene la propiedad "query" y dentro de la misma tiene la propiedad search
			this.dependencias = dependenciasObj;
            console.log(dependenciasObj);
		},
		// Función que convierte el objeto a cadena. Es llamado para mostrarse en la lista
		serializarValor(dependencias) {
			return  dependencias.s015_nombre;
		},
		onDependenciaSeleccionada(dependencias) {
			this.elementosSeleccionado = dependencias;
			this.codigoOficina = dependencias.s015_dependencia;
		}
	}


  }
</script>