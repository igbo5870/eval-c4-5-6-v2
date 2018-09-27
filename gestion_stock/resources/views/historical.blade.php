@include('header')
<ul>
    @foreach ($historical as $historicals)
        @foreach ($article as $articles)
            @foreach ($type_movement as $movement)
                @foreach ($unity as $unit)
                    <li>
                        {{ $articles->name}} {{ $historicals->quantity }} {{ $unit->name }} en {{ $movement->name }} le {{ $historicals->date_time }}
                    </li>
                @endforeach
            @endforeach
        @endforeach
    @endforeach 

    
</ul>
@include('footer')