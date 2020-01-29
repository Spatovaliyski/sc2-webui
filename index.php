<?php echo file_get_contents('header.php'); ?>


	<section class="section-fullwidth">
		<div class="row">
			<div class="section-heading">
				<h2>PORTRAITS</h2>
			</div> <!-- .section-heading -->

			<div class="portraits">
				<ul class="portraits-list">
					<?php for ($i = 0; $i <= 30; $i+=1) : ?>
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
											<img src="public/media/kerrigan.png" alt="" />
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
		</div> <!-- .row -->
	</section> <!-- .section-fullwidth -->


<?php echo file_get_contents('footer.php'); ?>