@component('index')

@component('components.bannerInternal', ['title' => 'Contato'])@endcomponent
    
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
          <div class="row">
            <div
              class="col-lg-4 mb-5 mb-lg-0"
              data-aos="fade-up"
              data-aos-delay="100"
            >
              <div class="contact-info">
                <div class="address mt-2">
                  <i class="icon-room"></i>
                  <h4 class="mb-2">Localização:</h4>
                  <p>
                    4º Avenida, nº 1393 - Sala 101 -<br />
                    Balneário Camboriú,
                  </p>
                </div>
  
                {{-- <div class="open-hours mt-4">
                  <i class="icon-clock-o"></i>
                  <h4 class="mb-2">Open Hours:</h4>
                  <p>
                    Sunday-Friday:<br />
                    11:00 AM - 2300 PM
                  </p>
                </div> --}}
  
                <div class="email mt-4">
                  <i class="icon-envelope"></i>
                  <h4 class="mb-2">Email:</h4>
                  <p>info@Untree.co</p>
                </div>
  
                <div class="phone mt-4">
                  <i class="icon-phone"></i>
                  <h4 class="mb-2">Telefones:</h4>
                  <p> (47) 3367-1136 | (47) 99794-6232 </p>
                </div>
              </div>
            </div>
            @component('Home.support.contact')@endcomponent

          </div>
        </div>
      </div>
      
@endcomponent