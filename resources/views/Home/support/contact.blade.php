<div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">
    <form action="{{ route('home.send') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-6 mb-3">
                <input type="text" name="name" class="form-control" placeholder="Seu nome" required />
            </div>
            <div class="col-6 mb-3">
                <input type="email" name="email" class="form-control" placeholder="Seu Email" required />
            </div>
            <div class="col-12 mb-3">
                <input type="text" class="form-control" placeholder="Telefone" name="phone" />
            </div>
            <div class="col-12 mb-3">
                <textarea name="message" id="" cols="30" rows="7" required class="form-control"
                    placeholder="Mensagem"></textarea>
            </div>

            <div class="col-12">
                <input type="submit" value="Enviar Mensagem" class="btn btn-primary" />
            </div>
        </div>
    </form>
</div>
