{{-- Para usar la plantilla template.blade.php --}}
@extends('template')

{{-- Llenando de información los @yield() --}}
{{-- @section('bodyClass', 'class=bg-olive') --}}

@section('pageTitle', 'Faqs')
{{-- Como solo nos interesa mandar un string al yield, podemos pasar dicho string como 2do parámetro de la función @section() --}}

@section('cssLink', '/css/bootstrap.min.css')

@section('mainContent')


<body class='bodyPreguntasFrecuentes'>
  <!-- HEADER -->
  <div class="containerPreguntasFrecuentes">
    <div class="preguntas">
      <h1>Preguntas frecuentes</h1>
      <!-- PREGUNTA 1 -->
      <div id="accordion">
        <div class="card">
          <div class="card-header" id="headingOne">
            <h5 class="mb-0">
              <button class="btn btn-success collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                ¿Quiénes somos?
              </button>
            </h5>
          </div>
          <!-- RESPUESTA 1 -->
          <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
            <div class="card-body">
              Somos <a href= "/nosotros"> Patitas de Ciudad</a>, el primer petshop integral que te ofrece los mejores productos para tus mascotas y el mejor servicio para su cuidado


            </div>
          </div>
        </div>
        <!-- PREGUNTA 2 -->
        <div class="card">
          <div class="card-header" id="headingTwo">
            <h5 class="mb-0">
              <button class="btn btn-success collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                ¿Cómo comprar?
              </button>
            </h5>
          </div>
          <!-- RESPUESTA 2 -->
          <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
            <div class="card-body">
              Comprar en nuestro sitio es muy fácil y seguro. A continuación te brindamos algunos datos importantes que pueden ayudarte al momento de realizar tu compra:
              <br>
              - Primero te recomendamos registrarte en nuestro sitio. <br>
              - Encontrarás los productos utilizando la barra de categorías localizada en la parte superior del sitio. <br>
              - Da clic en la foto del producto que te gusta para poder acceder a los detalles del producto.<br>
              - Si quieres comprarlo, agrégalo a tu carro de compras. <br>
              - Luego de agregar un producto al carrito de compras, es posible continuar comprando y agregar otros productos. <br>
              - Finalmente, ¡queda concluir la compra y esperar la llegada de tu producto!
            </div>
          </div>
        </div>
        <!-- PREGUNTA 3 -->
        <div class="card">
          <div class="card-header" id="headingThree">
            <h5 class="mb-0">
              <button class="btn btn-success collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                ¿Cómo me registro?
              </button>
            </h5>
          </div>
          <!-- RESPUESTA 3 -->
          <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
            <div class="card-body">
              Para registrarte y comenzar a disfrutar de nuestra comunidad tenés que completar los datos de tu cuenta en la sección de <a href="/register">Registro</a>
            </div>
          </div>
        </div>
        <!-- PREGUNTA 4 -->
        <div class="card">
          <div class="card-header" id="headingFour">
            <h5 class="mb-0">
              <button class="btn btn-success collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                ¿Cómo hago mis reservas?
              </button>
            </h5>
          </div>
          <!-- RESPUESTA 4 -->
          <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
            <div class="card-body">
              Una vez que estés logeado y registrado podrás gestionar en la pestaña de servicios los turnos para peluquería que ofrecemos
            </div>
          </div>
        </div>
        <!-- PREGUNTA 5 -->
        <div class="card">
          <div class="card-header" id="headingFive">
            <h5 class="mb-0">
              <button class="btn btn-success collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                ¿Hacemos envíos?
              </button>
            </h5>
          </div>
          <!-- RESPUESTA 5 -->
          <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
            <div class="card-body">Sí contamos con envío en todo el país. El envío de los productos tiene un costo que varía de acuerdo a la ubicación y el volumen del pedido
            </div>
          </div>
        </div>
        <!-- PREGUNTA 6 -->
        <div class="card">
          <div class="card-header" id="headingSix">
            <h5 class="mb-0">
              <button class="btn btn-success collapsed" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                ¿Los precios y stock están actualizados?
              </button>
            </h5>
          </div>
          <!-- RESPUESTA 6 -->
          <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordion">
            <div class="card-body"> Todo lo que publicamos corresponde al stock que tenemos actualmente
            </div>
          </div>
        </div>
        <!-- PREGUNTA 7 -->
        <div class="card">
          <div class="card-header" id="headingSeven">
            <h5 class="mb-0">
              <button class="btn btn-success collapsed" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                ¿Cómo puedo contactarme?
              </button>
            </h5>
          </div>
          <!-- RESPUESTA 7 -->
          <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordion">
            <div class="card-body"> Podés contactarte por mail a patitas@deciudad.com y por teléfono de lunes a viernes de 9 a 20 hs al 0810-220-8383 (vete)
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

@endsection
{{-- Cuando sabemos que lo que vamos a mandar al yield() es contenido real html, estamos obligados a pasarlo de esta manera --}}
