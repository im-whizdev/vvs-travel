

<?php include('header.php'); ?>

<div id="ultraHero" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#ultraHero" data-bs-slide-to="0" class="active"></button>
        <button type="button" data-bs-target="#ultraHero" data-bs-slide-to="1"></button>
        <button type="button" data-bs-target="#ultraHero" data-bs-slide-to="2"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active" style="background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.3)), url('photo-1544620347-c4fd4a3d5957.jpg'); background-size: cover; height: 90vh; background-position: center;">
            <div class="container h-100 d-flex align-items-center">
                <div class="text-white fade-in">
                    <h5 class="text-warning text-uppercase fw-bold mb-3" style="letter-spacing: 3px;">Voyagez en Première Classe</h5>
                    <h1 class="display-1 fw-extrabold mb-4">Le <b class="text-warning">Confort</b> à <br>Chaque Kilomètre</h1>
                    <p class="lead fs-4 mb-5">Découvrez nos nouveaux bus climatisés avec Wi-Fi et sièges confortables.</p>
                    <a href="#booking" class="btn btn-warning btn-lg px-5 py-3 fw-bold rounded-pill shadow-lg">RÉSERVER MAINTENANT</a>
                </div>
            </div>
        </div>
        <div class="carousel-item" style="background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.3)), url('photo-1586528116311-ad8dd3c8310d.jpg'); background-size: cover; height: 90vh; background-position: center;">
            <div class="container h-100 d-flex align-items-center">
                <div class="text-white">
                    <h5 class="text-warning text-uppercase fw-bold mb-3" style="letter-spacing: 3px;">Messagerie Express</h5>
                    <h1 class="display-1 fw-extrabold mb-4">Vos Colis en <br><b class="text-warning">Sécurité</b> Totale</h1>
                    <p class="lead fs-4 mb-5">Livraison garantie en 24h entre Douala, Yaoundé et l'Ouest.</p>
                    <a href="#booking" class="btn btn-warning btn-lg px-5 py-3 fw-bold rounded-pill shadow-lg">EXPÉDIER UN COLIS</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container" id="booking" style="margin-top: -80px; position: relative; z-index: 100;">
    <div class="card border-0 shadow-2xl rounded-5 overflow-hidden">
        <div class="row g-0">
            <div class="col-lg-4 bg-primary p-5 text-white d-flex flex-column justify-content-center">
                <h2 class="fw-bold">Prêt pour le <span class="text-warning">départ ?</span></h2>
                <p class="small text-white-50 mt-3">Choisissez votre service et profitez des meilleurs tarifs du marché camerounais.</p>
                <div class="mt-4">
                    <div class="d-flex align-items-center mb-3">
                        <i class="fas fa-check-circle text-warning me-2"></i> <span> Paiement Mobile Money Sécurisé</span>
                    </div>
                    <div class="d-flex align-items-center">
                        <i class="fas fa-check-circle text-warning me-2"></i> <span> Annulation Gratuite 2h avant</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 bg-white p-5">
                <ul class="nav nav-pills mb-4" id="pills-tab">
                    <li class="nav-item"><button class="nav-link active fw-bold px-4 me-2" data-bs-toggle="pill" data-bs-target="#pills-bus">TRAJETS ET HORAIRES</button></li>
                </ul>
                <div class="tab-content pt-2">
                    <div class="tab-pane fade show active" id="pills-bus">
                        <form class="row g-3">
                            <div class="col-md-4"><label class="form-label small fw-bold">DÉPART</label><select class="form-select border-0 bg-light p-3" name="depart"><option>Douala (Bessengue)</option><option>Douala (Brazzaville)</option><option>Douala (Mboppi)</option><option>Douala (Bepanda)</option><option>Yaoundé (Mvan)</option></select></div>
                            <div class="col-md-4"><label class="form-label small fw-bold">ARRIVÉE</label><select class="form-select border-0 bg-light p-3" name="arrive"><option>Yaoundé (Mvan)</option><option> Douala(Brazzaville)</option><option>Douala (Mboppi)</option><option>Douala (Bepanda)</option><option>Douala (Bessengue)</option></select></div>
                            <div class="col-md-4"><label class="form-label small fw-bold">HORAIRES</label><select class="form-select border-0 bg-light p-3" name="horaire"><option>19h30 - 22h00</option><option>22h00 - 00h00</option><option>7h30 - 12h30</option><option>13h00 - 17h00</option><option>18h30 - 21h00</option></select></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="container my-5 py-5">
    <div class="text-center mb-5">
        <h6 class="text-warning fw-bold text-uppercase">Pourquoi nous choisir ?</h6>
        <h2 class="display-5 fw-bold text-primary">Le Standard Global au Cameroun</h2>
    </div>
    <div class="row g-4 text-center">
        <div class="col-md-3">
            <div class="p-4 card-hover rounded-4">
                <img src="3135715.png" width="70" class="mb-4">
                <h5 class="fw-bold">Sécurité</h5>
                <p class="text-muted small">Suivi GPS et double équipage sur les longs trajets.</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="p-4 card-hover rounded-4">
                <img src="2830312.png" width="70" class="mb-4">
                <h5 class="fw-bold">Confort VIP</h5>
                <p class="text-muted small">Sièges inclinables en cuir et climatisation régulée.</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="p-4 card-hover rounded-4">
                <img src="2950614.png" width="70" class="mb-4">
                <h5 class="fw-bold">Wi-Fi Gratuit</h5>
                <p class="text-muted small">Restez connecté durant tout votre trajet.</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="p-4 card-hover rounded-4">
                <img src="3143460.png" width="70" class="mb-4">
                <h5 class="fw-bold">Colis Prioritaire</h5>
                <p class="text-muted small">Vos marchandises traitées avec le plus grand soin.</p>
            </div>
        </div>
    </div>
