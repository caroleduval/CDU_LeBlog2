<!-- Page Post -->
<div class="container">
    <div class="row">
        <div class="col-lg-10 col-md-11 mx-auto">
            <div class="post-heading">
                <h1 class="blue">
                    <?php echo $post->nettoyer($post->title()); ?>
                </h1>
                <h5 class="subheading text-justify">
                    <?php echo $post->nettoyer($post->standFirst()); ?>
                </h5>
                <span class="meta"><em>Edité par <strong><?php echo $post->nettoyer($post->author()); ?></strong>
                le <?php echo $post->nettoyer($post->lastModif()); ?></em></span>
            </div>
            <hr>
        </div>
    </div>
    <article>
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-md-11 mx-auto text-justify post">
                    <?php echo nl2br($post->nettoyer($post->content())) ; ?>
                </div>
            </div>
            <div class="row">
                <div id="poster" class="col-lg-10 col-md-11 mx-auto text-justify post">
                    <form method="post" action=<?php echo "\"form/update/".$post->nettoyer($post->id())."\""; ?>>
                        <input type="hidden" name="id"/>
                        <input class="btn btn-secondary pull-right" type="submit" value="Modifier cet article" />
                    </form>
                </div>
            </div>
        </div>
    </article>
</div>