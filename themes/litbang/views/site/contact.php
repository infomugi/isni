<?php
$baseUrl = Yii::app()->theme->baseUrl; 
$url = Yii::app()->baseUrl; 
$this->pageTitle='Hubungi Kami';
?> 

<div class="post-article-area">
  <div class="classic-post-item">

    <div class="post-header">
      <h2><?php echo $this->pageTitle; ?></h2>
    </div>
    <div class="post-entry">
     <?php echo $this->renderPartial('_form_contact', array('model'=>$model)); ?>
    </div>

</div>
</div>


