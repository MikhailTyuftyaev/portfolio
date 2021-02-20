<?php get_header() ?>
<!-- Main -->
<main>
    <!-- Home Banner -->
    <section id="home" class="home-banner-02 bg-cover bg-center bg-no-repeat">
        <div id="particles-box" class="particles-box"></div>
        <div class="container">
            <div class="row full-screen align-items-center p-100px-tb">
                <div class="col-12">
                    <div class="ht-text text-center">
                        <h6>Привет! Меня зовут</h6>
                        <h1>Михаил Тюфтяев</h1>
                        <h4>Я разрабатываю сайты</h4>
                        <div class="nav social-icons justify-content-center">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#"><i class="fab fa-pinterest"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="go-to go-to-next">
            <a href="#about">
                <span></span>
            </a>
        </div>
    </section>
    <!-- End Home Banner -->
    <!-- about us -->
    <section id="about" class="section gray-bg">
        <div class="container">
            <div class="row sm-m-25px-b m-35px-b">
                <div class="col-md-12">
                    <div class="section-title">
                        <h3 class="dark-color text-uppercase">Обо мне</h3>
                        <p class="text-uppercase small">Разаработчик сайтов в Нижнем Новгорде</p>
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-5 m-15px-tb">
                    <div class="about-me-img box-shadow">
                        <img src="<?php echo get_template_directory_uri() ?>/img/IMG_7836.jpg" title="" alt="">
                        <div class="nav social-icon">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 m-15px-tb">
                    <div class="about-me">
                        <h4>Я Михаил Тюфтяев</h4>
                        <h6>Разработчик <span class="theme-color">cайтов</span> в Нижнем Новгороде</h6>
                        <p>Создал свой первый сайт в 18 лет. В разработке с 2019 года. Использую только современные
                            подходы. Совершенствуюсь с каждым днём. Подберём предложение с любым бюджетом и в любые
                            сроки.</p>
                        <div class="row about-list">
                            <div class="col-md-6">
                                <div class="media">
                                    <label>День рождения</label>
                                    <p>16 ноября 1996</p>
                                </div>
                                <div class="media">
                                    <label>Возраст</label>
                                    <p><?php echo get_age( '1996-11-16' ); ?></p>
                                </div>
                                <div class="media">
                                    <label>Место жительства</label>
                                    <p>Нижний Новгород, Россия</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="media">
                                    <label>E-mail</label>
                                    <p>info@domain.com</p>
                                </div>
                                <div class="media">
                                    <label>Телефон</label>
                                    <p>820-885-3321</p>
                                </div>
                                <div class="media">
                                    <label>Skype</label>
                                    <p>skype.0404</p>
                                </div>
                                <div class="media">
                                    <label>Статус</label>
                                    <p>Готов взять заказ</p>
                                </div>
                            </div>
                        </div>
                        <div class="btn-bar">
                            <a class="m-btn m-btn-theme" href="#work">Скачать Резюме</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end about us -->
    <!-- fun -->
    <section class="section">
        <div class="container">
            <div class="row sm-m-25px-b m-35px-b">
                <div class="col-md-12">
                    <div class="section-title">
                        <h3 class="dark-color text-uppercase">Мои навыки</h3>
                        <p class="text-uppercase small">РАЗАРАБОТЧИК САЙТОВ В НИЖНЕМ НОВГОРДЕ</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-between">
                <div class="col-lg-6 m-15px-tb">
                    <!-- skill -->
                    <div class="skill-lt">
                        <h6 class="dark-color">HTML5</h6>
                        <div class="skill-bar">
                            <div class="skill-bar-in theme-bg" role="progressbar" aria-valuenow="92" aria-valuemin="0"
                                aria-valuemax="100">
                                <span>92%</span>
                            </div>
                        </div>
                    </div>
                    <!-- end skill -->
                    <!-- skill -->
                    <div class="skill-lt">
                        <h6 class="dark-color">WordPress</h6>
                        <div class="skill-bar">
                            <div class="skill-bar-in theme-bg" role="progressbar" aria-valuenow="72" aria-valuemin="0"
                                aria-valuemax="100">
                                <span>75%</span>
                            </div>
                        </div>
                    </div>
                    <!-- end skill -->
                    <!-- skill -->
                    <div class="skill-lt">
                        <h6 class="dark-color">JS</h6>
                        <div class="skill-bar">
                            <div class="skill-bar-in theme-bg" role="progressbar" aria-valuenow="86" aria-valuemin="0"
                                aria-valuemax="100">
                                <span>86%</span>
                            </div>
                        </div>
                    </div><!-- /skill -->
                    <!-- end skill -->
                    <!-- skill -->
                    <div class="skill-lt">
                        <h6 class="dark-color">CSS3</h6>
                        <div class="skill-bar">
                            <div class="skill-bar-in theme-bg" role="progressbar" aria-valuenow="88" aria-valuemin="0"
                                aria-valuemax="100">
                                <span>88%</span>
                            </div>
                        </div>
                    </div>
                    <!-- end skill -->
                </div>
                <div class="col-lg-5 m-15px-tb">
                    <div class="row">
                        <div class="col-6 m-15px-tb">
                            <div class="feature-box-2 media align-items-center">
                                <div class="icon">
                                    <i class="fas fa-compact-disc"></i>
                                </div>
                                <div class="media-body">
                                    <h5>80 Сайтов сделано</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 m-15px-tb">
                            <div class="feature-box-2 media align-items-center">
                                <div class="icon">
                                    <i class="fas fa-trophy"></i>
                                </div>
                                <div class="media-body">
                                    <h5>15 Выйгранных наград</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 m-15px-tb">
                            <div class="feature-box-2 media align-items-center">
                                <div class="icon">
                                    <i class="fas fa-mug-hot"></i>
                                </div>
                                <div class="media-body">
                                    <h5>1 000 Чашек кофе</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 m-15px-tb">
                            <div class="feature-box-2 media align-items-center">
                                <div class="icon">
                                    <i class="fas fa-flag"></i>
                                </div>
                                <div class="media-body">
                                    <h5>10 Посещённых стран</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End fun -->
    <!-- Sertificate -->
    <section class="section">
        <div class="container">
            <div class="row sm-m-25px-b m-35px-b">
                <div class="col-md-12">
                    <div class="section-title">
                        <h3 class="dark-color text-uppercase">Мои сертификаты</h3>
                        <p class="text-uppercase small">РАЗАРАБОТЧИК САЙТОВ В НИЖНЕМ НОВГОРДЕ</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-between">
                <div class="slider">
                        <?php
                        // Request

                        $args = [
                        'post_type' => 'sertificate',
                        'post_status' => 'publish',
                        'orderby' => 'date',
                        'order'   => 'ASC'
                        ];

                        $wp_query = new WP_Query($args); ?>

                        <?php if ($wp_query->have_posts()) : ?>
                            <?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
                                <div class="slider__item">
                                    <?php if(get_field('sertificate')){
                                            echo '<img src="'.get_field('sertificate').'"</img>';
                                        }
                                    ?>
                                </div>
                            <?php endwhile;?>
                        <?php endif; ?>
                        <?php wp_reset_postdata(); ?> 
                </div>

            </div>
        </div>
    </section>
    <!-- End Sertificate -->
    <!-- resume -->
    <section id="services" class="section gray-bg">
        <div class="container">
            <div class="row sm-m-25px-b m-35px-b">
                <div class="col-md-12">
                    <div class="section-title">
                        <h3 class="dark-color text-uppercase">Что я предлагаю</h3>
                        <p class="text-uppercase small">РАЗАРАБОТЧИК САЙТОВ В НИЖНЕМ НОВГОРДЕ</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- feaure box -->
                <div class="col-sm-6 col-lg-4 m-15px-tb">
                    <div class="feature-box-1 box-shadow-lg">
                        <div class="icon">
                            <i class="icon-desktop"></i>
                        </div>
                        <div class="feature-content">
                            <h5>Уникальный дизайн</h5>
                            <p>I design and develop services for customers of all sizes, specializing in creating
                                stylish, modern websites.</p>
                        </div>
                    </div>
                </div>
                <!-- / -->
                <!-- feaure box -->
                <div class="col-sm-6 col-lg-4 m-15px-tb">
                    <div class="feature-box-1 box-shadow-lg">
                        <div class="icon">
                            <i class="icon-pricetags"></i>
                        </div>
                        <div class="feature-content">
                            <h5>Различные макеты</h5>
                            <p>I design and develop services for customers of all sizes, specializing in creating
                                stylish, modern websites.</p>
                        </div>
                    </div>
                </div>
                <!-- / -->
                <!-- feaure box -->
                <div class="col-sm-6 col-lg-4 m-15px-tb">
                    <div class="feature-box-1 box-shadow-lg">
                        <div class="icon">
                            <i class="icon-chat"></i>
                        </div>
                        <div class="feature-content">
                            <h5>Простота сделки</h5>
                            <p>I design and develop services for customers of all sizes, specializing in creating
                                stylish, modern websites.</p>
                        </div>
                    </div>
                </div>
                <!-- / -->
                <!-- feaure box -->
                <div class="col-sm-6 col-lg-4 m-15px-tb">
                    <div class="feature-box-1 box-shadow-lg">
                        <div class="icon">
                            <i class="icon-mobile"></i>
                        </div>
                        <div class="feature-content">
                            <h5>Восприимчивость</h5>
                            <p>I design and develop services for customers of all sizes, specializing in creating
                                stylish, modern websites.</p>
                        </div>
                    </div>
                </div>
                <!-- / -->
                <!-- feaure box -->
                <div class="col-sm-6 col-lg-4 m-15px-tb">
                    <div class="feature-box-1 box-shadow-lg">
                        <div class="icon">
                            <i class="icon-target"></i>
                        </div>
                        <div class="feature-content">
                            <h5>Проверка на ошибки</h5>
                            <p>I design and develop services for customers of all sizes, specializing in creating
                                stylish, modern websites.</p>
                        </div>
                    </div>
                </div>
                <!-- / -->
                <!-- feaure box -->
                <div class="col-sm-6 col-lg-4 m-15px-tb">
                    <div class="feature-box-1 box-shadow-lg">
                        <div class="icon">
                            <i class="icon-tools-2"></i>
                        </div>
                        <div class="feature-content">
                            <h5>Дополнительные опции</h5>
                            <p>I design and develop services for customers of all sizes, specializing in creating
                                stylish, modern websites.</p>
                        </div>
                    </div>
                </div>
                <!-- / -->
            </div>
        </div>
    </section>
    <!-- End resume -->
    <!-- Work -->
    <section id="work" class="section">
        <div class="container">
            <div class="row sm-m-25px-b m-35px-b">
                <div class="col-md-12">
                    <div class="section-title">
                        <h3 class="dark-color text-uppercase">Последние работы</h3>
                        <p class="text-uppercase small">РАЗАРАБОТЧИК САЙТОВ В НИЖНЕМ НОВГОРДЕ</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="portfolio-content lightbox-gallery">
            <?php
                        // Request

                        $args = [
                        'post_type' => 'works',
                        'post_status' => 'publish',
                        'orderby' => 'date',
                        'order'   => 'DESC'
                        ];

                        $wp_query = new WP_Query($args); ?>

                        <?php if ($wp_query->have_posts()) : ?>
                            <?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
                            <div class="grid-item product branding">
                                <div class="portfolio-box-01">
                                <div class="portfolio-img">
                                    <?php the_post_thumbnail('midfitured'); ?>
                                </div>
                                <div class="portfolio-info">
                                    <h5><?php the_title(); ?></h5>
                                    <span><?php $cat = get_the_category(); echo $cat[0]->cat_name; ?></span>
                                </div>
                                <a class="link-overlay" href="<?php the_permalink(); ?>"></a>
                                </div>
                            </div>                                
                            <?php endwhile;?>
                        <?php endif; ?>
                        <?php wp_reset_postdata(); ?> 
            </div> <!-- portfolio-content -->
        </div>
    </section>
    <!-- End work -->
    <!-- Testiminails -->
    <section class="section gray-bg">
        <div class="container">
            <div class="row sm-m-25px-b m-35px-b">
                <div class="col-md-12">
                    <div class="section-title">
                        <h3 class="dark-color text-uppercase">Отзывы</h3>
                        <p class="text-uppercase small">РАЗАРАБОТЧИК САЙТОВ В НИЖНЕМ НОВГОРДЕ</p>
                    </div>
                </div>
            </div>
            <div class="owl-carousel" data-items="2" data-nav-dots="true" data-md-items="2" data-sm-items="1"
                data-xs-items="1" data-xx-items="1" data-space="30">
                <!-- testimonials -->
                <div class="testimonial-col-01">
                    <div class="media">
                        <div class="img">
                            <img src="<?php echo get_template_directory_uri() ?>/img/team-1.jpg" title="" alt="">
                        </div>
                        <div class="media-body p-25px-l">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                            <div class="tc-info">
                                <h6 class="font-alt dark-color font-w-600">Nancy Bayers</h6>
                                <span>Co-founder</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- / -->
                <!-- testimonials -->
                <div class="testimonial-col-01">
                    <div class="media">
                        <div class="img">
                            <img src="<?php echo get_template_directory_uri() ?>/img/team-2.jpg" title="" alt="">
                        </div>
                        <div class="media-body p-25px-l">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                            <div class="tc-info">
                                <h6 class="font-alt dark-color font-w-600">Nancy Bayers</h6>
                                <span>Co-founder</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- / -->
                <!-- testimonials -->
                <div class="testimonial-col-01">
                    <div class="media">
                        <div class="img">
                            <img src="<?php echo get_template_directory_uri() ?>/img/team-3.jpg" title="" alt="">
                        </div>
                        <div class="media-body p-25px-l">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                            <div class="tc-info">
                                <h6 class="font-alt dark-color font-w-600">Nancy Bayers</h6>
                                <span>Co-founder</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- / -->
                <!-- testimonials -->
                <div class="testimonial-col-01">
                    <div class="media">
                        <div class="img">
                            <img src="<?php echo get_template_directory_uri() ?>/img/team-4.jpg" title="" alt="">
                        </div>
                        <div class="media-body p-25px-l">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                            <div class="tc-info">
                                <h6 class="font-alt dark-color font-w-600">Nancy Bayers</h6>
                                <span>Co-founder</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- / -->
            </div>
        </div>
    </section>
    <!-- End Testiminails -->
    <!-- Blog -->
    <section id="blog" class="section white-bg">
        <div class="container">
            <div class="row sm-m-25px-b m-35px-b">
                <div class="col-md-12">
                    <div class="section-title">
                        <h3 class="dark-color text-uppercase">Последние новости</h3>
                        <p class="text-uppercase small">РАЗАРАБОТЧИК САЙТОВ В НИЖНЕМ НОВГОРДЕ</p>
                    </div>
                </div>
            </div>
            <div class="row">

            <?php
                        // Request

                        $args = [
                        'post_type' => 'post',
                        'post_status' => 'publish',
                        'orderby' => 'date',
                        'order'   => 'DESC'
                        ];

                        $wp_query = new WP_Query($args); ?>

                        <?php if ($wp_query->have_posts()) : ?>
                            <?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

                            <div class="col-lg-4 m-15px-tb">
                                <div class="blog-grid">
                                    <div class="blog-grid-img">
                                        <a href="<?php the_permalink(); ?>">
                                            <?php the_post_thumbnail('midfitured'); ?>
                                        </a>
                                    </div>
                                    <div class="blog-gird-info">
                                        <div class="b-meta">
                                            <span class="date"><?php the_time('j F Y') ?></span>
                                            <span class="meta"><?php the_category( ', ') ?></span>
                                        </div>
                                        <h5><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"
                                                rel="bookmark"><?php the_title(); ?></a></h5>
                                        <?php the_excerpt() ?>
                                        <div class="btn-grid">
                                            <a class="m-btn-link" href="<?php the_permalink(); ?>">Подробнее</a>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- col -->
                            
                <?php endwhile;?>
                <?php endif; ?>
                <?php wp_reset_postdata(); ?> 
            </div>
        </div>
    </section>
    <!-- End Blog -->
    <section id="contactus" class="section gray-bg">
        <div class="container">
            <div class="row sm-m-25px-b m-35px-b">
                <div class="col-md-12">
                    <div class="section-title">
                        <h3 class="dark-color text-uppercase">Связаться со мной</h3>
                        <p class="text-uppercase small">РАЗАРАБОТЧИК САЙТОВ В НИЖНЕМ НОВГОРДЕ</p>
                    </div>
                </div>
            </div>
            <!-- form -->
            <div class="row justify-content-center">
                <div class="col-lg-8 m-15px-tb">
                    <div class="contact-form box-shadow">
                        <h4 class="dark-color font-alt m-20px-b">Написать мне</h4>
                        <form id="contact-form" method="POST">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input name="Name" id="name" placeholder="Имя *" class="form-control"
                                            type="text">
                                        <span class="input-focus-effect theme-bg"></span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input name="Email" id="email" placeholder="Email *" class="form-control"
                                            type="email">
                                        <span class="input-focus-effect theme-bg"></span>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <input name="Subject" id="subject" placeholder="Тема *" class="form-control"
                                            type="text">
                                        <span class="input-focus-effect theme-bg"></span>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea name="message" id="message" placeholder="Ваше сообщение *" rows="3"
                                            class="form-control"></textarea>
                                        <span class="input-focus-effect theme-bg"></span>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="send">
                                        <button class="m-btn m-btn-theme" onclick="send_mail()" type="button"
                                            value="Send"> отправить</button>
                                    </div>
                                    <span id="suce_message" class="text-success" style="display: none">Сообщение успешно
                                        отправлено</span>
                                    <span id="err_message" class="text-danger" style="display: none">Сообщение не
                                        отправлено</span>
                                </div>
                            </div>
                        </form>
                    </div>
                </div> <!-- col -->
                <div class="col-lg-4 m-15px-tb">
                    <div class="contact-info media box-shadow">
                        <div class="icon">
                            <i class="ti-location-pin"></i>
                        </div>
                        <div class="media-body">
                            <h6 class="dark-color font-alt">Our Address</h6>
                            <p>123 Stree New York City , United States Of America 750065.</p>
                        </div>
                    </div>
                    <div class="contact-info media box-shadow">
                        <div class="icon">
                            <i class="ti-mobile"></i>
                        </div>
                        <div class="media-body">
                            <h6 class="dark-color font-alt">Our Phone</h6>
                            <p>Office: +004 44444 44444<br>
                                Office: +004 44444 44444<br></p>
                        </div>
                    </div>
                    <div class="contact-info media box-shadow">
                        <div class="icon">
                            <i class="ti-email"></i>
                        </div>
                        <div class="media-body">
                            <h6 class="dark-color font-alt">Our Email</h6>
                            <p>info@domainname.com<br>contact@domainname.com</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end form -->
        </div>
    </section>
</main>
<!-- main end -->
<?php get_footer() ?>