@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Posts:</div>

                <div class="card-body">
                    <ul>
                    @foreach ($posts as $post)
                      <h2>
                        <a href="{{ route('post.show', $post -> id) }}">{{ $post -> title }}</a> 
                      </h2>

                        <li>
                          {{ $post -> body }}
                        </li>

                    @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
