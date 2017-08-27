<?php require_once('config.php');?>
<?php require_once(ABSPATH . 'functions/library.php');?>
<?php  require_once(ABSPATH . 'functions/front-controller.php');?>

<?php include(ABSPATH . 'templates/head.php');?>
<?php include(ABSPATH . 'templates/header.php');?>

<div id="contactar" class="container-fluid">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <h2 class="titulo_paginas">Contacta con nosotros</h2>
            <hr style="margin-top: 0%;">
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12">
          <br><br>
            <div class="loction-info">
              <p style="color: #186A3B"><i class="fa fa-envelope-o fa-fw pull-left fa-2x"></i>belen@doma2.com</p>
              <p style="color: #186A3B"><i class="fa fa-phone fa-fw pull-left fa-2x"></i>+34 629 888 869 (Belén)</p>
              <p style="color: #186A3B"><i class="fa fa-phone fa-fw pull-left fa-2x"></i>+34 653 106 802 (Alejandro)</p>
            </div>
          </div>
          <div class="col-md-8 col-sm-6 col-xs-12">
            <div class="contact-form">
                <?php 
                session_start();
                if($_SESSION['msg'] == 'ok'):?>
                <div id="sendmessage">
                  <p style="color: green; margin-bottom: 0%;">Tu mensaje ha sido enviado con éxito. Muchas gracias por ponerte en contacto con nosotros</p>
                </div>
                <?php endif; ?>
                <?php if($_SESSION['msg'] == 'error'):?>
                <div id="errormessage">
                  <p style="color: red; margin-bottom: 0%;">Complete todos los campos, por favor</p>
                </div>
                <?php 
                  endif; 
                  if($_SESSION['msg'] == 'ok'||$_SESSION['msg'] == 'error'){
                    $_SESSION ['msg'] = 'no_msg';
                  }

                 ?>
                <form action="functions/send_form_email.php" method="post" role="form" class="contactForm">
                    <div class="col-md-6 padding-right-zero">
                        <div class="form-group">
                            <input type="text" name="nombre" class="form-control" id="name" placeholder="Nombre" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                            <div class="validation"></div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Email" data-rule="email" data-msg="Please enter a valid email" />
                            <div class="validation"></div>
                        </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                            <textarea class="form-control" name="mensaje" rows="8" data-rule="required" data-msg="Please write something for us" placeholder="Mensaje"></textarea>
                            <div class="validation"></div>
                        </div>
                      <button type="submit" class="btnPpal btn btn-lg btn-block">ENVIAR</button>
                    </div>
                </form>
              
            </div>
          </div>
        </div>
      </div>
</div>


<?php include(ABSPATH . 'templates/footer.php'); ?>