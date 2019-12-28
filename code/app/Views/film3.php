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
									<img class="card-profile-img" src="/public/demo/films/Avengers.jpg">

									<h3 class="mb-3">Avengers 4: Final</h3>


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
													Genre: Action, Sci-Fi<br>
													Duration: 110 minutes / 01:50<br>
													IMDB: 8.6 (556 395)<br>
													Premiere: April 25, 2019<br>

													Director: Anthony Russo<br>
													Cast: Karen Gillan, Bradley Cooper, Bree Larson, Scarlett Johansson, Evangeline Lilly<br><br>
													
													The destructive power of Thanos incinerates earthly resources. The original goal of the cunning monster has almost been achieved, because half of humanity has been defeated, and survivors are helplessly waiting for the fatal fateful hour. There comes a moment when the only decisive battle can stop the monster or completely destroy the planet’s chances of survival. The brave team “Avengers 4: Final” will have to get together for a key fight. The morally devastated and suppressed superheroes barely find the patience to meet the next day. Fallen friends cannot be returned to fight the insidious villain, but their death should not be a useless victim.
													<br>
													Iron Man drifting through the Universe does not in vain leave a dying message and informs that he does not regret his past adventures. Proudly meeting death, the former leader instructively advises the Allies to continue the battle. Captain America, Thor, the Black Widow and other surviving associates are preparing to enter the final part of the war, but they need reinforcements. Suddenly, Ant-Man appears on the threshold of an underground headquarters with an unstoppable companion. The first recruits of the squad are going to risk everything they have, for the sake of joint resistance to the deadly destroyer. Will daredevils win an epic battle?


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