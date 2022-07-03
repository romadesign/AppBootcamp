<template>
  <div class="d-sm-inline-flex w-100">
    <div class="file-upload-form">
        Upload an image file:
        <input type="file" @change="previewImage($event)" accept="image/*">
    </div>
    <div class="image-preview">
      <img height="200px" width="200px" class="preview" :src="imagen">
    </div>
  </div>
</template>

<script>

export default {
  name: 'FieldResumeImage',
  props: {
      image: {
        type: Array,
        required: true,
      },
  },
  data() {
    return {
      imagen: this.image.picture_testimony
    };
  },
  mounted() {
    console.log(this.image + 'sad')
  },
  methods: {
    previewImage(event) {
       var input = event.target;
       if (input.files && input.files[0]) {
           var reader = new FileReader();
           reader.onload = (e) => {
               //Indicando que la imagen sea distitan
                 this.image.picture_testimony = e.target.result;
           }
           reader.readAsDataURL(input.files[0]);
       }
   }
  }

};
</script>

<style scoped>
img {
  width: 100px;
  height: 100px;
  border-radius: 50%;
}
</style>
