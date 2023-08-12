<?php
/* Template Name: Post slots */
 /* Template Post Type: Slots */
?>


<?php get_header('slots')?>

<section class="landing-slots-header" style="background-image: url(<?php echo get_field( 'slots-back' ); ?>">
    <div class="slots-sidebar">
        <div class="slots-game-sidebar">
            <div class="slots-sidebar-btn">
                <div class="slots-sidebar-btn-wrap">
                    <div class="slots-sidebar-btn-wrap-click">
                        <span>Show</span>
                        <div class="slots-sidebar-icon" style="background-image: url(<?php echo get_template_directory_uri() ?>/images/next.svg);"></div>
                    </div>
                </div>
            </div>
            <div class="slots-sidebar-header" style="background-image: url(<?php echo get_field( 'sidebar-head' ); ?>">
                <a href="/" class="slots-sidebar-header-link">
                    <div class="slots-sidebar-header-back" style="background-image: url(<?php echo get_template_directory_uri() ?>/images/logo.svg);"></div>
                </a>
                <div class="slots-sidebar-text">
                    Wygraj prawdziwe pieniądze! Zarejestruj się lub zaloguj na swoje konto.
                </div>
                <div class="slots-sidebar-buttons">
                    <a href="#" class="btn-online-reg slots">Zarejestruj się</a>
                    <a href="#" class="btn-online-log slots">Zaloguj się</a>
                </div>
            </div>
            <div class="slots-sidebar-content">
                <div class="slots-sidebar-block">
                    <div class="slots-sidebar-block-image" style="background-image: url(<?php echo get_field( 'slot-tournament' ); ?>">
                        <a class="live-block-content-link"></a>
                    </div>
                </div>
                <div class="slots-sidebar-block">
                    <div class="slots-sidebar-block-tournament">
                        <div class="live-block-content-jackpot-title">
                            <div class="live-block-content-jackpot-title-lable">W toku</div>    
                        </div>
                        <div class="live-block-content-jackpot-name slots">Play'nGO EXCLUSIVE</div>
                        <div class="live-block-content-jackpot-timer slots">zakończy się za:</div>
                        <div id="countdown" class="prize-found-timer">
                            <div class="countdown-number">
                                <span class="days countdown-time">10</span>
                            </div>
                            <span class="countdown-text-name first">d</span>
                            <div class="countdown-number">
                                <span class="hours countdown-time">23</span>
                            </div>
                            <span class="countdown-text-name">g</span>
                            <span class="countdown-text">:</span>
                            <div class="countdown-number">
                                <span class="minutes countdown-time">34</span>
                            </div>
                            <span class="countdown-text-name">m</span>
                            <span class="countdown-text">:</span>
                            <div class="countdown-number">
                                <span class="seconds countdown-time">50</span>
                            </div>
                            <span class="countdown-text-name">s</span>
                        </div>
                        <div class="sidebar-block-item">
                            <div class="live-block-content-jackpot-prize slots">Pula nagród:</div>
                            <div class="live-block-content-jackpot-cash slots">€ 10000</div>
                        </div>
                    </div>
                </div>
                <div class="slots-sidebar-block">
                    <div class="slots-sidebar-results">
                        <div class="slots-sidebar-results-table">
                            <div class="slots-result-item">
                                <div class="slots-result-item-name">
                                    <span>1</span>
                                    <div class="slots-result-item-medal" style="background-image: url(<?php echo get_template_directory_uri() ?>/images/gold.png);"></div>
                                    <span>edem***</span>
                                </div>
                                <div class="slots-result-item-result">
                                    <span>29554</span>
                                </div>
                            </div>
                            <div class="slots-result-item">
                                <div class="slots-result-item-name">
                                    <span>2</span>
                                    <div class="slots-result-item-medal" style="background-image: url(<?php echo get_template_directory_uri() ?>/images/silver.png);"></div>
                                    <span>resu***</span>
                                </div>
                                <div class="slots-result-item-result">
                                    <span>19065</span>
                                </div>
                            </div>
                            <div class="slots-result-item">
                                <div class="slots-result-item-name">
                                    <span>3</span>
                                    <div class="slots-result-item-medal" style="background-image: url(<?php echo get_template_directory_uri() ?>/images/bronze.png);"></div>
                                    <span>Mita***</span>
                                </div>
                                <div class="slots-result-item-result">
                                    <span>16377</span>
                                </div>
                            </div>
                        </div>
                        <div class="slots-sidebar-results-link">
                            <a href="#" class="slots-sidebar-results-link-btn">
                                <span class="slots-sidebar-results-link-icon"></span>
                                <span>Слоты турнира</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sidebar-help-block">
                <a href="#" class="sidebar-help-block-text">
                    <div class="sidebar-help-block-text-icon" style="background-image: url(<?php echo get_template_directory_uri() ?>/images/online-chat.svg);"></div>
                    <span>Pomoc online</span>
                </a>
            </div>
        </div>
    </div>
    <div class="landing-slots-header-demo">
        <div class="landing-slots-header-demo-back play">
            <div class="landing-slots-header-demo-cont">
                <div class="landing-slots-header-demo-image">
                    <div class="landing-slots-title">
                        <h1><?php the_title(); ?></h1>
                        <a href="/" class="landing-slots-title-icon" style="background-image: url(<?php echo get_template_directory_uri() ?>/images/close.svg);"></a>
                    </div>
                    <img src="<?php echo get_field('image-play');?>" alt="<?php echo get_field('image-play-alt');?>">
                </div>
            </div>
            <span class="landing-slots-header-demo-play">
                <span class="play-btn" style="background-image: url(<?php echo get_template_directory_uri() ?>/images/play.svg);"></span>
                <span class="demo-play-ikon-text">grać</span>
            </span>
        </div>
        <div class="landing-slots-header-demo-block">
            <div class="landing-slots-header-demo-cont">
                <div class="landing-slots-title">
                    <h1><?php the_title(); ?></h1>
                    <a href="/" class="landing-slots-title-icon" style="background-image: url(<?php echo get_template_directory_uri() ?>/images/close.svg);"></a>
                </div>
                <?php echo get_field('iframe-demo');?>
                <div class="landing-slots-header-demo-full">
                    <svg version="1.1" id="Capa_1" class="ikon-full" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                        viewBox="0 0 480 480" style="enable-background:new 0 0 480 480;" xml:space="preserve">
                        <g>
                            <g>
                                <g>
                                    <path d="M0,176h48V48h128V0H0V176z M16,16h144v16H32v128H16V16z"/>
                                    <path d="M304,0v48h128v128h48V0H304z M464,160h-16V32H320V16h144V160z"/>
                                    <path d="M48,304H0v176h176v-48H48V304z M160,448v16H16V320h16v128H160z"/>
                                    <path d="M432,432H304v48h176V304h-48V432z M448,320h16v144H320v-16h128V320z"/>
                                </g>
                            </g>
                        </g>
                    </svg>
                </div>
            </div>
        </div>
        <div class="real-slot">
            <div class="container-slots">
                <div class="real-slot-block">
                    <div class="real-slot-img" style="background-image: url(<?php echo get_template_directory_uri() ?>/images/play-real.svg);"></div>
                    <p>
                        Grasz w trybie demonstracyjnym. Aby otrzymać prawdziwe wygrane, przejdź do trybu „Graj na pieniądze”
                    </p>
                    <a href="#" class="btn-online-reg single-slots">Graj naprawdę!</a>
                </div>
            </div>
        </div>
        <div class="text-slot">
            <div class="container-slots">
                <div class="text-slot-block">
                    <?php the_content(); ?>    
                </div> 
            </div>
        </div>
    </div>
</section>

<?php get_footer('slots')?>