<div>
    <section class="slider mt-4">
		<div class="container-fluid">
			<div class="row no-gutters">
				<div class="col-lg-12 col-sm-12 col-md-12 slider-wrap">
                    @foreach ($banner as $item)
                        
					<div class="slider-item">
						<div class="slider-item-content">
							<div class="post-thumb mb-4">
								<a href="blog-single.html">
									<img src="{{ asset('storage/' . $item->imagem) }}" alt="" class="img-fluid">
								</a>
							</div>

							<div class="slider-post-content">
								<span class="cat-name text-color font-sm font-extra text-uppercase letter-spacing">Lifestyle</span>
								<h3 class="post-title mt-1"><a href="blog-single.html">{{ $item->titulo }}</a></h3>
								<span class=" text-muted  text-capitalize">{{ App\Helpers\Helper::formatDate($item->created_at) }}</span>
							</div>
						</div>
					</div>
                    @endforeach

					
				</div>
			</div>
		</div>
	</section></div>
