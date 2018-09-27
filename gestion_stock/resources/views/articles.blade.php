@include('header')
@if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif
<h2>Listes des articles en stock</h2>
<a href="/add_article" class="btn btn-primary">Ajouter</a>
<ul>
    @foreach ($articles as $article)
        <li>
            <a href="/update_article/{{ $article->id }}" class="label label-primary" title="Modifier l'article" style="display: inline-block; width: 200px">{{ $article->name }}</a>
            <form action="/articles/{{ $article->id }}" method="post">
                    <button class="btn btn-danger" type="submit">Supprimer</button>
                    {!! csrf_field() !!}
            </form>
        </li>
    @endforeach
</ul>
@include('footer')


