<li class="list-group-item no-border">
	<a href="#" class="hover" id="<?php echo $data->id_contact; ?>">
		<span class="no-margin center-block"><?php echo $data->fullname; ?>
			<small class="pull-right"><?php echo $data->created_date; ?> 

				<?php
				echo CHtml::ajaxLink("<i class='fa fa-search'></i>",Yii::app()->createUrl("contact/detail"),
					array(
						'type'=>'POST',
						'url'=>"js:$(this).attr('href')",
						'data' => array( 'id' => $data->id_contact),
						'success'=>'function(data) { $("#viewModal .quickview p").html(data); 
					}'
					),
					array('href' => Yii::app()->createUrl( 'contact/detail' ),));
					?>
					
				</small>
			</span>
			<span class="no-margin">
				<i class="fa fa-circle pd-r-xs <?php if($data->view==1){ echo "text-success"; }else{ echo "text-warning"; } ?>  "></i><?php echo $data->title; ?>.</span>
			</a>
		</li>

