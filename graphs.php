<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <style>
            body {
                padding-top: 60px;
                padding-bottom: 40px;
            }
        </style>
        <link rel="stylesheet" href="css/bootstrap-responsive.min.css">
        <link rel="stylesheet" href="css/main.css">

        <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>
    <body>

        <!-- This code is taken from http://twitter.github.com/bootstrap/examples/hero.html -->

        <?php $yeah="<li><a href=\"index.php\">Inicio</a></li>
                            <li class=\"active\"><a href=\"graphs.php\">Gráficas</a></li>
                            <li><a href=\"parties.php\">Partidos</a></li>
							<li><a href=\"promises.php\">Promesas</a></li>"; require_once('./header.php'); ?>

        <div class="container">

            <!-- Main hero unit for a primary marketing message or call to action -->
            <div class="hero-unit">
                <h1>Gráficas!</h1>
                <p>Una forma visual de interpretar los datos de la fiabilidad de los partidos políticos que se mide (a grandes rasgos y sin entrar mucho en detalle) en porcentaje de promesas cumplidas por tiempo.</p>
            </div>
			
			<div id="container" style="min-width: 400px; height: 400px; margin: 0 auto"></div>

            <!-- Example row of columns -->
            <div class="row">
                <div class="span4">
                    <h2>Heading</h2>
                    <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                    <p><a class="btn" href="#">View details &raquo;</a></p>
                </div>
                <div class="span4">
                    <h2>Heading</h2>
                    <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                    <p><a class="btn" href="#">View details &raquo;</a></p>
               </div>
                <div class="span4">
                    <h2>Heading</h2>
                    <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
                    <p><a class="btn" href="#">View details &raquo;</a></p>
                </div>
            </div>

            <hr>

			<?php require_once('./footer.php');?>
            

        </div> <!-- /container -->

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"><\/script>')</script>

        <script src="js/vendor/bootstrap.min.js"></script>

        <script src="js/main.js"></script>
	<script src="js/highcharts.js"></script>
	<script src="js/modules/exporting.js"></script>
	<script type="text/javascript">
    $("[rel=tooltip]").tooltip();
	</script>
	<script type="text/javascript">
$(function () {
    var chart;
    $(document).ready(function() {
        chart = new Highcharts.Chart({
            chart: {
                renderTo: 'container',
                type: 'line',
                marginRight: 130,
                marginBottom: 25
            },
            title: {
                text: 'Porcentaje de fiabilidad',
                x: -20 //center
            },
            subtitle: {
                text: '',
                x: -20
            },
			credits: {
            enabled: false
			},
            xAxis: {
                categories: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre']
            },
            yAxis: {
                title: {
                    text: 'Repeticiones'
                },
                plotLines: [{
                    value: 0,
                    width: 1,
                    color: '#808080'
                }]
            },
            tooltip: {
                formatter: function() {
                        return '<b>'+this.y+'%</b>'+this.series.name+'<br/>';
                }
            },
            legend: {
                layout: 'vertical',
                align: 'right',
                verticalAlign: 'top',
                x: -10,
                y: 100,
                borderWidth: 0
            },
            series: [{
                name: 'Promesas Cumplidas (PP)',
                data: [15, 25, 20, 50, 85, 13, 20, 28, 32, 15, 34, 87]
            }, {
                name: 'Promesas Cumplidas (PSOE)',
                data: [51, 52, 2, 5, 58, 31, 2, 82, 23, 51, 43, 78]
            }]
        });
    });
    
});
		</script>
    </body>
</html>
