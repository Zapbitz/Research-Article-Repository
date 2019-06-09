@extends('layouts.app')

@section('content')
<div class="container">
    <div class="columns is-marginless is-centered">
        <div class="column is-12">
            <nav class="card">
                <header class="card-header has-background-link">
                    <p class="card-header-title is-centered is-uppercase has-text-white">
                        Journal Registration
                    </p>
                </header>

                <div class="card-content ">

                    <form class="form" method="POST" action="/journals">
                        {{ csrf_field() }}

                        <div class="field is-horizontal">
                            <div class="field-label">
                                <label class="label">Title</label>
                            </div>

                            <div class="field-body">
                                <div class="field">
                                    <div class="control">
                                        <input class="input is-dark" id="title" type="text" name="title"
                                            value="{{ old('title') }}" required autofocus>
                                    </div>

                                    @if ($errors->has('title'))
                                    <p class="help is-danger">
                                        {{ $errors->first('title') }}
                                    </p>
                                    @endif
                                </div>
                                <div class="field is-horizontal">
                                        <div class="field-label">
                                            <label class="label">Impact Factor</label>
                                        </div>
                                        <div class="field-body">
                                            <div class="field">
                                                <div class="control">
                                                    <input class="input is-dark" id="impact_factor" type="text" name="impact_factor"
                                                        value="{{ old('impact_factor') }}">
                                                </div>
            
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                        {{-- <input type="date" data-display-mode="inline" data-is-range="true" data-close-on-select="false"> --}}
                        <div class="field is-horizontal">
                            <div class="field-label">
                                <label class="label">Journal Category</label>
                            </div>

                            <div class="field-body">
                                <div class="field">
                                    <div class="control">
                                        <div class="select is-dark">
                                            <select>
                                                <option value="journal">Journal</option>
                                                <option vlaue="cp">Conference Proceeding</option>
                                                <option vlaue="newsletter">Newsletter</option>
                                            </select>
                                        </div>
                                    </div>

                                </div>
                                <div class="field is-horizontal">
                                    <div class="field-label">
                                        <label class="label">ISSN/ISBN</label>
                                    </div>

                                    <div class="field-body">
                                        <div class="field">
                                            <div class="control">
                                                <input class="input is-dark" id="issn_isbn_no" type="text"
                                                    name="issn_isbn_no" value="{{ old('issn_isbn_no') }}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="field is-horizontal">
                            <div class="field-label">
                                <label class="label">Authors</label>
                            </div>
                            <div class="field-body">
                                <div class="field is-grouped">
                                    <div class="control">
                                        <input class="input is-dark" id="auther1" type="text" name="auther[]">
                                    </div>
                                    <div class="control">
                                        <input class="input is-dark" id="auther2" type="text" name="auther[]">
                                    </div>
                                    <div class="control">
                                        <input class="input is-dark" id="auther3" type="text" name="auther[]">
                                    </div>
                                    <div class="control">
                                        <input class="input is-dark" id="auther4" type="text" name="auther[]">
                                    </div>
                                </div>


                            </div>
                        </div>
                       
                        <div class="field is-horizontal">
                            <div class="field-label">
                                <label class="label">Bibilography</label>
                            </div>
                            <div class="field-body">
                                <div class="field is-grouped">
                                    <div class="control">
                                        <input class="input is-dark" id="vol" type="text" name="vol"
                                            placeholder="Volume No.">
                                    </div>
                                    <div class="control">
                                        <input class="input is-dark" id="issue" type="text" name="issue"
                                            placeholder="Issue No.">
                                    </div>
                                    <div class="control">
                                        <input class="input is-dark" id="page" type="text" name="page"
                                            placeholder="Page No.">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="field is-horizontal">
                            <div class="field-label">
                                <label class="label">URL</label>
                            </div>

                            <div class="field-body">
                                <div class="field is-grouped">
                                    <div class="control">
                                        <input class="input is-dark" id="issn_isbn_no" type="text" name="issn_isbn_no" placeholder="">
                                    </div>
                                    <div class="control">
                                            <div class="field">
                                                    <div class="file is-right is-info">
                                                      <label class="file-label">
                                                        <input class="file-input" type="file" name="resume">
                                                        <span class="file-cta">
                                                          <span class="file-icon">
                                                            <i class="fas fa-upload"></i>
                                                          </span>
                                                          <span class="file-label">
                                                            Right file…
                                                          </span>
                                                        </span>
                                                        <span class="file-name">
                                                          Upload Work File...
                                                        </span>
                                                      </label>
                                                    </div>
                                                  </div>
                                    </div>

                                </div>


                            </div>
                        </div>

                        <div class="field is-grouped">
                                <p class="control">
                                  <button type="submit" class="button is-link">
                                    Save changes
                                  </button>
                                </p>
                                <p class="control">
                                <button type="reset" class="button">
                                    Cancel
                                </button>
                                </p>
                        </div>
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