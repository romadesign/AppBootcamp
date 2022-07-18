<template>
<div class="content_syllabus_principal">
    <div class="card p-2">
    <div class="">
      Agregar temario
    </div>
    <div class="text-center ">
        <div class="p-2 content-syllabus" v-for="(syllabu, i) in syllabus" :key="syllabu.i">
            <h4>Temario {{ i+1 }}</h4>
            <div class="">
                <div class="mb-3">
                    <label for="title_syllabus" class="form-label">Titulo</label>
                    <input type="text" id="title_syllabus" class="form-control" v-model="syllabus[i].title_syllabus" placeholder="Nombre">
                </div>
                <div class="mb-3">
                    <label for="description_syllabus" class="form-label">Descripción</label>
                    <textarea id="description_syllabus" class="form-control" v-model="syllabus[i].description_syllabus" rows="3"></textarea>
                </div>
                <div class="card p-2">
                  <subSyllabus :subSilabus="syllabus[i].sub_syllabus" />
                </div>
            </div>
            <button type="button" @click="remove(i)" class="btn btn-danger delete_button"> - </button>
        </div>
    </div>
    <button type="button" @click="add()" class="btn btn-primary button-add"> Agrega un nuevo temario </button>
  </div>
</div>
</template>
<script>
//import FieldTestimonyImage from './FieldTestimonyImage.vue'
import subSyllabus from "./subSyllabus.vue"

export default {
    name: "Testimonys",
    components: {
       subSyllabus,
    },

    props: {
        syllabus: {
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
      console.log()
    },

    methods: {
        add() {
            this.syllabus.push({
                title_syllabus: this.title_syllabus,
                description_syllabus: this.description_syllabus,
                sub_syllabus: [{
                    sub_title_syllabus: this.sub_title_syllabus,
                    sub_description_syllabus: this.sub_description_syllabus,
                }],
            })
        },
        remove(i) {
            this.syllabus.splice(i, 1)
            console.log(this.syllabus)
        },
    }
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
