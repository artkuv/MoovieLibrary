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
									<img class="card-profile-img" src="/public/demo/films/Venom.jpg">

									<h3 class="mb-3">Venom</h3>


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
													Release Year: 2018<br>
													Country: USA<br>
													Genre: Action, Sci-Fi<br>
													Duration: 140 minutes / 02:20<br>
													Budget: $ 140,000,000<br>
													Premiere: October 4, 2018<br>

													Director: Ruben Fleischer<br>
													Cast: Tom Hardy, Michelle Williams, Jenny Slate, Woody Harrelson, Reese Ahmed<br>
													<br>
													
													The film “Venom” tells the amazing story of the appearance of the sworn enemy of the famous and beloved by many people - the spider. But this is not a film about the next confrontation between two people endowed with superpowers. This is a completely different story. Venom is an alien substance that enters our planet in the form of deoxyribonucleic acid (DNA). It cannot exist and develop independently, a shell is needed that will allow Venom to destroy the Earth. DNA enters the body of journalist Eddie Brock. DNA is capable of destroying everything that is human inside Eddie. A long struggle begins between Man and Universal Evil. In the film there is an internal psychological struggle between an ordinary person and Evil, which can give superpowers, but destroy the personality. How will this struggle end? And why is it almost impossible to resist it? Why did you need another hero who intervenes in this fight?
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