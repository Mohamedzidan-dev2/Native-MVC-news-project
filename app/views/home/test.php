

<table border="1">
    <thead>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>email</th>
            <th>password</th>
            <th>gender</th>
            <th>controlls</th>
        </tr>
    </thead>
    <tbody>
    <?php 
    $id =1;
        foreach($data as $d){ 
    
    ?>    
        <tr>
            <td><?= $id++ ?></td>
            <td><?=$d['name'] ?></td>
            <td><?=$d['email'] ?></td>
            <td><?=$d['password'] ?></td>
            <td><?=$d['gender'] ?></td>
            <td><a href="delete/<?= $d['id'];?>">delete</a>
                <a href="">update</a>
            </td>
        </tr>
    <?php } ?>    
    </tbody>
</table>