<div class="col-lg-3 col-md-6">
    <article class="post-grid mb-5">
        <a class="post-thumb mb-4 d-block" href="/details/{{ $post->id }}" wire:navigate >
            <img src="{{ asset('storage/' . $post->imagem) }}" alt="" class="img-fluid w-100">
        </a>
        <span class="cat-name text-color font-sm font-extra text-uppercase letter-spacing">Experience</span>
        <h3 class="post-title mt-1"><a href="/details/{{ $post->id }}" wire:navigate >{{ $post->titulo }}</a></h3>

        <span class="text-muted letter-spacing text-uppercase font-sm">{{ App\Helpers\Helper::formatDate($post->created_at) }}</span>

    </article>
</div>