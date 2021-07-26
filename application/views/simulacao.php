<!-- Passo 1 chamado via JavaScript-->
<div class="info_ctt container-fluid simulacao mt-5" id="passo_01">
  <div class="container mt-5">
    <div class="text-center">
      <h4 class="position-center" style="color: #f3a712;">Para fazer a simulação faça os seguintes passos</h4>
    </div>
    <div class="row justify-content-center">
      <div class="col-md-4 col-sm-6 col-6 my-auto gif">
        <img src="<?php echo base_url(); ?>public/assets/img/fgts/download-login.gif" class="img-fluid gif-fgts" alt="Como contratar">
      </div>
      <div class="col-md-5 col-sm-6 col-6 pt-4 passo my-auto">
        <h4 style="color: #f3a712;">Passo 1/5</h4>
        <ul>
          <li> Faça Download do aplicativo</li>
          <li> Entre no aplicativo e faça o login com CPF e Senha</li>
          <li> Caso não tenha cadastro clique em cadastre-se</li>
        </ul>
        <button class="btn_simulacao btn btn-primary" id="btn_passo_02" href="#passo_02">Ir para o passo 2</button>
      </div>
    </div>
  </div>
</div>
<!-- Passo 2 -->
<div class="info_ctt container-fluid simulacao" id="passo_02">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-5 col-sm-6 col-6 pt-4 passo my-auto">
        <h4 style="color: #f3a712;">Passo 2/5</h4>
        <ul>
          <li> Faça Download do aplicativo</li>
          <li> Entre no aplicativo e faça o login com CPF e Senha</li>
          <li> Caso não tenha cadastro clique em cadastre-se</li>
        </ul>
        <button class="btn_simulacao btn btn-primary" id="btn_passo_03" href="#passo_02">Ir para o passo 3</button>
      </div>
      <div class="col-md-4 col-sm-6 col-6 my-auto gif">
        <img src="<?php echo base_url(); ?>public/assets/img/fgts/download-login.gif" class="img-fluid gif-fgts" alt="Como contratar">
      </div>
    </div>
  </div>
</div>
<!-- Passo 3 -->
<div class="info_ctt container-fluid simulacao" id="passo_03">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-4 col-sm-6 col-6 my-auto gif">
        <img src="<?php echo base_url(); ?>public/assets/img/fgts/download-login.gif" class="img-fluid gif-fgts" alt="Como contratar">
      </div>
      <div class="col-md-5 col-sm-6 col-6 pt-4 passo my-auto">
        <h4 style="color: #f3a712;">Passo 3/5</h4>
        <ul>
          <li> Faça Download do aplicativo</li>
          <li> Entre no aplicativo e faça o login com CPF e Senha</li>
          <li> Caso não tenha cadastro clique em cadastre-se</li>
        </ul>
        <button class="btn_simulacao btn btn-primary" id="btn_passo_04" href="#passo_04">Ir para o passo 2</button>
      </div>
    </div>
  </div>
</div>
<!-- Passo 4 -->
<div class="info_ctt container-fluid simulacao" id="passo_04">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-5 col-sm-6 col-6 pt-4 passo my-auto">
        <h4 style="color: #f3a712;">Passo 4/5</h4>
        <ul>
          <li> Faça Download do aplicativo</li>
          <li> Entre no aplicativo e faça o login com CPF e Senha</li>
          <li> Caso não tenha cadastro clique em cadastre-se</li>
        </ul>
        <button class="btn_simulacao btn btn-primary" id="btn_passo_05" href="#passo_05">Ir para o passo 2</button>
      </div>
      <div class="col-md-4 col-sm-6 col-6 my-auto gif">
        <img src="<?php echo base_url(); ?>public/assets/img/fgts/download-login.gif" class="img-fluid gif-fgts" alt="Como contratar">
      </div>
    </div>
  </div>
</div>
<!-- Passo 5 -->
<div class="info_ctt container-fluid simulacao" id="passo_05">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-4 col-sm-6 col-6 my-auto gif">
        <img src="<?php echo base_url(); ?>public/assets/img/fgts/download-login.gif" class="img-fluid gif-fgts" alt="Como contratar">
      </div>
      <div class="col-md-5 col-sm-6 col-6 pt-4 passo my-auto">
        <h4 style="color: #f3a712;">Passo 5/5</h4>
        <ul>
          <li> Faça Download do aplicativo</li>
          <li> Entre no aplicativo e faça o login com CPF e Senha</li>
          <li> Caso não tenha cadastro clique em cadastre-se</li>
        </ul>
        <button type="button" class="btn_simulacao btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Solicitar empréstimo</button>
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