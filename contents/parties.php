<?php /* <div id="parties"> */ ?>
<div class="container">
<ul class="thumbnails">
<?php foreach (getParties() as $Party) { ?>
<li class="span2">
  <div class="thumbnail partythumb">
        <?php /*<div id="party">*/ ?>
                <img src='/<?php echo $Party["logo"]; ?>' alt='<?php echo $Party["name"]; ?>' />
        <?php /* </div>*/ ?>
     <?php /* <div class="caption">
        <p><?php echo $Party["name"]; ?></p>
      </div> */ ?>
  </div>
</li>
<?php } ?>

<?php /* </div> */ ?>

</ul>

        </div> <!-- /container -->
