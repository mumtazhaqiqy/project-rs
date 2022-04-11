<nav class="navbar is-primary is-fixed-top" role="navigation" aria-label="main-navigation">
    <div class="navbar-brand">
        <a href="#" class="navbar-item">SIMRS</a>
        <a role="button" class="navbar-burger" aria-label="menu" data-target="navMenu" aria-expanded="false">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
        </a>
    </div>
    <div class="navbar-menu" id="navMenu">
        <div class="navbar-start">
            <?php foreach ($menus as $key => $value) {?>
                <?php if(!isset($value['children'])):?>
                    <a href="<?= $value['url'] ?>" class="navbar-item"><?= $value['label'] ?></a>
                <?php else:?>
                    <div class="navbar-item has-dropdown is-hoverable">
                        <a class="navbar-link"><?=$value['label']?></a>
                        <div class="navbar-dropdown">
                            <?php foreach($value['children'] as $child):?>
                            <a href="<?=$child['url']?>" class="navbar-item">
                                <span class="icon"><i class="<?=$child['class']?>"></i></span>
                                <span><?=$child['label']?></span>
                            </a>
                            <?php endforeach?>
                        </div>
                    </div>
                <?php endif?>
            <?php }?>
        </div>
        <div class="navbar-end">
            <div class="navbar-item">
                <div class="buttons"></div>
        </div>
        </div>
    </div>

</nav>