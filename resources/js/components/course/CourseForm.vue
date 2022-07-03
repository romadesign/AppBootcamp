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
               </Tab>
               <Tab title="Testimonios">
                 <Testimonys :testimony="testimony"/>
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

    export default {
      name: "course-form",
      components: {
         Tabs,
         Tab,
         Testimonys,
         Inscriptions,
      },
      data(){
        return {
          title: '',
          url: '',
          testimony: [],
          inscription: {},
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
