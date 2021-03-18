@extends('layout')

@section('content')
    <h1 class="text-center">Add a new Team Member</h1>
    <div class="container">
        <form enctype="multipart/form-data" method="post" action="{{ route('team_member.store') }}">
            @csrf
            <div class="container">
                <div class="form-group row">
                    <label for="name"
                           class="col-md-4 col-form-label text-md-right">{{ __('Name') }}
                    </label>
                    <div class="col-md-6">
                        <input type="text" id="name"
                               class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                               name="name"
                               value="{{ old('name') }}"
                               required
                               autofocus
                        >

                        @if ($errors->has('name'))
                            <span class="invalid-feedback"><strong>{{ $errors->first('name') }}</strong></span>
                        @endif
                    </div>
                </div>

                <div class="form-group row">
                    <label for="job_title"
                           class="col-md-4 col-form-label text-md-right">{{ __('Job Title') }}
                    </label>
                    <div class="col-md-6">
                        <input type="text" id="job_title"
                               class="form-control{{ $errors->has('job_title') ? ' is-invalid' : '' }}"
                               name="job_title"
                               required
                               value="{{ old('job_title') }}"
                               autofocus
                        >

                        @if ($errors->has('job_title'))
                            <span class="invalid-feedback"><strong>{{ $errors->first('job_title') }}</strong></span>
                        @endif
                    </div>
                </div>

                <div class="form-group row">
                    <label for="position"
                           class="col-md-4 col-form-label text-md-right">{{ __('Department') }}
                    </label>
                    <div class="col-md-6">
                        <select class="form-control" name="position">
                            <option>Innovation</option>
                            <option>Consulting</option>
                            <option>Strategy</option>
                            <option>Tech</option>
                            <option>Design</option>
                        </select>

                        @if ($errors->has('position'))
                            <span class="invalid-feedback"><strong>{{ $errors->first('position') }}</strong></span>
                        @endif
                    </div>
                </div>

                <div class="form-group row">
                    <label for="bio"
                           class="col-md-4 col-form-label text-md-right">{{ __('Bio') }}
                    </label>
                    <div class="col-md-6">
                    <textarea id="bio"
                              class="form-control{{ $errors->has('bio') ? ' is-invalid' : '' }}"
                              name="bio"
                              required
                              autofocus
                    >{{ old('bio') }}</textarea>

                        @if ($errors->has('bio'))
                            <span class="invalid-feedback"><strong>{{ $errors->first('bio') }}</strong></span>
                        @endif
                    </div>
                </div>

                <div class="form-group row">
                    <label for="years_with_signifly"
                           class="col-md-4 col-form-label text-md-right">{{ __('How many years have they been with Signifly?') }}
                    </label>
                    <div class="col-md-6">
                        <input type="number" id="years_with_signifly"
                               class="form-control{{ $errors->has('years_with_signifly') ? ' is-invalid' : '' }}"
                               name="years_with_signifly"
                               required
                               value="{{ old('years_with_signifly') }}"
                               autofocus
                        >

                        @if ($errors->has('years_with_signifly'))
                            <span
                                class="invalid-feedback"><strong>{{ $errors->first('years_with_signifly') }}</strong></span>
                        @endif
                    </div>
                </div>

                <div class="form-group row">
                    <label for="phone"
                           class="col-md-4 col-form-label text-md-right">{{ __('Phone') }}
                    </label>
                    <div class="col-md-6">
                        <input type="text" id="phone"
                               class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}"
                               name="phone"
                               autofocus
                               value="{{ old('phone') }}"
                        >

                        @if ($errors->has('phone'))
                            <span
                                class="invalid-feedback"><strong>{{ $errors->first('phone') }}</strong></span>
                        @endif
                    </div>
                </div>

                <div class="form-group row">
                    <label for="email"
                           class="col-md-4 col-form-label text-md-right">{{ __('Email') }}
                    </label>
                    <div class="col-md-6">
                        <input type="text" id="email"
                               class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                               name="email"
                               required
                               value="{{ old('email') }}"
                               autofocus
                        >

                        @if ($errors->has('email'))
                            <span
                                class="invalid-feedback"><strong>{{ $errors->first('email') }}</strong></span>
                        @endif
                    </div>
                </div>

                <div class="form-group row">
                    <label for="profile_image"
                           class="col-md-4 col-form-label text-md-right">{{ __('Upload a profile image') }}
                    </label>
                    <div class="col-md-6">
                        <input type="file" id="profile_image"
                               class="form-control{{ $errors->has('profile_image') ? ' is-invalid' : '' }}"
                               name="profile_image"
                               required
                               autofocus
                               value="{{ old('profile_image') }}"
                        >

                        @if ($errors->has('profile_image'))
                            <span
                                class="invalid-feedback"><strong>{{ $errors->first('profile_image') }}</strong></span>
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
