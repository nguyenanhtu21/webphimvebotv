@extends('backend.master')
@section('title','VeboTV')
@section('heading')
<h3 class="">Trang chủ</h3>
@endsection
@section('main')
<div class="row align-items-start">
    <div class="col col-3">
        <a href="{{asset('admin/genre')}}" class=""><span class="">Quản lý thể loại</span></a>
    </div>
    <div class="col col-3">
        <a href="{{asset('admin/genre')}}" class=""><span class="">Quản lý thể loại</span></a>
    </div>
    <div class="col col-3">
        <a href="{{asset('admin/genre')}}" class=""><span class="">Quản lý thể loại</span></a>
    </div>
    <div class="col col-3">
        <a href="{{asset('admin/genre')}}" class=""><span class="">Quản lý thể loại</span></a>
    </div>
    <div class="col col-3">
        <a href="{{asset('admin/genre')}}" class=""><span class="">Quản lý thể loại</span></a>
    </div>
</div>
<style>
    .col{
        background-color:#000;
        opacity:0.6;
        margin:10px;
        max-width:296px;
        height:170px;
        color:#fff;
        border-radius:6px;
        font-size:18px;
        font-weight:400;
        display:flex;
    }

    .col a{
        width:100%;
        height:100%;
        color:#fff;
        text-align: center;
    }

    .col a span{
        position:absolute;
        bottom:20px;
        left:30%;
    }
</style>
@endsection
