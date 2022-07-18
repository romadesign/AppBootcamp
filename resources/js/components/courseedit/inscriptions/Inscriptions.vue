<template>
  <div class="content_testimony_principal ">
      <div class="card text-center">
          <div class="card p-2">
              Agregar un titulo y la Url del formulario
          </div>
          <div class="p-2 content-testimony">
              <div class="">
                  <div class="mb-3">
                      <label for="title_inscription" class="form-label">Titulo</label>
                      <input type="text" id="title_inscription" class="form-control" v-model="inscription.title_inscription" placeholder="Nombre">
                  </div>
                  <div class="mb-3">
                      <label for="url_inscription" class="form-label">Url formulario</label>
                      <input type="url" id="url_inscription" class="form-control" v-model="inscription.url_inscription" placeholder="Url">
                  </div>
              </div>
          </div>
      </div>
  </div>
</template>
<script>
export default {
  name: "Inscriptions",
  data() {
    return {
    }
  },
  props: {
      inscription: {
          type: Object,
          //default: () => '',
          default: () => ({
              title_inscription: '',
              url_inscription: '',
          }),
      }
  },
}
</script>
<style scoped>
</style>
