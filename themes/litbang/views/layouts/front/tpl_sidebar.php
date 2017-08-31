<div class="sidebar-area">

        <div class="widget-item post-widget">
            <ul class="widget-post">
                <li class="active"><a data-toggle="tab" href="#terbaru">Terbaru</a></li>
                <li><a data-toggle="tab" href="#terpopuler">Terpopuler</a></li>
            </ul>
            <div class="tab-content">
                <div id="terbaru" class="tab-pane fade in active">
                    <div class="tab-comment">
                        <?php foreach (Post::getLastPost() as $data) { ?> 
                            <div class="tabcomment-single clearfix">
                                <div class="tabcomment-img">
                                <img src="<?php echo YII::app()->baseUrl."/image/news/small/".$data['image']; ?>" alt="<?php echo $data['title']; ?>" title="<?php echo $data['title']; ?>">
                             </div>
                             <div class="tabcomment-text">
                                <a href="<?php echo $data['url']; ?>"><?php echo $data['title']; ?></a>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
                <div id="terpopuler" class="tab-pane fade">
                    <div class="tab-comment">
                        <?php foreach (Post::getPopular() as $data) { ?> 
                            <div class="tabcomment-single clearfix">
                                <div class="tabcomment-img">
                                <img src="<?php echo YII::app()->baseUrl."/image/news/small/".$data['image']; ?>" alt="<?php echo $data['title']; ?>" title="<?php echo $data['title']; ?>">
                             </div>
                             <div class="tabcomment-text">
                                <a href="<?php echo $data['url']; ?>"><?php echo $data['title']; ?></a>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="widget-item category-widget">
            <div class="auth-box">
                <a href="#">Kategori</a>
            </div>
            <div class="widget-cat">
                <ul>
                    <?php foreach (Sub::getLink(8) as $data) { ?> 
                        <li><a href="<?php echo $data['url']; ?>"/><?php echo $data['name']; ?></a></li>
                        <?php } ?> 
                    </ul>
                </div>
            </div>

        </div>