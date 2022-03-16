<section class="text-center w-25 mx-auto">
    <div class="card" style="width: 18rem;">
        <img src="{{$compagny->url}} " class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">{{$compagny->nom}} </h5>
          <p class="card-text">{{$compagny->adresse}} </p>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">Email : {{$compagny->email}}</li>
          <li class="list-group-item">Tel : {{$compagny->tel}}</li>
          <li class="list-group-item">Personne de contact :</li>
          <li class="list-group-item">Nom : {{$compagny->contactnom}}</li>
          <li class="list-group-item">Prénom : {{$compagny->contactprenom}}</li>
        </ul>
        <div class="card-body">
          <a href="#" class="card-link">Rejoignez nous</a>
        </div>
      </div>
</section>