<!-- Page action article -->
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            <p>
                <?php
                if(isset($post))
                {echo "Gràce à ce formulaire, vous pouvez modifier le titre, le chapô, l'auteur et le contenu de l'article.";}
                else
                {echo "Gràce à ce formulaire, vous pouvez créer votre article.";}
                ?>
            </p>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-10 col-md-12 mx-auto">
            <form method="post" action="form/record/<?php if(isset($post)){echo $post->nettoyer($post->id());} ?>">
                <div class="control-group">
                    <div class="form-group floating-label-form-group controls">
                        <label>Titre</label>
                        <input type="text" class="form-control" placeholder="Titre" value="<?php if(isset($post)){echo $post->nettoyer($post->title());} ?>" id="title" name="title" required data-validation-required-message="Merci d'entrer un titre.">
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                <div class="control-group">
                    <div class="form-group floating-label-form-group controls">
                        <label>Auteur</label>
                        <input type="text" class="form-control" placeholder="Auteur" value="<?php if(isset($post)){echo $post->nettoyer($post->author());} ?>" id="author" name="author" required data-validation-required-message="Merci de préciser votre identité">
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                <div class="control-group">
                    <div class="form-group floating-label-form-group controls">
                        <label>Chapô</label>
                        <textarea rows="3" class="form-control" placeholder="Chapô" id="standFirst" name="standFirst" required data-validation-required-message="Veuillez rédiger un chapô."><?php if(isset($post)){echo $post->nettoyer($post->standFirst());} ?></textarea>
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                <div class="control-group">
                    <div class="form-group floating-label-form-group controls">
                        <label>Texte</label>
                        <textarea rows="10" class="form-control" placeholder="Texte" id="content" name="content" required data-validation-required-message="Merci de rédiger votre texte."><?php if(isset($post)){echo $post->nettoyer($post->content());} ?></textarea>
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                <input type="hidden" value="<?php if(isset($post)){echo $post->nettoyer($post->id());} ?>" id="id" name="id">
                <input type="hidden"/>
                <input class="btn btn-secondary" type="submit" value="Envoyer" />
            </form>
          </div>
    </div>
</div>