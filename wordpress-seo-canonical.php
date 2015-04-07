<?php
/* 
Plugin Name: WordPress SEO Canonical For FeedWordPress
Plugin URI: https://github.com/weirdmeetup/WordPress-SEO-Canonical
Description: Override Canoncial URL Meta Tag for FeedWordPress. This plugin required WordPress SEO Plugin.
Version: 0.1
Author: Edward Kim <onward.edkim@gmail.com>
Author URI: http://haruair.com
License: GPL v2
*/

add_filter('wpseo_canonical', 'weirdmeetup_wordpress_SEO_canonical_filter');

function weirdmeetup_wordpress_SEO_canonical_filter($canonical)
{
  $original = get_post_meta(get_the_ID(), 'syndication_permalink', true);
  if ($original != "" && $canonical != $original) {
    return $original;
  } else {
    return $canonical;
  }
}
?>
