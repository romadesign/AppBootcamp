<template>
  <div class="row">
    <div class="col-sm-6" v-for="(course, c) in courses" :key="c">
      <div class="card" >
        <div class="card-body">
          <h5 class="card-title">{{course.title}}</h5>
          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
          <div class="d-flex justify-content-center align-items-center">
              <a @click="details(course.title)" class="btn btn-primary">Detalle</a>
              <p v-if="user">
                <a
                v-if="user.id === course.user_id"
					@click="edit(course.title)"
					class="btn btn-success">editar</a>
                <a @click="delet(course.id)" class="btn btn-danger">Eliminar</a>
              </p>
          </div>
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
    console.log(this.user)
  },
  props: {
    courses: [],
    user: {}
  },
  methods: {
    details(title){
      window.location = `/courses/${title}`;
    },
    edit(title){
      window.location = `/courses/${title}/edit`;
    },
    delet(id){
      console.log(id)
        axios.delete(route(`courses.destroy`, id), {
        })
        .then( response => {
        alert('bien')
        })
        .catch( error => {
        //handle failure
        alert('mal')
        console.log(error)
        })
    }
  }
}
</script>
<style scoped>
</style>
