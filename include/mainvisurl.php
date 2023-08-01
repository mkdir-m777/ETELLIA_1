<?php if (is_front_page()) : ?>
    <section class="mainvisurl">
        <div class="inner">
            <div class="main-catcp">
                <h1 class="main-catcp-h1 ">
                    心から癒される<wbr>時間と空間
                </h1>
                <h2 class="main-catcp-h2">Location time and space that is healed from the bottom my heal.</h2>
            </div>
        </div>
    </section>

<?php elseif (is_page()) : ?>
    <section class="mainvisurl-salon">
        <div class="inner">
            <h1 class="main-title-h1">
                <?php the_title(); ?>
            </h1>
        </div>
    </section>
<?php endif ?>