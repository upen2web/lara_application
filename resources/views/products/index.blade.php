@extends('layout.app')

@section('main')

    
    <div class="container">
      <div class="mt-2 text-right">
        <a href="products/create" class="btn btn-dark">New Product</a>        
      </div>
        
      <table class="table table-hover mt-2">
        <thead>
          <tr>
            <th>Sno.</th>
            <th>Name</th>
            <th>Image</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($product as $product)
            
          <tr>
            <td>{{ $loop->index+1 }}</td>
            <td><a href="products/{{ $product->id }}/show" class="text-dark" style="text-decoration: none;">{{ $product->name }}</a></td>
            <td><img src="products/{{ $product->image }}" class="rounded-circle" width="50" height="50" /></td>
            <td>
              <a href="products/{{ $product->id }}/edit" class="btn btn-success btn-sm">Edit</a>
              
              <form action="products/{{ $product->id }}/delete" method="POST" class="d-inline">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-danger btn-sm">Delete</button>
              </form>

            </td>
          </tr>
          @endforeach
          
        </tbody>

      </table>
      {{-- {{ $product->links() }} --}}

    </div>

@endsection