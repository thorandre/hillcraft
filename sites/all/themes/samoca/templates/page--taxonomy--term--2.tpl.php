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
					<?php print $title; ?>
					</h3>
    			</div>
    			    			<div class="sixteen columns alpha produktvisning">
					<?php print $messages; ?>
					<ul class="four columns undermeny">
						<h3>Languages:</h3>
						<div style="margin-top: 15px;">
		           		<?php print render($page['spraakmeny']);?>
						</div>
					</ul>
					<div class="twelve columns alpha omega lastNyhet">
		            <?php print render($page['content']); ?>           
		           </div>
					
					
				</div>	
				<footer class="sixteen columns">
						<?php print render($page['footer']); ?>
					</footer>