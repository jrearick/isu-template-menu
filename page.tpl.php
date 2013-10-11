	<div class="hwrapper" id="header">
		<div id="top-strip">
			<div class="grids-24">
				<div class="grid-8">
					<ul class="left">
						<li><a href="http://cymail.iastate.edu/">CyMail</a></li>
						<li><a href="http://exchange.iastate.edu/">Outlook</a></li>
						<li><a href="http://webct.its.iastate.edu/">WebCT</a></li>
						<li><a href="http://bb.its.iastate.edu/">Blackboard</a></li>
						<li><a href="http://accessplus.iastate.edu/">AccessPlus</a></li>
					</ul>
				</div>
				<div class="grid-16">
					<ul class="right">
						<?php
							foreach (range('A', 'Z') as $l)
								echo '<li class="idx"><a href="http://www.iastate.edu/index/', $l, '/">', $l, '</a></li>';
						?>
						<li class="border first"><a href="http://info.iastate.edu/">Directory</a></li>
						<li class="border"><a href="http://www.fpm.iastate.edu/maps/">Maps</a></li>
						<li class="border last"><a href="http://www.iastate.edu/contact/">Contact Us</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div id="ribbon">
			<div class="grids-24">
				<div class="grid-16">
					<h1 class="nameplate">
						<a accesskey="1" href="http://www.iastate.edu/">
							<img alt="Iowa State University" src="<?php print base_path() . drupal_get_path('theme', 'isu_template_base'); ?>/img/sprite.png"/>
						</a>
					</h1>
				</div>
				<div class="grid-8">
					<?php print $isu_search; ?>
					<div id="site-search"><?php print render($page['site_search']); ?></div>				
				</div>
			</div>
			<div class="grids-24">
				<div class="grid-12">
					<h2 class="site-title"><a href="<?php print $front_page; ?>"><?php print $site_name; ?></a></h2>
				</div>
				<div class="grid-12">
					<h2 class="site-tagline"><?php if ($site_slogan) print $site_slogan; ?></h2>
				</div>
			</div>

			<div class="grids-24 main-menu" id="main-nav">
				<?php print render($page['main-menu']); ?>
			</div>
			
		</div>
	</div>
	<div id="container">
		<div class="grids-24" id="titlebar">
			<div class="grids-24"><?php print render($page['titlebar']); ?></div>
		</div>
		<div class="grids-24">
			<div class="grid-5 sidebar" id="left-sidebar">
				<?php print render($page['sidebar_first']) ?>
			</div>
			<?php 
				// XXX: what is $picture?
				$picture = 0;
				if ((count($page['sidebar_right'])) || ($picture))
					$gridClass = 'grid-13';
				else
					$gridClass = 'grid-19';
			?>			
			<div class="grid-19" id="breadcrumb-tabs">
				<?php print $breadcrumb; ?>
				<?php print render($tabs); ?>
			</div>
			<div class="<?php echo $gridClass; ?>" id="content">
				<div class="header gutter">
					<?php
						if ($show_messages)
							echo $messages;
		
						if ($action_links)
						{
							echo '<ul class="action-links left">';
							print render($action_links);
							echo '</ul>';
						}
						
						print render($page['help']);
					?>
					<?php print render($page['above_content'])?>
					<?php if (count($page['right_corner'])) print render($page['right_corner']) ?>
					<?php echo '<h1>', $title, '</h1>'; ?>
					<?php
						//	dprint_r($variables);
						//	dprint_r($page['content']);
						//	print render($tabs); -- Moved above the page title
						//	print render($page['help']); -- See above
					?>
				</div>
				<div class="gutter">
					<?php print render($page['content']) ?>
				</div>
			</div>
			<?php if (count($page['sidebar_right'])) {?>
			<div class="grid-6 sidebar" id="right-sidebar">
				<?php print render($page['sidebar_right'])?>
			</div>
			<?php } ?>
		</div>
	</div>
	<div class="fwrapper grids-24">
		<div class="grids-24" id="footer">
			<div class="grid-3 first">
				<a class="nameplate" href="http://www.iastate.edu/"><img alt="Iowa State University" src="<?php print $base_path . drupal_get_path('theme', 'isu_template_base'); ?>/img/sprite.png"></a>
			</div>
			<div class="grid-21 last">
				<?php print render($page['footer'])?>
			</div>
		</div>
	</div>
