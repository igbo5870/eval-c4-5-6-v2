@include('header')
<h2>Historique des mouvements du stock</h2>
<ul>
    @foreach ($article as $articles)
        <li>
             {{ $articles->name }} {{ $articles->quantity }}  le {{ $articles->date_time }}
        </li>
    @endforeach 
</ul>
@include('footer')