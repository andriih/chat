<a href="index.php?c=home&view=inline">Inline</a>
<div>
<? foreach($messages as $message) : ?>
    <div>
        <em><?=$message['dt']?></em> 
        <strong><?=$message['name']?></strong>
        <div><?=$message['text']?></div>
        <a href="index.php?c=message&id=<?=$message['id_message']?>">edit(<?=$message['text']?>)</a>
    </div>
    <hr>
<? endforeach; ?>
</div>
<a href="index.php?c=add">Добавить</a>