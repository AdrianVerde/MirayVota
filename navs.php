<?php
function nav_index(){

}
function nav_partidos(){
global $myv_host;
echo <<< EOT
        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <a class="brand" href="{$myv_host}">Mira & Vota</a>
                    <div class="nav-collapse collapse">
                        <ul class="nav">
                            <li class="{$myv_host}active"><a href="{$myv_host}partidos">Partidos</a></li>
                            <li><a href="{$myv_host}graficas">Gráficas</a></li>
							<li><a href="{$myv_host}promesas">Promesas</a></li>
                        </ul>
						<ul class="nav pull-right">
                        <li><a href="about.php">About</a></li>
						</ul>
                    </div><!--/.nav-collapse -->
                </div>
            </div>
        </div>
EOT;
}
?>