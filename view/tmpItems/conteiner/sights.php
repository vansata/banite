<div class="content">
    <div id="about">

        <?php
        foreach ($data as $k => $v) {
            ?>
            <div class="one-fourth"> 
                <a href="<?= \application\base_url().  $v['menu_link'] . "/current/" . $v['items_id'] ?>" >
                    <img src="<?= $v['img_path']; ?>" alt="<?= $v['img_name']; ?>"></img>
                </a>

                <a href="<?= \application\base_url(). $v['menu_link'] . "/current/" . $v['items_id'] ?>" >
                    <h3><?= $v['items_name']; ?></h3>
                </a>
                <?php $space = strripos($v['small'], " "); ?>
               
                <p><?= substr($v['small'], 0, $space); ?>
                    <a href="<?= \application\base_url(). $v['menu_link'] . "/current/" . $v['items_id'] ?>" > ...</a>
                </p>
            </div>

            <?php
        }
        ?>

    </div>
</div>

