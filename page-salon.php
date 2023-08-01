<?php get_header(); ?>

<body>
    <?php get_template_part('include/header') ?>
    <main class="main-salon">
        <?php get_template_part('include/mainvisurl') ?>
        <section class="about">
            <div class="inner">
                <div class="section-title">
                    <h1 class="section-title-h1">
                        サロンについて
                    </h1>
                    <p class="section-title-p">
                        About　us
                    </p>
                </div>
                <div class="about-content-wrap">
                    <div class="about-content">
                        <div class="about-content-img">
                            <picture>
                                <source srcset="<?php echo get_template_directory_uri() ?>/img/salon.webp">
                                <img src="<?php echo get_template_directory_uri() ?>/img/salon.jpg" class="image" alt="アロマオイルの画像">
                            </picture>
                        </div>
                        <div class="about-content-text-wrap">
                            <p class="about-text">JR松戸駅から徒歩1分</p>
                            <p class="about-text">「残業の後に行きたい」<br>
                                「疲れを明日に持ちこしたくない」<br>
                                「身体も心も疲れちゃった…」
                            </p>
                            <p class="about-text">
                                という方を少しでも癒したいという想いから誕生しました。
                            </p>
                            <p class="about-text">仕事帰り・残業帰りの時間でも<br>
                                気軽に通ってもらえるサロンになれれば幸いです。</p>
                        </div>
                    </div>
                    <div class="about-content">
                        <div class="about-content-text-wrap">
                            <p class="about-text">日々の疲れ、不調は、全身のバランスの乱れが原因です。</p>
                            <p class="about-text">ETELLIAリラクゼーションでは心身のバランスをとり、<br>
                                当たり前の日々をありがたい日々に変えていく<br>
                                リラクゼーションをご提供します。
                            </p>
                            <p class="about-text">
                                こだわりのVIPルームには足湯やメイクスペースも完備しております。
                            </p>
                            <p class="about-text">仕事帰り・残業帰りの時間でも<br>
                                極上の癒しの時間をお過ごしください♪
                            </p>
                        </div>
                        <div class="about-content-img">
                            <picture>
                                <source srcset="<?php echo get_template_directory_uri() ?>/img/about_2.webp">
                                <img src="<?php echo get_template_directory_uri() ?>/img/salon.jpg" class="image" alt="アロマオイルの画像">
                            </picture>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="access-map">
            <div class="inner">
                <div class="section-title">
                    <h1 class="section-title-h1">
                        アクセスマップ
                    </h1>
                    <p class="section-title-p">
                        Access　map
                    </p>
                </div>
                <div class="access-map-google">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1618.3213573861135!2d139.8998888913621!3d35.784151869123676!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601884fc9e7daa09%3A0x69dd1692ac336e85!2z5p2-5oi46aeF!5e0!3m2!1sja!2sjp!4v1689855416662!5m2!1sja!2sjp" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
                <p class="access-map-google-p">JR松戸駅 西口より徒歩1分</p>
            </div>
        </section>
    </main>
    <?php get_footer(); ?>