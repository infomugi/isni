<?php
$this->pageTitle= "Produk";
  ?>

  <div class="main-container col1-layout">
    <div class="container">
      <div class="row">
        <div class="col-main col-sm-12 col-xs-12">
           

    <?php $this->widget('zii.widgets.CListView', array(
      'dataProvider'=>$dataProvider,
      'itemView'=>'_view_product',
      'summaryText'=>''
      )); ?>
             <div class="pagination-area ">
             </div>
           </div>
       </div>
     </div>
   </div>

   <HR>