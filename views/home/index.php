<ul>
    <?php foreach ($data as $key => $value) : ?>
        <li><a href="/home/category/<?=$value['id']?>"><?=$value['name']?></a></li>
    <?php endforeach ?>
</ul>