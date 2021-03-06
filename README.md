###Fri Jan 23 16:55:08 2015 CST
* [grunt + wp](http://archetyped.com/know/grunt-for-wordpress-plugins/?utm_content=buffer6a8d8&utm_medium=social&utm_source=twitter.com&utm_campaign=buffer)

* [register vs. enqueue a script](http://wpcandy.com/teaches/how-to-load-scripts-in-wordpress-themes/#.VMLZAmTF-lI)
    * Register all of them
    > The reason I register all of my scripts in this function is simple: it helps me keep track. Sure, I could just enqueue them all in this function with conditionals, but sometimes conditionals get confusing, and I like to take advantage of the ability to enqueue in templates, because it’s simple. I could also skip the register function for the scripts I enqueue right away, but again, I do it for organization. I register them there, together, so that I know what I’ve got and I know what I’m loading on every page versus in specific places. I also tend to make notes in comments by the register function to note where I’m enqueuing, if not immediately.

    ```php
    <?php
    /*
     * WordPress Sample function and action
     * for loading scripts in themes
     */
     
    // Let's hook in our function with the javascript files with the wp_enqueue_scripts hook 
    
    add_action( 'wp_enqueue_scripts', 'wpcandy_load_javascript_files' );
    
    // Register some javascript files, because we love javascript files. Enqueue a couple as well 
    
    function wpcandy_load_javascript_files() {
    
      wp_register_script( 'info-caroufredsel', get_template_directory_uri() . '/js/jquery.carouFredSel-5.5.0-packed.js', array('jquery'), '5.5.0', true );
      wp_register_script( 'info-carousel-instance', get_template_directory_uri() . '/js/info-carousel-instance.js', array('info-caroufredsel'), '1.0', true );
    
      wp_register_script( 'jquery.flexslider', get_template_directory_uri().'/js/jquery.flexslider-min.js', array('jquery'), '1.7', true );
      wp_register_script( 'home-page-main-flex-slider', get_template_directory_uri().'/js/home-page-main-flex-slider.js', array('jquery.flexslider'), '1.0', true );
    
      wp_enqueue_script( 'info-carousel-instance' );
      
      if ( is_front_page() ) {
        wp_enqueue_script('home-page-main-flex-slider');
      }
    
    }
    ?>
    ```
* [the new script_loader_tag filter](http://wordpress.stackexchange.com/questions/38319/how-to-add-defer-defer-tag-in-plugin-javascripts/38335#38335)
    * [codex](https://developer.wordpress.org/reference/hooks/script_loader_tag/)
    * we can use it to add 'async' to our scripts

* [html5 boilerplate](https://github.com/h5bp/html5-boilerplate)

###Sat Jan 24 10:30:04 2015 CST
* [notes from a wpsession talk on theme customizer](https://github.com/pdclark/talk-wordpress-customizer)

* [vagrant + wp + vvv tutorial](http://www.sitepoint.com/wordpress-meets-vagrant-vvv/)

* [vvv](https://github.com/Varying-Vagrant-Vagrants/VVV)

* [how to create a separate page for blog posts](http://www.wpbeginner.com/wp-tutorials/how-to-create-a-separate-page-for-blog-posts-in-wordpress/)

###Sun Jan 25 09:17:51 2015 CST
* [make an svg sprite sheet with icomoon](http://blog.teamtreehouse.com/create-svg-sprite-sheet)

* should our make a row of stickers instead of mixing them in?

* [smashing mag on wp custom taxonomies](http://www.smashingmagazine.com/2012/01/04/create-custom-taxonomies-wordpress/)

* our potential custom taxonomies:
    * school
    * state (region?)
    * specialty

* Inside the AOA should probably be a separate wp install entirely, like insidetheaoa.osteopathic.org
    * that would be easier to maintain, it seems
    * our 'inside the aoa' listing on the front page could be an rss feed from the blog

* How do we create a taxonomy for a series?
    * maybe the taxonomy is hierarchical (has descendants), called 'series'

###Mon Jan 26 8:33:12 2015 CST

###Tue Jan 27 10:59:57 2015 CST
* [how to use jetpack's carousel without installing jetpack](http://www.wpbeginner.com/plugins/how-to-add-gallery-carousel-in-wordpress-without-jetpack/)

* set default sizes of media in media settings


###Wed Jan 28 11:23:42 2015 CST
* [conditionally load our js?](http://code.tutsplus.com/articles/quick-tip-conditional-javascript-and-css-enqueueing-on-front-end-pages--wp-25049)

* [conditionally load plugin scripts](http://customcreative.co.uk/conditionally-loading-plugin-scripts-in-wordpress/)

* [conditionally loading js with a shortcode](http://scribu.net/wordpress/conditional-script-loading-revisited.html)

* [wp popular posts widget](https://wordpress.org/plugins/wordpress-popular-posts/)
    * [other popularity plugins](http://www.wpbeginner.com/plugins/5-best-popular-posts-plugins-for-wordpress/)

* [smashing: WordPress Shortcodes: A Complete Guide](http://www.smashingmagazine.com/2012/05/01/wordpress-shortcodes-complete-guide/)

* [plugin for pulling in a post with a shortcode](https://wordpress.org/plugins/post-content-shortcodes/)
    * possibility for pulling in a sidebar
        * which could be a custom post type

* TODO we're going, i think, to need a shortcode to insert rover-don and rover-peggy into every post.

* [stackexchange: Prevent publishing the post before setting a featured image?](http://wordpress.stackexchange.com/questions/16372/prevent-publishing-the-post-before-setting-a-featured-image)

* [WordPress Shortcodes: 3 Essential Tips](http://premium.wpmudev.org/blog/wordpress-shortcodes/)

* [do_shortcode() on the codex](http://codex.wordpress.org/Function_Reference/do_shortcode)

* [10 Awesome Shortcodes For Your WordPress Blog](http://premium.wpmudev.org/blog/10-awesome-shortcodes-for-your-wordpress-blog/)
    * see the "Related Posts" shortcode!

###Thu Jan 29 08:59:37 2015 CST
* modules
    ```
    _social-pick-red.scss
    _eo-icons.scss
    _index.scss
    _section-title.scss
    _f-item.scss
    _nav.scss
    _section-title-hat.scss
    _social.scss
    _widget.scss
    ~~_site-branding.scss~~
    _super.scss
    _inside-the-aoa.scss
    _sticker.scss
    _size.scss
    _border.scss
    _module.scss
    _unit.scss
    _content.scss
    _row.scss
    _rover.scss
    _spotlight.scss
    _story-header.scss
    _btn.scss
    _comment-form.scss
    _cta.scss
    frm.scss
    ~~_ad.scss~~
    _f-item-old.scss
    _grid.scss
    _social-pick.scss
    _featured.scss
    _front.scss
    _comment-link.scss
    ~~_icons.scss~~
    _meta.scss
    _f-row.scss
    _play-hiya.scss
    _rail.scss
    _prev-next.scss
    _comment.scss
    _image.scss
    ~~_site-search.scss~~
    _comments.scss
    _story-footer.scss
    _story-nav.scss
    _topics.scss
    _pq.scss
    _story.scss
    _bio.scss
    _story-meta.scss
    _media.scss
    _caption.scss
    _grid-play.scss
    _top.scss
    _xnav.scss
    _xsite-branding.scss
    _xsite-search.scss
    _button.scss
    ```

* [possible way to programmatically add don and peggy inside the loop](https://wordpress.org/support/topic/php-and-javascript-with-google-adsense-code)

* TODO so we hardcoded our ehs script into sidebar-leaderboard.php. is there a better way to do it?
    * like maybe making the leaderboard a widget area and echoing the script with a filter?
        * or is it not that big of a deal to hard code this js snippet?

* [lines between text](http://css-tricks.com/fun-line-height/)
    * possible use in pull quotes

* [wordpress responsive images plugin](https://wordpress.org/plugins/ricg-responsive-images/)
    * [a post on css-tricks with an update about it](http://css-tricks.com/hassle-free-responsive-images-for-wordpress/)

* [9 Tips for WordPress Plugin Development](http://sixrevisions.com/wordpress/wordpress-plugin-development-tips/)

* [How To Optimize Images For WordPress, A Complete Guide](http://www.wpexplorer.com/optimize-images-wordpress-guide/)

* [support for ricg picturefill plugin](https://wordpress.org/support/plugin/ricg-responsive-images)

###Fri Jan 30 07:09:27 2015 CST
* installed kint debugger
      ```
      Dumping variables is easy:
      
      d($variable) will output a styled, collapsible container with your variable information
      dd($variable) will do exactly as d() except halt execution of the script
      s($variable) will output a simple, un-styled whitespace container
      sd($variable) will do exactly as s() except halt execution of the script
      Backtrace is also easy:
      
      Kint::trace() The displayed information for each step of the trace includes the source snippet, passed arguments and the object at the time of calling
      We've also baked in a few functions that are WordPress specific:
      
      dump_wp_query()
      dump_wp()
      dump_post()
      ```

* custom field: elit_kicker
    * for adding the kicker to the post

* [removed unusued custom fields](http://resources.kevinspence.org/remove-custom-fields-wordpress/)

* [How to Display WordPress Post Thumbnails with Captions](http://www.wpbeginner.com/wp-tutorials/how-to-display-wordpress-post-thumbnails-with-captions/)
    ```
    WordPress stores each image as its own post. So the Title of the 
    Image will be the title of the post, Caption will be the excerpt of 
    the post, and Description will be the content of the post.
    ```
    
    ```php
    // ex.
    <?php the_post_thumbnail();  
    echo get_post(get_post_thumbnail_id())->post_excerpt; ?>
    ```

* [animating height](http://css3.bradshawenterprises.com/animating_height/)

###Sat Jan 31 06:53:09 2015 CST
* TODO AP-Styleify our dates

* [caption reveals on hover](http://www.hongkiat.com/blog/css3-image-captions/)

* 4 things a browser can animate cheaply [via html5rocks](http://www.html5rocks.com/en/tutorials/speed/high-performance-animations/)
    1. position
    2. scale
    3. rotation
    4. opacity

* TODO we have a problem with double downloads using the RICG Responsive Images plugin

###Sun Feb  1 05:21:36 2015 CST
* TODO our drop cap is not rendering correctly in firefox
    * [possible fix?](http://www.sitepoint.com/a-simple-css-drop-cap/)

* TODO social icon vertical list breaks up in firefox around 482px wide

* [ ideas for list shortcodes ](http://themes.mysitemyway.com/awake/shortcodes/fancy-lists-shortcodes/)

* [ good guide to creating and using custom post types](http://code.tutsplus.com/tutorials/a-guide-to-wordpress-custom-post-types-creation-display-and-meta-boxes--wp-27645)

###Mon Feb  2 07:47:24 2015 CST
* [smashing mag on meta boxes](http://www.smashingmagazine.com/2011/10/04/create-custom-post-meta-boxes-wordpress/)

* [User-friendly custom fields with Meta Boxes in WordPress](http://www.creativebloq.com/wordpress/user-friendly-custom-fields-meta-boxes-wordpress-5113004)

* [How to Create Custom WordPress Write/Meta Boxes](http://code.tutsplus.com/tutorials/how-to-create-custom-wordpress-writemeta-boxes--wp-20336)

* [remove post formats meta box](http://wordpress.stackexchange.com/questions/65653/how-do-i-remove-the-post-format-meta-box)

###Tue Feb  3 05:07:21 2015 CST
* [vvv and wp_mail()](http://www.allancollins.net/2014/06/12/wp_mail-sending-vvv-try/)

* [debugging in php](http://www.phpknowhow.com/basics/basic-debugging/)

* [set add'l fields in media uploader](http://www.wpbeginner.com/wp-tutorials/how-to-add-additional-fields-to-the-wordpress-media-uploader/)

* [smashing on definitive guide to wp hooks](http://www.smashingmagazine.com/2011/10/07/definitive-guide-wordpress-hooks/)

* [remove wp's hard-coded image width, height](http://wordpress.stackexchange.com/questions/22302/how-do-you-remove-hard-coded-thumbnail-image-dimensions)

###Wed Feb  4 10:09:37 2015 CST
* ~~TODO meta box for kicker~~

* TODO need credit at bottom of page for standalone feature images

* scaffolding for a meta box
    ```php
    /**
     * KICKER META BOX
     *
     */
    add_action( 'load-post.php' , 'elit_kicker_meta_box_setup' );
    add_action( 'load-post-new.php' , 'elit_kicker_meta_box_setup' );
    
    function elit_kicker_meta_box_setup() {
    
    }
    
    function elit_add_kicker_meta_box() {
      
    }
    
    function elit_kicker_meta_box( $object, $box ) {
      
    }
    
    function elit_save_kicker_meta( $post_id, $post ) {
      
    }
    
    /**
     * END KICKER META BOX
     */
    ```

* TODO refactor our meta box creations -- we're repeating tons of code!

###Thu Feb  5 09:24:18 2015 CST

* [daux.io documentation generator](https://github.com/justinwalsh/daux.io)

* [collapse metaboxes by default](http://wordpress.stackexchange.com/questions/4381/make-custom-metaboxes-collapse-by-default)

###Fri Feb  6 11:10:25 2015 CST
* [solution to admin-ajax not working?](http://docs.easydigitaldownloads.com/article/201-admin-ajax-blocked)

###Mon Feb  9 18:00:33 2015 CST

* sidebars
    * http://thedo.osteopathic.org/2014/04/msucom-unthsctcom-lead-do-schools-in-u-s-news-rankings/
    * http://thedo.osteopathic.org/2014/04/beyond-the-stethoscope-dos-students-excel-in-nonmedical-pursuits/ -- with photo
    * http://thedo.osteopathic.org/2014/05/caring-for-lgbt-patients-a-primer/
    * http://thedo.osteopathic.org/2014/05/history-essay-contest-students-interns-and-residents-can-win-up-to-5000/ -- 2 sidebars
    * http://thedo.osteopathic.org/2014/06/school-of-life-learning-from-my-patients-in-a-teaching-health-center/
    * http://thedo.osteopathic.org/2014/07/humble-leader-cleveland-clinic-ready-take-aoa-president/
    * http://thedo.osteopathic.org/2014/08/former-aoa-president-carlo-dimarco-remembered-leader-educator/
    * http://thedo.osteopathic.org/2014/10/primary-care-physicians-need-know-hpv-vaccine/

* authors
    * BY TIMOTHY BEALS, OMS IV	/ CONTRIBUTING WRITER
    * BY LINDSAY J. ERCOLE, OMS I	/ CONTRIBUTING WRITER
    * BY JEREMY BERGER, OMS II	/ CONTRIBUTING WRITER
    * BY CHRISTEN D. BRUMMETT, OMS II	/ CONTRIBUTING WRITER
    * BY JEFFREY Y. TSAI, OMS II	/ CONTRIBUTING WRITER
    * BY JOSHUA ALEXANDER, DO, MPH/ CONTRIBUTING WRITER
    * BY JANKI KAPADIA, OMS II, AND SAMEER R. SOOD, OMS II/ CONTRIBUTING WRITERS
    * AOA STAFF
    * THE DO STAFF

  

* related-style sidebars
    * http://elit.dev/2014/11/the-abcs-of-clinical-rotations-always-be-curious/
    * http://thedo.osteopathic.org/2014/10/love-game-team-physicians-highs-lows-craft/

* tricky
    * http://thedo.osteopathic.org/2014/07/qa-2014-grads-talk-specialties-policy-work-life-balance/

* video
    * http://thedo.osteopathic.org/2014/10/video-affordable-care-act-affected-practice/ -- embed video inside story
    * http://thedo.osteopathic.org/2014/09/tedmed/
    * http://thedo.osteopathic.org/2014/10/video-can-physicians-avoid-burnout/
    * http://thedo.osteopathic.org/2014/10/video-concerned-ebola/

###Tue Feb 10 04:57:32 2015 CST
* migration notes
    * make sure subheads are h2
    * prolly won't use all pullquotes
        * see if you can shorten the ones we do use
    * get used to squeezing the browser to check how things are falling
    * use only one category per story

* [Creating Custom Fields for Attachments in Wordpress] (http://net.tutsplus.com/tutorials/wordpress/creating-custom-fields-for-attachments-in-wordpress/)

###Wed Feb 11 06:00:27 2015 CST
* [Responsible Social Share Links](https://jonsuh.com/blog/social-share-links/)

* use wp get attachment url over https: -- see the codex filter ref for wp_get_attacment_url

###Thu Feb 12 06:37:19 2015 CST
* [How To Remove HTML Tags From WordPress Comment Form?](http://www.inkthemes.com/how-to-remove-html-tags-from-wordpress-comment-form/)

* [Adding Custom Fields to a Custom Post Type, the Right Way](http://blog.teamtreehouse.com/adding-custom-fields-to-a-custom-post-type-the-right-way)

* [how to include a plugin with a theme](http://wordpress.stackexchange.com/questions/160255/how-to-include-plugin-without-activation)

* [15 commandments of front-end perf](https://alexsexton.com/blog/2015/02/the-15-commandments-of-front-end-performance/)

###Fri Feb 13 06:37:10 2015 CST
* [Integrating With WordPress’ UI: Meta Boxes on Custom Pages](http://code.tutsplus.com/articles/integrating-with-wordpress-ui-meta-boxes-on-custom-pages--wp-26843)

* [remove yoast seo from custom post type](https://wordpress.org/support/topic/remove-seo-from-custom-post-types)

###Sat Feb 14 09:49:19 2015 CST
* [exclude sticky posts from wp_query](http://wordpress.stackexchange.com/questions/958/excluding-sticky-posts-from-the-loop-and-from-wp-query-in-wordpress)

* [smashing on loop hacks](http://www.smashingmagazine.com/2009/06/10/10-useful-wordpress-loop-hacks/)

* [passing variables to get_template_part()](http://keithdevon.com/passing-variables-to-get_template_part-in-wordpress/)

* So, we can define a variable somewhere, like in functions.php, and grab it somewhere else using the ```global``` keyword ([source](https://wordpress.org/support/topic/passing-php-variable-between-template-files)). Ex.:

in functions.php
```php
$some_var = 'foo';
```
    
in footer.php (for example)  
```php
global $some_var;
```
###Sun Feb 15 08:52:23 2015 CST
* [WORDPRESS META BOXES: A COMPREHENSIVE DEVELOPER’S GUIDE](http://themefoundation.com/wordpress-meta-boxes-guide/)

* [twitter-api-php](https://github.com/J7mbo/twitter-api-php)

###Mon Feb 16 04:27:42 2015 CST
* [A Look at the WordPress HTTP API: A Practical Example of wp_remote_get](http://code.tutsplus.com/tutorials/a-look-at-the-wordpress-http-api-a-practical-example-of-wp_remote_get--wp-32109)

* [Parsing Twitter Feeds with PHP](http://blog.jacobemerick.com/web-development/parsing-twitter-feeds-with-php/)

* [wp_remote_get(), downloading and saving files](http://wordpress.stackexchange.com/questions/50094/wp-remote-get-downloading-and-saving-files)

* [Unit Tests for WordPress Plugins – An Introduction](https://pippinsplugins.com/unit-tests-wordpress-plugins-introduction/)

* [Plugin Unit Tests](https://github.com/wp-cli/wp-cli/wiki/Plugin-Unit-Tests)

* Unit testing our plugin with vvv
    1. ```cd /Users/psinco/vagrant-local```
    2. ```vagrant ssh```
    3. ```cd /srv/www/elit/htdocs```
    4. ```wp scaffold plugin-tests elit-social-pick```
        * Note: ```elit-social-pick``` is the name of our plugin
    5. ```cd $(wp plugin path --dir elit-social-pick)```
    6. ```bash bin/install-wp-tests.sh wordpress_test root root localhost latest```
    7. And here's how we run a test:
        ```phpunit```
      

* [How can I add an image upload field directly to a custom write panel?](http://wordpress.stackexchange.com/questions/4307/how-can-i-add-an-image-upload-field-directly-to-a-custom-write-panel/4413#4413)

    * See also: [wp_handle_sideload](http://codex.wordpress.org/Function_Reference/wp_handle_sideload)

* [Simon's test tweet](https://twitter.com/simonfraser75/status/564818451735519232)

###Tue Feb 17 03:55:18 2015 CST
* [How To: Upload Media via URL Programmatically in WordPress](http://theme.fm/2011/10/how-to-upload-media-via-url-programmatically-in-wordpress-2657/)

* [Add Page Templates to WordPress with a Plugin](http://www.wpexplorer.com/wordpress-page-templates-plugin/)

* [How to git diff between branches](http://stackoverflow.com/questions/9834689/comparing-two-branches-in-git): ```git diff branch_1..branch_2```

* [How to go back, say, 2 versions:](http://stackoverflow.com/questions/3559076/git-how-to-get-back-to-most-recent-version)```checkout -b temp_branch HEAD~2```

###Wed Feb 18 16:02:45 2015 CST
* [Building Responsive Visualizations with D3.js](https://blog.safaribooksonline.com/2014/02/17/building-responsible-visualizations-d3-js/)

###Thu Feb 19 13:18:15 2015 CST

###Fri Feb 20 04:16:43 2015 CST
* [Stop WordPress automatically adding <br> tags to post content](http://wordpress.stackexchange.com/questions/130075/stop-wordpress-automatically-adding-br-tags-to-post-content)

###Sat Feb 21 06:31:02 2015 CST
* [How do I get a YouTube video thumbnail from the YouTube API?](http://stackoverflow.com/questions/2068344/how-do-i-get-a-youtube-video-thumbnail-from-the-youtube-api)

* [Toggle a meta box in admin based on a JS event](http://wordpress.stackexchange.com/questions/18122/toggle-admin-metabox-based-upon-chosen-page-template)

###Sun Feb 22 05:37:07 2015 CST
* [Some ```posts_where``` filter examples]
    * [Show only sticky posts on home page in WordPress](http://polyetilen.lt/en/show-only-sticky-posts-on-home-page-in-wordpress)
    * [How to correctly call custom field dates into a posts_where filter using SQL statements](http://wordpress.stackexchange.com/questions/5546/how-to-correctly-call-custom-field-dates-into-a-posts-where-filter-using-sql-sta)

###Mon Feb 23 06:11:39 2015 CST
* [How To Perform Mass Search And Replace In WordPress](http://www.hongkiat.com/blog/how-to-search-and-replace-wordpress-in-blog-post/)

###Wed Feb 25 11:58:03 2015 CST
* [How to Make A Sidebar Widget To Display Recent Custom Posts](http://premium.wpmudev.org/blog/how-to-make-a-sidebar-widget-to-display-recent-custom-posts-by-jared-williams/)

* [Simple Recent Posts Widget](https://pippinsplugins.com/simple-recent-posts-widget/)

###Thu Feb 26 08:15:41 2015 CST
* Choropleth maps
    * [http://bl.ocks.org/NPashaP/a74faf20b492ad377312](http://bl.ocks.org/NPashaP/a74faf20b492ad377312)
    * [https://vida.io/documents/4vZ9mRGyepoyQxFcK](https://vida.io/documents/4vZ9mRGyepoyQxFcK)
    * [NYTimes](http://www.nytimes.com/2014/06/26/upshot/where-are-the-hardest-places-to-live-in-the-us.html?referrer=&abt=0002&abg=1)
* Bubble maps
    * [Let’s Make a Bubble Map](http://bost.ocks.org/mike/bubble-map/)
* [Codepen: Positioning a Tooltip on a SVG](http://codepen.io/recursiev/pen/zpJxs)

###Fri Feb 27 08:26:00 2015 CST
* [How to Make Your WordPress Site Blazing Fast](http://www.onextrapixel.com/2015/02/21/how-to-make-your-wordpress-site-blazing-fast/)

* Enabled gzip, etc. in .htaccess on the live site.
    * Is it working?

###Sat Feb 28 09:35:32 2015 CST

###Sun Mar  1 08:24:06 2015 CST

###Mon Mar  2 10:32:34 2015 CST
* Collecting email addrs
    * [Mail Subscribe List](https://wordpress.org/plugins/mail-subscribe-list/)
    * [Easy Sign Up](https://wordpress.org/plugins/easy-sign-up/)
    * [8 Best WordPress Mailing List Plugins For List Building Magic](http://www.bloggingwizard.com/wordpress-mailing-list-plugins-superior-list-building-power/)
    * [http://www.wpexplorer.com/wordpress-plugins-email-list/](http://www.wpexplorer.com/wordpress-plugins-email-list/)
    * [http://robertryan.ie/best-wordpress-mailing-list-plugin/](http://robertryan.ie/best-wordpress-mailing-list-plugin/)

* [How To Modify The Loop in archives.php To Have 11 Posts Per Page and CSS Styling](http://wordpress.stackexchange.com/questions/63424/how-to-modify-the-loop-in-archives-php-to-have-11-posts-per-page-and-css-styling)

###Tue Mar  3 08:44:45 2015 CST
* [https://developers.facebook.com/tools/debug/](https://developers.facebook.com/tools/debug/)

* Social sharing link formats:  

    * Facebook
    ```html
    https://www.facebook.com/sharer/sharer.php?u=URL_TO_SHARE
    ```

    * Twitter
    ```html
    https://twitter.com/intent/tweet?text=TWEET_TO_SHARE&url=URL_TO_SHARE&via=USERNAME_TO_SHARE
    ```

    * [LinkedIn](https://developer.linkedin.com/docs/share-on-linkedin)
    ```html
    <a href="https://www.linkedin.com/shareArticle
     ?mini=true
     &url=https%3A%2F%2Fjonsuh.com%2F
     &title=Jonathan%20Suh
     &source=https%3A%2F%2Fjonsuh.com%2F
     &summary=Short%20summary
     target="_blank">Share on LinkedIn</a>
    ```

    * [Pinterest](https://developers.pinterest.com/pin_it/)
    ```html
    <a href="https://www.pinterest.com/pin/create/button/
     ?url=https%3A%2F%2Fjonsuh.com%2F
     &media=https%3A%2F%2Fjonsuh.com%2Ficon.png
     &description=Short%20description
     &hashtags=web,development" 
     target="_blank">Share on Pinterest</a>
    ```

    *[Email](Quick Way to Add “Email This” Button to WordPress Posts)
    ```html
    <a href="mailto:?subject=<?php the_title();?>&amp;body=<?php the_permalink() ?>" title="Send this article to a friend!">Email this</a>">
    ```

###Wed Mar  4 05:38:28 2015 CST
* [CSS Experiments With a Search Form Input and Button](http://webdesign.tutsplus.com/tutorials/css-experiments-with-a-search-form-input-and-button--cms-22069)

* [When users leave the search box empty](https://css-tricks.com/users-leave-search-box-empty/)

###Thu Mar  5 04:16:46 2015 CST
* [Disable A Plugin’s CSS File](http://speakinginbytes.com/2012/09/disable-plugins-css-file/)

* [Disable any WordPress Plugin CSS stylesheet](http://tutswp.com/disable-wordpress-plugin-css-stylesheet/)

* [How WordPress Plugins Affect Your Site’s Load Time](http://www.wpbeginner.com/wp-tutorials/how-wordpress-plugins-affect-your-sites-load-time/)

* [Reliably get viewport dimensions in JS](https://gist.github.com/scottjehl/2051999)

###Fri Mar  6 04:35:52 2015 CST
* [https://tagboard.com/DOSnowDay2015/search](https://tagboard.com/DOSnowDay2015/search)

* [ResponsiveSlides.js](http://responsiveslides.com/)
    * [on github](https://github.com/viljamis/ResponsiveSlides.js)

* [Friendly responsive slides slider](https://wordpress.org/plugins/friendly-responsiveslides-slider/)

* [Meta Slider API](https://www.metaslider.com/documentation/metaslider_type_slider_parameters/)

###Sat Mar  7 09:33:09 2015 CST

###Sun Mar  8 18:46:02 2015 CDT
* [hashtag #unit-testing on wordcamp.tv] (http://wordpress.tv/tag/unit-testing/)

* [Unit Testing Wordpress Plugins+ Bryan Petty](https://www.youtube.com/watch?v=9qMUc9anJKQ)

* [susan buck on unit tests](https://github.com/susanBuck/notes/blob/master/05_Laravel/17_Testing.md)

* [tuts+The Theory of Unit Testing, Part 2](http://code.tutsplus.com/tutorials/the-theory-of-unit-testing-part-2--wp-26157)

* [Unit Testing for WordPress – Part 2: Writing Unit Tests](http://voceplatforms.com/2014/09/unit-testing-for-wordpress-part-2-writing-unit-tests/)

* [WP_UnitTestCase: The Hidden API](http://taylorlovett.com/2014/07/04/wp_unittestcase-the-hidden-api/) 
    * <small>3 STARS</small>

* [Unit Testing WordPress Plugins: The Right Way](https://catn.com/2012/08/17/unit-testing-wordpress-plugins-the-right-way/)

* [How to add unit testing and continuous integration to your WordPress plugin](http://ben.lobaugh.net/blog/84669/how-to-add-unit-testing-and-continuous-integration-to-your-wordpress-plugin)

* [+tuts on test-driven php](http://code.tutsplus.com/series/test-driven-php--net-27482)

###Mon Mar  9 05:59:30 2015 CDT
* [slides: Getting Started With Unit Testing by Alison Barrett](https://speakerdeck.com/aliso/getting-started-with-unit-testing)

* [Grumpy Programmer's Guide to Building Testable PHP Applications](https://leanpub.com/grumpy-testing)

* [The Grumpy Programmer's PHPUnit Cookbook](https://leanpub.com/grumpy-phpunit)

* PDF from Google engineer: [Guide: Writing Testable Code](http://misko.hevery.com/attachments/Guide-Writing%20Testable%20Code.pdf)

* [Smashing: Introduction To JavaScript Unit Testing](http://www.smashingmagazine.com/2012/06/27/introduction-to-javascript-unit-testing/)

###Wed Mar 11 09:53:01 2015 CDT

###Thu Mar 12 10:21:31 2015 CDT
* [tuts+: Object-Oriented Programming in WordPress: Building the Plugin I](http://code.tutsplus.com/articles/object-oriented-programming-in-wordpress-building-the-plugin-i--cms-21083)

* [psysh: a realtime developer console, interactive debuggger and repl for php](http://psysh.org/)

###Fri Mar 13 13:54:01 2015 CDT

###Mon Mar 16 17:24:05 2015 CDT

###Tue Mar 17 06:23:31 2015 CDT
* [stackexchange: Testing hooks callback](http://wordpress.stackexchange.com/questions/164121/testing-hooks-callback)

###Thu Mar 19 11:20:03 2015 CDT

###Wed Mar 25 14:49:08 2015 CDT
* [how to fix the RSS feed XML error](http://www.w3it.org/blog/wordpress-feed-error-output-solution-how-to/)
    * in wp-includes/feed-rss.php:

    ```php
    // this code is already there
    header('Content-Type: text/xml; charset=' . get_option('blog_charset'), true);
    $more = 1;

    // new code block, directly under the one above
    $out = ob_get_contents();
    $out = str_replace(array("\n", "\r", "\t", " "), "", $input);
    ob_end_clean();
    ```

###Mon Mar 30 09:12:01 2015 CDT
* github: [favicon cheat sheet](https://github.com/audreyr/favicon-cheat-sheet)

###Tue Mar 31 10:19:23 2015 CDT
* This [plugin](https://github.com/hlashbrooke/Post-Length-Indicator) gives an indication of how to see how much of a page is used by 
the story vs how much is used by comments. It uses jQuery offset() and height():
```js
var display_height = parseInt( $(window).height() );
var page_height = parseInt( $(document).height() );
var comments_top = parseInt( $('#comments').offset().top );
```

* So when I get this:
```
PHP Warning:  require_once(/tmp/wordpress//wp-includes/class-phpmailer.php): failed to open stream: No such file or directory in /srv/www/wordpress-develop/tests/phpunit/includes/mock-mailer.php on line 2
PHP Fatal error:  require_once(): Failed opening required '/tmp/wordpress//wp-includes/class-phpmailer.php' (include_path='/usr/local/src/composer/vendor/phpunit/php-text-template:/usr/local/src/composer/vendor/phpunit/php-timer:/usr/local/src/composer/vendor/phpunit/php-file-iterator:/usr/local/src/composer/vendor/phpunit/phpunit:/usr/local/src/composer/vendor/symfony/yaml:/usr/local/src/composer/vendor/phpunit/php-invoker:.:/usr/share/php:/usr/share/pear') in /srv/www/wordpress-develop/tests/phpunit/includes/mock-mailer.php on line 2
```
    * just re-setup our plugin unit tests (see Feb. 16 entry above)

###Fri Apr  3 08:32:47 2015 CDT
* [Five Ways to Secure Your WordPress Plugins](http://blog.vaultpress.com/2015/03/27/five-ways-to-secure-your-wordpress-plugins/)

###Fri Apr 10 08:48:33 2015 CDT
* Post transitions - these are typical statuses a new post goes through
    
    1. new -> auto-draft  [ old_status -> new_status ]
        * new -> inherit  [ another possibility ]
    2. auto-draft -> draft
    3. ... -> ... 
    4. draft -> publish

###Wed Apr 15 10:39:28 2015 CDT
* [Wordpress Plugin Boilerplate](http://wppb.io/)
    * Made by Tom McFarlin, who did the Tuts+ series on obj-oriented plugin devlopment

###Fri Apr 24 10:35:34 2015 CDT
* [howtocenterincss.com](http://howtocenterincss.com)

###Mon May 11 11:20:04 2015 CDT
* Example: [NYTimes slideshow](http://www.nytimes.com/slideshow/2015/05/08/nytnow/08eveningss.html#9)

* Slideshow: possible libraries
    * [jQuery Owl Carousel](http://owlgraphic.com/owlcarousel/)
        * JSFiddle: [example with caption](http://jsfiddle.net/nLJ79/)

    * [Royal Slider](http://dimsemenov.com/plugins/royal-slider/)

###Thu May 14 17:19:56 2015 CDT
* Today we added a function in functions.php to keep our elit-slideshow from flashing on the page before it's ready
    * [How to prevent Flash of Unstyled Content on your websites](http://www.techrepublic.com/blog/web-designer/how-to-prevent-flash-of-unstyled-content-on-your-websites/)
    * We added this code:
        * [Gist](https://gist.github.com/johnpolacek/3827270)

###Mon May 18 16:59:12 2015 CDT
* Today we added a couple new alternate templates for an article page. These have classes that use "--full-width".
    * '--full-width' items span the full width of article; that means they don't use (7 last of 8) in our grid

* We added our kicker meta box to the elit_slideshow custom post type, which we're bringing in as a plugin.
    * StackExchange: [Add Metabox to all custom post types](http://wordpress.stackexchange.com/questions/106859/add-metabox-to-all-custom-post-types)

* WPBeginner new: [12 Most Useful WordPress Custom Post Types Tutorials](http://www.wpbeginner.com/wp-tutorials/12-most-useful-wordpress-custom-post-types-tutorials/)

###Sun Aug  2 12:40:45 2015 CDT
* Include posts from authors in the search results where either their display name or user login matches the query string [Gist](https://gist.github.com/danielbachhuber/7126249)

###Fri Aug 28 16:42:39 2015 CDT
* Plugin: [WP REST API (WP API)](https://wordpress.org/plugins/json-rest-api/)

###Fri Dec 18 16:32:18 2015 CST
* Gist: [Include posts from authors in the search results where either their display name or user login matches the query string](https://gist.github.com/danielbachhuber/7126249)

###Thu Sep  1 11:13:05 2016 CDT
* Blog: [Add Custom Post Types to Tags and Categories in WordPress](https://premium.wpmudev.org/blog/add-custom-post-types-to-tags-and-categories-in-wordpress/)

###Tue Oct  4 12:36:10 2016 CDT
* Tuts+: [Creating Maintainable WordPress Meta Boxes - Envato Tuts+ Code Tutorials](https://code.tutsplus.com/series/creating-maintainable-wordpress-meta-boxes--cms-661)

###Wed Oct  5 12:47:19 2016 CDT
* Blog: [How to Create a Photo Album Gallery in WordPress without a plugin](http://www.wpbeginner.com/wp-tutorials/how-to-create-a-photo-album-gallery-in-wordpress-without-a-plugin/)

* Sitepoint: * [Adding a Stylish Lightbox Effect to the WordPress Gallery](https://www.sitepoint.com/adding-a-stylish-lightbox-effect-to-the-wordpress-gallery/)

###Thu Oct 27 17:25:26 2016 CDT
* [How to Add a Video Background to Your WordPress Site in 4 Easy Steps - WPMU DEV](https://premium.wpmudev.org/blog/add-video-background/?utm_expid=3606929-90.6a_uo883STWy99lnGf8x1g.0&utm_referrer=https%3A%2F%2Fwww.google.com%2F)

* [10 Guidelines for Better Website Background Videos](https://www.sitepoint.com/10-guidelines-better-website-background-videos/)

* [The Current Video Background Design Trends in Web Design](https://envato.com/blog/video-backgrounds-web-design-trends-usability-best-practices/)

* [the new code – Create Fullscreen HTML5 Page Background Video](http://thenewcode.com/777/Create-Fullscreen-HTML5-Page-Background-Video)
