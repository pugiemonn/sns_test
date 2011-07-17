<div>
    This is navi.
    <ul>
        <li>
            <?php e($html->link("トップ", "/")); ?>
        </li>
        <li>
            <?php e($html->link("投稿", "/entories/add")); ?>
        </li>
        <li>
            <?php e($html->link("編集", "/entories/edit/".$entory['Entory']['id']."")); ?>
        </li>
        <li>
        </li>
    </ul>
</div>
