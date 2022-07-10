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
            <div class="content_follow">
              <h4>Follow</h4>
              <div class="">
                <i>LInkendn</i>
                <i>Face</i>
                <i>Instagram</i>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="conten_img">
            <img src="/image/programmers.jpg" alt="">
          </div>
        </div>
        <div class="content_video">
            <iframe width="218" height="140" src="https://www.youtube.com/embed/GrbjTJxneVM" title="Creando entorno Back-end con NodeJS, Express y subir proyecto a un servidor con Heroku Parte-1" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
      </div>
    </section>
    <section class="content_cards_general">
      <div class="row d-flex justify-content-center">
        <div class="">
          <h3 class="fw-bold text-center p-3">Acepta el reto y participa</h3>
        </div>
        <div class="card_content col-md-6">
          <h4>No importa</h4>
          <ul>
            <li>Tus conocimientos previos</li>
            <li>El nivel de estudios</li>
            <li>Tus informes académicos</li>
            <li>Tus empleos anteriores</li>
            <li>Que no tengas dinero</li>
          </ul>
        </div>
        <div class="card_content col-md-6">
          <h4>Nos interesa</h4>
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
      <div class="">
        <div class="">
          Cursos
        </div>
      </div>
    </section>
    <section class="">
      <div class="row">
        <div class="col-md-4">
          <h3 class="fw-bold">¡Sí, programar es para ti!</h3>
          <span>Somos la ​primera red de escuelas digitales solidarias, inclusivas y gratuitas en España.
Formamos a personas en situación de vulnerabilidad en las competencias más demandadas por las empresas del sector tecnológico combatiendo la brecha digital de género.</span>
        </div>
        <div class="col-md-8">
          <div class="">
            card
          </div>
        </div>
      </div>
    </section>
  </div>
</div>
@endsection
