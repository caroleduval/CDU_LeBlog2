<!-- Page Blog -->

<?php

foreach ($posts as $post)
{?>
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            <div class="post-preview">
                <a href=<?php echo "\"Post/index/".$post->nettoyer($post->id())."\"" ?>>
                    <h1 class="post-title blue">
                        <?php echo $post->nettoyer($post->title()); ?>
                    </h1>
                </a>
                <h4 class="post-subtitle text-justify">
                    <small><?php echo $post->nettoyer($post->standFirst()); ?></small>
                </h4>
                <p class="post-meta"><em>Mis à jour le <?php echo $post->nettoyer($post->lastModif()); ?></em></p>
                <a href=<?php echo "\"post/index/".$post->nettoyer($post->id())."\""; ?>>Lire l'article</a>
            </div>
            <hr>
        </div>
    </div>

<!-- Pagination -->    
    <?php } ?>
    <div class="clearfix">
        <?php
        if (($_GET["id"]+1)<=$nbPages)
        { ?> <a class="btn btn-secondary float-right page" href=<?php echo "\"blog/index/".($_GET["id"]+1)."\""; ?>>Articles anciens</a>
        <?php ;}
        if (($_GET["id"]-1)>0)
        { ?> <a class="btn btn-secondary float-right page" href=<?php echo "\"blog/index/".($_GET["id"]-1)."\""; ?>>Articles récents</a>
        <?php ;} ?>
    </div>
</div> 

