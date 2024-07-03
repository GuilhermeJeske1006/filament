<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
    <div class="property-item mb-30">
      <a href="property-single.html" class="img">
        <img src="{{ asset('storage/'.$blog->image) }}" alt="Image" class="img-fluid" />
      </a>

      <div class="property-content">
        <div>
          
          <span class="city d-block mb-3">{{ $blog->title }} </span>

          <div class="specs d-flex mb-4">
            <span class="d-block mb-2 text-black-50"
            > {{ $blog->subtitle }} </span>
          </div>

          <a
            href="{{ route('blog.show', ['blog' => $blog]) }}"
            class="btn btn-primary py-2 px-3"
            >Ver Detalhes</a
          >
        </div>
      </div>
    </div>
    <!-- .item -->
  </div>