﻿
@extends('layouts.app')
@section('content')


    <div class="container" style="margin-top:100px">
        @foreach ($product as $item)
        <div class="card mb-3">
            <h3 class="card-header">{{$item->name}}</h3>
            <div class="card-body">
                <h5 class="card-title">{{$item->title}}</h5>
                <h6 class="card-subtitle text-muted">subTitle</h6>
            </div>
            <img style="display: block;"
                src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22318%22%20height%3D%22180%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20318%20180%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_158bd1d28ef%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A16pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_158bd1d28ef%22%3E%3Crect%20width%3D%22318%22%20height%3D%22180%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22129.359375%22%20y%3D%2297.35%22%3EImage%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E"
                width="200" height="200px" alt="Card image" />
            <div class="card-body">
                <p class="card-text">description</p>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">category</li>
                <li class="list-group-item">price</li>
            </ul>
            <div class="card-body">
                <button type="button" class="btn btn-primary ">Add to cart</button>
            </div>
        </div>
        @endforeach


        <footer class="my-5 pt-5 text-muted text-center text-small">
            <p class="mb-1">© 2017-2019 Maba</p>
            <ul class="list-inline">
                <li class="list-inline-item"><a href="#">Privacy</a></li>
                <li class="list-inline-item"><a href="#">Terms</a></li>
                <li class="list-inline-item"><a href="#">Support</a></li>
            </ul>
        </footer>
    </div>

    @endsection