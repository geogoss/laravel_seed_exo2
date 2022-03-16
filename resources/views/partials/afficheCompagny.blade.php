<section class="row">
    @foreach ($compagnies as $item)
        <div class="col-3 mx-auto my-3">
            <div class="card mb-1" style="width: 18rem;">
                <img src="{{ $item->url }} " class="card-img-top" alt="...">
                <div class="card-body">
                    <h4 class="card-title">{{ $item->nom }} </h4>
                    <p class="card-text">{{ $item->adresse }} </p>
                </div>
            </div>
            <div class="d-flex justify-around">
                <a class="btn btn-info" href="/compagny/{{ $item->id }}">Show</a>
                <form action="/compagny/{{ $item->id }} " method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger m-2">Supprimer</button>
                </form>
                <a class="btn btn-secondary" href="/compagny/{{ $item->id }}/edit">Modifier</a>

            </div>
        </div>
    @endforeach
</section>
