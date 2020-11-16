<header class="site-header atbs__site-header--style-2">
    <!-- Mobile header -->
    <div id="mnmd-mobile-header" class="mobile-header mobile-header--inverse visible-xs visible-sm">
        <div class="mobile-header__inner mobile-header__inner--flex">
            <div class="header-branding header-branding--mobile mobile-header__section text-left">
                <div class="header-logo header-logo--mobile atbs--logo-letter flexbox__item text-left">
                    <a href="#">Donche</a>
                </div>
            </div>
            <div class="mobile-header__section text-right">
                <button type="submit" class="mobile-header-btn js-search-dropdown-toggle">
                    <span class="hidden-xs">Search</span><i class="mdicon mdicon-search mdicon--last hidden-xs"></i><i class="mdicon mdicon-search visible-xs-inline-block"></i>
                </button>
                <a href="#mnmd-offcanvas-primary" class="offcanvas-menu-toggle mobile-header-btn js-mnmd-offcanvas-toggle">
                    <span class="hidden-xs">Menu</span><i class="mdicon mdicon-menu mdicon--last hidden-xs"></i><i class="mdicon mdicon-menu visible-xs-inline-block"></i>
                </a>
            </div>
        </div>
    </div><!-- Mobile header -->

    <!-- Navigation bar -->
    <nav class="navigation-bar hidden-xs hidden-sm js-sticky-header-holder">
        <div class="container">
            <div class="navigation-bar__inner">
                <div class="navigation-bar__section navigation-bar__site-logo inverse-text">
                    <div class="navigation-bar__section-inner">
                        <div class="site-logo header-logo atbs--logo-letter">
                            <a href="#" class="text-decor--line-through">SILON</a>
                        </div>
                    </div>
                </div>

                <div class="navigation-wrapper navigation-bar__section navigation-bar__section-menu js-priority-nav">
                    <ul id="menu-main-menu" class="navigation navigation--main navigation--inline navigation-space-44">
                        <li class="current-menu-item">
                            <a href="#">Home</a>
                        </li>
                        <li>
                            <a href="#">News</a>
                        </li>
                        <li>
                            <a href="#">Portfolio</a>
                        </li>
                        <li>
                            <a href="#">About</a>
                        </li>
                        <li>
                            <a href="#">Contact</a>
                        </li>
                    </ul>
                </div>
                <div class="navigation-bar__section navigation-bar__section-search">
                    <button type="submit" class="navigation-bar-btn btn-search__style-1 js-search-dropdown-toggle"><i class="mdicon mdicon-search"></i></button>
                </div>
            </div><!-- .navigation-bar__inner -->

            <div id="header-search-dropdown" class="header-search-dropdown ajax-search is-in-navbar js-ajax-search">
                <div class="container container--narrow">
                    <form class="search-form search-form--horizontal" method="get" action="#">
                        <div class="search-form__input-wrap">
                            <input type="text" name="s" class="search-form__input" placeholder="Search" value="">
                        </div>
                        <div class="search-form__submit-wrap">
                            <button type="submit" class="search-form__submit btn btn-primary">Search</button>
                        </div>
                    </form>

                    <div class="search-results">
                        <div class="typing-loader"></div>
                        <div class="search-results__inner">
                        </div>
                    </div>
                </div>
            </div><!-- .header-search-dropdown -->
        </div>
    </nav><!-- Navigation-bar -->
</header><!-- Site header -->