<header class="header">
    <div class="inner">
        <div class="header-top">
            <div class="header-left">
                <?php if (is_front_page()) : ?>

                    <a href="<?php echo home_url('/'); ?>">
                        <picture>
                            <source srcset="<?php echo get_template_directory_uri() ?>/img/logo.webp" type="image/webp">
                            <img src="<?php echo get_template_directory_uri() ?>/img/logo.jpg" class="header-left_logo" alt="ETELLIAリラクゼーション会社ロゴマーク">
                        </picture>
                    </a>

                <?php else : ?>
                    <a href="<?php echo home_url('/'); ?>">
                        <picture>
                            <source srcset="<?php echo get_template_directory_uri() ?>/img/logo-page.webp" type="image/webp">
                            <img src="<?php echo get_template_directory_uri() ?>/img/logo-page.jpg" class="header-left_logo" alt="ETELLIAリラクゼーション会社ロゴマーク">
                        </picture>
                    </a>
                <?php endif ?>
            </div>
            <div class="header-right">
                <a target="_blank" class="header-right-btn" href="">
                    ご予約<span class="sp-none">はこちら</span>
                </a>
            </div>
        </div>
    </div>
    <div class="header-bottom">
        <nav class="inner">
            <ul class="header-bottom-list">
                <li><a href="<?php echo home_url('/'); ?>">トップ</a></li>
                <li><a href="<?php echo get_page_link('7'); ?>">サロンについて</a></li>
                <li><a href="<?php echo get_page_link('9'); ?>">メニュー</a></li>
                <li><a href="<?php echo get_page_link('11'); ?>">注意事項</a></li>
                <li><a href="<?php echo get_page_link('13'); ?>">求人情報</a></li>
            </ul>
        </nav>
    </div>
    <div id ="openbtn" class="openbtn1"><span></span><span></span><span></span></div>
</header>