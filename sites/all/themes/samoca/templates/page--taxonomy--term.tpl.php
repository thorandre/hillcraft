<?php

/**
 * @file
 * Default theme implementation to display a single Drupal page.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/bartik.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['sidebar_second']: Items for the second sidebar.
 * - $page['header']: Items for the header region.
 * - $page['footer']: Items for the footer region.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see template_process()
 */
?>
				<div class="pushHeight">
				<img src="../../sites/all/themes/samoca/assets/images/indpat.png" width="700px" class="indPattern" alt="pattern"/>
				</div>		
				<div class="sixteen columns alpha omega">
					
					<div class="three columns">
						<img class="logo" src="<?php print $logo; ?>" alt="logo" width="100%" />
					</div>
					<div class="twelve columns">
						<?php if($main_menu): ?>
						<ul class="nav" style="float:right;  z-index: 2;">
						    <?php print theme('links__system_main_menu', array('links' => $main_menu, 'attributes' => array('class' => array('menu', 'links', 'inline', 'clearfix')))); ?>
						</ul>
						<?php endif; ?>
					</div>
				
					
				</div>
				
    			<div class="sixteen columns alpha omega">
    				<h3 class="pageTitle" style=" width:130px;">
					<?php print $title;?>
					</h3>
    			</div>
    			<div class="sixteen columns alpha produktvisning">
					<?php print $messages; ?>
					<ul class="four columns undermeny">
						<h3>Categories:</h3>
						<div style="margin-top: 15px;">
						<?php 
						print render($page['undermeny']); 
						
						?>
						<li class="last leaf dhtml-menu" id="dhtml_menu-408" data-thmr="thmr_15">
						<a href="/produkter" style="margin: 0 0 0 0.5em;"title="test (3)" data-thmr="thmr_16">All products</a>
						</li>
						</div>
					</ul>
					<div class="twelve columns alpha omega">
						
		            <?php print render($page['content']); ?>           
		            </div>
					
					
				</div>	
				<footer class="sixteen columns">
						<?php print render($page['footer']); ?>
					</footer>