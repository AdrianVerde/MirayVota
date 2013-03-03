<?php
function nav_index(){
echo <<< EOT
        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <a class="brand" href="index.php">Mira & Vota</a>
                    <div class="nav-collapse collapse">
                        <ul class="nav">
                            <li class=\"active\"><a href=\"/partidos\">Partidos</a></li>
                            <li><a href=\"graphs.php\">Gráficas</a></li>
                            <li><a href=\"parties.php\">Partidos</a></li>
							<li><a href=\"promises.php\">Promesas</a></li>
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
function nav_partidos(){
echo <<< EOT
        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <a class="brand" href="index.php">Mira & Vota</a>
                    <div class="nav-collapse collapse">
                        <ul class="nav">
                            <li class=\"active\"><a href=\"/partidos\">Partidos</a></li>
                            <li><a href=\"graphs.php\">Gráficas</a></li>
                            <li><a href=\"parties.php\">Partidos</a></li>
							<li><a href=\"promises.php\">Promesas</a></li>
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