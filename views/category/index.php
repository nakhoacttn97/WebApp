<a href="http://localhost/WebApp/">Back Home</a>
    
<table>
    <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Parent</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($arr as $v) : ?>
            <tr>
                <td><?= $v['CategoryId'] ?></td>
                <td><?= $v['CategoryName'] ?></td>
                <td><?= $v['ParentId'] ?></td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>