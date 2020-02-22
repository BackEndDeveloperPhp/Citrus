<div class="products mt-5">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 offset-lg-3">
						<div class="section_title text-center">Our Brands and Fruit</div>
					</div>
				</div>
				<div class="row products_row">

				<?php
					$product = new Product();
					$rows = $product->select();
					//var_dump($rows);

				?>

				<?php foreach($rows as $row): ?>

					<!-- Product -->
					<div class="col-xl-4 col-md-6">
						<div class="product">
							<div class="product_image"><img src="images/<?= $row->image; ?>" alt=""></div>
							<div class="product_content">
								<div class="product_info d-flex flex-row align-items-start justify-content-start">
									<div>
										<div>
											<div class="product_name"><a href="#"><?= $row->title; ?></a></div>
											<div class="product_category">In <a href="#"><?= $row->description; ?></a></div>
										</div>
									</div>
	
								</div>
								<div class="product_buttons">
									<div class="text-right d-flex flex-row align-items-start justify-content-start">
										<div class="product_button product_fav text-center d-flex flex-column align-items-center justify-content-center">
											<div><div><img src="images/heart_2.svg" class="svg" alt=""><div>+</div></div></div>
										</div>
										<div class="product_button product_cart text-center d-flex flex-column align-items-center justify-content-center">
											<div><div><img src="images/cart.svg" class="svg" alt=""><div>+</div></div></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

				<?php  endforeach; ?>
						
				
				</div>
				<div class="row load_more_row">
					<div class="col">
						<div class="button load_more ml-auto mr-auto"><a href="#">load more</a></div>
					</div>
				</div>
			</div>
</div>