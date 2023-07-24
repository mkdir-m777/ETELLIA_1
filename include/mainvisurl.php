<?php if (is_front_page()) : ?>
    <section class="mainvisurl">
        <picture>
            <source srcset="<?php echo get_template_directory_uri() ?>/img/top-main-mask.webp">
            <img src="<?php echo get_template_directory_uri() ?>/img/top-main-mask.jpg" class="mainvisurl-image" alt="アロマオイルの背景画像">
        </picture>
        <div class="main-catcp">
            <h1 class="main-catcp-h1">
                心から癒される時間と空間
            </h1>
            <h2 class="main-catcp-h2">Location time and space that is healed from the bottom my heal.</h2>
        </div>
    </section>

<?php elseif (is_page()) : ?>
    <section class="mainvisurl-salon">
        <picture>
            <source srcset="<?php echo get_template_directory_uri() ?>/img/page-mask.webp">
            <img src="<?php echo get_template_directory_uri() ?>/img/page-mask.jpg" class="mainvisurl-image" alt="リラクゼーションサロンの背景画像">
        </picture>
        <h1 class="main-title-h1">
            <?php the_title(); ?>
        </h1>
    </section>
<?php endif ?>