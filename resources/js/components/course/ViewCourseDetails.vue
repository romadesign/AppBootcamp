<template>
  <div id="">
    <div class="content_course_details">
      <div>
        <div class="title">Curso</div>
        <h1> {{course.title}}</h1>
      </div>
    </div>
    <div class="syllabus">
      <div>
        <i class="far fa-clock"></i>
        <h4>Duración</h4>
        <span> {{course.calendar.duration}}</span>
      </div>
      <div>
        <i class="fas fa-graduation-cap"></i>
        <h4>Modalidad</h4> 
        <span> {{course.calendar.modality}}</span>
      </div>
      <div>
        <i class="far fa-calendar"></i>
        <h4>Calendario</h4>
        <div>
          <span> {{course.calendar.startDay}} - {{course.calendar.endDay}}</span>
        </div>
        <div>
          <span> {{course.calendar.startTime}} - {{course.calendar.endTime}}</span>
        </div>
      </div>
      <div>
        <i class="fas fa-file-pdf"></i>
        <h4>Temario</h4>
        <span> {{course.calendar.syllabus}}</span>
      </div>
    </div>

    <div class="button_inscription">
      <a :href=course.inscription.url_inscription>
        <button type="button" class="btn btn-primary">{{course.inscription.title_inscription}}</button>
      </a>
    </div>

    <div class="content_temario" id="accordionExample">
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingOne">
          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            <h2>Temario</h2>
          </button>
        </h2>
        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
          <div class="content-syllabus" v-for="(tema, t) in course.syllabus" :key="t">
            <h4>{{tema.title_syllabus}}</h4>
            <span> {{tema.description_syllabus}}</span> 
            <div class="sub_content_syllabus"  v-for="(sub, s) in tema.sub_syllabus" :key="s">
              <h5> {{sub.sub_title_syllabus}}</h5>
              <span>{{sub.sub_description_syllabus}}</span>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <div class="content_testimony row">
      <h2>Testimonios</h2>
      <div class="col-md-4  p-2  d-flex justify-content-center align-items-center" v-for="(test, i) in course.testimony" :key="i" >
          <div class="card card_testimony p-2" style="width: 18rem;">
            <img :src="test.picture_testimony" alt="">
            <div class="card-body">
              <h5 class="card-title text-center">{{test.title_testimony}}</h5>
              <p class="card-text">{{test.description_testimony}}</p>
            </div>
          </div>
      </div>
    </div>

  </div>
</template>
<script>
export default {
  name: "ViewCourseDetails",
  data() {
      return {
      }
  },
  mounted() {
    //do something after mounting vue instance
    console.log(this.course)
  },
  props: {
    course: []
  }
}
</script>
<style scoped>
.content_course_details{
  text-align: center;
  background: #1e1842;
  height: 200px;
  display: flex;
  align-items: center;
  justify-content: center;
  margin-bottom: 3rem;
}
.title {
    color: white;
    font-weight: 700;
    font-size: 1rem;
}
.content_course_details h1 {
    color: white;
    font-weight: 800;
}
.syllabus {
    display: grid;
    grid-template-columns: 1fr 1fr 1fr 1fr;
    justify-content: center;
    text-align: center;
}
.syllabus i {
    font-size: 2rem;
}
.content_temario{
  padding: 2rem 0;
  margin-top: 2rem;
}
.content_temario h2 {
  font-weight: 600;
    font-size: 1.3rem;
    text-align: center;
    justify-content: center;
    width: 100%;
}
.content-syllabus {
    width: 60%;
    margin: 0 auto;
    padding-top: 1rem;
}
.sub_content_syllabus {
    padding: 0 1rem;
    margin-top: 0.7rem;
}
.content-syllabus h4 {
    font-weight: 600;
    font-size: 1rem;
    margin: 0;
}
.content-syllabus span {
    padding-bottom: 1rem;
}
.content-syllabus h5 {
    font-weight: 600;
    font-size: 1rem;
    color: #484848;
    margin: 0;
}
.button_inscription{
    text-align: center;
    padding: 2rem;
}
.button_inscription button {
    padding: 1rem;
    background: #6052ba00;
    border: 3px solid #1e1842 !important;
    font-weight: 800;
    color: #1e1842;
}
.button_inscription button:hover {
    background: #1e1842;
    color: white;
}
.content_testimony h2 {
    font-weight: 600;
    font-size: 1.3rem;
    text-align: center;
}
.card_testimony img {
    width: 100px;
    height: 100px;
    border-radius: 50%;
    margin: auto;
}
@media (max-width: 800px) {
  .syllabus[data-v-7eb2d639] {
    grid-template-columns: 1fr 1fr;
    gap: 2rem;
  }
}
@media (max-width: 420px) {
  .syllabus[data-v-7eb2d639] {
    grid-template-columns: 1fr;
    gap: 2rem;
  }
  .content-syllabus {
    width: 90%;
}
}
</style>
