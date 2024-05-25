@extends('layouts.app')
@section('content')
<div style="margin-top: 30px;">
    <aside class="col-sm-4 mb-5">
        <div class="card bg-info">
            <div class="card-header">
                <h3 class="card-title text-light">{{$user->name}}</h3>
            </div>
            <div class="card-body">
                <img class="rounded-circle img-fluid" src="{{ Gravatar::src($user->email, 400) }}" alt=""　style="max-height: -50px;">
                @if (Auth::check() && Auth::user()->id == $user->id)
                    <div class="mt-3">
                        <a href="{{ route('users.edit',['id' => $user->id])}}" class="btn btn-primary btn-block">ユーザ情報の編集</a>
                    </div>
                @endif
          </div>
        </div>
    </aside>
    <div class="col-sm-8">
      <ul class="nav nav-tabs nav-justified mb-3">
          <li class="nav-item"><a href="" class="nav-link {{ Request::is('users/'.$user->id) ? 'active' : '' }}">タイムライン</a></li>
          <li class="nav-item"><a href="#" class="nav-link">フォロー中</a></li>
          <li class="nav-item"><a href="#" class="nav-link">フォロワー</a></li>
      </ul>
      @include('post.post',['posts' => $posts])
    </div>
 </div>
</div>
 @endsection
