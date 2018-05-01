@extends('layouts.app')

@section('page_title', 'Admin')

@section('content')
<div class="container">	
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div id="posts">
            	<tabs>
            		<tab name="Add post" :selected="true">
            			<createpost></createpost>
            		</tab>
            		<tab name="Edit post">
            			<posts></posts>
            		</tab>
            	</tabs>
                
            </div>                    
        </div>
    </div>
</div>
@endsection
