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
                        <th scope="col">Time</th>
                        <th scope="col">Rate</th>
                        <th scope="col">Sub_total</th>
                      
                      </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; ?>
                        @foreach ($booking_details as $detail)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td><img src="{{ asset('storage/'. $detail->stylist->photo ) }}" alt="" style="width: 100px; height: 100px"></td>
                            <td>{{ $detail->stylist->name }}</td>
                            <td>{{ $detail->time }}</td>
                            <td>Rp. {{ number_format($detail->stylist->rate) }}</td>
                            <td>Rp. {{ number_format($detail->sub_total) }}</td>
    
                          </tr>
                        @endforeach
                        <tr>
                            
                            <td colspan="3" align="left"><strong>Total Price:</strong></td>
                            <td><strong>Rp. {{ number_format($booking->total_price) }} </strong></td>
                        </tr>
                    </tbody>
                  </table>
            </div>
        </div>

      
    </div>
    <br>
    <br>
@endsection