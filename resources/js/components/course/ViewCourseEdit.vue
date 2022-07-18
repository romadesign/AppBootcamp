<template>
  <div id="">
    <div class="container">
           <div class="row d-flex">
             <div class="form-group col-md-8">
                <h1>Editar curso <br>
                {{course.title}}</h1>
             </div>
             <div class="col-md-4">
               <button class="btn btn-success btn-block  w-100" @click="submit()">
                 Editar
               </button>
             </div>
           </div>
          <div class="mb-3">
            <Tabs>
              <Tab  title="Inicio">
                <div class="">
                  <label for="title" class="form-label">Title</label>
                  <input
                  type="text"
                  class="form-control"
                  placeholder="Text"
                  v-model="title">
                </div>      
                <div class="">
                  <label for="url" class="form-label">Link</label>
                  <input
                  type="url"
                  class="form-control"
                  placeholder="www.google.com "
                  v-model="url">
                </div>
                <div class="pt-3">
                    <Calendar :calendar="calendar" />
                </div>
              </Tab>
              <Tab selected="true" title="Temario">
                <Syllabus :syllabus="syllabus"  />
              </Tab>
              <Tab title="Testimonios">
                 <Testimonys :testimony="testimony"  />
              </Tab>
              <Tab title="Inscripciones">
                 <Inscriptions :inscription="inscription" />
              </Tab>
            </Tabs>
        </div>
    </div>
  </div>
</template>
<script>
//componente tabs
import Tabs from "../courseedit/tabs/Tabs.vue";
import Tab from "../courseedit/tabs/Tab.vue";

import Testimonys from "../courseedit/testimonys/Testimonys.vue";
import Inscriptions from "../courseedit/inscriptions/Inscriptions.vue";
import Syllabus from "../courseedit/syllabus/Syllabus.vue"
import Calendar from "../courseedit/calendar/Calendar.vue"

export default {
  name: "ViewCourseEdit",
  components: {
       Tabs,
       Tab,
       Testimonys,
       Inscriptions,
       Syllabus,    
       Calendar,
  },
  props: {
    course: [],
  },
  data(){
    return {
      title: this.$props.course.title,
      url: this.$props.course.url,
      testimony:this.$props.course.testimony,
      inscription: this.$props.course.inscription,
      calendar: this.$props.course.calendar,
      syllabus: this.$props.course.syllabus,
    }
  },
  methods: {
    async submit() {
          try {
            let currentObj = this;
            await axios.put(route('courses.update', this.$props.course.id),{
              title: this.$data.title,
              url: this.$data.url,
              testimony: this.$data.testimony,
              inscription: this.$data.inscription,
              syllabus: this.$data.syllabus,
              calendar: this.$data.calendar,
            })
            .then(function (response) {
              currentObj.output = response.data;
              console.log(currentObj.output)
              window.location = "/home";
            })
           } catch (e) {
             console.log(e.response)
           }
         },
      }
  }
</script>
<style scoped>
</style>
