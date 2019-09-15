@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://instagram.fsrg1-1.fna.fbcdn.net/vp/541c98380cb003ecfec3569ea2103465/5E038B38/t51.2885-19/s150x150/22709172_932712323559405_7810049005848625152_n.jpg?_nc_ht=instagram.fsrg1-1.fna.fbcdn.net" class="rounded-circle" alt="">
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <h1>{{ $user->username }}</h1>
                <a href="#">Add New Post</a>
            </div>
            <div class="d-flex">
                <div class="pr-5"><strong>153</strong> posts</div>
                <div class="pr-5"><strong>23k</strong> followers</div>
                <div class="pr-5"><strong>212</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
            <div>{{ $user->profile->description }}</div>
            <div><a href="#">{{ $user->profile->url ?? 'N/A' }}</a></div>
        </div>  
    </div>
    <div class="row pt-4">
        <div class="col-4">
            <img src="https://instagram.fsrg1-1.fna.fbcdn.net/vp/b6d6cac234c86f0b427927f319ae8aac/5E0F3F57/t51.2885-15/sh0.08/e35/c0.40.822.822a/s640x640/69968971_2305100466416943_647506101175149940_n.jpg?_nc_ht=instagram.fsrg1-1.fna.fbcdn.net&_nc_cat=103" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://instagram.fsrg1-1.fna.fbcdn.net/vp/b6d6cac234c86f0b427927f319ae8aac/5E0F3F57/t51.2885-15/sh0.08/e35/c0.40.822.822a/s640x640/69968971_2305100466416943_647506101175149940_n.jpg?_nc_ht=instagram.fsrg1-1.fna.fbcdn.net&_nc_cat=103" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://instagram.fsrg1-1.fna.fbcdn.net/vp/b6d6cac234c86f0b427927f319ae8aac/5E0F3F57/t51.2885-15/sh0.08/e35/c0.40.822.822a/s640x640/69968971_2305100466416943_647506101175149940_n.jpg?_nc_ht=instagram.fsrg1-1.fna.fbcdn.net&_nc_cat=103" class="w-100">
        </div>
    </div>
</div>
@endsection
