<a href="<?=ROOT?>home&view=inline">Inline</a>
<div>
<? foreach($messages as $message) : ?>
    <div>
        <em><?=$message['dt']?></em> 
        <strong><?=$message['name']?></strong>
        <div><?=$message['text']?></div>
        <a href="<?=ROOT?>message/<?=$message['id_message']?>">edit(<?=$message['text']?>)</a>
    </div>
    <hr>
<? endforeach; ?>
</div>
<a href="<?=ROOT?>add">Добавить</a>