@extends('layouts.admin')

@section('pagetitle')
Sepatu Bordir.id | Marketing
@endsection

@section('styles')
<style>
    .cityBox {
        background-color: #e873dd;
        width: 100%;
        border-radius: 5px;
        text-align: center;
        height: 10vh;
        padding: 2%;
        margin-top: 20%;
        transition: 0.2s;
    }

    .cityBox p {
        color: white;
        font-size: 1.3em;
    }

    .cityBox:hover {
        background-color: #ef8e9c;
    }
</style>
@endsection

@section('header')
<div style="width:100%;padding:2%;height: 10%;background-color: #e873dd;text-align: center;z-index: 2">
    <h1 style="color:white">Enjoy Manage Your Business</h1>
    <b>
        <h1 style="color:white;font-weight: 700">SEPATU BORDIR.ID</h1>
    </b>
</div>
@endsection

@section('menubar')
<div class="sidenav">
    <div class="upper">
        <h4>{{session('user')->username}}</h4>
    </div>
    <a href="{{url('marketing/pengadaan')}}">Pengadaan Barang</a>
    <a href="{{url('marketing/status-pemesanan')}}">Status Pemesanan</a>
    <a href="{{url('marketing/pengiriman')}}">Pengiriman</a>
    <a href="{{url('/logout')}}">Log Out</a>
</div>
@endsection

@section('content')
<div class="main">
    <h4>kota Distribusi : {{ucfirst($kota)}}</h4>

    <table class="table table-hover ">
        <thead class="thead-light">
            <tr class="table-danger">

                <th scope="col">Tanggal</th>
                <th scope="col">Nama Agen</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($orders as $od)
            <tr>

                <td>{{$od->tanggal}}</td>
                <td>Otto</td>

                <td><a href="{{url('marketing/pengadaan')}}/{{$kota}}/{{$od->idPemesanan}}" type="button"
                        class="btn btn-light">Detail</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>



</div>

@endsection