@extends('layout.template')
@section('title','Login')
@section('css')
<style>
    table.table-bordered{
    border:1px solid white;
    margin-top:20px;
  }
table.table-bordered > thead > tr > th{
    border:1px solid white;
}
table.table-bordered > tbody > tr > td{
    border:1px solid white;
}
</style>
@endsection

@section('content')
<section id="section-tickets">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="text-center">
                    <div class="title-box-outer wow flipInX">
                        <div class="title-box-inner wow flipInX" data-wow-delay=".2s">
                            <h2 class="wow fadeInUp" data-wow-delay=".2s"><span class="id-color">Payment</span> Verification</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="spacer-single"></div>
        </div>
        <div class="row">
            <table class="table table-bordered text-white" id="myTable">
                <thead>
                    <tr >
                        <th>NO</th>
                        <th>CODE</th>
                        <th>TOTAL</th>
                        <th>PROOF OF PAYMENT </th>
                        <th> PAYMENT VERIFICATION </th>
                    </tr>
                </thead>
                <tbody>
                    @php
                    $no=1;
                    @endphp
                    @foreach($transaction as $t)
                    <tr >
                        <td>{{$no++}}</td>
                        <td>{{$t->transaction_code}}</td>
                        <td>{{number_format($t->total,0,"",".")}}</td>
                        <td>
                            @if($t->proof_of_payment)
                            <img src="{{asset('/uploads/'.$t->proof_of_payment)}}" width="200px">
                            @else
                            <button class="btn btn-sm btn-primary" onclick="showModal({{$t->id}})"> Upload proof of payment</button>
                            @endif
                        </td>
                        <td>
                            @if($t->payment_status)
                            <p>Payment Verified. Your Ticket is publish <a href="/my-ticket">click here</a></p>
                            @else
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>

            </table>
        </div>
    </div>
    
</section>

<div class="modal fade" id="modalUpload" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Upload</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="/upload-proof" method="post" enctype="multipart/form-data">
        @csrf
        <div class="modal-body">
            <div class="row g-custom-x align-items-center">
            <div class="col-md-6">
            <input type='file' name='file' id='file' class="form-control" accept="image/*" required>
            <input type="hidden" name='id' id='id'>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection
    

@section('js')
<script>
function showModal(id) {
$('#modalUpload').modal('show');
$('#id').val(id);
}


</script>
@endsection