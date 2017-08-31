<?php
/* @var $this PostController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Posts',
	);

$this->pageTitle='Posts List';
		?>

		<section class="col-xs-12">

			<span class="visible-xs">

				<?php echo CHtml::link('<i class="fa fa-plus"></i>',
					array('create'),
					array('class' => 'btn btn-primary btn-md','title'=>'Add Post'));
					?>

					<?php echo CHtml::link('<i class="fa fa-table"></i>',
						array('admin'),
						array('class' => 'btn btn-primary btn-md','title'=>'Manage Posts'));
						?>

					</span> 

					<span class="hidden-xs">

						<?php echo CHtml::link('New',
							array('create'),
							array('class' => 'btn btn-primary btn-flat','title'=>'New Post'));
							?>

							<?php echo CHtml::link('Manage',
								array('admin'),
								array('class' => 'btn btn-primary btn-flat','title'=>'Manage Post'));
								?>

							</span>

							<HR>


								<?php
								foreach(Yii::app()->user->getFlashes() as $key =>$message)
								{
									echo '<div class="alert alert-'.$key.'">'.$message.'</div>';
								}
								?>

								<div class="row">
									<div class="col-lg-12 col-md-12 col-sm-12">
										<ul class="nav nav-tabs tabs">
											<li class="active tab"><a href="#product" data-toggle="tab" aria-expanded="false" class="active"><span class="visible-xs"><i class="fa fa-bar-chart-o"></i></span> 
												<span class="hidden-xs">Product</span></a></li>

												<li class="tab"><a href="#portfolio" data-toggle="tab" aria-expanded="false"><span class="visible-xs"><i class="fa fa-bar-chart-o"></i></span> 
													<span class="hidden-xs">Portfolio</span></a>
												</li>

												<li class="tab"><a href="#news" data-toggle="tab" aria-expanded="false"><span class="visible-xs"><i class="fa fa-bar-chart-o"></i></span> 
													<span class="hidden-xs">News</span></a>
												</li>									

												<div class="indicator">
												</div>
											</ul>
										</div>
									</div>

									<div class="row">
										<div class="col-lg-12">
											<div class="tab-content profile-tab-content">

												<!-- END: TAB 1 -->
												<div class="tab-pane active" id="product">
													<div class="row">
														<div class="col-md-12">
															<!-- Stats : Todak -->


															<?php $this->widget('zii.widgets.CListView', array(
																'dataProvider'=>$dataPosts,
																'itemView'=>'_view',
																)); ?>


															</div>
														</div>
													</div>
													<!-- END: TAB 1 -->

													<!-- END: TAB 2 -->
													<div class="tab-pane active" id="portfolio">
														<div class="row">
															<div class="col-md-12">
																<!-- Stats : Week -->
																<div class="port">
																		<?php 
																		$this->widget('zii.widgets.CListView', array(
																			'dataProvider'=>$dataPortfolio,
																			'itemView'=>'_view_portfolio',
																			)); 
																			?>
																	</div>

																</div>
															</div>
														</div>
														<!-- END: TAB 2 -->

														<!-- END: TAB 3 -->
														<div class="tab-pane active" id="news">
															<div class="row">
																<div class="col-md-12">
																	<!-- Stats : Week -->

																	<?php $this->widget('zii.widgets.CListView', array(
																		'dataProvider'=>$dataNews,
																		'itemView'=>'_view',
																		)); ?>

																	</div>
																</div>
															</div>
															<!-- END: TAB 3 -->


														</div>
													</div>
												</div>

											</section>