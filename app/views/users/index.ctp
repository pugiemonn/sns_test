<h1>マイページ</h1>
<?php echo $html->link('Add', "/users/add") ?>
<?php e($this->element('entories-navi')) ?>
<table>
    <tr>
        <th>Id</th>
        <th>Name</th>
    </tr>
    <tr>
        <td></td>
        <td></td>
    </tr>
</table>

<table>
    <!-- ここから、$posts配列をループして、投稿記事の情報を表示 -->
    <?php
//        print_r($users);
    ?>

    <?php foreach ($users as $user): ?>
    <tr>
        <td><?php echo $user['User']['id']; ?></td>
        <td>
            <?php echo $html->link($user['User']['name'], "/users/view/".$user['User']['id']); ?>
            <?php echo $html->link('Delete', "/posts/delete/{$user['User']['id']}", null, '本当に削除しますか？'); ?>
            <?php echo $html->link('Edit', "/users/edit/".$user['User']['id']); ?>
        </td>
        <td><?php echo $user['User']['created']; ?></td>
    </tr>
    <?php endforeach; ?>

</table>
