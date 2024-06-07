<div class="card_top_container">
    <img src="{{ Vite::asset('resources/img/' . $product['frontImage']) }}" class="img-fluid" alt="{{ $product['name'] }}">
    <div class="label">
        @foreach ($product['badges'] as $item)
        {{-- @if ($item['type'] == "discount") --}}
        <span>{{$item['value']}}</span>
        {{-- <span>{{$item['value']}}</span> --}}
        {{-- @endif --}}
        @endforeach
    </div>
    <div></div>
</div>
<div>
    <p>{{ $product['brand'] }}</p>
    <p>{{ $product['name'] }}</p>
    <p>{{ $product['price'] }}€</p>
</div>
