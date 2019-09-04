<div class="header-row">
    <div class="header-nav">
        <button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main">
            <i class="fa fa-bars"></i>
        </button>
        <div class="header-nav-main header-nav-main-effect-1 header-nav-main-sub-effect-1 collapse">
            <nav>
                <ul class="nav nav-pills" id="mainNav">

                    <!-- Главная -->
                    <li class="dropdown">
                        <a class="dropdown-toggle" href="<?php echo e(route('Site.Home')); ?>">Главная</a>
                        <ul class="dropdown-menu">
                            <li><a href="index-overview.html">О компании</a></li>
                            <li><a href="index.html">Структурная схема</a></li>
                            <li><a href="">Миссия и стратегия</a></li>
                            <li><a href="">Руководство</a></li>
                            <li><a href="">Каръера и вакансии</a></li>
                            <li><a href="">Корпоративный календарь</a></li>
                            <li><a href="">Доска почёта</a></li>
                        </ul>
                    </li>

                    <!-- Новости -->
                    <li><a href="/news">Новости</a></li>

                    <!-- Статьи -->
                    <li><a href="/articles">Статьи</a></li>

                    <!-- Сотрудники -->
                    <li class="dropdown">
                        <a class="dropdown-toggle" href="">Сотрудники</a>
                        <ul class="dropdown-menu">
                            <li><a href="">Отделы</a></li>
                            <li><a href="">Дни рождения</a></li>
                            <li><a href="">Список сотрудников</a></li>
                        </ul>
                    </li>

                    <!-- Мега меню
                    <li class="dropdown dropdown-mega">
                        <a class="dropdown-toggle" href="#">
                            Shortcodes
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <div class="dropdown-mega-content">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <span class="dropdown-mega-sub-title">Shortcodes 1</span>
                                            <ul class="dropdown-mega-sub-nav">
                                                <li><a href="shortcodes-accordions.html">Accordions</a></li>
                                                <li><a href="shortcodes-toggles.html">Toggles</a></li>
                                                <li><a href="shortcodes-tabs.html">Tabs</a></li>
                                                <li><a href="shortcodes-icons.html">Icons</a></li>
                                                <li><a href="shortcodes-icon-boxes.html">Icon Boxes</a></li>
                                                <li><a href="shortcodes-carousels.html">Carousels</a></li>
                                                <li><a href="shortcodes-modals.html">Modals</a></li>
                                                <li><a href="shortcodes-lightboxes.html">Lightboxes</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-md-3">
                                            <span class="dropdown-mega-sub-title">Shortcodes 2</span>
                                            <ul class="dropdown-mega-sub-nav">
                                                <li><a href="shortcodes-buttons.html">Buttons</a></li>
                                                <li><a href="shortcodes-labels.html">Labels</a></li>
                                                <li><a href="shortcodes-lists.html">Lists</a></li>
                                                <li><a href="shortcodes-image-gallery.html">Image Gallery</a></li>
                                                <li><a href="shortcodes-image-frames.html">Image Frames</a></li>
                                                <li><a href="shortcodes-testimonials.html">Testimonials</a></li>
                                                <li><a href="shortcodes-blockquotes.html">Blockquotes</a></li>
                                                <li><a href="shortcodes-word-rotator.html">Word Rotator</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-md-3">
                                            <span class="dropdown-mega-sub-title">Shortcodes 3</span>
                                            <ul class="dropdown-mega-sub-nav">
                                                <li><a href="shortcodes-call-to-action.html">Call to Action</a></li>
                                                <li><a href="shortcodes-pricing-tables.html">Pricing Tables</a></li>
                                                <li><a href="shortcodes-tables.html">Tables</a></li>
                                                <li><a href="shortcodes-progressbars.html">Progress Bars</a></li>
                                                <li><a href="shortcodes-counters.html">Counters</a></li>
                                                <li><a href="shortcodes-sections-parallax.html">Sections &amp; Parallax</a></li>
                                                <li><a href="shortcodes-tooltips-popovers.html">Tooltips &amp; Popovers</a></li>
                                                <li><a href="shortcodes-sticky-elements.html">Sticky Elements</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-md-3">
                                            <span class="dropdown-mega-sub-title">Shortcodes 4</span>
                                            <ul class="dropdown-mega-sub-nav">
                                                <li><a href="shortcodes-headings.html">Headings</a></li>
                                                <li><a href="shortcodes-dividers.html">Dividers</a></li>
                                                <li><a href="shortcodes-animations.html">Animations</a></li>
                                                <li><a href="shortcodes-medias.html">Medias</a></li>
                                                <li><a href="shortcodes-maps.html">Maps</a></li>
                                                <li><a href="shortcodes-arrows.html">Arrows</a></li>
                                                <li><a href="shortcodes-alerts.html">Alerts</a></li>
                                                <li><a href="shortcodes-posts.html">Posts</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                    -->

                    <!-- Жизнь компании -->
                    <li class="dropdown ">
                        <a class="dropdown-toggle" href="">Жизнь компании</a>
                        <ul class="dropdown-menu">
                            <li><a href="">Фото-галерея</a></li>
                            <li><a href="">Видео-архив</a></li>
                            <li><a href="">Конкурсы</a></li>
                            <li><a href="">Опросы</a></li>
                            <li><a href="">Голосования</a></li>
                        </ul>
                    </li>


                    <?php if(Auth::guest()): ?>
                        <!-- Пункт входа и регистрации -->
                            <li class="dropdown signin active" id="headerAccount" >
                                <a class="dropdown-toggle" href="<?php echo e(route('login')); ?>"><i class="fa fa-user"></i> <?php echo e(trans('auth.SignIn')); ?></a>
                                <ul class="dropdown-menu">
                                    <li><a href="<?php echo e(route('login')); ?>"> <?php echo e(trans('auth.login')); ?></a></li>
                                    <li><a href="<?php echo e(route('register')); ?>"> <?php echo e(trans('auth.register')); ?></a></li>
                                </ul>
                            </li>
                    <?php else: ?>
                        <!-- пункты авторизованного пользователя -->
                            <li class="dropdown dropdown-mega dropdown-mega-signin signin logged" id="headerAccount">
                                <a class="dropdown-toggle" href="page-login.html">
                                    <i class="fa fa-user"></i> <?php echo e(Auth::user()->name); ?>

                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <div class="dropdown-mega-content">
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <div class="user-avatar">
                                                        <div class="img-thumbnail">
                                                            <img src="<?php echo e(asset('img/clients/client-1.jpg')); ?>" alt="">
                                                        </div>
                                                        <p><strong><?php echo e(Auth::user()->name); ?></strong><span>CEO & Founder - Okler</span></p>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <ul class="list-account-options">
                                                        <li><a href="<?php echo e(route('Work.Main')); ?>" target="_blank">Кабинет</a></li>
                                                        <li><a href="<?php echo e(route('Admin.Main')); ?>" target="_blank">Админка</a> </li>
                                                        <li><a href="<?php echo e(route('logout')); ?>"
                                                               onclick="event.preventDefault();
                                                                document.getElementById('logout-form').submit();">
                                                                <?php echo e(trans('auth.logout')); ?>

                                                            </a>
                                                            <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                                                <?php echo e(csrf_field()); ?>

                                                            </form>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                    <?php endif; ?>

                </ul>
            </nav>
        </div>
    </div>
</div>