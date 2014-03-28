<?php  
  //require_once('session_base.php');
  include_once('../config/template_function.php'); 
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>My-Note - Home</title>
    
    <?php include('../header.php'); ?> 
    <link href="../public/css/profile.css" rel="stylesheet">

  </head>
  <body class="cbp-spmenu-push">
    <?php include('../menu.php'); ?>
      <div class="container">
        <div class="row profile-display" style="margin: 0 0 20px">
          <div class="col-md-12" style="padding:0;">
            <div class="panel panel-cover" style="border-radius:0 0 4px 4px;">
                <img class="pic img-circle" src="http://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/twDq00QDud4/s120-c/photo.jpg" alt="...">
                <div class="name"><small>Apple K, India</small></div>
                <a href="#" class="btn btn-xs btn-primary pull-right" style="margin:10px;position: absolute;"><span class="glyphicon glyphicon-picture"></span> Change cover</a>

                <button type="button" class="btn btn-xs btn-labeled btn-default pull-left" style="margin:160px 10px;position: absolute;">
                    <span class="btn-label"><span class="glyphicon glyphicon-user"></span></span>Pedir em Amizade</button>
                <button type="button" class="btn btn-xs btn-labeled btn-default pull-left" style="margin:120px 10px;position: absolute;" data-toggle="modal" data-target=".bs-example-modal-lg">
                    <span class="btn-label"><span class="glyphicon glyphicon-comment"></span></span>Enviar Mensagem</button>
            </div>        
          <br>
          <ul class="nav nav-tabs" id="myTab" style="padding-left: 20px;">
            <li class="active"><a href="#friend" data-toggle="tab"><span class="glyphicon glyphicon-user"></span> Amizade</a></li>
            <li><a href="#sent" data-toggle="tab"><i class="fa fa-reply-all"></i> Social</a></li>
            <li><a href="#assignment" data-toggle="tab"><span class="glyphicon glyphicon-star"></span> Classificar</a></li>
            <li><a href="#about" data-toggle="tab"><span class="glyphicon glyphicon-star"></span> Caracteristicas</a></li>
          </ul>
          
          <div class="tab-content" style="padding: 10px 30px;">
            <div class="tab-pane active" id="friend">
              <a type="button" data-toggle="collapse" data-target="#a1">
                  <div class="btn-toolbar well well-sm" role="toolbar"  style="margin:0px;">
                    <div class="btn-group"><input type="checkbox"></div>
                    <div class="btn-group col-md-3">Admin Kumar</div>
                    <div class="btn-group col-md-8">
                      <b>Hi Check this new Bootstrap plugin</b> 
                      <div class="pull-right">
                        <i class="glyphicon glyphicon-time"></i> 12:10 PM 
                        <button class="btn btn-primary btn-xs" data-toggle="modal" data-target=".bs-example-modal-lg">
                          <i class="fa fa-share-square-o"> Reply</i>
                        </button>
                      </div>
                    </div>
                  </div>
              </a>
              <div id="a1" class="collapse out well">This is the message body1</div>
              <br>
              <button class="btn btn-primary btn-xs"><i class="fa fa-check-square-o"></i> Delete Checked Item's</button>
            </div>
             
            <div class="tab-pane" id="sent" style="text-align: center;">
                <a data-toggle="tooltip" data-placement="bottom" title="Ver perfil do Twitter"  class="btn btn-social-icon btn-lg btn-twitter" style="margin: 30px 60px;"><i class="fa fa-twitter fa-2x"></i></a>
                <a data-toggle="tooltip" data-placement="bottom" title="Ver perfil do Facebook"  class="btn btn-social-icon btn-lg btn-facebook" style="margin: 30px 60px;"><i class="fa fa-facebook fa-2x"></i></a>
                <a data-toggle="tooltip" data-placement="bottom" title="Ver perfil do Instagram"  class="btn btn-social-icon btn-lg btn-instagram" style="margin: 30px 60px;"><i class="fa fa-instagram fa-2x"></i></a>
                <a data-toggle="tooltip" data-placement="bottom" title="Ver perfil do Google+"  class="btn btn-social-icon btn-lg btn-google-plus" style="margin: 30px 60px;"><i class="fa fa-google-plus fa-2x"></i></a>
            </div>

           <div class="tab-pane" id="assignment">
             <div class="media">
              <div class="pull-right well" style="text-align: center;margin: 13px;">
                Avaliação de Personalidade
                <div class="info_star_value">
                  <label>4</label>/10
                </div>
                <div class="starrr pull-right star_gold" data-rating="4"></div>
              </div>
              <div class="pull-left well" style="text-align: center;margin: 13px;">
                Avaliação Corporal
                <div class="info_star_value">
                  <label>4</label>/10
                </div>
                <div class="starrr pull-left star_gold" data-rating="4"></div>
              </div>
              <div class="well star_well">
                Avaliação Geral
                <div class="info_star_value">
                  <label>4</label>/10
                </div>
                <div class="starrr star_gold_last" data-rating="4"></div>
              </div>
            </div>
          </div>

            <div class="tab-pane" id="about">
              <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <div class="panel panel-success" style="height: 310px;background: #D5D5D5;">
                  <div class="panel-heading">
                      <span class="glyphicon glyphicon-plus"></span> Caracteristicas Positivas
                  </div>
                  <div class="panel-body" style="overflow-y: auto;max-height: 206px;">
                    <ul class="list-group">
                      <li class="list-group-item">
                        <span class="badge">14%</span>
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Verdade!"><span class="glyphicon glyphicon-ok" style="font-size:15px;color:green"></span></a>
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Mentira!"><span class="glyphicon glyphicon-remove" style="font-size:15px;color:red"></span></a>
                        Cras justo odio
                      </li>
                      <li class="list-group-item">
                        <span class="badge">14%</span>
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Verdade!"><span class="glyphicon glyphicon-ok" style="font-size:15px;color:green"></span></a>
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Mentira!"><span class="glyphicon glyphicon-remove" style="font-size:15px;color:red"></span></a>
                        Cras justo odio
                      </li>
                      <li class="list-group-item">
                        <span class="badge">14%</span>
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Verdade!"><span class="glyphicon glyphicon-ok" style="font-size:15px;color:green"></span></a>
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Mentira!"><span class="glyphicon glyphicon-remove" style="font-size:15px;color:red"></span></a>
                        Cras justo odio
                      </li>
                      <li class="list-group-item">
                        <span class="badge">14%</span>
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Verdade!"><span class="glyphicon glyphicon-ok" style="font-size:15px;color:green"></span></a>
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Mentira!"><span class="glyphicon glyphicon-remove" style="font-size:15px;color:red"></span></a>
                        Cras justo odio
                      </li>
                    </ul>
                  </div>
                  <div class="panel-footer">
                      <div class="input-group">
                          <input id="btn-input" type="text" class="form-control input-sm" placeholder="Type your message here..." />
                          <span class="input-group-btn">
                              <button class="btn btn-primary btn-sm" id="btn-chat">Adicionar!</button>
                          </span>
                      </div>
                    </div>
                </div>
              </div>
              <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <div class="panel panel-warning" style="height: 310px;background: #D5D5D5;">
                  <div class="panel-heading">
                      <span class="glyphicon glyphicon-minus"></span> Caracteristicas Negativas
                  </div>
                  <div class="panel-body" style="overflow-y: auto;max-height: 206px;">
                    <ul class="list-group">
                      <li class="list-group-item">
                        <span class="badge">14%</span>
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Verdade!"><span class="glyphicon glyphicon-ok" style="font-size:15px;color:green"></span></a>
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Mentira!"><span class="glyphicon glyphicon-remove" style="font-size:15px;color:red"></span></a>
                        Cras justo odio
                      </li>
                      <li class="list-group-item">
                        <span class="badge">14%</span>
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Verdade!"><span class="glyphicon glyphicon-ok" style="font-size:15px;color:green"></span></a>
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Mentira!"><span class="glyphicon glyphicon-remove" style="font-size:15px;color:red"></span></a>
                        Cras justo odio
                      </li>
                      <li class="list-group-item">
                        <span class="badge">14%</span>
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Verdade!"><span class="glyphicon glyphicon-ok" style="font-size:15px;color:green"></span></a>
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Mentira!"><span class="glyphicon glyphicon-remove" style="font-size:15px;color:red"></span></a>
                        Cras justo odio
                      </li>
                      <li class="list-group-item">
                        <span class="badge">14%</span>
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Verdade!"><span class="glyphicon glyphicon-ok" style="font-size:15px;color:green"></span></a>
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Mentira!"><span class="glyphicon glyphicon-remove" style="font-size:15px;color:red"></span></a>
                        Cras justo odio
                      </li>
                      <li class="list-group-item">
                        <span class="badge">14%</span>
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Verdade!"><span class="glyphicon glyphicon-ok" style="font-size:15px;color:green"></span></a>
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Mentira!"><span class="glyphicon glyphicon-remove" style="font-size:15px;color:red"></span></a>
                        Cras justo odio
                      </li>
                      <li class="list-group-item">
                        <span class="badge">14%</span>
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Verdade!"><span class="glyphicon glyphicon-ok" style="font-size:15px;color:green"></span></a>
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Mentira!"><span class="glyphicon glyphicon-remove" style="font-size:15px;color:red"></span></a>
                        Cras justo odio
                      </li>
                      <li class="list-group-item">
                        <span class="badge">14%</span>
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Verdade!"><span class="glyphicon glyphicon-ok" style="font-size:15px;color:green"></span></a>
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Mentira!"><span class="glyphicon glyphicon-remove" style="font-size:15px;color:red"></span></a>
                        Cras justo odio
                      </li>
                    </ul>
                  </div>
                  <div class="panel-footer">
                      <div class="input-group">
                          <input id="btn-input" type="text" class="form-control input-sm" placeholder="Type your message here..." />
                          <span class="input-group-btn">
                              <button class="btn btn-primary btn-sm" id="btn-chat">Adicionar!</button>
                          </span>
                      </div>
                    </div>
                </div>
              </div>
            </div>
        </div>
     </div>
  </div>


    <ul class="timeline">
        <li>
          <div class="timeline-badge primary"><a><i class="glyphicon glyphicon-record" rel="tooltip" title="11 hours ago via Twitter" id=""></i></a></div>
          <div class="timeline-panel">
            <div class="timeline-body">
              <p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, nisi eros vermeio, in elementis mé pra quem é amistosis quis leo. Manduma pindureta quium dia nois paga. Sapien in monti palavris qui num significa nadis i pareci latim. Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis.</p>
              
            </div>
            
            <div class="timeline-footer">
                <a><i class="glyphicon glyphicon-thumbs-up"></i></a>
                <a><i class="glyphicon glyphicon-share"></i></a>
                <a class="pull-right">Continuar Lendo</a>
            </div>
          </div>
        </li>
        
        <li  class="timeline-inverted">
          <div class="timeline-badge primary"><a><i class="glyphicon glyphicon-record invert" rel="tooltip" title="11 hours ago via Twitter" id=""></i></a></div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <img class="img-responsive" src="http://lorempixel.com/1600/500/sports/2" />
              
            </div>
            <div class="timeline-body">
              <p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, nisi eros vermeio, in elementis mé pra quem é amistosis quis leo. Manduma pindureta quium dia nois paga. Sapien in monti palavris qui num significa nadis i pareci latim. Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis.</p>
             
            </div>
            
            <div class="timeline-footer">
                <a><i class="glyphicon glyphicon-thumbs-up"></i></a>
                <a><i class="glyphicon glyphicon-share"></i></a>
                <a class="pull-right">Continuar Lendo</a>
            </div>
          </div>
        </li>
        <li>
          <div class="timeline-badge primary"><a><i class="glyphicon glyphicon-record" rel="tooltip" title="11 hours ago via Twitter" id=""></i></a></div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <img class="img-responsive" src="http://lorempixel.com/1600/500/sports/2" />
              
            </div>
            <div class="timeline-body">
              <p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, nisi eros vermeio, in elementis mé pra quem é amistosis quis leo. Manduma pindureta quium dia nois paga. Sapien in monti palavris qui num significa nadis i pareci latim. Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis.</p>
              
            </div>
            
            <div class="timeline-footer">
                <a><i class="glyphicon glyphicon-thumbs-up"></i></a>
                <a><i class="glyphicon glyphicon-share"></i></a>
                <a class="pull-right">Continuar Lendo</a>
            </div>
          </div>
        </li>
        
        <li  class="timeline-inverted">
          <div class="timeline-badge primary"><a><i class="glyphicon glyphicon-record invert" rel="tooltip" title="11 hours ago via Twitter" id=""></i></a></div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <img class="img-responsive" src="http://lorempixel.com/1600/500/sports/2" />
              
            </div>
            <div class="timeline-body">
              <p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, nisi eros vermeio, in elementis mé pra quem é amistosis quis leo. Manduma pindureta quium dia nois paga. Sapien in monti palavris qui num significa nadis i pareci latim. Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis.</p>
              
            </div>
            
            <div class="timeline-footer">
                <a><i class="glyphicon glyphicon-thumbs-up"></i></a>
                <a><i class="glyphicon glyphicon-share"></i></a>
                <a class="pull-right">Continuar Lendo</a>
            </div>
          </div>
        </li>
        <li>
          <div class="timeline-badge primary"><a><i class="glyphicon glyphicon-record" rel="tooltip" title="11 hours ago via Twitter" id=""></i></a></div>
          <div class="timeline-panel">
            <div class="timeline-body">
              <p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, nisi eros vermeio, in elementis mé pra quem é amistosis quis leo. Manduma pindureta quium dia nois paga. Sapien in monti palavris qui num significa nadis i pareci latim. Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis.</p>
              
            </div>
            
            <div class="timeline-footer">
                <a><i class="glyphicon glyphicon-thumbs-up"></i></a>
                <a><i class="glyphicon glyphicon-share"></i></a>
                <a class="pull-right">Continuar Lendo</a>
            </div>
          </div>
        </li>
        
        <li  class="timeline-inverted">
          <div class="timeline-badge primary"><a><i class="glyphicon glyphicon-record invert" rel="tooltip" title="11 hours ago via Twitter" id=""></i></a></div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <img class="img-responsive" src="http://lorempixel.com/1600/500/sports/2" />
              
            </div>
            <div class="timeline-body">
              <p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, nisi eros vermeio, in elementis mé pra quem é amistosis quis leo. Manduma pindureta quium dia nois paga. Sapien in monti palavris qui num significa nadis i pareci latim. Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis.</p>
              
            </div>
            
            <div class="timeline-footer primary">
                <a><i class="glyphicon glyphicon-thumbs-up"></i></a>
                <a><i class="glyphicon glyphicon-share"></i></a>
                <a class="pull-right">Continuar Lendo</a>
            </div>
          </div>
        </li>
        <li>
          <div class="timeline-badge primary"><a><i class="glyphicon glyphicon-record" rel="tooltip" title="11 hours ago via Twitter" id=""></i></a></div>
          <div class="timeline-panel">
            <div class="timeline-body">
              <p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, nisi eros vermeio, in elementis mé pra quem é amistosis quis leo. Manduma pindureta quium dia nois paga. Sapien in monti palavris qui num significa nadis i pareci latim. Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis.</p>
              
            </div>
            
            <div class="timeline-footer">
                <a><i class="glyphicon glyphicon-thumbs-up"></i></a>
                <a><i class="glyphicon glyphicon-share"></i></a>
                <a class="pull-right">Continuar Lendo</a>
            </div>
          </div>
        </li>
        <li>
          <div class="timeline-badge primary"><a><i class="glyphicon glyphicon-record" rel="tooltip" title="11 hours ago via Twitter" id=""></i></a></div>
          <div class="timeline-panel">
            <div class="timeline-body">
              <p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, nisi eros vermeio, in elementis mé pra quem é amistosis quis leo. Manduma pindureta quium dia nois paga. Sapien in monti palavris qui num significa nadis i pareci latim. Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis.</p>
              
            </div>
            
            <div class="timeline-footer">
                <a><i class="glyphicon glyphicon-thumbs-up"></i></a>
                <a><i class="glyphicon glyphicon-share"></i></a>
                <a class="pull-right">Continuar Lendo</a>
            </div>
          </div>
        </li>
        <li class="clearfix" style="float: none;"></li>
        
        
    </ul>
</div>

    <div class="posted-by">
      <?php include('../footer.php'); ?>
    </div>


<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content"><br/><br/>
            <form class="form-horizontal">
            <fieldset>
            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-2 control-label" for="body">Body :</label>  
              <div class="col-md-8">
              <input id="body" name="body" type="text" placeholder="Message Body" class="form-control input-md">
                
              </div>
            </div>
            
            <!-- Textarea -->
            <div class="form-group">
              <label class="col-md-2 control-label" for="message">Message :</label>
              <div class="col-md-8">                     
                <textarea class="form-control" id="message" name="message"></textarea>
              </div>
            </div>
            
            <!-- Button -->
            <div class="form-group">
              <label class="col-md-2 control-label" for="send"></label>
              <div class="col-md-8">
                <button id="send" name="send" class="btn btn-primary"><span class="glyphicon glyphicon-send"></span> Send</button>
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span>Cancel</button>
              </div>
            </div>
            
            </fieldset>
            </form>

    </div>
  </div>
</div>
<script>  $(function () {
    $('#myTab a:last').tab('show')
  })
  </script>
    <?php include('../modal.php'); ?>
  </body>
</html>