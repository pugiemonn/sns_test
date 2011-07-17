<h1>
    <?php echo h($entory['Entory']['title']); ?>
</h1>
<?php e($this->element('entories-view-navi')) ?>
<div id="swf-area-box">
<p><object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" width="<?php echo h($entory['Entory']['swf_width']); ?>"
                height="400" codebase="http://fpdownload.adobe.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,0,0">
                <param name="movie" value="<?php echo h($entory['Entory']['swf_url']); ?>" />
                <param name="play" value="true" />
                <param name="autostart" value="true" />
                <param name="loop" value="true" />
                <param name="quality" value="high" />
                <embed src="<?php echo h($entory['Entory']['swf_url']); ?>" width="<?php echo h($entory['Entory']['swf_width']) ?>" height="<?php echo h($entory['Entory']['swf_height']); ?>" play="true" 
                loop="true" quality="high" autostart="true"                pluginspage="http://www.adobe.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash"> 
                </embed>
</object></p>

</div>
<div id="">
<h2>説明</h2>
    <?php echo $entory['Entory']['description']; ?>
</div>
<div id="">
<h2>操作方法</h2>
    <?php echo $entory['Entory']['how_to_play']; ?>
</div>
<?php if($entory['Entory']['embed_release_flag'] == 1) { ?>
<div id="">
<h2>タグ</h2>
    <p>
        タグをコピーしてブログやサイトに貼付けてください。
    </p>
    <textarea cols="" rows="7">
<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" width="<?php echo h($entory['Entory']['swf_width']); ?>"
height="400" codebase="http://fpdownload.adobe.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,0,0">
<param name="movie" value="<?php echo h($entory['Entory']['swf_url']); ?>" />
<param name="play" value="true" />
<param name="autostart" value="true" />
<param name="loop" value="true" />
<param name="quality" value="high" />
<embed src="<?php echo h($entory['Entory']['swf_url']); ?>" width="<?php echo h($entory['Entory']['swf_width']); ?>" height="<?php echo h($entory['Entory']['swf_height']); ?>" play="true" 
loop="true" quality="high" autostart="true"                pluginspage="http://www.adobe.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash"> 
</embed>
</object>        
    </textarea>
</div>
<?php } ?>
