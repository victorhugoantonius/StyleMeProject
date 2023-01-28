@extends('master')

@section('content')

   
    <div class="col-md-12">
        <div class="card">
            @if (!empty($transaction))
            <div class="card-header">
                <h1>Order Date: {{ $transaction->transaction_date }}</h1>
            </div>
            @if (session()->has('success'))
            <div class="alert alert-success" role="alert">
             {{ session('success') }}
            </div>
            @endif

         
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Preview</th>
                        <th scope="col">Name</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Price</th>
                        <th scope="col">Sub_total</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; ?>
                        @foreach ($transaction_details as $detail)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td><img src="{{ asset('storage/'. $detail->product->image ) }}" alt="" style="width: 100px; height: 100px"></td>
                            <td>{{ $detail->product->name }}</td>
                            <td>{{ $detail->quantity }}</td>
                            <td>Rp. {{ number_format($detail->product->price) }}</td>
                            <td>Rp. {{ number_format($detail->sub_total) }}</td>
                            <td>
                                <form action="/cart/{{ $detail->id }}" method="post">
                                    @csrf
                                   {{ method_field('DELETE') }}
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this product')">Delete</button>
                                </form>
                            </td>
                          </tr>
                        @endforeach
                        <tr>
                            
                            <td colspan="4" align="left"><strong>Total Price:</strong></td>
                            <td><strong>Rp. {{ number_format($transaction->total_price) }} </strong></td>
                        </tr>
                    </tbody>
                  </table>
            </div>
        </div>

        @endif
    </div>

    <a href="/checkout" class="btn btn-dark mt-4">Purchase</a>
    <br>
    <br>

    
@endsection