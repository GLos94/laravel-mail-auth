@extends('mail.layouts.app')

@section('content')

              <h1>
                {{ $user -> name }} - {{ $action }}
              </h1>

                  <h2>
                    {{ $post -> title }}
                  </h2>
                    {{ $post -> body }}

                    <ul>
                      <li>
                        LIKE: {{ $post -> like }}
                      </li>
                      <li>
                        DISLIKE: {{ $post -> dislike }}
                      </li>
                      <li>
                        TAG: {{ $post -> tag }}
                      </li>
                    </ul>

@endsection
