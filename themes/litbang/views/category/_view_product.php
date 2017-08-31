<div class="col-md-4 col-sm-6 col-xs-12">
	<div class="post-img">
		<a href="<?php echo YII::app()->baseUrl."/prodak/".$data->url; ?>"><img src="<?php echo YII::app()->baseUrl;?>/image/product/small/<?php echo $data->image; ?>" alt="<?php echo $data->name; ?>"></a>
		<div class="post-img-content">
			<h5>
				<span><?php echo $data->Brand->name; ?></span>
				<span><?php echo $data->Category->name; ?></span>
			</h5>
		</div>
	</div>
	<div class="col2-content">
		<h4><a href="<?php echo YII::app()->baseUrl."/prodak/".$data->url; ?>"><?php echo $data->name; ?></a></h4>
	</div>
</div>