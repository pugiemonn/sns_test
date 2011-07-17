<h1>Flashの情報を追加</h1>
<?php echo $html->link('Add', "/entories/add") ?>
<?php e($this->element('entories-add-navi')); ?>
<?php
    //Sanitize::html();
    echo $form->create('Entory');
    echo $form->input('title', array('label' => 'タイトル'));
    echo $form->hidden('user_id', array('value' => 2));
    echo $form->input('swf_url', array('rows' => 1, 'label' => 'swfのURL'));
    echo $form->input('swf_width', array('label' => 'swfの横幅'));
    echo $form->input('swf_height', array('label' => 'swfの縦幅'));
    echo $form->input('origin_url', array('rows' => 1, 'label' => '配信元サイトのURL'));
    echo $form->input('thumb_url', array('rows' => 1, 'label' => 'サムネイル画像のURL'));
    echo $form->input('description', array('label' => '概要'));
    echo $form->input('how_to_play', array('label' => '操作方法', 'value' => 'なし'));
//    echo $form->input('embed_release_flag', array('label' => '他サイトへの共有を許可しますか', 'value' => 1));
    echo $form->radio('embed_release_flag', array('1' => '他サイトへ共有を許可する','0' => '他サイトへ共有を許可しない'), array('legend' => '共有の許可', 'value' => 1));
    //echo $form->radio('embed_release_flag', array('0' => '他サイトへ共有を許可しない'), array('selected' => true));
    echo $form->end('情報を登録');
?>
<table>
    <tr>
        <th>Id</th>
        <th>タイトル</th>
        <th>Created</th>
    </tr>
</table>
