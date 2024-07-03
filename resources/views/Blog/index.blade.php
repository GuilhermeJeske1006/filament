@component('index')

    @component('components.bannerInternal', ['title' => 'Blogs'])@endcomponent
    

    <div class="section">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-6 text-center mx-auto">
              <h2 class="font-weight-bold text-primary heading">
                Nossas Publicações
              </h2>
              <p class="text-primary ">Acompanhe as nossas publicações</p>
            </div>
          </div>
        </div>
      </div>
  
      <div class="section section-properties">
        <div class="container">
          <div class="row">
            @forEach($blogs as $blog)
                @component('Blog.suport.card', ['blog' => $blog])@endcomponent
            @endforEach
          </div>
          <div class="row align-items-center py-5">
            <div class="col-lg-3"></div>
            <div class="col-lg-6 text-center">
                {{ $blogs->links('') }}
              {{-- <div class="custom-pagination">
                <a href="#">1</a>
                <a href="#" class="active">2</a>
                <a href="#">3</a>
                <a href="#">4</a>
                <a href="#">5</a>
              </div> --}}
            </div>
          </div>
        </div>
      </div>
@endcomponent