<template>
  <div id="">
    <h1> {{course.title}}</h1>
    <h1> {{course.url}}</h1>
    <h1> {{course.id}}</h1>

    <div class="p-2 content-testimony" v-for="(test, i) in course.testimony" :key="test.i">
      <h1> {{test.title_testimony}}</h1>
      <h1> {{test.description_testimony}}</h1>
      <img :src="test.picture_testimony" alt="">
    </div>
    <span>  {{course.inscription.title_inscription}}</span>
    <span>  {{course.inscription}}</span> <br>
    <h3>temario</h3>
    <span>  {{course.syllabus}}</span>

    <div class="p-2 content-testimony" v-for="(tema, t) in course.syllabus" :key="tema.t">
      <span> {{tema.title_syllabus}}</span> <br>
      <span> description:  {{tema.description_syllabus}}</span> <br>
      <div class=""  v-for="(sub, s) in tema.sub_syllabus" :key="sub.s">
        <span> sub temario title: {{sub.sub_title_syllabus}}</span> <br>
        <span> sub temario description: {{sub.sub_description_syllabus}}</span> <br>
      </div>
    </div>

    <div class="">
      <span> {{course.calendar}}</span> <br>
      <span> {{course.calendar.startDay}}</span> <br>
      <span> {{course.calendar.endDay}}</span> <br>
      <span> {{course.calendar.startTime}}</span> <br>
      <span> {{course.calendar.endTime}}</span> <br>
      <span> {{course.calendar.duration}}</span> <br>
      <span> {{course.calendar.modality}}</span> <br>
      <span> {{course.calendar.syllabus}}</span> <br>
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
