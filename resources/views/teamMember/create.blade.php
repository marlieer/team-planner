@extends('layout')

@section('content')
    <h1 class="text-center">Create a New Project</h1>
    <div class="container">
        <form method="post" action="{{ route('project.store') }}">
            @csrf
            <div class="container">
                <div class="form-group row">
                    <label for="title"
                           class="col-md-4 col-form-label text-md-right">{{ __('Title') }}
                    </label>
                    <div class="col-md-6">
                        <input type="text" id="title"
                               class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}"
                               name="title"
                               value="{{ old('title') }}"
                               required
                               autofocus
                        >

                        @if ($errors->has('title'))
                            <span class="invalid-feedback"><strong>{{ $errors->first('title') }}</strong></span>
                        @endif
                    </div>
                </div>

                <div class="form-group row">
                    <label for="client"
                           class="col-md-4 col-form-label text-md-right">{{ __('Client') }}
                    </label>
                    <div class="col-md-6">
                        <input type="text" id="client"
                               class="form-control{{ $errors->has('client') ? ' is-invalid' : '' }}"
                               name="client"
                               required
                               value="{{ old('client') }}"
                               autofocus
                        >

                        @if ($errors->has('client'))
                            <span class="invalid-feedback"><strong>{{ $errors->first('client') }}</strong></span>
                        @endif
                    </div>
                </div>

                <div class="form-group row">
                    <label for="description"
                           class="col-md-4 col-form-label text-md-right">{{ __('Description (optional)') }}
                    </label>
                    <div class="col-md-6">
                    <textarea id="description"
                              class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}"
                              name="description"
                              autofocus
                    >{{ old('description') }}</textarea>

                        @if ($errors->has('description'))
                            <span class="invalid-feedback"><strong>{{ $errors->first('description') }}</strong></span>
                        @endif
                    </div>
                </div>

                <div class="form-group row">
                    <label for="minimum_years_with_signifly"
                           class="col-md-4 col-form-label text-md-right">{{ __('Minimum number of years team members are required to have been with Signifly to be on this project (optional)') }}
                    </label>
                    <div class="col-md-6">
                        <input type="number" id="minimum_years_with_signifly"
                               class="form-control{{ $errors->has('minimum_years_with_signifly') ? ' is-invalid' : '' }}"
                               name="minimum_years_with_signifly"
                               autofocus
                        >{{ old('minimum_years_with_signifly') }}

                        @if ($errors->has('minimum_years_with_signifly'))
                            <span
                                class="invalid-feedback"><strong>{{ $errors->first('minimum_years_with_signifly') }}</strong></span>
                        @endif
                    </div>
                </div>

                <hr>

{{--                <div class="form-group row">--}}
{{--                    <label for="education_type"--}}
{{--                           class="col-md-4 col-form-label text-md-right">{{ __('Do you require at least one team member to have one of the following educations for this project? Check all that apply. (optional)') }}--}}
{{--                    </label>--}}
{{--                    <div class="col-md-6">--}}
{{--                        @foreach($educations as $education)--}}
{{--                            <div class="col-md-12">--}}
{{--                                <input type="checkbox"--}}
{{--                                       class="form-check-inline"--}}
{{--                                       name="education_requirements[{{ $education->id }}]"--}}
{{--                                       autofocus--}}
{{--                                > {{ $education->type . ' of ' . $education->subject}}--}}
{{--                            </div>--}}
{{--                        @endforeach--}}

{{--                        @if ($errors->has('education_requirements'))--}}
{{--                            <span--}}
{{--                                class="invalid-feedback"><strong>{{ $errors->first('education_requirements') }}</strong></span>--}}
{{--                        @endif--}}
{{--                    </div>--}}
{{--                </div>--}}

                <hr>

                <div class="form-group row">
                    <label for="skills"
                           class="col-md-4 col-form-label text-md-right">{{ __('Choose the skills of this team member') }}
                    </label>
                    <div class="col-md-6">
                        @foreach($skills as $skill)
                            <div class="col-md-12">
                                <input type="checkbox"
                                       class="form-check-inline"
                                       name="skills[{{ $skill->id }}]"
                                       autofocus
                                > {{ $skill->name }}
                            </div>
                        @endforeach

                        @if ($errors->has('skills'))
                            <span
                                class="invalid-feedback"><strong>{{ $errors->first('skills') }}</strong></span>
                        @endif
                    </div>
                </div>

                <div class="form-group row mb-4">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-success">
                            {{ __('Save') }}
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>

@endsection
