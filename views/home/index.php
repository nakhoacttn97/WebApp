<ul>
    <?php foreach ($categories as $key => $value) : ?>
        <li><a href="/home/category/<?=$value['id']?>"><?=$value['name']?></a></li>
    <?php endforeach ?>
</ul>