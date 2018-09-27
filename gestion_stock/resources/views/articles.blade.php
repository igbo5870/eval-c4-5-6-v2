@include('header')
<a href="/add_article" class="btn btn-primary">Ajouter</a>
<ul>
    @foreach ($articles as $article)
        <li>
            <a href="/update_article" class="label label-primary" title="Modifier l'article" style="display: inline-block; width: 200px">{{ $article->name }}</a>
            <button type="button" class="btn btn-danger">Supprimer</button>
        </li>
    @endforeach
</ul>
@include('footer')