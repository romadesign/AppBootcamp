<template>
<div class="content_syllabus_principal ">
    <div class="">
        <div class="p-2">
            Agregar sub Temario
        </div>
        <div class="p-2 content-syllabus" v-for="(syllabu, s) in subSilabus" :key="syllabu.s">
            <h4>Sub temario {{ s+1 }}</h4>
            <div class="">
                <div class="mb-3">
                    <label for="title_syllabus" class="form-label">Sub titulo</label>
                    <input type="text" id="title_syllabus" class="form-control" v-model="subSilabus[s].sub_title_syllabus" placeholder="Nombre">
                </div>
                <div class="mb-3">
                    <label for="description_syllabus" class="form-label">Descripción</label>
                    <textarea id="description_syllabus" class="form-control" v-model="subSilabus[s].sub_description_syllabus" rows="3"></textarea>
                </div>
            </div>
              <button type="button" @click="remove(s)" class="btn btn-danger delete_button"> - </button>
        </div>
    </div>
    <button type="button" @click="add()" class="btn btn-primary button-add"> Agrega un nuevo sub temario </button>
</div>
</template>
<script>
//import FieldTestimonyImage from './FieldTestimonyImage.vue'

export default {
    name: "Testimonys",
    components: {
       //FieldTestimonyImage,
    },

    props: {
        subSilabus: {
          type: Array,
          default: () => [],
          required: true,
        }
    },

    data() {
      return {

      }
    },

    mounted() {
      //do something after mounting vue instance
      console.log(this.subSilabus, 'hellos')
    },

    methods: {
      add() {
          this.subSilabus.push({
              sub_title_syllabus: this.sub_title_syllabus,
              sub_description_syllabus: this.sub_description_syllabus,
          })
      },
      remove(s){
        this.subSilabus.splice(s, 1)
      }
    }



   //<div class="file-upload-form">
  //     Upload an image file:
  //     <input type="file" @change="previewImage($event)" accept="image/*">
  // </div>
  // <div class="image-preview">
  //   <img height="200px" width="200px" class="preview" :src="syllabus[i].picture_syllabus">
  // </div>
}
</script>
<style scoped>
.content_syllabus_principal {
    margin-top: 1rem;
    gap: 0.6rem;
}

.content-syllabus {
    position: relative;
    margin: 1rem;
}

.delete_button {
    height: 34px;
    position: absolute;
    top: 0;
    right: 0;
    margin-right: 6px;
    margin-top: 6px;
}
</style>
