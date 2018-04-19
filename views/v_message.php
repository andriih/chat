<? if($err404) : ?>
	404
<? else : ?>
<div>
	<em><?=$message['dt']?></em> 
	<strong><?=$message['name']?></strong>
	<div><?=$message['text']?></div>
	<a href="index.php?c=home">Main</a>
</div>
<? endif; ?>