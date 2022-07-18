<template>
  <div class="row">
      <section>
        <div class="">
          
          <div class="d-flex p-3 justify-content-between">
            <h3 class="fw-bold">Nuestros cursos</h3>
            <a href="/courses">Mirar todos</a>
          </div>
          <div class="content_courses">
            <div class="card content_course shadow p-3 mb-5 rounded" v-for="(course, c) in courses" :key="c">
              <div>
                <img src="/image/img3.svg" alt="">
              </div>
              <div>
                <h4 class="fw-bold">{{course.title}}</h4>
                <div>
                  <div>
                    Modalidad: <span>{{course.calendar.modality}}</span> <br/>
                    Duración: <span>{{course.calendar.duration}}</span>
                  </div>
                  <div>
                    Comienza: <span>{{course.calendar.startDay}}</span> <br/>
                    Termina: <span>{{course.calendar.endDay}}</span>
                  </div>
                  <div>
                    Hora: <span>{{course.calendar.startTime}}</span> am a  <span>{{course.calendar.endTime}}</span> pm
                  </div>
                </div>
                <a @click="details(course.title)" class="btn btn-primary">Detalle</a>
              </div>
            </div>
          </div>

        </div>
      </section>
  </div>
</template>
<script>
export default {
  name: "CourseComponent",
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
