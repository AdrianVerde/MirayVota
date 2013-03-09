<?php
function footer_index(){
global $myv_host;
echo <<< EOT
<script>
  $(document).ready(function(){
    $('.carousel').carousel({
      interval: 2000
    });
  });
</script>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="{$myv_host}js/vendor/jquery-1.9.1.min.js"><\/script>')</script>

        <script src="{$myv_host}js/vendor/bootstrap.min.js"></script>

        <script src="{$myv_host}js/main.js"></script>
EOT;
}

function footer_partidos(){
global $myv_host;
echo <<< EOT
<center>
<div class="row">
  <div class="span1"><img src="{$myv_host}img/logos/psoe-200x200.png" /></div>
  <div class="span1"><img src="{$myv_host}img/logos/pp-200x200.png" /></div>
  <div class="span1"><img src="{$myv_host}img/logos/iu-200x200.png" /></div>
  <div class="span1"><img src="{$myv_host}img/logos/upyd-200x200.png" /></div>
</div>
<br />
	<div class="row">
	<div class="span1"><img src="{$myv_host}img/logos/upyd-200x200.png" /></div>
	<div class="span1"><img src="{$myv_host}img/logos/iu-200x200.png" /></div>
	<div class="span1"><img src="{$myv_host}img/logos/pp-200x200.png" /></div>
	<div class="span1"><img src="{$myv_host}img/logos/psoe-200x200.png" /></div>  
</div>
</center>
<div class="container">
  <ul class="nav nav-tabs">
    <li class="active"><a class="piclink partidospic" href="{$myv_host}partidos">Partidos</a></li>
				<li><a class="piclink promesaspic" href="{$myv_host}promesas">Promesas</a></li>
				<li><a class="piclink programaspic" href="{$myv_host}programas">Programas</a></li>
                <li><a class="piclink graficaspic" href="{$myv_host}graficas">Gráficas</a></li>
				<li class="last"><a class="piclink aboutpic" href="{$myv_host}about">About</a></li>
  </ul>
    <hr>
	<footer>
	<p>&copy; Mira & Vota 2013</p>
	</footer>
	
</div>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="{$myv_host}js/vendor/jquery-1.9.1.min.js"><\/script>')</script>

        <script src="{$myv_host}js/vendor/bootstrap.min.js"></script>

        <script src="{$myv_host}js/main.js"></script>
		<script type="text/javascript">
    $(function () {
        $("[rel='tooltip']").tooltip({
		placement: "right"
		});
    });
	</script>
EOT;
}
?>