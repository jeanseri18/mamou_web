@extends('layouts.app')
<!-- Font Awesome CDN -->

<style>
    .icon-circle {
        width: 80px;
        height: 80px;
        border-radius: 50%;
        background-color: #A51916;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto;
        color: white;
    }
.cards{
    min-height: 300px;
}
.cardservice{
    min-height: 220px;
}
    .bg-slide3 {
        background: linear-gradient(to right,#000000E0, #A51816EB), url('{{ asset('homebg.png') }}') no-repeat right;
        background-size: cover;
        background-position: right;
        height: 610px;
        padding-left: 20px; /* Espacement à gauche */
        padding-right: 20px; /* Espacement à droite */
    }

    .container-custom {
        max-width: 2000px; /* Ajuste cette valeur selon le besoin */
        margin: 0 auto; /* Centrer la section horizontalement */
    }
</style>

@section('content')
<section class="bg-slide3">
    <div class="container-custom row h-100 align-items-center justify-content-center">
        <div class="col-xl-11 col-lg-11 text-center">
            <h1 class="display-2 text-white">Bienvenue sur Mamou - Expert en BTP</h1>
            <p class="fs-3 text-white mb-4">Découvrez nos services de qualité en BTP. Que vous cherchiez à acheter, vendre ou entretenir des biens immobiliers, nous vous offrons des solutions adaptées à vos besoins. Explorez nos différentes prestations ci-dessous.</p>
            <a class="btn btn-primary btn-lg">Commencez</a>
        </div>
    </div>
</section>

<section>
    <div class="row text-center">
        <div class="col-md-12 px-lg-8 mb-8 mt-6">
            <h2 class="h1 fw-bold mt-3 text-primary">Comment Nous Travaillons</h2>
            <p class="mb-0 fs-4 text-dark">Une Collaboration Simplifiée pour assurer une expérience fluide et efficace, suivez ces étapes simples avec nous :</p>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <!-- Première colonne -->
            <div class="col-md-4 mb-4 ">
                <div class="card text-center cards shadow">
                    <div class="card-body">
                        <div class="icon-circle mb-4">
                            <i class="fas fa-comments fa-2x"></i>
                        </div>
                        <h3 class="card-title text-dark">Contactez-nous</h3>
                        <p class="card-text">
                            Contactez-nous pour discuter de vos besoins et de vos objectifs. 
                            Nous évaluerons votre projet et vous proposerons les meilleures solutions.
                        </p>
                    </div>
                </div>
            </div>
            <!-- Deuxième colonne -->
            <div class="col-md-4 mb-4 ">
                <div class="card text-center cards shadow">
                    <div class="card-body">
                        <div class="icon-circle mb-4">
                            <i class="fas fa-list-alt fa-2x"></i> <!-- Correction ici -->
                        </div>
                        <h3 class="card-title text-dark">Établir un plan</h3>
                        <p class="card-text">
                            Nous établissons un plan détaillé et un devis précis. Une fois que vous avez validé, 
                            nous passons à l’étape suivante.
                        </p>
                    </div>
                </div>
            </div>
            <!-- Troisième colonne -->
            <div class="col-md-4 mb-4 ">
                <div class="card text-center cards shadow">
                    <div class="card-body">
                        <div class="icon-circle mb-4">
                            <i class="fas fa-tools fa-2x"></i>
                        </div>
                        <h3 class="card-title text-dark">Mise en œuvre</h3>
                        <p class="card-text">
                            Notre équipe met en œuvre les travaux conformément à vos attentes 
                            et assure un suivi régulier pour garantir la qualité et le respect des délais.
                        </p>
                    </div>
                </div>
            </div>
        </div><br><br>
    </div>
</section><section class="py-5 bg-primary" style="background:#FF324A">
    <!-- container -->
    <div class="container">
        <div class="row">
            <!-- col -->
            <div class=" col-xl-12 col-md-12 col-12">
                <div class="row text-center">
                    <div class="col-md-12 px-lg-8 mb-8 mt-6">
                        <!-- heading -->
                        <h2 class="h1 fw-bold mt-3" style="color:white">Nos services</h2>
                        <!-- text -->
                        <p class="mb-0 fs-4" style="color:white">Découvrez nos services</p>
                    </div>
                </div>
                <div class="row gy-4">
                    <!-- Card 1: Achat-Rachat & Vente de Biens Immobiliers -->
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="card border-top border-4 card-hover-with-icon border-0 card-custom cardservice ">
                            <div class="card-body">
                            <br><br>    <center>
                                    <div class="icon-shape icon-lg rounded-circle bg-light mb-3 card-icon">
                                        <img src="../../assets/service/Achat-Rachat & Ventede Biens Immobiliers.svg" width="80px">
                                    </div>
                                    <h3 class="card-title text-dark">Achat-Rachat & Vente de Biens Immobiliers</h5>
                                </center>
                            </div>
                        </div>
                    </div>
                    <!-- Card 2: Élaboration de Plan Architectural -->
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="card border-top border-4 card-hover-with-icon border-0 card-custom cardservice ">
                            <div class="card-body">
                            <br><br>    <center>
                                    <div class="icon-shape icon-lg rounded-circle bg-light mb-3 card-icon">
                                        <img src="../../assets/service/Élaboration de PlanArchitectural.svg" width="80px">
                                    </div>
                                    <h3 class="card-title text-dark">Élaboration de Plan Architectural</h5>
                                </center>
                            </div>
                        </div>
                    </div>
                    <!-- Card 3: Topographique -->
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="card border-top border-4 card-hover-with-icon border-0 card-custom cardservice ">
                            <div class="card-body">
                            <br><br>    <center>
                                    <div class="icon-shape icon-lg rounded-circle bg-light mb-3 card-icon">
                                        <img src="../../assets/service/Topographie.svg" width="80px">
                                    </div>
                                    <h3 class="card-title text-dark">Topographique</h5>
                                </center>
                            </div>
                        </div>
                    </div>
                    <!-- Card 4: Voirie Réseaux et Divers -->
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="card border-top border-4 card-hover-with-icon border-0 card-custom cardservice ">
                            <div class="card-body">
                            <br><br>    <center>
                                    <div class="icon-shape icon-lg rounded-circle bg-light mb-3 card-icon">
                                        <img src="../../assets/service/Voirie Réseaux et Divers.svg" width="80px">
                                    </div>
                                    <h3 class="card-title text-dark">Voirie Réseaux et Divers</h5>
                                </center>
                            </div>
                        </div>
                    </div>
                    <!-- Card 5: Expertise Immobilière -->
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="card border-top border-4 card-hover-with-icon border-0 card-custom cardservice ">
                            <div class="card-body">
                            <br><br>    <center>
                                    <div class="icon-shape icon-lg rounded-circle bg-light mb-3 card-icon">
                                        <img src="../../assets/service/Expertise Immobilière_1.svg" width="80px">
                                    </div>
                                    <h3 class="card-title text-dark">Expertise Immobilière</h5>
                                </center>
                            </div>
                        </div>
                    </div>
                    <!-- Card 6: Main d'œuvre -->
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="card border-top border-4 card-hover-with-icon border-0 card-custom cardservice ">
                            <div class="card-body">
                            <br><br>    <center>
                                    <div class="icon-shape icon-lg rounded-circle bg-light mb-3 card-icon">
                                        <img src="../../assets/service/Main d'œuvre.svg" width="80px">
                                    </div>
                                    <h3 class="card-title text-dark">Main d'œuvre</h5>
                                </center>
                            </div>
                        </div>
                    </div>
                    <!-- Card 7: Entretien et Maintenance Bâtiment -->
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="card border-top border-4 card-hover-with-icon border-0 card-custom cardservice ">
                            <div class="card-body">
                            <br><br>    <center>
                                    <div class="icon-shape icon-lg rounded-circle bg-light mb-3 card-icon">
                                        <img src="../../assets/service/Entretien et MaintenanceBâtiment.svg" width="80px">
                                    </div>
                                    <h3 class="card-title text-dark">Entretien et Maintenance Bâtiment</h5>
                                </center>
                            </div>
                        </div>
                    </div>
                    <!-- Card 8: Vente de Matériaux et Matériel de Construction -->
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="card border-top border-4 card-hover-with-icon border-0 card-custom cardservice ">
                            <div class="card-body">
                            <br><br>    <center>
                                    <div class="icon-shape icon-lg rounded-circle bg-light mb-3 card-icon">
                                        <img src="../../assets/service/Vente de Matériaux etMatériel de Construction.svg" width="80px">
                                    </div>
                                    <h3 class="card-title text-dark">Vente de Matériaux et Matériel de Construction</h5>
                                </center>
                            </div>
                        </div>
                    </div>
                    <!-- Card 9: Architecture d’Intérieur -->
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="card border-top border-4 card-hover-with-icon border-0 card-custom cardservice ">
                            <div class="card-body">
                            <br><br>    <center>
                                    <div class="icon-shape icon-lg rounded-circle bg-light mb-3 card-icon">
                                        <img src="../../assets/service/Architecture d’Intérieur.svg" width="80px">
                                    </div>
                                    <h3 class="card-title text-dark">Architecture d’Intérieur</h5>
                                </center>
                            </div>
                        </div>
                    </div>
                    <!-- Card 10: Location et Vente d’Engins TP -->
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="card border-top border-4 card-hover-with-icon border-0 card-custom cardservice ">
                            <div class="card-body">
                            <br><br>    <center>
                                    <div class="icon-shape icon-lg rounded-circle bg-light mb-3 card-icon">
                                        <img src="../../assets/service/Location et Vented’Engins TP.svg" width="80px">
                                    </div>
                                    <h3 class="card-title text-dark">Location et Vente d’Engins TP</h5>
                                </center>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <!-- Colonne gauche : Image ou visuel -->
            <div class="col-lg-6 col-md-12 mb-4 mb-lg-0">
                <img src="https://via.placeholder.com/500" alt="Pourquoi nous choisir" class="img-fluid rounded">
            </div>
            
            <!-- Colonne droite : Texte -->
            <div class="col-lg-6 col-md-12">
                <h2 class="h1 fw-bold mt-3">Pourquoi nous choisir ?</h2>
                <p class="fs-5 mt-4"><strong>01. Ne vous tracassez plus avec plusieurs fournisseurs</strong></p>
                <p class="mb-4">Notre plateforme a été conçue pour vous permettre d’optimiser vos échanges avec vos fournisseurs de matériels et de matériaux de construction. Fini les nombreuses réflexions et recherches de bons fournisseurs pour votre projet immobilier ou de construction.</p>
                
                <p class="fs-5"><strong>02. Faîtes le choix du professionnalisme</strong></p>
                <p class="mb-4">Grâce à notre large réseau de fournisseurs et professionnels en BTP et immobilier, nous vous garantissons des matériels et des prestations de qualité. Choisissez le professionnalisme et la qualité pour un projet réussi.</p>
                
                <p class="fs-5"><strong>03. Ne perdez plus de temps</strong></p>
                <p>Notre équipe se tient à votre disposition pour vous assister et vous conduire tout au long du processus. Notre objectif est de vous éviter de perdre du temps dans les phases d’exécution de votre projet.</p>
            </div>
        </div>
    </div>
</section>
<div class="container py-xl-8 py-lg-7 py-5" data-bs-theme="dark" data-cue="zoomIn" data-show="true" style="animation-name: zoomIn; animation-duration: 600ms; animation-timing-function: ease; animation-delay: 0ms; animation-direction: normal; animation-fill-mode: both;">
    <div class="row px-lg-6 py-lg-6 p-4 align-items-center bg-primary rounded-3 g-lg-0">
        <div class="col-xl-5 col-md-7">
            <h2 class="text-white-stick">Planifiez une Consultation Gratuite en BTP</h2>
            <p class="text-white-stick">Maximisez la réussite de votre projet immobilier ou de construction avec une consultation gratuite de [Nom de l'Agence].</p>
        </div>
        <div class="offset-xl-2 col-xl-5 col-md-5">
            <div class="text-lg-center">
                <p class="text-white-stick">Nos experts vous proposeront des stratégies personnalisées pour réussir votre projet. Planifiez votre consultation dès maintenant !</p>
                <a href="#" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#bookConsultantModal">Réservez ma consultation </a>
            </div>
        </div>
    </div>
</div>

<section class="py-5 container">
    <div class="row card container">
        <div class="col-lg-12 text-left">
            <br>
            <h1 class="text-dark">Contactez-nous</h1>
            <p class="text-dark display-2 mb-4">Nous sommes là pour vous aider.</p>
        </div>

        <!-- Formulaire de contact pour demande de devis -->
        <div class="col-lg-12 ">
            <form action="/envoyer-devis" method="POST">
                <!-- CSRF token (si nécessaire avec Laravel) -->
                @csrf
<div class="row">
                <!-- Nom -->
                <div class=" col-lg-4 col-md-4">
                    <label for="name" class="form-label">Nom complet</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Votre nom" required>
                </div>

                <!-- Email -->
                <div class="mb-3 col-lg-4 col-md-4">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Votre adresse email" required>
                </div>

                <!-- Téléphone -->
                <div class="mb-3 col-lg-4 col-md-4">
                    <label for="phone" class="form-label">Téléphone</label>
                    <input type="text" class="form-control" id="phone" name="phone" placeholder="Votre numéro de téléphone" required>
                </div>

                <!-- Sujet -->
                <div class="mb-3 col-lg-12 col-md-12">
                    <label for="subject" class="form-label">Sujet</label>
                    <input type="text" class="form-control" id="subject" name="subject" placeholder="Sujet de votre demande (ex. Demande de devis BTP)" required>
                </div>

                <!-- Message -->
                <div class="mb-3 col-lg-12 col-md-12">
                    <label for="message" class="form-label">Message</label>
                    <textarea class="form-control" id="message" name="message" rows="5" placeholder="Décrivez votre projet de BTP" required></textarea>
                </div>

                <!-- Bouton de soumission -->
                <div class=" col-lg-3 col-md-">
                    <button type="submit" class="btn btn-primary  w-100">Envoyer ma demande</button>
                </div>
                </div>
                
            </form>
        </div>
    </div>
</section>

@endsection
