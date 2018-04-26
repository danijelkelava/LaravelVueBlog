@extends('layouts.app')

@section('page_title', 'Admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div id="posts">
                    <createpost></createpost>
                </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
