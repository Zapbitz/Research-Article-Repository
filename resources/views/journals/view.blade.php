@extends('layouts.app')

@section('content')
<div class="container">
    <div class="columns is-marginless is-centered">
        <div class="column is-7">
            <nav class="card">
                <header class="card-header">
                    <p class="card-header-title is-centered is-uppercase">
                        Journal Registration
                    </p>
                </header>
               
                <div class="card-content">

                    <form class="form" method="POST" action="/journals">
                        {{ csrf_field() }}

                        <div class="field is-horizontal">
                            <div class="field-label">
                                <label class="label">Facility ID</label>
                            </div>

                            <div class="field-body">
                                <div class="field">
                                    <div class="control">
                                        {{-- <input class="input is-primary" id="email" type="email" name="email"
                                               value="{{ old('email') }}" required autofocus> --}}
                                               <input class="input is-primary" id="fac_id" type="text" name="fac_id" value="{{ old('fac_id') }}"
                                               required autofocus>
                                    </div>

                                    @if ($errors->has('fac_id'))
                                        <p class="help is-danger">
                                            {{ $errors->first('fac_id') }}
                                        </p>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </form>  
                </div>
            </nav>
        </div>
    </div>
</div>
@endsection