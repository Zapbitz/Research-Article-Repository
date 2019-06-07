@extends('layouts.app')

@section('content')
{{-- <nav class="breadcrumb" aria-label="breadcrumbs">
        <ul>
          <li><a href="#">Home</a></li>
          <li class="is-active"><a href="#" aria-current="page">Dashboard</a></li>
        </ul>
      </nav> --}}
    <div class="container">
        <div class="columns is-marginless is-centered">
            <div class="column is-7">
                <nav class="card">
                    <header class="card-header">
                        <p class="card-header-title is-centered">
                            Dashboard
                        </p>
                    </header>
                   
                    <div class="card-content">
                            <div class="list is-hoverable">
                                    <a class="list-item ">
                                      PUBLICATIONS
                                    </a>
                                    <a class="list-item ">
                                      RESEARCH PROJECTS
                                    </a>
                            </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
@endsection
