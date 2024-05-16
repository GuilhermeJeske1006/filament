@component('index')

<div class="hero">
    @component('Home.support.banner')@endcomponent
    @component('Home.support.bodyHome')@endcomponent
    @component('Home.support.peoples')@endcomponent

    <div class="section">
        <div class="container">
          <div class="row justify-content-center text-center mb-5">
            <div class="col-lg-5">
              <h2 class="font-weight-bold heading text-primary mb-4">
                Entre em contato conosco
              </h2>
              <p class="text-black-50">
                Suas sugestões e reclamações serão recebidas por nossos
              gestores e respondidas com brevidade:
              </p>
            </div>
          </div>
          <div class="row d-flex align-content-center justify-content-center">
            @component('Home.support.contact')@endcomponent

          </div>
        </div>
      </div>
 </div>
      
@endcomponent