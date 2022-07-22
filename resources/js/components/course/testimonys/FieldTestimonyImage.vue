<template>
  <div class="d-sm-inline-flex w-100" >
    <div class="file-upload-form">
        Upload an image file:
        <input type="file" @change="previewImage($event)" accept="image/*">
    </div>
    <div class="image-preview">
      <img height="200px" width="200px" class="preview" :src="image">
    </div>
  </div>
</template>

<script>

export default {
  name: 'FieldResumeImage',
  props: {
      image: {
        required: true,
      },
  },
  data() {
    return {

    };
  },
  mounted() {
    console.log(this.$props.image + 'sad')
  },
  methods: {
     previewImage(event) {
         console.log(this.image)
           var input = event.target;
           if (input.files && input.files[0]) {
               var reader = new FileReader();
               reader.onload = (e) => {
                   //Indicando que la imagen sea distitan
                   if(!this.image[i]){
                     this.image[i] = e.target.result;
                   }
               }
               reader.readAsDataURL(input.files[0]);
           }
       },
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
