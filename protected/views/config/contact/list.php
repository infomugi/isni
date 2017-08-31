<?php
/* @var $this ContactController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Contacts',
	);

$this->pageTitle='List Message - '.$status;
$baseUrl = Yii::app()->theme->baseUrl; 
$url = Yii::app()->baseUrl."/"; 
$cs = Yii::app()->getClientScript();
Yii::app()->clientScript->registerCoreScript('jquery');
?>
<section class="layout">

	<aside class="sidebar-250 canvas-right bg-white bd-t">
		<header class="header navbar bd-b pd-l-md pd-r-md">
			<a href="javascript:;" class="btn btn-primary btn-outline btn-block navbar-btn">
				<small>COMPOSE NEW MAIL</small>
			</a>
		</header>
		<div class="content-wrap no-padding">
			<nav role="navigation">
				<div class="no-padding">
					<ul class="nav nav-pills nav-stacked">

						<li>
							<a href="<?php echo $url;?>contact/unread">
								Inbox <span class="badge pull-right bg-warning"><?php echo Contact::model()->getUnreadCountMessage(); ?></span>
							</a>
						</li>
						<li>
							<a href="<?php echo $url;?>contact/read">
							Read <span class="badge pull-right bg-success"><?php echo Contact::model()->getReadCountMessage(); ?></span>
							</a>
						</li>  

					</aside>


					<aside class="sidebar-300 bg-white bd-l bd-r bd-t">
						<header class="header navbar clearfix bd-b">
							<p class="navbar-text"><?php echo $status; ?></p>
							<div class="btn-group pull-right mg-r-sm">
								<button type="button" class="btn btn-sm btn-white navbar-btn">
									<i class="fa fa-chevron-left"></i>
								</button>
								<button type="button" class="btn btn-sm btn-white navbar-btn">
									<i class="fa fa-chevron-right"></i>
								</button>
							</div>
						</header>
						<div class="content-wrap no-padding">

							<ul class="list-group no-radius pd-b-lg" style="margin: 0 -1px;">

								<?php $this->widget('zii.widgets.CListView', array(
									'dataProvider'=>$dataProvider,
									'itemView'=>'_view_message',
									)); ?>



								</ul>
							</div>
						</aside>

						<section class="main-content">
							<div class="content-wrap clearfix">
								<div id="viewModal">
									<div class="quickview">
										<p>Details</p>
									</div>
								</div>
							</div>

							<div class="site-overlay"></div>
						</section>

					</section>