@component('index')

@component('components.bannerInternal', ['title' => 'Orçamento'])@endcomponent
    
<div class="section">
    <div class="container">
      <div class="row justify-content-center text-center mb-5">
        <div class="col-lg-5">
          <h2 class="font-weight-bold heading text-primary mb-4">
            Qual serviço interessou?
          </h2>
          <p class="text-black-50">
            Informe rapidamente algumas particularidades do seu condomínio.
Faremos uma proposta personalizada de acordo com suas necessidades
          </p>
        </div>
      </div>
      <div class="row d-flex align-content-center justify-content-center">
        <div class="col-lg-10" data-aos="fade-up" data-aos-delay="200">
            <form action="{{ route('budget.send') }}" method="POST">
                @csrf
                <div class="row">
                    <p class="text-black-50 mb-3">
                        Quantas unidades Residenciais ou Comerciais tem o Condomínio ?
                      </p>
                    <div class="col-4 mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="assessoria_condomial" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Assessoria Condominal
                            </label>
                          </div>
                        </div>
                    <div class="col-4 mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="servicos_contabeis" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Serviços Contábeis Empresariais
                            </label>
                          </div>
                    </div>

                    <div class="col-4 mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" name="sindico_profissional" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Síndico Profissional e Síndico Preposto
                            </label>
                          </div>
                    </div>
                    <div class="col-12 mb-3">
                        <p class="text-black-50 mb-3">
                            Quantas unidades Residenciais ou Comerciais tem o Condomínio ?
                          </p>

                        <input type="text" name="name" class="form-control" name="qtd_unidade_condominio" placeholder="Quantidade de Unidades" />
                    </div>
                    <p class="text-black-50 mb-3">
                        Funcionários Próprios?
                      </p>
                    <div class="col-6 mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="fun_proprio_sim" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                              Sim
                            </label>
                          </div>
                        </div>
                    <div class="col-6 mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="fun_proprio_nao" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                              Não
                            </label>
                          </div>
                    </div>
                    
                    <div class="col-12 mb-3">
                        <input type="text" name="text" class="form-control" name="qtd_funcionario_proprio" placeholder="Informe o número de funcionários" />
                    </div>

                    <p class="text-black-50 mb-3">
                        Funcionários Terceirizados?
                      </p>
                    <div class="col-6 mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="fun_terceiro_sim" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                              Sim
                            </label>
                          </div>
                        </div>
                    <div class="col-6 mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" name="fun_terceiro_sim" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                              Não
                            </label>
                          </div>
                    </div>
                    
                    <div class="col-12 mb-3">
                        <input type="text" name="text" class="form-control" name="qtd_funcionario_terceiro" placeholder="Informe o número de funcionários" />
                    </div>

                    <p class="text-black-50 mb-3">
                        Você no Condomínio é?
                    </p>
                    <div class="col-4 mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="cond_sindico" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Síndico
                            </label>
                          </div>
                        </div>
                    <div class="col-4 mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="cond_conselheiro" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Conselheiro
                            </label>
                          </div>
                    </div>

                    <div class="col-4 mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="cond_morador" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Morador
                            </label>
                          </div>
                    </div>

                    <p class="text-black-50 mb-3">
                        Dados do Condomínio
                      </p>

                    <div class="col-6 mb-3">
                        <input type="text" class="form-control" name="nome_condominio" required placeholder="Nome do Condominío"  />
                    </div>
                    <div class="col-6 mb-3">
                        <input type="text" class="form-control" name="nome_cidade" placeholder="Nome da Cidade"  />
                    </div>

                    <p class="text-black-50 mb-3">
                        Dados de Contato
                      </p>
                    <div class="col-12 mb-3">
                        <input type="text" class="form-control" placeholder="Seu Nome" name="nome" />
                    </div>
                    <div class="col-6 mb-3">
                        <input type="phone" class="form-control" placeholder="Telefone" name="telefone" />
                    </div>
                    <div class="col-6 mb-3">
                        <input type="email" class="form-control" placeholder="Email" name="email" />
                    </div>
        
                    <div class="col-12 mt-3">
                        <input type="submit" value="Enviar Mensagem" class="btn btn-primary" />
                    </div>
                </div>
            </form>
        </div>
        
      </div>
    </div>
  </div>
      
@endcomponent