<div class="card_top_container">
    <img src="{{ Vite::asset('resources/img/' . $product['frontImage']) }}" class="img-fluid" alt="{{ $product['name'] }}">
    <div class="label">
        @foreach ($product['badges'] as $item)
            @if ($item['type'] === 'tag')
                <span @class(['green' => $item['type'] === 'tag'])>{{ $item['value'] }}</span>
            @else
                <span @class(['red' => $item['type'] === 'discount'])>{{ $item['value'] }}</span>
            @endif
        @endforeach
    </div>
    <div class="heart">
        <span @class(['orange' => $product['isInFavorites']])>&hearts;</span>
    </div>
</div>
<div>
    <p>{{ $product['brand'] }}</p>
    <p>{{ $product['name'] }}</p>
    <p>{{ $product['price'] }}€</p>
</div>
