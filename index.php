<?php get_header() ?>
<body>
    <?php get_template_part('include/header') ?>
    <main class="main">
        <?php get_template_part('include/mainvisurl') ?>
        <section class="service">
            <ul class="service-content inner">
                <li class="service-item">
                    <a href="page-salon.html">
                        <h2>
                            Salon
                        </h2>
                    </a>
                </li>
                <li class="service-item">
                    <a href="">
                        <h2>
                            Menu
                        </h2>
                    </a>
                </li>
                <li class="service-item">
                    <a href="">
                        <h2>
                            Notes
                        </h2>
                    </a>
                </li>
            </ul>

        </section>
        <section class="sub-visurl">
            <picture>
                <source srcset="<?php echo get_template_directory_uri() ?>/img/top_sub_visurl.webp">
                <img src="<?php echo get_template_directory_uri() ?>/img/top_sub_visurl.jpg" class="sub-visurl-image" alt="アロマオイルの画像">
            </picture>
        </section>

        <section class="message">
            <div class="inner">
                <h1 class="message-title">
                    ETELLIA’s<br class="pc-none"> healing space
                </h1>
                <p class="message-text">
                    当店はあなたの心と体を癒す本格リラクゼーションサロンです。<br class="sp-none">
                    リラクゼーション、アロママッサージ、足つぼマッサージ、ヘッドマッサージなど<br class="sp-none">
                    多数のメニューを取り揃えております。<br class="sp-none">
                    ゆったり静かな空間で、日頃のお疲れを解消しませんか？
                </p>
                <a class="message-btn" href="">
                    ご予約はこちら
                </a>
            </div>
        </section>
        <section class="access">
            <div class="inner access-inner">
                <div class="access-left">
                    <dl>
                        <dt class="access-left-title">ETELLIAリラクゼーション</dt>
                        <dd class="access-adress">〒111-1111<br>
                            千葉県松戸市松戸1-1-1　松戸ビル7F
                        </dd>
                        <div class="access-left-flex">
                            <dt>
                                月 - 金
                            </dt>
                            <dd>
                                10:00 ~ 20:00
                            </dd>
                        </div>
                        <div class="access-left-flex">
                            <dt>
                                土日祝
                            </dt>
                            <dd>
                                定休日
                            </dd>
                        </div>
                        <div class="access-left-flex">
                            <dt>
                                TEL
                            </dt>
                            <dt class = "access-left-tel">
                                047-111-1111
                            </dt>
                        </div>
                    </dl>
                </div>
                <div class="access-right">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1618.3213573861135!2d139.8998888913621!3d35.784151869123676!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601884fc9e7daa09%3A0x69dd1692ac336e85!2z5p2-5oi46aeF!5e0!3m2!1sja!2sjp!4v1689855416662!5m2!1sja!2sjp"
                          style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>  
        </section>
    </main>
<?php get_footer(); ?>