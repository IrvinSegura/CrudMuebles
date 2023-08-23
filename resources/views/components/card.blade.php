@props([
    'name' => '',
    'material' => '',
    'description' => '',
    'size' => '',
    'price' => '',
    'image' => '',
])

<link href="{{ asset('css/card.css') }}" rel="stylesheet">
<center>
    <div class="shop-card">
        <div class="title">
            {{ $name }}
        </div>
        <div class="desc">
            {{ $material }}
        </div>
        <div class="slider">
            <figure data-color="#E24938, #A30F22">
                <img src="{{ $image }}" />
            </figure>
        </div>
        ​ <div class="purchase">
            <div class="description">
                {{ $description }}
            </div>
            <div class="size">
                {{ $size }}
            </div>
            <div class="cta">
                <div class="price">${{ $price }}</div>
            </div>
        </div>
        <div class="bg"></div>
    </div>
</center>

