<a href="http://localhost/WebApp/views/category">Category</a>
<ul>
    <?php foreach ($categories as $key => $value) : ?>
        <li><a href="/home/category/<?=$value['id']?>"><?=$value['name']?></a></li>
    <?php endforeach ?>
</ul>