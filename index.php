<?php

 $number = (rand(1,6));

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Alavanque seu negócio construindo uma rede de conhecimento e experiência">
    <meta name="author" content="http://bootstraptaste.com">
    <link rel="shortcut icon" href="assets/img/favicon.png">

    <title>Gestão Empresarial - Alavanque seu negócio construindo uma rede de conhecimento e experiência</title>

    <style type="text/css">
      html {
        background: url(assets/img/bgs/<?php echo $number ?>.jpg) no-repeat center center fixed; 
      }
    </style>

    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
	  <link href="assets/css/bootstrap-theme.css" rel="stylesheet">
    <link href="assets/css/animate.css" rel="stylesheet">

    <!-- siimple style -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/js/counter/jquery.classycountdown.min.css" rel="stylesheet">
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

	<div id="wrapper">
		<div class="container">
			<div class="row">
				<div  class="col-sm-12 col-md-12 col-lg-12">
          
              <h1>Gestão <span style="color:#FF5702;">NaPrática</span></h1>
            <div id="conteudo" class="hiddenx">
              <center>
                <span style="font-family: 'trebuchet ms', geneva; color: #ffffff; font-size: 36pt; background-color: #202020; line-height: 53px;"><span style="background-color: #452445;">&nbsp;<span style="color: #ff9900;">PREPARE-SE!</span></span><br><span style="background-color: #361d3d;">&nbsp;SUA CARREIRA NUNCA MAIS SERÁ A MESMA!&nbsp;</span></span>
              </center>
              <center>
                <h2 class="subtitle" style="max-width: 890px;font-size: 30px;line-height: 35px;font-family: 'trebuchet ms', geneva;font-weight: bold;">Encontre as RESPOSTAS de QUEM SABE e tem EXPERIÊNCIA para a ALAVANCAR seu NEGÓCIO e CARREIRA.</h2>
              </center>
              <div id="countdown"></div>
              <form class="form-inline signup" role="form">
                <input type="email" class="form-control email-field" id="inputEmail" placeholder="Insira seu melhor email..." value="">
                <a id="sender-button" href="#" target="_self" class="btn btn-theme botao-cadastrar" style="font-size: 19px;" role="button" onclick="enviarEmail()"> 
                  <span class="fl-button-text" style="text-shadow: 0px 0px 6px #333 !important;">QUERO SER AVISADO</span> 
                </a>
                <!-- <button type="button" class="btn btn-theme botao-cadastrar" onclick="enviarEmail()">QUERO SER AVISADO!</button> -->
              </form>   
          </div>
				</div>
				
			</div>
      <br><br><br>
			<div class="row">
				<div id="timer" class="col-lg-6 col-lg-offset-3 hiddenx">
          <div id="countdown-container"></div>
					<p class="copyright">Copyright &copy; 2015 - <a href="http://bootstraptaste.com">Bootstraptaste.com</a></p>
                        <!-- 
                            All links in the footer should remain intact. 
                            Licenseing information is available at: http://bootstraptaste.com/license/
                            You can buy this theme without footer links online at: http://bootstraptaste.com/buy/?theme=WeBuild
                        -->
				</div>
			</div>		
		</div>
	</div>

  <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/counter/jquery.throttle.js"></script>
  <script src="assets/js/counter/jquery.knob.js"></script>


  <script src="assets/js/counter/jquery.classycountdown.min.js"></script>





	

  <script type="text/javascript">



  $('#countdown-container').ClassyCountdown({
        end: $.now() + 7 * 2 * 60 * 60 * 24,
        labels: true,
        labelsOptions: {
            lang: {
                days: 'DIas',
                hours: 'Horas',
                minutes: 'Minutos',
                seconds: 'Segundos'
            },
            style: 'font-size:0.5em; text-transform:uppercase;'
        },
        style: {
            element: "",
            textResponsive: .5,
            days: {
                gauge: {
                    thickness: .2,
                    bgColor: "rgba(255,255,255,0.2)",
                    fgColor: "rgb(241, 196, 15)"
                },
                textCSS: 'font-family:\'trebuchet ms\'; font-size:25px; font-weight:300; color:rgba(255,255,255,0.7);'
            },
            hours: {
                gauge: {
                    thickness: .2,
                    bgColor: "rgba(255,255,255,0.2)",
                    fgColor: "rgb(241, 196, 15)"
                },
                textCSS: 'font-family:\'trebuchet ms\'; font-size:25px; font-weight:300; color:rgba(255,255,255,0.7);'
            },
            minutes: {
                gauge: {
                    thickness: .2,
                    bgColor: "rgba(255,255,255,0.2)",
                    fgColor: "rgb(241, 196, 15)"
                },
                textCSS: 'font-family:\'trebuchet ms\'; font-size:25px; font-weight:300; color:rgba(255,255,255,0.7);'
            },
            seconds: {
                gauge: {
                    thickness: .2,
                    bgColor: "rgba(255,255,255,0.2)",
                    fgColor: "rgb(241, 196, 15)"
                },
                textCSS: 'font-family:\'trebuchet ms\'; font-size:25px; font-weight:300; color:rgba(255,255,255,0.7);'
            }

        },
        onEndCallback: function() {
            console.log("Time out!");
        }
    });


    enviarEmail = function () {


      if (!validateEmail($('#inputEmail').val())) {
        alert('ERRO: PREENCHA SEU EMAIL');
      } else {
        
        var data = {
          "entry.552400720" : $('#inputEmail').val(),
          "entry.1367424210" : "<?php echo $number ?>",
          "draftResponse" : '[,,"100352644789912212"]',
          "pageHistory" : "0",
          "fvv" : "123",
          "fbzx" : "100352644789912212"
        }

      jQuery.ajax({
                type: 'POST',
                url: 'https://docs.google.com/forms/d/1FrtObeKnelvOV-X2qrM9e3M5a0ES9h2P-PSQvGFbLOI/formResponse',
                crossDomain: true,
                data: data,
                success: function(resposta) {
                   alert("Email salvo com sucesso!");
                   $('#inputEmail').val('')
                },
                error: function(error) {
                    console.log("ERRO NA REQUISICAO DE PUSH");
                    console.log(error);

                     alert("Email salvo com sucesso!");
                     $('#inputEmail').val('')
                }
            }
        );

      }

    }

    function validateEmail(email) {
        var re = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
        return re.test(email);
    }
    
    $(function(){ 

      setTimeout(function(){ 

        $('#conteudo').removeClass('hiddenx');
        $('#conteudo').addClass('animated fadeInLeft');

        $('#timer').removeClass('hiddenx');
        $('#timer').addClass('animated fadeInUp');

      }, 500);
      
      

    });
    
    

</script>
  </body>
</html>
