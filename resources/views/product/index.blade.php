<x-layout>
<h1>Product</h1>

<a href="{{ route('product.create')}}">New Product</a>


@foreach ($products as $product)

<h1>{{ $product->name }}</h1>
<p>{{ $product->description }}</p>
<p>{{ $product->size }}</p>
    
@endforeach
</x-layout>