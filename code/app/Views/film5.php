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
									<img class="card-profile-img" src="/public/demo/films/Deadpool2.jpg">

									<h3 class="mb-3">Deadpool 2</h3>


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
													Release Date: 2018 <br>
                                                    Country: United States <br>
                                                    Genre: Action, Sci-Fi, Comedy, Adventure <br>
                                                    Premiere: May 17, 2018 <br>

                                                    Director: David Litch <br>
                                                    Cast: Morena Baccarin, Josh Brolin, Ryan Reynolds, Shiori Kutsuna, TJ Miller <br> <br>

                                                    Having survived the deadly attack of the bulls, the disfigured cafeteria chef is trying to fulfill his dream - to become the hottest bartender in Mayberry - and at the same time to cope with lost taste sensations. To restore the severity of feelings, as well as the streaming drive, Wade will have to fight with ninjas, a yakuza and a pack of sexually aggressive dogs, while he will go around the globe and understand the importance of family, friendship and taste - and at the same time he will discover a new craving for adventure and earn the coveted inscription on the circle "The best lover in the world."
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