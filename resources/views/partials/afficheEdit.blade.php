<section class="w-50 mx-auto mb-5">
    <div class="bg-primary py-5">
        <h1 class="text-center text-white">Modifier une compagnie</h1>
       
        <form class="w-75 mx-auto" action="/compagny/{{$compagny->id}} " method="POST">
            @csrf
            @method('PUT')  
            <div class="mb-3">
              <label for="addSmallerInputName" class="form-label">Nom</label>
              <input name="nom" type="text" value="{{$compagny->nom}} " class="form-control" id="addSmallerInputName"
                  aria-describedby="addSmallerInputNameHelp">
          </div>
            <div class="mb-3">
              <label for="addSmallerInputName" class="form-label">Adresse</label>
              <input name="adresse" type="text" value="{{$compagny->adresse}}" class="form-control" id="addSmallerInputName"
                  aria-describedby="addSmallerInputNameHelp">
          </div>
          <div class="mb-3">
              <label for="addTreeInputLatin" class="form-label">Email</label>
              <input name="email" type="text" value="{{$compagny->email}} " class="form-control" id="addTreeInputLatin"
                  aria-describedby="addTreeInputLatinHelp">
          </div>
          <div class="mb-3">
              <label for="addTreeInputLatin" class="form-label">Tel</label>
              <input name="tel" type="text" value="{{$compagny->tel}} " class="form-control" id="addTreeInputLatin"
                  aria-describedby="addTreeInputLatinHelp">
          </div>
          <div class="mb-3">
              <label for="addTreeInputLatin" class="form-label">Nom du contact</label>
              <input name="contactnom" type="text" value="{{$compagny->contactnom}} " class="form-control" id="addTreeInputLatin"
                  aria-describedby="addTreeInputLatinHelp">
          </div>
          <div class="mb-3">
              <label for="addTreeInputLatin" class="form-label">Prénom du contact</label>
              <input name="contactprenom" type="text" value="{{$compagny->contactprenom}} " class="form-control" id="addTreeInputLatin"
                  aria-describedby="addTreeInputLatinHelp">
          </div>
          <div class="mb-3">
              <label for="addTreeInputLatin" class="form-label">URL</label>
              <input name="url" type="text" value="{{$compagny->url}} " class="form-control" id="addTreeInputLatin"
                  aria-describedby="addTreeInputLatinHelp">
          </div>

          <button type="submit" class="btn btn-primary">Modifier</button>
          </form>
    </div>
</section>
