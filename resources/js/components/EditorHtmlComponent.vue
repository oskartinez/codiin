<template>
<div style="height:560px">
  <b-form-group 
                        label="Contenido de la presentación:"
                        label-for="contenido_presentacion"
                        
                        >
                <div class="editor" style="height:400px">
                        <quill-editor   ref="myTextEditor" v-model="contenido" :config="editorOption" id="contenido_presentacion" name="contenido_presentacion">
                        </quill-editor>
                </div>
  </b-form-group>
</div>
</template>
<script>

import {quillEditor} from "vue-quill-editor"; // importa el componente quillEditor
import 'quill/dist/quill.js';
export default {
  data() {
    return {
      contenido: "<br><br><br><br><br><br><br><br>", // contenido del editor
      editorOption: {
                 // configuración del editor
        // something config
        theme: "bubble"
      }
    };
  },
  components: {
    quillEditor
  },
};
</script>