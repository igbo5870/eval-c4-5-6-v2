@include('header')
<form method="post">
    {{ csrf_field() }}
    <input type="text" name="name" placeholder="nom">
    <label  for="category">Catégorie</label>
    <select name="category">
        @foreach ( $category as $categories)
            <option value= {{ $categories->id }} > {{ $categories->name }}</option>
        @endforeach
    </select>
    <label for="units">Unité</label>
    <select name="units">
        @foreach ($units as $unit)
            <option value= {{ $unit->id }}> {{ $unit->name }} </option>
        @endforeach
    </select>
    <input type="text" name="price" placeholder="prix">
    <input type="submit" value="Ajouter">
</form>

@include('footer')