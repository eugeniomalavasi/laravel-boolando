<div class="card_top_container">
    <img src="{{ Vite::asset('resources/img/' . $product['frontImage']) }}" class="img-fluid ms-card-img" alt="{{ $product['name'] }}">
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
<div class="bottom-card">
    <p class="brand-name">{{ $product['brand'] }}</p>
    <p class="product-name">{{ $product['name'] }}</p>
    <p class="price">{{ $product['price'] }}€</p>
    <p class="price-disc">{{ ($product['price'] / 100) * 50 }}€</p>
</div>
