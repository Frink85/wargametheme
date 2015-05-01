<div class="arianne">
        <ul>
            <?php foreach($breadcrumb as $key => $line):?>
                <li <?php if($key == null): ?> class="home" <?php endif ?>>
                    <?php if(isset($line['url'])): ?>
                        <a href="<?php echo $line['url']; ?>" title="<?php echo $line['title']; ?>" <?php if(isset($line['nofollow'])) echo 'nofollow'; ?> ><?php echo $line['name']?></a>
                    <?php else : ?>
                        <?php echo $line['name']?>
                    <?php endif; ?>
                </li>
            <?php endforeach;?>
        </ul>
</div>
