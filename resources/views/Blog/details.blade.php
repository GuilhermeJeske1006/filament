@component('index')

    @component('components.bannerInternal', ['title' => $blog->title])@endcomponent
    

    <div class="section">
        <div class="container">
          <div class="row justify-content-between">
            <div class="col-lg-7">
              <div class="img-property-slide-wrap">
                <div class="img-property-slide">
                  <img src=" {{ $blog->image }} " alt="Image" class="img-fluid" />
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <h2 class="heading text-primary"> {{ $blog->title }} </h2>
              <p class="meta"> {{ $blog->subtitle }} </p>
              <p class="text-black-50">
                {!! $blog->description !!}
              </p>
              
{{--   
              <div class="d-block agent-box p-5">
                <div class="img mb-4">
                  <img
                    src="images/person_2-min.jpg"
                    alt="Image"
                    class="img-fluid"
                  />
                </div>
                <div class="text">
                  <h3 class="mb-0">Alicia Huston</h3>
                  <div class="meta mb-3">Real Estate</div>
                  <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Ratione laborum quo quos omnis sed magnam id ducimus saepe
                  </p>
                  <ul class="list-unstyled social dark-hover d-flex">
                    <li class="me-1">
                      <a href="#"><span class="icon-instagram"></span></a>
                    </li>
                    <li class="me-1">
                      <a href="#"><span class="icon-twitter"></span></a>
                    </li>
                    <li class="me-1">
                      <a href="#"><span class="icon-facebook"></span></a>
                    </li>
                    <li class="me-1">
                      <a href="#"><span class="icon-linkedin"></span></a>
                    </li>
                  </ul>
                </div>
              </div> --}}
            </div>
          </div>
        </div>
      </div>
      
@endcomponent