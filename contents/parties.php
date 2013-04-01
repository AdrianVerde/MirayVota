<div id="parties">
		
<?php foreach (getParties() as $Party) { ?>

        <div id="party">
                <img src='/<?php echo $Party["logo"]; ?>' alt='<?php echo $Party["name"]; ?>' />
        </div>

<?php } ?>

</div>
