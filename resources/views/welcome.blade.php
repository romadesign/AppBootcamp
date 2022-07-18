@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <section class="content_general">
      <div class="sub_content row d-flex align-items-center justify-content-center">
        <div class="content_description col-md-6">
          <div class="content_description_style">
            <h1 class="fw-bold ">Buscamos mujeres y hombres que rompan los códigos</h1>
            <h2 class="fs-5">Las empresas necesitan nuevo talento digital. Ofrecen buenos salarios, contratos estables y desarrollo profesional</h2>
            <button type="button" class="btn btn-success">Cursos</button>
            <div class="content_follow">
              <h4>Síguenos</h4>
              <div class="content_icons">
                <img src="/image/googlemaps.svg" alt="">  
                <img src="/image/facebook.svg" alt="">  
                <img src="/image/instagram.svg" alt="">  
                <img src="/image/twitter.svg" alt="">  
                <img src="/image/googlemessages.svg" alt="">  
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="conten_img">
            <img src="/image/img.svg" alt="">
          </div>
        </div>
        <div class="content_video">
            <iframe width="218" height="140" src="https://www.youtube.com/embed/GrbjTJxneVM" title="Creando entorno Back-end con NodeJS, Express y subir proyecto a un servidor con Heroku Parte-1" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
      </div>
    </section>

    <section class="content_information">
      <div class="row content_type_formation">
        <div class="card shadow p-3 mb-5 bg-body rounded desription_information">
          <img src="/image/img1.svg" alt="">
          <h3 class="fw-bold text-center">Formato intensivo</h3>
         <ul>
            <li>Proyectos reales.</li>
            <li>Las tecnologías demandadas por las empresas.</li>
            <li>Basado en las demandas del mercado laboral.</li>
            <li>Competencias técnicas y laborales.</li>
          </ul>
        </div>
        <div class="card shadow p-3 mb-5 bg-body rounded desription_information">
          <img src="/image/img2.svg" alt="">
          <h3 class="fw-bold text-center">Sin barreras</h3>
         <ul>
            <li>Formación gratuita de calidad.</li>
            <li>Dirigida especialmente a personas con dificultades de inserción laboral.</li>
            <li>Sin necesidad de conocimientos previos.</li>
          </ul>
        </div>
        <div class="card shadow p-3 mb-5 bg-body rounded desription_information">
          <img src="/image/img3.svg" alt="">
          <h3 class="fw-bold text-center">Enfocada al empleo</h3>
         <ul>
            <li>Salida positiva del 100%.</li>
            <li>Practicas en empresas del sector.</li>
            <li>Seguimiento de los progresos.</li>
          </ul>
        </div>
      </div>
    </section>

    <section class="row content_cards_general">
      <div class="col-md-6">
        <h3 class="fw-bold p-3 text-center">Acepta el reto y participa</h3>
        <div class="conten_img">
          <img src="/image/img5.svg" alt="">
        </div>
      </div>
      <div class="col-md-6 content_import ">
        <div class="shadow p-3 mb-5 bg-body rounded">
          <h4 class="text-center fw-bold ">No importa</h4>
          <ul>
            <li>Tus conocimientos previos</li>
            <li>El nivel de estudios</li>
            <li>Tus informes académicos</li>
            <li>Tus empleos anteriores</li>
            <li>Que no tengas dinero</li>
          </ul>
        </div>
        <div class="shadow p-3 mb-5 bg-body rounded">
          <h4 class="text-center fw-bold ">Nos interesa</h4>
          <ul>
            <li>Tu motivación</li>
            <li>Tu lógica</li>
            <li>Tu autonomía </li>
            <li>Tu capacidad de trabajo en equipo</li>
          </ul>
        </div>
      </div>
    </section>

    <section>
      <!--Courses components-->
      <course-component :courses="{{ $courses }}" />
    </section>


    
   
  </div>
</div>
@endsection
