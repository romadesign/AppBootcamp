<template>
<div class="content_testimony_principal ">
    <div class="card text-center">
        <div class="card p-2">
            Agregar Testimonios
        </div>
        <div class="p-2 content-testimony" v-for="(test, i) in testimony" :key="test.i">
            <h4>Testimonios {{ i+1 }}</h4>
            <div class="">
                <div class="mb-3">
                    <label for="title_testimony" class="form-label">Nombre</label>
                    <input type="text" id="title_testimony" class="form-control" v-model="testimony[i].title_testimony" placeholder="Nombre">
                </div>
                <div class="mb-3">
                    <label for="description_testimony" class="form-label">Descripción</label>
                    <textarea id="description_testimony" class="form-control" v-model="testimony[i].description_testimony" rows="3"></textarea>
                </div>

                <div class="mb-3">
                  <div class="file-upload-form">
                     Upload an image file:
                     <input type="file" @change="previewImage($event, i)" accept="image/*">
                 </div>
                 <div class="image-preview">
                   <img  width="200px" class="preview" :src="testimony[i].picture_testimony">
                 </div>
                </div>

            </div>
            <button type="button" @click="remove(i)" class="btn btn-danger delete_button"> - </button>
        </div>
    </div>
    <button type="button" @click="add()" class="btn btn-primary button-add"> Agrega un nuevo testimonio </button>
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
        testimony: {
          type: Array,
          required: true,
        },
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
            this.testimony.push({
                title_testimony: this.title_testimony,
                description_testimony: this.description_testimony,
                picture_testimony: this.picture_testimony,
            })
        },

        remove(i) {
            this.testimony.splice(i, 1)
        },

        previewImage(e, index) {
            var input = e.target;
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                //capturando img base64 (e.target.result y almacenado)
                reader.onload = (e) => {
                //index = testimonio_id
                this.testimony[index].picture_testimony = e.target.result;
            }
            reader.readAsDataURL(input.files[0]);
          }
       }
    }



   //<div class="file-upload-form">
  //     Upload an image file:
  //     <input type="file" @change="previewImage($event)" accept="image/*">
  // </div>
  // <div class="image-preview">
  //   <img height="200px" width="200px" class="preview" :src="testimony[i].picture_testimony">
  // </div>
}
</script>
<style scoped>
.content_testimony_principal {
    margin-top: 1rem;
    gap: 0.6rem;
}

.content-testimony {
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
