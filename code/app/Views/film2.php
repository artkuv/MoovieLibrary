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
									<img class="card-profile-img" src="/public/demo/films/Irishman.jpg">

									<h3 class="mb-3">Irishman</h3>


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
													Genre: Crime, Drama, Historical<br>
													Duration: 209 min. / 03:29<br>
													IMDB: 8.7 (12 937)<br>
													Budget: $ 125,000,000<br>
													Premiere: November 27, 2019<br>

													Director: Martin Scorsese<br>
													Cast: Robert De Niro, Anna Paquin, Al Pacino, Joe Pesci, Alexa Palladino<br><br>
													
													The plot of this biographical motion picture is twisted around a guy named Frank Shirene. He served the motherland for many months and the service of the hem to an end. The man returned to his homeland and began life from scratch. Frank always tried to follow the law and not break it. The guy was friendly, and he had no enemies, because he tried to avoid conflicts. The protagonist respected the rules established by the state and honored them, trying to do the right thing. Shirene loved relatives and friends, trying to help and support them, giving him attention and care. He was a good example of an excellent citizen of the country. <br>

													However, his calm life was over when he met the brutal bandits on his life path. They violated the laws, now and then, committing various crimes. The protagonist was sure that the police would quickly arrest the villains and send them to prison, but this did not happen, the bandits did not even look. The criminals calmly continued to do their own atrocities, not even paying attention to moral human standards. The man could not sit back, he began to prepare for war, wanting to stop the arrogant bandits, inspiring fear to the local population.
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