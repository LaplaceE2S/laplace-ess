@extends('layouts.layout')

@section('title', "Comment ça marche")

@section('content')
<br />
    <h1 class="text-center">Vous êtes une structure de l'ESS</h1>
<br />

    <div class="container">
        <div class="row">
            <h4 class="pb-3"><u>Comment ça marche ?</u></h4>
        </div>
            <div class="row no-gutter">
                <div class="col"><img src="./images/labographieIcons/1-Adhesionbis.png" alt="inscription"/>
                    <p>Inscrivez-vous gratuitement. Nous vous contactons pour vous proposer <b>une démonstration du service La Place</b>. Vous visualiserez les annonces partiellement.</p>
                </div>
                <div class="col"><img src="./images/labographieIcons/2-Adhesionbis.png" alt="inscription"/>
                    <p>Adhérez au Pôle E2S et abonnez-vous au service La Place. Vous signez une <b>charte d'engagement</b> au service. Nous réalisons avec vous un  entretien d'analyse de vos besoins.</p>
                </div>
                <div class="col"><img src="./images/labographieIcons/3-Recherche.png" alt="inscription"/>
                    <p><b>Recherchez</b> et visualisez les annonces dans leur intégralité.<b>Publiez</b> la vôtre sur le site depuis votre « espace membre ». Bénéficiez de notre<b> appui technique.</b></p>
                </div>
                <div class="col"><img src="./images/labographieIcons/4-MiseEnLien.png" alt="inscription"/>
                    <p>Lorsqu'une annonce vous intéresse,<b>échangez</b> via la messagerie interne avec la structure concernée. Finalisez votre accord grâce à une « fiche récapitulative de prêt ou prestation ».></p>
                </div>
                <div class="col"><img src="./images/labographieIcons/5-Juridique.png" alt="inscription"/>
                    <p>Bénéficiez de notre <b>accompagnement juridique</b> pour vos démarches : mise à dispositionde salarié, prestation, voire création de groupements d'employeurs.</p>
                </div>
                <div class="col"><img src="./images/labographieIcons/6-Contribution.png" alt="inscription"/>
                    <p>Depuis la « fiche récap », nous calculons une <b>contribution à l'acte</b>, au service La Place. Nous adressons la facture à la structure qui propose une compétence.</p>
                </div>
               
            <div class="col-12">
                <a class="btn btn-success" href="{{ route('contact')}}" role="button">Contactez-nous</a>
            </div>
         </div> <!-- ./row -->   

        <div class="row">
            <h4 class="pt-3"><u>Quels sont mes avantages si j'engage ma structure auprès du service La Place ?</u></h4>
        </div>

        <div class="col">
            <ul>
                <li>&ndash; Mutualiser des compétences.</li>
                <li>&ndash; Disposer d'un appui technique et d'un accompagnement juridique dans mes démarches de mises à disposition, de prestations, voire de créations de groupements d'employeurs.</li>
                <li>&ndash; Participer à la consolidation, voire à la création d'emplois sur le territoire.</li>
                <li>&ndash; Intégrer / élargir et renforcer mon réseau ESS.</li>
            </ul>
        </div>
      
        <div class="row">
            <h4 class="pt-3"><u>Qu'est-ce que la mise à disposition ?</u></h4>
            <p>La Place vous accompagne à réaliser vos prêts de main d’œuvre ponctuels, reconductibles, à but non lucratif, réalisés sur la base du coût réel.</p>
        </div>
            <div class="col">
                <h4>&rarr; Bénéficier d'une mise à disposition, c'est:</h4>
                <ul>
                    <li>&bull; vous consacrer à votre cœur de projet</li>
                    <li>&bull; accéder à des ressources temporaires qualifiées</li>
                    <li>&bull; disposer de compétences sur un temps limité (que vous ne pourriez avoir sur un temps plein).</li>
                </ul>
            </div>
            <div class="col">
                <h4>&rarr; Mettre à disposition un-e salarié-e, c'est:</h4>
                <ul>
                    <li>1. développer et pérenniser le modèle économique de votre structure</li>
                    <li>2. optimiser le management de vos ressources humaines (évolution professionnelle, etc.)</li>
                    <li>3. maintenir le contrat de travail de vos salarié-e-s, même en période de difficultés</li>
                    <li>4. maintenir et développer les compétences de vos salarié-e-s</li>
                </ul>
            </div>

        <div class="row">
            <h4 class="pb-3"><u>Comment ça marche avec La Place ?</u></h4>
        </div>
        <div class="row no-gutter">
                <div class="col"><h6>1.</h6>
                    <p><b>L'accord préalable</b> du salarié est <b>obligatoire</b>. L'information doit être donnée aux représentants du personnel.</p>
                </div>
                <div class="col"><h6>2.</h6>
                    <p>Un <b>avenant au contrat de travail du salarié mis à disposition</b> vous est fourni par La Place. Il doit être effectué pourchaque mission réalisée dans une autre structure.</p>
                </div>
                <div class="col"><h6>3.</h6>
                    <p>Le <b>contrat de travail</b> est maintenu. C'est vous qui rémunérez ce salarié et exercez votre <b>pouvoir disciplinaire</b> envers ce salarié.</p>
                </div>
                <div class="col"><h6>4.</h6>
                    <p>Une <b>convention de mise à disposition</b> vous est proposée par La Place. Elle est établie entre la structure d'origine et la structure d'accueil du salarié mis à disposition. </p>
                </div>
                <div class="col"><h6>5.</h6>
                    <p>Le salarié travaille en immersion dans la structure d'accueil, sous la <b>responsabilité fonctionnelle de l'un de ses dirigeants</b>, tout en bénéficiant de ses installations collectives.</p>
                </div>
                <div class="col"><h6>6.</h6>
                    <p>La Place reste <b>à votre disposition tout au long du processus</b> pour vous apporter un appui technique, vous accompagner juridiquement et assurer un suivi de satisfaction.</p>
                </div>
                <div class="col-12">
                <a class="btn btn-warning" href="{{ route('register')}}" role="button">Inscrivez-vous gratuitement</a>
            </div>


       
       </div> <!-- ./container -->





@endsection