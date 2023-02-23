@foreach($products as $product)
    <div>
        <h2>{{ __('amooati-ecommerce::app.product.name') . ': ' . $product->name }}</h2>
        <p><i>{{ __('amooati-ecommerce::app.product.price') . ': ' .$product->price }} {{ \Illuminate\Support\Facades\Config::get('ecommerce.price_symbol') }} </i></p>
        <p>{{ __('amooati-ecommerce::app.product.description') . ': ' . $product->description }}</p>
    </div>
@endforeach
