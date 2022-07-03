<template>
  <div id="">
    <h1> {{course.title}}</h1>

    <div class="p-2 content-testimony" v-for="(test, i) in course.testimony" :key="test.i">
      <h1> {{test.title_testimony}}</h1>
      <h1> {{test.description_testimony}}</h1>
      <span>hello</span>
    </div>
    <span>  {{course.inscription.title_inscription}}</span>
   <span>  {{course.inscription.url_inscription}}</span>

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
