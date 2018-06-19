<!-- Page Accueil -->


<div class="container" id="mavie" style="margin-bottom:50px;">
    <div class="row">
        <div class="col-lg-11 col-md-12 mx-auto">
            <h1 class="blue">Bienvenue !</h1>
            <div class="row">
                <div class="col-lg-10 col-md-10 mx-auto text-justify">
                    <p>Depuis très longtemps intéressée parce que l'on appelait encore il y a peu les <strong class="blue">"nouvelles technologies"</strong>, j'ai décidé, après 18 années de fonction Qualité, de me former aux langages informatiques.<br/>
                    Mon projet professionnel est d'arriver à concilier mes solides connaissances du monde de l'entreprise, à mes récents apprentissages en informatique afin de délivrer aux professionnels des solutions de mobilité.</p>
                    <p>Ce site, intégralement conçu en php par moi-même, trace l'avancement de ce projet au fil des mois, jusqu'à sa concrétisation.<br/>
                    Vous y trouverez évidemment des posts dans la partie <strong class="blue"><a href="Blog/index/1">Blog</a></strong>, mais aussi, si vous le désirez de quoi mieux me connaitre en consultant <strong class="blue"><a href="#moncv">mon CV</a></strong> ou en m'envoyant <strong class="blue"><a href="#formulairecontact">un message</a></strong>.</p>
                </div>
            </div>
        </div>
    </div>
</div>
    
<div id="moncv" class="container" style="margin-bottom:50px;">
    <div id="espace" style="height:70px;"></div>
    <div class="row">
        <div class="col-lg-11 col-md-12 mx-auto">
            <h1 class="blue">Curriculum Vitae</h1>
            <div class="row">
                <div class="col-lg-10 col-md-10 mx-auto">
                    <p>Vous trouverez ci-dessous mon CV mis à jour avec les dernières informations.<br/>
                    Vous pouvez le consulter et le télécharger via votre navigateur si vous le désirez.</p>
                    <p><a class="navbar-brand" href="Contenu/img/cv%202017.pdf">Voir mon CV !</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
    
<div class="container" id="formulairecontact">
    <div id="espace" style="height:70px;"></div>
    <div class="row">
        <div class="col-lg-11 col-md-12 mx-auto">
            <h1 class="blue">Me contacter</h1>
            <div class="row">
                <div class="col-lg-10 col-md-10 mx-auto">
                    <p>Vous souhaitez m'envoyer un mail pour obtenir des informations supplémentaires ?<br/> Remplissez le formulaire ci-dessous, je me ferai un plaisir de vous répondre !</p>
                    <form method="post" action="accueil/sendMail">
                        <div class="control-group">
                            <div class="form-group floating-label-form-group controls">
                                <label>Prénom</label>
                                <input type="text" class="form-control" placeholder="Votre prénom" id="prenom" name="prenom" required data-validation-required-message="Merci d'entrer votre prénom.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="control-group">
                            <div class="form-group floating-label-form-group controls">
                                <label>Nom</label>
                                <input type="text" class="form-control" placeholder="Votre nom" id="nom" name="nom" required data-validation-required-message="Merci d'entrer votre nom.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="control-group">
                            <div class="form-group floating-label-form-group controls">
                                <label>Adresse Mail</label>
                                <input type="email" class="form-control" placeholder="Votre adresse Mail" id="email" name="email" required data-validation-required-message="Merci d'entrer votre adresse e-mail.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="control-group">
                            <div class="form-group floating-label-form-group controls">
                                <label>Message</label>
                                <textarea rows="5" class="form-control" placeholder="Votre message" id="message" name="message" required data-validation-required-message="Merci d'entrer votre message."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <input type="hidden"/>
                        <input class="btn btn-secondary" type="submit" value="Envoyer" />
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>