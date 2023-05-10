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
                            <h2 class="wow fadeInUp" data-wow-delay=".2s"><span class="id-color">Data</span> Users</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="spacer-single"></div>
        </div>
        <div class="row">
            <div id="success_message" class='success'></div>
            <div id="error_message" class='error'></div>
            <table class="table table-bordered text-white"  id="myTable">
                <thead>
                    <tr >
                        <th>NO</th>
                        <th>NAME</th>
                        <th>EMAIL</th>
                        <th>PHONE </th>
                        <th> LEVEL </th>
                    </tr>
                </thead>
                <tbody>
                    @php
                    $no=1;
                    @endphp
                    @foreach($users as $t)
                    <tr >
                        <td>{{$no++}}</td>
                        <td>{{$t->name}}</td>
                        <td>{{$t->email}}</td>
                        <td>{{$t->phone}}</td>
                        <td>
                            @if($t->level==1)
                            ADMIN
                            @else
                            USER
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>

            </table>
        </div>
    </div>
    
</section>

@endsection
    

@section('js')

@endsection