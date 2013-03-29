<div id="parties">

<div id="party">
                <img src='http://mirayvota/resizepics.php' alt='nabo' />
        </div>
		
<?php foreach (getParties() as $Party) { ?>

        <div id="party">
                <img src='/<?php echo $Party["logo"]; ?>' alt='<?php echo $Party["name"]; ?>' />
        </div>

<?php } ?>

</div>
