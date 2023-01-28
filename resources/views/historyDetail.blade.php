@extends('master')

@section('content')

    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
            </div>
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
    
                          </tr>
                        @endforeach
                        <tr>
                            
                            <td colspan="3" align="left"><strong>Total Price:</strong></td>
                            <td><strong>Rp. {{ number_format($transaction->total_price) }} </strong></td>
                        </tr>
                    </tbody>
                  </table>
            </div>
        </div>

      
    </div>
    <br>
    <br>
@endsection