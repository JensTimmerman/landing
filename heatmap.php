<?php include 'layout_top.php'; ?>
			
			<section>
				<div class="container">
					<div class="row">
						<div class="col-sm-10 col-sm-offset-1 text-center"><center>
							<?php
							$response = file_get_contents('http://bbx.kwitz.net/dev/heatmap/live.php');
							echo $response;
							?>
						</center></div>
					</div>

				</div>

			</section>
			
<?php include 'layout_bottom.php'; ?>
