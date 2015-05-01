<div id="menu<?php echo $menu_id ?>" class="subnav" >
    <ul class="colonne">
        <?php foreach($subnavs as $key => $subnav): ?>
            <li>
            	<a <?php if(($key+1) == sizeof($subnavs)) { echo 'class="lastLi"';} ?> href="<?php echo get_permalink($subnav->ID); ?>" title="<?php echo $subnav->post_title; ?>">&gt; <span><?php echo $subnav->post_title; ?></span></a>
            </li>
        <?php endforeach; ?>
    </ul>
    <div class="menu-bottom"></div>
</div>