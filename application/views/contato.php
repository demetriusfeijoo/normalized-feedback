    <section class="main contato" role="main">

      <article class="container">

          <header>
            <h1>Contato</h1>
          </header>

        <?php  

          $feedback = $this -> session -> flashdata('feedback');

          if($feedback['status'] === 'sucesso'){

        ?>

          <div class="alert alert-success" role="alert">Seu contato foi enviado com sucesso.</div>

        <?php }else if($feedback['status'] === 'erro'){ ?>

          <div class="alert alert-danger" role="alert">
          Ops! Ocorreu algum erro ao enviar o seu contato. 
          Por favor, verifique os campos abaixo e tente novamente. 
          Caso o problema persista, você pode estar entrando em contato através desse <a href="mailto:demetrius.feijoo.91@gmail.com" title="Enviar e-mail" hreflang="pt-br" class="alert-link">e-mail</a>.
          </div>

        <?php } ?>

        <?php 

          $validation_errors = $this -> session -> flashdata('validation_errors');

          if( !empty($validation_errors) ) {

        ?>

            <div class="alert alert-danger" role="alert">
              Seu contato, infelizmente, não pôde ser enviado. <br>
              Por favor, verifique os seguintes campos e tente novamente: <br>
              <?php echo $validation_errors; ?>
            </div>

        <?php } ?>

        <?php echo form_open('contato/enviar_fale_conosco', array('class' => 'form-horizontal contato-form', "role" => 'form' )); ?>

          <div class="form-group">
            <label for="nome" class="col-sm-2 control-label">Nome</label>
            <div class="col-sm-10">
              <input type="text" required autofocus class="form-control" id="nome" name="nome" placeholder="Nome" <?php echo set_value('nome'); ?> >
            </div>
          </div>

          <div class="form-group">
            <label for="email" class="col-sm-2 control-label">Email</label>
            <div class="col-sm-10">
              <input type="email" required class="form-control" id="email" name="email" placeholder="Email" <?php echo set_value('email'); ?> >
            </div>
          </div>

          <div class="form-group">
            <label for="assunto" class="col-sm-2 control-label">Assunto</label>
            <div class="col-sm-10">
              <input type="text" required class="form-control" id="assunto" name="assunto" placeholder="Assunto" <?php echo set_value('assunto'); ?> >
            </div>
          </div>

          <div class="form-group">
            <label for="mensagem" class="col-sm-2 control-label">Mensagem</label>
            <div class="col-sm-10">
              <textarea class="form-control" required id="mensagem" name="mensagem" placeholder="Mensagem" rows="3"><?php echo set_value('mensagem'); ?></textarea>
            </div>
          </div>

          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" class="btn btn-default">Enviar</button>
            </div>
          </div>

          <?php echo form_close(); ?>

      </article>

    </section>