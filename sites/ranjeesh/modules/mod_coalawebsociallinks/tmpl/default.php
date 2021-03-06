<?php
defined('_JEXEC') or die('Restricted access');

/**
 * @package             Joomla
 * @subpackage          CoalaWeb Social Links Module
 * @author              Steven Palmer
 * @author url          https://coalaweb.com
 * @author email        support@coalaweb.com
 * @license             GNU/GPL, see /assets/en-GB.license.txt
 * @copyright           Copyright (c) 2017 Steven Palmer All rights reserved.
 *
 * CoalaWeb Social Links is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.

 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.

 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <https://www.gnu.org/licenses/gpl.html/>.
 */

?>
<?php if ($moduleClassSfx) : ?>
    <div class="<?php echo $moduleClassSfx ?>">
<?php endif ?>
<div class="cw-sl-width-<?php echo $module_width ?>" id="<?php echo $module_unique_id ?>">
    <?php if ($display_bm_sec) : ?>
        <div class="cw-social-mod">
            <?php if (($display_borders) && ($load_layout_css)) : ?>
                <div class="cw-social-mod-bookmark" style="border:<?php echo $border_width . 'px solid #' . $border_color_bm; ?>" >
                <?php else : ?>
                    <div class="cw-social-mod-bookmark">
                    <?php endif; ?>

                    <?php if ($display_title_bm) : ?>
                        <h<?php echo $title_format ?> style="color:<?php echo '#' . $title_color_bm ?>" class="<?php echo $title_align ?>">
                            <?php echo $title_bm; ?>
                        </h<?php echo $title_format ?>>
                    <?php endif; ?>
                        
                    <?php if ($display_text_bm) : ?>
                            <?php echo $text_bm; ?>
                    <?php endif; ?>
                        
                    <div class="<?php echo $icon_align ?>">

                        <ul class="cw-social-mod-icons-<?php echo $themes_icon ?>">
                            <?php
                            
                            if ($params->get("display_delicious_bm")) {
                                echo $helpFunc->getDeliciousBookmark($title, $link, $size, $linknofollow, $popup, $linkText);
                            }
                            if ($params->get("display_digg_bm")) {
                                echo $helpFunc->getDiggBookmark($title, $link, $size, $linknofollow, $popup, $linkText);
                            }
                            if ($params->get("display_facebook_bm")) {
                                echo $helpFunc->getFacebookBookmark($link, $size, $linknofollow, $popup, $appId, $linkText, $shareType);
                            }
                            if ($params->get("display_google_bm")) {
                                echo $helpFunc->getGoogleBookmark($title, $link, $size, $linknofollow, $googleIcon, $popup, $linkText);
                            }
                            if ($params->get("display_stumbleupon_bm")) {
                                echo $helpFunc->getStumbleuponBookmark($title, $link, $size, $linknofollow, $popup, $linkText);
                            }
                            if ($params->get("display_twitter_bm")) {
                                $via = substr($comParams->get('twitter_via'), 1);
                                $via = ($via ? '&amp;via=' . $via : '');
                                $hash = $comParams->get('twitter_hash');
                                $popupTweet = ($params->get('include_twitter_js', 1) ? '' : $popup);
                                echo $helpFunc->getTwitterBookmark($title, $link, $size, $linknofollow, $via, $hash, $popupTweet, $linkText);
                            }
                            if ($params->get("display_linkedin_bm")) {
                                echo $helpFunc->getLinkedInBookmark($title, $link, $size, $linknofollow, $popup, $linkText);
                            }
                            if ($params->get("display_reddit_bm")) {
                                echo $helpFunc->getRedditBookmark($title, $link, $size, $linknofollow, $popup, $linkText);
                            }
                            if ($params->get("display_newsvine_bm")) {
                                echo $helpFunc->getNewsvineBookmark($title, $link, $size, $linknofollow, $popup, $linkText);
                            }
                            if ($params->get("display_pinterest_bm")) {
                                echo $helpFunc->getPinterestBookmark($size, $linknofollow, $linkText);
                            }
                            if ($params->get("display_email_bm")) {
                                echo $helpFunc->getEmailBookmark($title, $link, $size, $linkText, $desc, $siteName);
                            }
                            if ($mobile && $params->get("display_whatsapp_bm")) {
                                echo $helpFunc->getWhatsappBookmark($title, $link, $size, $linknofollow, $linkText);
                            }
                            
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
        <?php endif; ?>
        <?php if ($display_f_sec) : ?>
            <div class="cw-social-mod">
                <?php if (($display_borders) && ($load_layout_css)) : ?>
                    <div class="cw-social-mod-follow" style="border:<?php echo $border_width . 'px solid #' . $border_color_f; ?>" >
                    <?php else : ?>
                        <div class="cw-social-mod-follow">
                        <?php endif; ?>
                            
                        <?php if ($display_title_f): ?>
                            <h<?php echo $title_format ?> style="color:<?php echo '#' . $title_color_f ?>" class="<?php echo $title_align ?>">
                                <?php echo $title_f; ?>
                            </h<?php echo $title_format ?>>
                        <?php endif; ?>
                            
                        <?php if ($display_text_f) : ?>
                            <?php echo $text_f; ?>
                        <?php endif; ?>
                            
                        <div class="<?php echo $icon_align ?>">

                            <ul class="cw-social-mod-icons-<?php echo $themes_icon ?>">
                                <?php
                                if ($params->get("display_facebook_f")) {
                                    echo $helpFunc->getFacebookFollow($linkfacebook, $size, $linknofollow, $popupFollow, $linkText);
                                }
                                if ($params->get("display_google_f")) {
                                    echo $helpFunc->getGoogleFollow($linkgoogle, $size, $linknofollow, $googleIcon, $popupFollow, $linkText);
                                }
                                if ($params->get("display_linkedin_f")) {
                                    echo $helpFunc->getLinkedinFollow($linklinkedin, $size, $linknofollow, $popupFollow, $linkText);
                                }
                                if ($params->get("display_twitter_f")) {
                                    echo $helpFunc->getTwitterFollow($linktwitter, $size, $linknofollow, $popupFollow, $linkText);
                                }
                                if ($params->get("display_rss_f")) {
                                    echo $helpFunc->getRssFollow($linkrss, $size, $linknofollow, $popupFollow, $linkText);
                                }
                                if ($params->get("display_myspace_f")) {
                                    echo $helpFunc->getMyspaceFollow($linkmyspace, $size, $linknofollow, $popupFollow, $linkText);
                                }
                                if ($params->get("display_vimeo_f")) {
                                    echo $helpFunc->getVimeoFollow($linkvimeo, $size, $linknofollow, $popupFollow, $linkText);
                                }
                                if ($params->get("display_youtube_f")) {
                                    echo $helpFunc->getYoutubeFollow($linkyoutube, $size, $linknofollow, $popupFollow, $linkText);
                                }
                                if ($params->get("display_dribbble_f")) {
                                    echo $helpFunc->getDribbleFollow($linkdribbble, $size, $linknofollow, $popupFollow, $linkText);
                                }
                                if ($params->get("display_deviantart_f")) {
                                    echo $helpFunc->getDeviantartFollow($linkdeviantart, $size, $linknofollow, $popupFollow, $linkText);
                                }
                                if ($params->get("display_contact_f")) {
                                    echo $helpFunc->getContactFollow($linkcontact, $linkTargetContact, $size, $linknofollow, $popupFollow, $linkText);
                                }
                                if ($params->get("display_mail_f")) {
                                    echo $helpFunc->getMailFollow($linkmail, $size, $linknofollow, $linkText);
                                }
                                if ($params->get("display_ebay_f")) {
                                    echo $helpFunc->getEbayFollow($linkebay, $size, $linknofollow, $popupFollow, $linkText);
                                }
                                if ($params->get("display_tuenti_f")) {
                                    echo $helpFunc->getTuentiFollow($linktuenti, $size, $linknofollow, $popupFollow, $linkText);
                                }
                                if ($params->get("display_behance_f")) {
                                    echo $helpFunc->getBehanceFollow($linkbehance, $size, $linknofollow, $popupFollow, $linkText);
                                }
                                if ($params->get("display_designmoo_f")) {
                                    echo $helpFunc->getDesignmooFollow($linkdesignmoo, $size, $linknofollow, $popupFollow, $linkText);
                                }
                                if ($params->get("display_flickr_f")) {
                                    echo $helpFunc->getFlickrFollow($linkflickr, $size, $linknofollow, $popupFollow, $linkText);
                                }
                                if ($params->get("display_lastfm_f")) {
                                    echo $helpFunc->getLastfmFollow($linklastfm, $size, $linknofollow, $popupFollow, $linkText);
                                }
                                if ($params->get("display_pinterest_f")) {
                                    echo $helpFunc->getPinterestFollow($linkpinterest, $size, $linknofollow, $popupFollow, $linkText);
                                }
                                if ($params->get("display_tumblr_f")) {
                                    echo $helpFunc->getTumblrFollow($linktumblr, $size, $linknofollow, $popupFollow, $linkText);
                                }
                                if ($params->get("display_instagram_f")) {
                                    echo $helpFunc->getInstagramFollow($linkinstagram, $size, $linknofollow, $popupFollow, $linkText);
                                }
                                if ($params->get("display_xing_f")) {
                                    echo $helpFunc->getXingFollow($linkxing, $size, $linknofollow, $popupFollow, $linkText);
                                }
                                if ($params->get("display_spotify_f")) {
                                    echo $helpFunc->getSpotifyFollow($linkspotify, $size, $linknofollow, $popupFollow, $linkText);
                                }
                                if ($params->get("display_tripadvisor_f")) {
                                    echo $helpFunc->getTripadvisorFollow($linktripadvisor, $size, $linknofollow, $popupFollow, $linkText);
                                }
                                if ($params->get("display_blogger_f")) {
                                    echo $helpFunc->getBloggerFollow($linkblogger, $size, $linknofollow, $popupFollow, $linkText);
                                }
                                if ($params->get("display_android_f")) {
                                    echo $helpFunc->getAndroidFollow($linkandroid, $size, $linknofollow, $popupFollow, $linkText);
                                }
                                if ($params->get("display_github_f")) {
                                    echo $helpFunc->getGithubFollow($linkgithub, $size, $linknofollow, $popupFollow, $linkText);
                                }
                                if ($params->get("display_customone_f")) {
                                    echo $helpFunc->getCustomoneFollow($linkcustomone, $linkTargetCustomone, $size, $linknofollow, $textcustomone, $popupFollow, $linkText);
                                }
                                ?>
                            </ul>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        </div>
<?php if ($moduleClassSfx) : ?>
    </div>
<?php endif ?>