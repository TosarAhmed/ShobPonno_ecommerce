<form class="form-inline" action="{{ route('carts.store') }}" method="post">
	
{{ csrf_field() }}

<button type="submit" class="btn btn-warning"><i class="fa fa-plus"></i> Add to Cart</button>

</form>
