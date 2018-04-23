@extends('layouts.master')

@section('page_title', 'Blog')

@section('container')
<div class="jumbotron">
	<div class="container">
	  <h1 class="display-3">Welcome to my Blog</h1>
	</div>
</div>

      <div class="container">
        <!-- Example row of columns -->
        <div class="row">
          <div id="posts">
            <posts></posts>
          </div>
        </div>

        <hr>

      </div> <!-- /container -->
      <script src="{{ asset('js/app.js') }}"></script>
@endsection