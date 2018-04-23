<a href="<?=ROOT?>home&view=base">Base layout</a>
<div>	
	<?php foreach($messages as $message) { ?>
    <div>
        <strong><?= $message['dt']; ?></strong>
        <em><?= $message['name']; ?></em>
        <span><?= $message['text']; ?></span>
    </div>
    <hr>
	<?php } ?>
</div>
<a href="<?=ROOT?>add">Добавить</a>
 