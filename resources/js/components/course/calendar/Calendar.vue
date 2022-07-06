<template>
  <div class="content_testimony_principal ">
      <div class="card text-center">
          <div class="card p-2">
              Otros datos del curso
          </div>
          <div class="">
            <div class="">
              <h5>calendar</h5>
            </div>
            <div class="p-2 d-flex">
              <div class="w-100">
                <label for="duration" class="form-label">start</label>
                <input
                type="date"
                class="form-control"
                v-model="calendar.startDay">
              </div>
              <div class="w-100">
                <label for="duration" class="form-label">End</label>
                <input
                type="date"
                class="form-control"
                v-model="calendar.endDay">
              </div>
            </div>
          </div>
          <div class="">
            <div class="">
              <h5>Time</h5>
            </div>
            <div class="p-2 d-flex">
              <div class="w-100">
                <label for="time" class="form-label">Start</label>
                <input
                type="time"
                class="form-control"
                v-model="calendar.startTime">
              </div>
              <div class="w-100">
                <label for="time" class="form-label">End</label>
                <input
                type="time"
                class="form-control"
                v-model="calendar.endTime">
              </div>
            </div>
          </div>
          <div class="p-2">
            <div class="d-flex">
              <div class="w-100">
                <label for="title" class="form-label">modality</label>
                <input
                type="text"
                class="form-control"
                placeholder="Titulo del curso"
                v-model="calendar.modality">
              </div>
              <div class="w-100">
                <label for="title" class="form-label">Duration</label>
                <input
                type="text"
                class="form-control"
                placeholder="Duración del curso"
                v-model="calendar.duration">
              </div>
            </div>
            <div class="">
              <label for="title" class="form-label">Syllabus</label>
              <input
              type="url"
              class="form-control"
              placeholder="Ingrese la Url para descargar el temario"
              v-model="calendar.syllabus">
            </div>
          </div>
      </div>
  </div>
</template>
<script>
export default {
  name: "Calendar",
  data() {
    return {
    }
  },
  props: {
      calendar: {
          type: Object,
          //default: () => '',
          default: () => ({
              startDay: '',
              endDay: '',
              startTime: '',
              endTime: '',
              modality: '',
              duration: '',
              syllabus: '',
          }),
      }
  },
}
</script>
<style scoped>
</style>
