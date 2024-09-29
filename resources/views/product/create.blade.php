<x-layout>
<h1>New Product</h1>
<form method="POST" action="{{route ('product.store')}}" >
    @csrf
<label for="name">Name</label>
<input type="text" name ="name" id = "name">


<label for="description">description</label>
<textarea name="description" id="description"></textarea>

<label for="size">size</label>
<input type="size" name= "size" id = "size">

<button>Save</button>






</form>




</x-layout>