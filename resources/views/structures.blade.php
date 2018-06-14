@extends('layouts.layout')

@section('title', "Comment ça marche")

@section('content')
<br />
    <h1 class="text-center">Vous êtes une structure de l'ESS</h1>
<br />

<section>
    <div class="container">
        <div class="row">
            <h4 class="border border-warning">Comment ça marche pour bénéficier du service La Place ?</h4>
        </div>
            <div class="row">
                <div class="col-4"><span>Inscription</span>
                    <p>Inscrivez-vous gratuitement, vous recevrez les infos du service La Place.
                    Nous vous contacterons rapidement pour une présentation du service La Place. 
                    Vous visualiserez les annonces partiellement.</p>
                </div>
                <div  class="col-4"><span>Adhésion et Abonnement</span>
                    <p>Adhérez au Pôle E2S et abonnez-vous au service La Place.
                    Nous réalisons avec vous un premier entretien d'analyse de vos besoins. 
                    Vous aurez accès à toutes les annonces du site.</p>
                </div>
                <div class="col-4"><span>Publication</span>
                    <p>Visualisez les annonces et publiez la vôtre sur le site depuis votre « espace membre ».
                    Bénéficiez de notre appui technique dans vos recherches.</p>
                </div>
                <div class="col-3"><span>Mise en lien</span>
                    <p>Nous vous mettons en lien avec nos partenaires et les acteurs du réseau sur le Pays de Vannes. Échangez avec les autres structures via la messagerie interne de la plate-forme.</p>
                </div>
                <div class="col-3"><span>Accompagnement juridique</span>
                    <p>Finalisez votre accord sur la plate-forme en validant une « fiche récapitulative de prêt ou prestation ». Téléchargez les documents juridiques adaptés à votre situation. 
                    Bénéficiez de notre accompagnement juridique pour vos démarches : mise à disposition de salarié, prestation, voire création de groupements d'employeurs.</p>
                    </div>
                <div class="col-3"><span>Contribution</span>
                    <p>Entrez votre facture dans votre espace membre, votre contribution à l'acte est calculée. 
                    Vous pouvez nous l'envoyer. Nous en accusons réception.</p>
                </div>
                <div class="col-3"><span>Contactez-nous</span>
                    <p>pour une présentation de notre accompagnement.
                    Retrouvez le tuto de la plate-forme numérique <a href="#">ici</a>.</p>
                </div>

            </div> <!-- ./row -->
         </div> <!-- ./container -->
    </section>

<!-- AVANTAGES -->
<section>
    <div class="container">
        <div class="row">
                <h4 class="border border-warning">Les avantages pour les structures qui s'engagent dans une démarche de mutualisation</h4>
                    <ul>
                        <li>Mutualiser les compétences</li>
                        <li>Renforcer ses liens avec ses partenaires</li>
                        <li>Intégrer / élargir son réseau ESS</li>
                        <li>Disposer d'un appui technique et d'un accompagnement juridique dans ses démarches de mise à disposition, de prestations, voire de création de groupements d'employeurs.</li>
                    </ul>

        <!-- BUTTON -->
            <div class="col-6">
                <!-- button Bénéficier d'une mise à disposition -->
                <p><button class="btn btn-warning btn-lg btn-block" type="button" data-toggle="collapse" data-target="#1" aria-expanded="false" aria-controls="1">Bénéficier d'une mise à disposition</button></p>
                <div class="collapse" id="1">
                    <div class="card card-block">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">vous consacrer à votre cœur de projet</li>
                            <li class="list-group-item">accéder à des ressources temporaires</li>
                            <li class="list-group-item">disposer de compétences sur des temps partiels (que vous ne pourriez avoir sur un temps plein).</li>
                        </ul>
                    </div>
                </div>
            </div> <!-- ./col-5 -->
            <!-- ./button Bénéficier d'une mise à disposition -->

                <!-- button Mettre à disposition un salarié -->
                <div class="col-6">
                    <p><button class="btn btn-warning btn-lg btn-block" type="button" data-toggle="collapse" data-target="#2" aria-expanded="false" aria-controls="2">Mettre à disposition un salarié</button></p>
                        <div class="collapse" id="2">
                            <div class="card card-block">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">développer et pérenniser le modèle économique de votre structure</li>
                                    <li class="list-group-item">optimiser le management de vos ressources humaines (évolution professionnelle, etc.)</li>
                                    <li class="list-group-item">optimiser les charges de personnel</li>
                                </ul>
                            </div>
                        </div>
                </div>
                <!-- ./button Mettre à disposition un salarié -->
</div>
</section>



<!-- <section>
    <div class="container">
        <div class="row">
            <div class="col"><h4>Les avantages pour « les salarié-e-s d'une structure de l'ESS »</h4>
                <ul>
                    <li>Diversifier ses expériences</li>
                    <li>Développer sa capacité d'adaptation</li>
                    <li>Monter en compétences</li>
                    <li>Valoriser son expertise</li>
                    <li>Conserver son emploi en cas de ralentissement de l'activité de la structure</li>
                    <li>Développer son employabilité *</li>
                    <li>Mettre du sens dans son travail comme engagement, répondant à des valeurs</li>
                </ul>
            </div>
        </div>
        <div class="row">
            <i>* Employabilité : « l’aptitude de chacun à trouver et conserver un emploi, à progresser au travail et à s’adapter au changement tout au long de la vie professionnelle » selon l'organisation internationale du travail.
            </i>
        </div>
    </div>
</section> -->

<section>
    <div class="container">
        <div class="row">
            <h4 class="border border-warning">Comment ça marche pour mettre à disposition un-e salarié-e ?</h4>
            </div>
        </div>
        <div class="row">
            <div class="col"><span>Accord préalable</span>
                <p>L'accord préalable du salarié est obligatoire. Un avenant à son contrat de travail doit être effectué. Pour chaque mission externe réalisée.</p>
            </div>
            <div class="col"><span>Durée</span>
                <p>La durée est adaptable. La mission externe peut être réalisée sur tout ou partie de son temps de travail.</p>
            </div>
            <div class="col"><span>Contrat de travail</span> 
                <p>Le contrat de travail est maintenu. C'est vous qui rémunérez ce salarié et exercez votre pouvoir disciplinaire envers ce salarié. 
                </p>
            </div>
            <div class="col"><span>Convention collective</span> 
                <p>Le salarié doit conserver le bénéfice de l'ensemble des dispositions conventionnelles dont il bénéficie au sein de votre structure, ainsi que ces avantages.</p>
            </div>
            <div class="col"><span>Responsabilité</span> 
                <p>Le salarié travaille en immersion dans l'entreprise hôte, sous la responsabilité fonctionnelle de l'un de ses dirigeants, tout en bénéficiant de ses installations collectives.</p>
                </div>
            <div class="col"><span>Employabilité</span> 
                <p>A l'issue de sa mission, le salarié retrouve son emploi au sein de votre structure, enrichi(e) par une nouvelle expérience professionnelle.
                </p>
            </div>
        </div>    
        <div class="row">
            <div class="col-12">
                <i>Une fois votre structure abonnée au service La Place, nous vous accompagnons dans vos démarches : rédactions de conventions de mise à disposition, avenant au contrat du salarié, etc. Nous vous mettons à disposition des modèles de documents juridiques adaptés.</i>
            </div>
        </div>
    </div>
</section>

@endsection