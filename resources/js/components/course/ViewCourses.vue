<template>
  <div class="row">
      <div class="col-sm-6" v-for="(course, c) in courses" :key="c">
        <div class="card" >
          <div class="card-body">
            <h5 class="card-title">{{course.title}}</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a @click="details(course.title)" class="btn btn-primary">Detalle</a>
          </div>
        </div>
      </div>
  </div>
</template>
<script>
export default {
  name: "ViewCourses",
  data: () => ({  

  }),
  mounted() {
    console.log(this.courses)
  },
  props: {
    courses: []
  },
  methods: {
    details(title){
      window.location = `/courses/${title}`;
    }
  }
}
</script>
<style scoped>
</style>
