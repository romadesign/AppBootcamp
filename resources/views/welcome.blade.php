@extends('layouts.app')

@section('content')

    <section class="content_general">
      <div class="sub_content row d-flex align-items-center justify-content-center">
        <div class="content_description col-md-6">
          <div class="content_description_style">
            <h1 class="fw-bold ">Buscamos mujeres y hombres que rompan los códigos</h1>
            <h2 class="fs-5">Las empresas necesitan nuevo talento digital. Ofrecen buenos salarios, contratos estables y desarrollo profesional</h2>
            <button type="button" class="btn btn-success">Cursos</button>
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
        <div class="card desription_information">
          <img src="/image/img1.svg" alt="">
          <h3 class="fw-bold">Formato intensivo</h3>
         <ul>
            <li>Proyectos reales.</li>
            <li>Las tecnologías demandadas por las empresas.</li>
            <li>Basado en las demandas del mercado laboral.</li>
            <li>Competencias técnicas y laborales.</li>
          </ul>
        </div>
        <div class="card desription_information">
          <img src="/image/img2.svg" alt="">
          <h3 class="fw-bold">Sin barreras</h3>
         <ul>
            <li>Formación gratuita de calidad.</li>
            <li>Dirigida especialmente a personas con dificultades de inserción laboral.</li>
            <li>Sin necesidad de conocimientos previos.</li>
          </ul>
        </div>
        <div class="card desription_information">
          <img src="/image/img3.svg" alt="">
          <h3 class="fw-bold">Enfocada al empleo</h3>
         <ul>
            <li>Salida positiva del 100%.</li>
            <li>Practicas en empresas del sector.</li>
            <li>Seguimiento de los progresos.</li>
          </ul>
        </div>
      </div>
    </section>
    <section>
      <div class="">
        <div class="">
          <h3 class="fw-bold text-center p-3">Nuestro cursos</h3>
        </div>
        <div class="content_courses">
          <div class="card content_course">
            <div>
              <img src="/image/img3.svg" alt="">
            </div>
            <div>
              <h4 class="fw-bold">Full Stack</h4>
              <div>
                <div>
                  Modalidad: <span>Presencial</span> <br/>
                  Duración: <span>570 Horas</span>
                </div>
                <div>
                  Comienza: <span>2022-07-29</span> <br/>
                  Termina: <span>2022-07-12</span>
                </div>
                <div>
                  Hora: <span>12:17</span> am a  <span>24:17</span> pm
                </div>
              </div>
              <button type="button" class="btn btn-success">Más información</button>
            </div>
          </div>
          <div class="card content_course">
            <div>
              <img src="/image/img3.svg" alt="">
            </div>
            <div>
              <h4 class="fw-bold">Full Stack</h4>
              <div>
                <div>
                  Modalidad: <span>Presencial</span> <br/>
                  Duración: <span>570 Horas</span>
                </div>
                <div>
                  Comienza: <span>2022-07-29</span> <br/>
                  Termina: <span>2022-07-12</span>
                </div>
                <div>
                  Hora: <span>12:17</span> am a  <span>24:17</span> pm
                </div>
              </div>
              <button type="button" class="btn btn-success">Más información</button>
            </div>
          </div>
          <div class="card content_course">
            <div>
              <img src="/image/img3.svg" alt="">
            </div>
            <div>
              <h4 class="fw-bold">Full Stack</h4>
              <div>
                <div>
                  Modalidad: <span>Presencial</span> <br/>
                  Duración: <span>570 Horas</span>
                </div>
                <div>
                  Comienza: <span>2022-07-29</span> <br/>
                  Termina: <span>2022-07-12</span>
                </div>
                <div>
                  Hora: <span>12:17</span> am a  <span>24:17</span> pm
                </div>
              </div>
              <button type="button" class="btn btn-success">Más información</button>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="content_cards_general">
      <div class="">
          <h3 class="fw-bold text-center p-3">Acepta el reto y participa</h3>
      </div>
      <div class="row d-flex justify-content-center">
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

@endsection
