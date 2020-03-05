<?php


foreach($posts as $p): ?>
    <div class="well">
        <?php
        if(getMedias($p['idPost'])!= "") :?>
            <?php
                foreach(getMedias($p['idPost']) as $mediasFound): ?>
                    <img src="<?= $mediasFound['mediaPath'] ?>" alt="<?= $mediasFound['mediaName'];?>"/>
                <?php endforeach; ?>
        <?php endif ?>
        <div class="text-center">
            <?= $p['comment']; ?>
        </div>
    </div>
<?php endforeach; ?>