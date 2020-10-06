@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Post:
                  <h2>{{ $post -> title }}</h2>
                  <p>{{ $post -> body }}</p>
                </div>

                <div class="card-body">
                  <ul>

                    <li>
                      Like: {{ $post -> like }}
                    </li>
                    <li>
                      Dislike: {{ $post -> dislike }}
                    </li>
                    <li>
                      Tag: {{ $post -> tag }}
                    </li>

                  </ul>

                  @auth
                    
                    <a class="btn btn-secondary" href="{{ route('post.create') }}">CREATE NEW POST</a>
                    <a class="btn btn-primary" href="{{ route('post.edit', $post -> id) }}">EDIT</a>
                    <a class="btn btn-danger" href="{{ route('post.delete', $post -> id) }}">DELETE</a>

                  @else
                    <h2>
                      If you want perfom an action, please <a class="btn btn-secondary" href="{{ route('login')}}">LOGIN</a>
                    </h2>

                  @endauth

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
