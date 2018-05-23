
<section class='row admin'>
<div class='col-lg-2-responsive admin-menu'>
    <ul>
    <div id="accordion">


        <div class="card">
            <div class="card-header" id="heading1">
                <h5 class="mb-0">
                <a class='btn' href="{{route('adminCatActu')}}">actualité</a>
                </h5>
            </div>
        </div>

        <div class="card">
            <div class="card-header" id="heading2">
                <h5 class="mb-0">
                <a class='btn' href="{{route('utilisateurs')}}">Structures</a>
                </h5>
            </div>
        </div>

        <div class="card">
            <div class="card-header" id="heading3">
                <h5 class="mb-0">
                <button class="btn btn-link" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                Annonces
                </button>
                </h5>

                <div id="collapse3" class="collapse" aria-labelledby="heading3" data-parent="#accordion">
                    <ul>
                    <li><a class='btn' href='#'>
                        Toutes les annonces
                    </a></li>
                    <li><a class='btn' href='#'>
                    Les annonces en attentes
                    </a></li>
                    <li><a class='btn' href='#'>
                    Les annonces en publiés en cours
                    </a></li>
                    <li><a class='btn' href='#'>
                    Les annonces archivées
                    </a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header" id="heading2">
                <h5 class="mb-0">
                <a class='btn' href='#'>
                Documents
                </a>
                </h5>
            </div>
        </div>

        <div class="card">
            <div class="card-header" id="heading4">
                <h5 class="mb-0">
                <button class="btn btn-link" data-toggle="collapse" data-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                Agenda
                </button>
                </h5>

                <div id="collapse4" class="collapse" aria-labelledby="heading4" data-parent="#accordion">
                    <ul>
                    <li><a class='btn' href='#'>
                        Les prochains rendez vous
                    <a></li>
                    <li><a class='btn' href='#'>
                        Les prochaines contributions
                    <a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header" id="heading2">
                <h5 class="mb-0">
                <a class='btn' href='#'>
                Messagerie
                </a>
                </h5>
            </div>
        </div>


    </div>
    </ul>
</div>
<div class='col-9 admin-main'>

