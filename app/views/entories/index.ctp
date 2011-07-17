<h1>Flash 一覧</h1>
<?php e($this->element("entories-navi")); ?>
<?php //echo $html->link('Add', "/entories/add") ?>
<table>
    <tr>
        <th colspan=2>Flash情報</th>
    </tr>

    <!-- ここから、$posts配列をループして、投稿記事の情報を表示 -->
    <?php foreach ($entories as $entory): ?>
    <tr>
        <td>
            <?php // echo $entory['Entory']['id']; ?>
            <img src="<?php echo $entory['Entory']['thumb_url'] ?>" width="125" height="100" />
        </td>
        <td>
            <h3><?php echo $html->link($entory['Entory']['title'], "/entories/view/".$entory['Entory']['id']); ?> <span class=""><?php echo $entory['Entory']['created'] ?></span></h3>
            <?php echo $entory['Entory']['description']; ?>
        </td>
    </tr>
    <?php endforeach; ?>

</table>
