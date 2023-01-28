@extends('master')

@section('content')

@foreach ($transactions as $transaction)

<div class="col-md-12 mb-5">
    <div class="card">
      
        <div class="card-header">

            <h1>Order Date: {{ $transaction->transaction_date }}</h1>
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Total Price</th>
                    <th scope="col">Action</th>
                    
                  </tr>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                   
                    <tr>
                        <td>{{ $no++ }}</td>
                       
                        <td>{{ $transaction->total_price }}</td>
                        <td>
                           <a href="/history/{{ $transaction->id }}" class="btn btn-dark">Detail</a>
                        </td>
                      </tr>
                </tbody>
              </table>
        </div>
    </div>

    
</div>
@endforeach 

   
   

   
    
@endsection