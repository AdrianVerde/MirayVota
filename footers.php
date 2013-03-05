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