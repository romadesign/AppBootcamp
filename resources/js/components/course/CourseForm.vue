<template>
    <div class="container">
        <div class="row"
           <div class="row d-flex">
             <div class="form-group col-md-8">
                <h1>Crear un nuevo curso</h1>
             </div>
             <div class="col-md-4">
               <button class="btn btn-success btn-block  w-100" @click="submit()">
                 Crear
               </button>
             </div>
           </div>
          <div class="mb-3">
            <Tabs>
              <Tab selected="true" title="Inicio">
                <div class="">
                  <label for="title" class="form-label">Title</label>
                  <input
                  type="text"
                  class="form-control"
                  placeholder="Titulo del curso"
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
                <div class="">
                  <div class="">
                    <h5>calendar</h5>
                  </div>
                  <div class="d-flex">
                    <div class="w-100">
                      <label for="duration" class="form-label">start</label>
                      <input
                      type="date"
                      class="form-control"
                      v-model="startCalendar">
                    </div>
                    <div class="w-100">
                      <label for="duration" class="form-label">End</label>
                      <input
                      type="date"
                      class="form-control"
                      v-model="endCalendar">
                    </div>
                  </div>
                </div>
                <div class="">
                  <div class="">
                    <h5>Time</h5>
                  </div>
                  <div class="d-flex">
                    <div class="w-100">
                      <label for="time" class="form-label">Start</label>
                      <input
                      type="time"
                      class="form-control"
                      v-model="startTime">
                    </div>
                    <div class="w-100">
                      <label for="time" class="form-label">End</label>
                      <input
                      type="time"
                      class="form-control"
                      v-model="endTime">
                    </div>
                  </div>
                </div>
                <div class="">
                    <Syllabus :syllabus="syllabus"  />
                </div>
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
</template>

<script>
//componente tabs
import Tabs from "./tabs/Tabs.vue";
import Tab from "./tabs/Tab.vue";

import Testimonys from "./testimonys/Testimonys.vue";
import Inscriptions from "./inscriptions/Inscriptions.vue";
import Syllabus from "./syllabus/Syllabus.vue"

    export default {
      name: "course-form",
      components: {
         Tabs,
         Tab,
         Testimonys,
         Inscriptions,
         Syllabus,
      },
      data(){
        return {
          title: '',
          url: '',
          testimony:[{
            title_testimony: 'test title',
            description_testimony: '',
            picture_testimony: '',
                //picture_testimony: 'https://images.vexels.com/media/users/3/179969/isolated/lists/da44cc8348af09adfef0b0fa2fe249ce-imagen-de-mariquita-plana.png',
          }],
          inscription: {},
          syllabus: [
            {
              title_syllabus: '',
              description_syllabus: '',
              sub_syllabus: [{
                sub_title_syllabus: '',
                sub_description_syllabus: '',
              }],
            }
          ],
        }
      },
      mounted() {
          console.log('Component mounted.')
      },
      methods: {
        async submit() {
          try {
            let currentObj = this;
            await axios.post(route("courses.store"),{
              title: this.title,
              url: this.url,
              testimony: this.testimony,
              inscription: this.inscription,
              syllabus: this.syllabus,
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