</section>

<section class="bg-light py-5">
    <div class="container">
        <div class="row g-3">
            <div class="col-md-8">
                <div class="rounded-4 overflow-hidden shadow" style="height: 400px;">
                    <img src="globvoysimg2.jpeg" class="w-100 h-100">
                </div>
            </div>
            <div class="col-md-4">
                <div class="rounded-4 overflow-hidden shadow mb-3" style="height: 190px;">
                    <img src="bus0.jpg" class="w-100 h-100">
                </div>
                <div class="rounded-4 overflow-hidden shadow" style="height: 195px;">
                    <img src="promo.jpg" class="w-100 h-100">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="container my-5 py-5">
    <h2 class="text-center fw-bold mb-5">Ce que disent <span class="text-warning">nos Voyageurs</span></h2>
    <div class="row g-4">
        <div class="col-md-4">
            <div class="bg-white p-4 shadow-sm border-start border-warning border-5 rounded-3">
                <div class="text-warning mb-2"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                <p class="fst-italic text-muted">"Le service VIP est incroyable. J'ai pu travailler sur mon ordinateur grâce au Wi-Fi pendant tout le trajet Douala-Yaoundé."</p>
                <div class="d-flex align-items-center mt-3">
                    <div class="bg-secondary rounded-circle text-white d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">MM</div>
                    <div class="ms-3 fw-bold small">Marc M. <span class="text-muted fw-normal"> - Entrepreneur</span></div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="bg-white p-4 shadow-sm border-start border-warning border-5 rounded-3">
                <div class="text-warning mb-2"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                <p class="fst-italic text-muted">"J'expédie mes marchandises chaque semaine. Jamais de casse, toujours à l'heure. Global Voyage est le plus fiable."</p>
                <div class="d-flex align-items-center mt-3">
                    <div class="bg-secondary rounded-circle text-white d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">SN</div>
                    <div class="ms-3 fw-bold small">Sandra N. <span class="text-muted fw-normal"> - Commerçante</span></div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="bg-white p-4 shadow-sm border-start border-warning border-5 rounded-3">
                <div class="text-warning mb-2"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></div>
                <p class="fst-italic text-muted">"Ponctualité exemplaire. Départ à 7h pile, arrivée sans stress. Je recommande vivement pour les voyages d'affaires."</p>
                <div class="d-flex align-items-center mt-3">
                    <div class="bg-secondary rounded-circle text-white d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">PJ</div>
                    <div class="ms-3 fw-bold small">Paul J. <span class="text-muted fw-normal"> - Cadre</span></div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include('footer.php'); ?>