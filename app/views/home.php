<?php require_once (ROOT.'app/views/header.php');?>

<!-- About-->
<section class="about-section margeAndRounded text-center" id="about">
    <div class="anchor">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <h2 class="text-white mb-4"> A propos de moi </h2>
                    <div class="text-white" id="textAbout">
                        <?=$about[0]?>
                    </div>
                    <a class="btn btn-secondary btn-sm" href="#projects">Mon livre</a>
                    <a class="btn btn-secondary btn-sm" href="#projects">Mes roles</a>
                </div>
            </div>
            <figure>
            <img class="img-fluid" src="public/images/book-picture1.png" alt="3 livres les uns sur les autres" />
            </figure>
            
        </div>
    </div>
</section>


<!-- Projects-->
<section class="projects-section margeAndRounded bg-light" id="projects">
    <div class="anchor">
        <div class="container">
            <div class="row align-items-center no-gutters mb-4 mb-lg-5">
                <div class="col-xl-8 col-lg-7"><figure><img class="img-fluid mb-3 mb-lg-0" src="public/images/alaska4.jpg" alt="un train pret à partir pour l'Alaska" /></figure></div>
                <div class="col-xl-4 col-lg-5">
                    <div class="featured-text text-center text-lg-left">
                        <h4>Un billet simple pour l'Alaska</h4>
                        <p class="text-black-50 mb-0" id="bookPresentation">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque ac sem rhoncus libero venenatis malesuada.</p>
                        <a class="btn btn-secondary btn-sm" href="/articles">Commencer la lecture</a>
                    </div>
                </div>
            </div>
            
            <table class="table table-hover">
                <thead>
                    <tr>
                    <th scope="col">Pièces</th>
                    <th scope="col">Metteur en scène</th>
                    <th scope="col">Rôle</th>
                    <th scope="col">Années</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">L'étrange Noel de Monsieur Patate</th>
                        <td>Tim Broshas</td>
                        <td>Monsieur Patate</td>
                        <td>2020</td>
                    </tr>
                    <tr>
                        <th scope="row">Hamlet</th>
                        <td>Arnold Albert Schweitzer</td>
                        <td>Le doux prince</td>
                        <td>1993</td>
                    </tr>
                    <tr>
                        <th scope="row">Starpers Trooship</th>
                        <td>Pipo klendathu</td>
                        <td>Rico</td>
                        <td>1997</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>
<div class="anchor" id="signup">
</div>

<!-- Signup-->
<section class="signup-section margeAndRounded">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-lg-8 mx-auto text-center">
                <h2 class="text-white">Bonne lecture à tous et n'hésitez pas à écrire un petit commentaire.</h2>
            </div>
        </div>
    </div>
</section>

<!-- Contact-->
<section class="contact-section margeAndRounded bg-black">
    <div class="container">
        <div class="row">
            <div class="col-md-4 mb-3 mb-md-0">
                <div class="card py-4 h-100">
                    <div class="card-body text-center">
                        <i class="fas fa-map-marked-alt mb-2"></i>
                        <h4 class="text-uppercase m-0">Boite Postale</h4>
                        <hr class="my-4" />
                        <div class="small text-black-50"><?=$contacts[0]['adress']?></div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3 mb-md-0">
                <div class="card py-4 h-100">
                    <div class="card-body text-center">
                        <i class="fas fa-envelope mb-2"></i>
                        <h4 class="text-uppercase m-0">Email</h4>
                        <hr class="my-4" />
                        <div class="small text-black-50"><?=$contacts[0]['email']?></div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3 mb-md-0">
                <div class="card py-4 h-100">
                    <div class="card-body text-center">
                        <i class="fas fa-mobile-alt mb-2"></i>
                        <h4 class="text-uppercase m-0">Tatoo</h4>
                        <hr class="my-4" />
                        <div class="small text-black-50"><?=$contacts[0]['phone']?></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="social d-flex justify-content-center">
            <a class="mx-2" href="<?=$contacts[0]['twitter']?>"><i class="fab fa-twitter"></i></a>
            <a class="mx-2" href="<?=$contacts[0]['facebook']?>"><i class="fab fa-facebook-f"></i></a>
            <a class="mx-2" href="https://github.com/s-als/Projet4BlogEcrivain"><i class="fab fa-github"></i></a>
        </div>
    </div>
</section>