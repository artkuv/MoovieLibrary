<?php
$pageTitle = 'Film';
require_once 'layout/header.php';
require_once 'layout/menu.php';
?>

			<div class="my-3 my-md-5">
				<div class="container">
					<div class="row">
						<div class="col-lg-4">
							<div class="card card-profile">
								<div class="card-header" style="background-image: url(./demo/photos/eberhard-grossgasteiger-311213-500.jpg);"></div>
								<div class="card-body text-center">
									<img class="card-profile-img" src="/public/demo/films/joker.jpg">

									<h3 class="mb-3">Joker</h3>


									<div class="header collapse d-lg-flex p-0" id="headerMenuCollapse">
									    <div class="container">
									        <div class="row align-items-center">
									            <div class="col-lg order-lg-first">
									                <ul class="nav nav-tabs border-0 flex-column flex-lg-row">
									                    <li class="nav-item">
									                        <a href="#" class="nav-link active"><i class="fe fe-plus"></i>Add</a>
									                    </li>
									                    <li class="nav-item">
									                        <a href="#" class="nav-link"><i class="fe fe-trash"></i>Delite</a>
									                    </li>
									                    <li class="nav-item">
									                        <a href="#" class="nav-link"><i class="fe fe-star"></i>Rate</a>
									                    </li>
									                </ul>
									            </div>
									        </div>
									    </div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-8">
							<div class="card">
								<ul class="list-group card-list-group">
									<li class="list-group-item py-5">
										<div class="media">
											<div class="media-body">
												<div>
													Release Year: 2019<br>
													Country: USA<br>
													Genre: Crime, Drama, Thriller<br>
													Duration: 122 minutes / 02:02<br>
													Budget: $ 55,000,000<br>
													Premiere: October 3, 2019<br>

													Director: Todd Phillips<br>
													Cast: Robert De Niro, Joaquin Phoenix, Marc Maron, Zazie Bitz, Shay Wigam<br><br>
													
													The story of one of the most famous, insane and dangerous comic book supervillains. In the 1980s, a brilliant criminal and manipulator in a clown makeup appeared in the city of Gotem, who called himself the Joker. Behind this pseudonym lies the once inconspicuous comedian Arthur Fleck. He returns home to his seriously ill mother and learns about his family's secret connections with the main city celebrity, billionaire Thomas Wayne.
												</div>
											</div>
										</div>
									</li>
								</ul>

							</div>
						</div>
					</div>
				</div>
			</div>

<?=  require_once 'layout/footer.php';?>

</body>
</html>