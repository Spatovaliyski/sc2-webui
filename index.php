<?php echo file_get_contents('header.php'); ?>


	<section class="section-fullwidth">
		<div class="row">
			<header class="section-heading">
				<h2>PORTRAITS</h2>
			</header> <!-- .section-heading -->

			<main class="main">
				<div class="portraits">
					<ul class="portraits-list">
						<?php echo file_get_contents('portraits-library.php'); ?>
					</ul> <!-- .portraits-list -->
				</div> <!-- .portraits -->

				<aside class="board">
					<div class="board-informational-main">
						<h2 class="board-type">PORTRAIT</h2> <!-- .board-type -->
						<h1 class="board-title">2016 PROLEAGUE</h1> <!-- .board-title -->
							<div class="board-informational">
								<picture class="board-icon" data-thumb><img data-thumb src="https://google.com/" alt="" /></picture> <!-- .board-icon -->
								<div class="board-meta">
									<h3 class="board-title-small">2016 Proleague Grand Finals</h3> <!-- .board-title-small -->
									<p class="board-description">Awarded to attendees or viewers of the 2016 Proleague Grand finals.</p> <!-- .board-description -->
								</div> <!-- .board-meta -->
							
							</div> <!-- .board-informational -->
							<time class="board-earned-date">Earned: September 14, 2016</time> <!-- .board-earned-date -->
						</aside> <!-- .portrait-board -->
					</div> <!-- .board-informational-main -->
			</main> <!-- .main -->
		</div> <!-- .row -->
	</section> <!-- .section-fullwidth -->


<?php echo file_get_contents('footer.php'); ?>