<a href="index.php?c=home&view=base">Base layout</a>
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
<a href="index.php?c=add">Добавить</a>
