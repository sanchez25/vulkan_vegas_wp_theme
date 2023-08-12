<!DOCTYPE html>
<html <?php language_attributes(); ?> class="scroll">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
    <title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
</head>
<body class="body">
    <header>
        <div class="head-container">
            <div class="header-block">
                <a href="/" class="header-block-logo">
                    <img src="<?php echo get_template_directory_uri() ?>/images/logo.svg" width="110" height="47" alt="Vulkan Vegas Online Casino">
                </a>
                <div class="nav-menu">
                    <ul id="more-nav" class="nav-header-menu">
                        <li class="nav-header-menu-item">
                            <a href="#" class="nav-header-menu-link active">
                                <span>Sala gry</span>
                            </a>
                        </li>
                        <li class="nav-header-menu-item">
                            <a href="#" class="nav-header-menu-link">
                                <span>Promocje</span>
                            </a>
                        </li>
                        <li class="nav-header-menu-item">
                            <a href="#" class="nav-header-menu-link">
                                <span>Turnieje</span>
                                <div class="live">
                                    <div class="live-content">W toku</div>
                                </div>
                            </a>
                        </li>
                        <li class="nav-header-menu-item">
                            <a href="#" class="nav-header-menu-link">
                                <span>Galeria sławy</span>
                            </a>
                        </li>
                        <li class="nav-header-menu-item">
                            <a href="#" class="nav-header-menu-link">
                                <span>Koło fortuny</span>
                            </a>
                        </li>
                        <li class="nav-header-menu-item">
                            <a href="#" class="nav-header-menu-link">
                                <span>Program lojalnościowy</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="header-block-right">
                    <a href="#" class="btn-online-chat">
                        <span>Czat online</span>
                    </a>
                    <a href="#" class="btn-online-reg">Zarejestruj się</a>
                    <a href="#" class="btn-online-log">Zaloguj się</a>
                    <div class="header-right-lang">
                        <div class="language-block">
                            <a class="language-link" href="#languages">
                                <div class="text-lang">Pl</div>
                                <svg viewBox="0 0 12 8" fill="currentColor" class="text-lang-icon" id="arrow-down">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0.410704 0.910826C0.736141 0.585389 1.26378 0.585389 1.58922 0.910826L5.99996 5.32157L10.4107 0.910826C10.7361 0.585389 11.2638 0.585389 11.5892 0.910826C11.9147 1.23626 11.9147 1.7639 11.5892 2.08934L6.58922 7.08934C6.26378 7.41477 5.73614 7.41477 5.4107 7.08934L0.410704 2.08934C0.0852667 1.7639 0.0852667 1.23626 0.410704 0.910826Z"></path>
                                </svg>
                            </a>
                        </div>
                        <div id="languages">
                            <div class="lang-content-item-list">
                                <div class="lang-content-item">
                                    <a href="#" class="lang-content-item_link">En</a>
                                </div>
                                <div class="lang-content-item">
                                    <a href="#" class="lang-content-item_link active">Pl</a>
                                </div>
                                <div class="lang-content-item ru">
                                    <a href="#" class="lang-content-item_link">De</a>
                                </div>
                                <div class="lang-content-item">
                                    <a href="#" class="lang-content-item_link">Fi</a>
                                </div>
                                <div class="lang-content-item">
                                    <a href="#" class="lang-content-item_link">Ca</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="menu-mobile-button">
                        <svg viewBox="0 0 18 14" class="menu-mobile-icon" fill="currentColor" id="menu">
                            <rect width="18" height="2" rx="1"></rect>
                            <rect y="6" width="18" height="2" rx="1"></rect>
                            <rect y="12" width="18" height="2" rx="1"></rect>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </header>

