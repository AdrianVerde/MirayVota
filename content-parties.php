<?php
	require_once(__DIR__ . "/db/db-functions.php");
        header('Content-Type: text/html; charset=UTF-8');
?>

<div id="parties">

<?php foreach (getParties() as $Party) { ?>

        <div id="party">
                Nombre: <?php echo $Party["name"]; ?>
                Logo: <?php echo $Party["logo"]; ?>
                Fecha de fundación: <?php echo $Party["logo"]; ?>
                Votos en el congreso (<?php echo $Party["votesObtained"]; ?>): <?php echo $Party["votes"]; ?>
                Diputados/as: <?php echo $Party["deputies"]; ?>
                Senadores/as: <?php echo $Party["senators"]; ?>
        </div>

<?php } ?>

</div>
