<?php echo file_get_contents('header.php'); ?>


	<section class="section-fullwidth">
		<div class="row">
			<header class="section-heading">
				<h2>PORTRAITS</h2>
			</header> <!-- .section-heading -->

			<main class="main">
				<div class="portraits">
					<ul class="portraits-list">
						<?php for ($i = 0; $i <= 45; $i+=1) : ?>
						<li class="portraits-item">
							<div class="portraits-container">
								<div class="frame-outer">
									<div class="frame frame-top-left"></div> <!-- .frame -->
									<div class="frame frame-top-right"></div> <!-- .frame -->
									<div class="frame frame-bottom-left"></div> <!-- .frame -->
									<div class="frame frame-bottom-right"></div> <!-- .frame -->
								</div> <!-- .frame-outer -->

								<div class="portraits-inner">
									<div class="portraits-frame">
										<div class="portraits-border">
											<div class="portrait-content">
												<picture class="portraits-thumbnail">
												<img src="public/media/kerrigan.jpg" alt="" />
											</picture> <!-- .portraits-thumbnail -->
											
											<h4>Level 100 Guru</h4>
											</div> <!-- .portrait-content -->
											
										</div> <!-- .portraits-content -->
									</div> <!-- .portraits-frame -->
								</div> <!-- .portraits-inner -->
							</div> <!-- .portraits-container -->
						</li>
						<?php
							endfor; 
						?>
					</ul> <!-- .portraits-list -->
				</div> <!-- .portraits -->

				<aside class="board">
					<h2 class="board-type">PORTRAIT</h2> <!-- .board-type -->
					<h1 class="board-title">2016 PROLEAGUE</h1> <!-- .board-title -->
					<div class="board-informational">
						<picture class="board-icon">#</picture> <!-- .board-icon -->
						<div class="board-meta">
							<h3 class="board-title-small">2016 Proleague Grand Finals</h3> <!-- .board-title-small -->
							<p class="board-description">Awarded to attendees or viewers of the 2016 Proleague Grand finals.</p> <!-- .board-description -->
						</div> <!-- .board-meta -->
						
					</div> <!-- .board-informational -->
					<time class="board-earned-date">Earned: September 14, 2016</time> <!-- .board-earned-date -->
				</aside> <!-- .portrait-board -->
			</main> <!-- .main -->
		</div> <!-- .row -->
	</section> <!-- .section-fullwidth -->


<?php echo file_get_contents('footer.php'); ?>