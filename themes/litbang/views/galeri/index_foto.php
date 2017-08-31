  <!--CONTENT START-->
  <div class="kode-content padding-tb-50">
    <!--TOP AUTHERS START-->
    <div class="container">
        <div class="row">

            <?php $this->widget('zii.widgets.CListView', array(
                'dataProvider'=>$dataProvider,
                'itemView'=>'_view_foto',
                )); ?>

            </div>
        </div>
        <!--TOP AUTHERS END-->
    </div>
    <!--CONTENT END-->
