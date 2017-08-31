<!--AUTHOR LIST START-->
<div class="col-md-4 col-sm-6">
    <div class="kode-author">
        <a href="<?php echo YII::app()->baseUrl."/galeri/view/id/".$data->id_portfolio; ?>"/><img src="<?php echo YII::app()->baseUrl; ?>/image/portfolio/big/<?php echo $data->image; ?>" alt="<?php echo $data->name; ?>"></a>
        <div class="kode-caption">
            <h4><?php echo $data->name; ?></h4>
            <p><?php echo $data->description; ?></p>
        </div>
    </div>
</div>
<!--AUTHOR LIST END-->