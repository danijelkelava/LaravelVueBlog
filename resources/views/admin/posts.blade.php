@extends('layouts.app')

@section('page_title', 'Posts')

@section('content')
<div class="container">
	<ul class="nav">
	  <li class="nav-item">
	    <a class="nav-link" href="{{ route('admin') }}">Admin</a>
	  </li>
	  <li class="nav-item">
	    <a class="nav-link" href="{{ route('admin.posts') }}">Edit Posts</a>
	  </li>
	</ul>
    <div class="row">
        <div class="col-md-8">
            <div id="posts">
                <posts></posts>
            </div>                    
        </div>
    </div>
</div>
@endsection