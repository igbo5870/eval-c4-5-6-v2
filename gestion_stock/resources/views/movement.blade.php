@include('header')
<h2>Saisir un mouvement dans le stock</h2>
@if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif
<form method="post">
    {{ csrf_field() }}
    <label  for="article">Article</label>
    <select name="article">
        @foreach ( $articles as $article)
            <option value= {{ $article->id }} > {{ $article->name }}</option>
        @endforeach
    </select>
    <input type="text" name="quantity" value="1" placeholder="Quantité" required/>
    <input type="date" name="date" />
    <label  for="type">Type</label>
    <select name="type">
        @foreach ($type as $types)
            <option value= {{ $types->id }}> {{ $types->name }} </option>
        @endforeach
    </select>
    <label  for="purchase">Achat</label>
    </select><select name="purchase">
        @foreach ($purchases as $purchase)
            <option value= {{ $purchase->id }}> {{ $purchase->id }} </option>
        @endforeach
    </select>
    <label for="sales">Vente</label>
    </select><select name="sales">
        @foreach ($sales as $sale)
            <option value= {{ $sale.id }}> {{ $sale.id }} </option>
        @endforeach
    </select>
    
    
    <input type="submit" value="Ajouter">
</form>
@include('footer')