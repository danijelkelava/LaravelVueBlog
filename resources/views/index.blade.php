@extends('layouts.master')

@section('page_title', 'Home')

@section('container')
<div class="jumbotron">
	<div class="container">
	  <h1 class="display-3">My Home Page</h1>
	  <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
	  <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p>
	</div>
</div>

      <div class="container">
        <!-- Example row of columns -->
        <div class="row">
        	<div id="posts">
        		<lastposts></lastposts>
        	</div>
        </div>

        <hr>

      </div> <!-- /container -->
@endsection