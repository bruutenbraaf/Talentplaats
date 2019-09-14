<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Bruut en Braaf">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

    <title><?php wp_title('&raquo;', 'true', 'right'); ?><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <nav>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 branding">
                    <?php $logo = get_field('logo', 'option'); ?>
                    <a href="<?php echo get_home_url(); ?>">
                        <?php if ($logo) { ?>
                            <img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>" />
                        <?php } ?>
                    </a>
                </div>
                <div class="col-md-6 d-flex">
                    <div class="main_nav ml-auto">
                        <?php wp_nav_menu(array('theme_location' => 'main_menu')); ?>
                    </div>
                    <div class="mg_nav">
                        <div>
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>



    <script type="text/javascript" id="__fbcw__{prefix}{uuid}">
        "use strict";
        ! function() {
            window.FeedbackCompanyWidgets = window.FeedbackCompanyWidgets || {
                queue: [],
                loaders: []
            };
            var options = {
                uuid: "a26f644a-a131-4a1c-bcef-2c953499ae25",
                version: "1.2.1",
                prefix: "{prefix}"
            };
            if (
                void 0 === window.FeedbackCompanyWidget) {
                if (
                    window.FeedbackCompanyWidgets.queue.push(options), !document.getElementById(
                        "__fbcw_FeedbackCompanyWidget")) {
                    var scriptTag = document.createElement("script");
                    scriptTag.onload = function() {
                            if (window.FeedbackCompanyWidget)
                                for (; 0 < window.FeedbackCompanyWidgets.queue.length;) options = window.FeedbackCompanyWidgets.queue.pop(),
                                    window.FeedbackCompanyWidgets.loaders.push(
                                        new window.FeedbackCompanyWidgetLoader(options))
                        },
                        scriptTag.id = "__fbcw_FeedbackCompanyWidget",
                        scriptTag.src = "https://www.feedbackcompany.com/includes/widgets/feedback-company-widget.min.js", document.body.appendChild(scriptTag)
                }
            } else window.FeedbackCompanyWidgets.loaders.push(
                new window.FeedbackCompanyWidgetLoader(options))
        }();
    </script>