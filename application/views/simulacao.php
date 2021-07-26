<!-- Passo 1 chamado via JavaScript-->
<div class="info_ctt container-fluid simulacao mt-5" id="passo_01">
  <div class="container mt-5">
    <div class="text-center">
      <h4 class="position-center" style="color: #f3a712;">Para fazer a simulação faça os seguintes passos</h4>
    </div>
    <div class="row justify-content-center">
      <div class="col-md-4 col-sm-6 col-6 my-auto gif">
        <img src="<?php echo base_url(); ?>public/assets/img/fgts/download.gif" class="img-fluid gif-fgts" alt="Fazendo download do aplicativo FGTS">
      </div>
      <div class="col-md-5 col-sm-6 col-6 pt-4 passo my-auto">
        <h4 style="color: #f3a712;">Baixando aplicativo 1/5</h4>
        <ul>
          <li> Faça Download do aplicativo</li>
          <li> Entre no aplicativo e faça o login com CPF e Senha</li>
          <li> Caso não tenha cadastro clique em cadastre-se</li>
        </ul>
        <a class="btn_simulacao btn btn-primary" href="#passo_02">Continuar</a>
      </div>
    </div>
  </div>
</div>
<!-- Passo 2 -->
<div class="info_ctt container-fluid simulacao" id="passo_02">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-5 col-sm-6 col-6 pt-4 passo my-auto" data-aos="fade-right">
        <h4 style="color: #f3a712;">Optando pelo saque aniverário 2/5</h4>
        <ul>
          <li> Clique em Saque Aniversário do FGTS</li>
          <li> Leia os termos</li>
          <li> Clique em Optar pelo saque Aniversário</li>
          <li> Leia atentamente a mensagem e clique em sim</li>
        </ul>
        <a class="btn_simulacao btn btn-primary" href="#passo_03">Continuar</a>
      </div>
      <div class="col-md-4 col-sm-6 col-6 my-auto gif" data-aos="fade-left">
        <img src="<?php echo base_url(); ?>public/assets/img/fgts/aderir-saque.gif" class="img-fluid gif-fgts" alt="Aderindo saque">
      </div>
    </div>
  </div>
</div>
<!-- Passo 3 -->
<div class="info_ctt container-fluid simulacao" id="passo_03">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-4 col-sm-6 col-6 my-auto gif" data-aos="fade-right">
        <img src="<?php echo base_url(); ?>public/assets/img/fgts/autoriza-banco.gif" class="img-fluid gif-fgts" alt="Autorizando bancos a consultarem">
      </div>
      <div class="col-md-5 col-sm-6 col-6 pt-4 passo my-auto" data-aos="fade-left">
        <h4 style="color: #f3a712;">Altorizando bancos 3/5</h4>
        <ul>
          <li> Na tela inicial clique em autorizar bancos a consultarem seu FGTS</li>
          <li> Selecione o Empréstimo Saque Aniversário</li>
          <li> Aceite os termos e clique em Continuar</li>
        </ul>
        <a class="btn_simulacao btn btn-primary" href="#passo_04">Continuar</a>
      </div>
    </div>
  </div>
</div>
<!-- Passo 4 -->
<div class="info_ctt container-fluid simulacao" id="passo_04">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-5 col-sm-6 col-6 pt-4 passo my-auto" data-aos="fade-right">
        <h4 style="color: #f3a712;">Adicionando banco Safra 4/5</h4>
        <ul>
          <li> Continuando o processo anterior</li>
          <li> Clique em Adicionar Instituição</li>
          <li> Digite "Safra"</li>
          <li> Selecione o banco Safra</li>
        </ul>
        <a class="btn_simulacao btn btn-primary" href="#passo_05">Continuar</a>
      </div>
      <div class="col-md-4 col-sm-6 col-6 my-auto gif" data-aos="fade-left">
        <img src="<?php echo base_url(); ?>public/assets/img/fgts/safra.gif" class="img-fluid gif-fgts" alt="Adicionando banco Safra">
      </div>
    </div>
  </div>
</div>
<!-- Passo 5 -->
<div class="info_ctt container-fluid simulacao" id="passo_05">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-4 col-sm-6 col-6 my-auto gif" data-aos="fade-right">
        <img src="<?php echo base_url(); ?>public/assets/img/fgts/finale.gif" class="img-fluid gif-fgts" alt="Finalizando a adesão">
      </div>
      <div class="col-md-5 col-sm-6 col-6 pt-4 passo my-auto" data-aos="fade-left">
        <h4 style="color: #f3a712;">Finalizando adesão 5/5</h4>
        <ul>
          <li> Clique em Finalizar Seleção</li>
          <li> Clique em Sim</li>
          <li> Prontinho, agora é conosco, clique no botão abaixo para continuar a sua adesão ao saque aniversário</li>
        </ul>
     <!--   <button type="button" class="btn_simulacao btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Solicitar empréstimo</button> --->
     <a class="btn_simulacao btn btn-primary" href="https://api.whatsapp.com/send?phone=551236005816&text=Ol%C3%A1!" target="_blank">Solicitar Empréstimo</a>  
    </div>
    </div>
  </div>
</div>
<!-- Modal com formulário --->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Enviar simulação</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Recipient:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Message:</label>
            <textarea class="form-control" id="message-text"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Send message</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal com formulário --->