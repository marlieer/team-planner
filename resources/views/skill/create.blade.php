@extends('layout')

@section('content')
    <h1 class="text-center">Add a New Skill</h1>
    <div class="container">
        <form method="post" action="{{ route('skill.store') }}">
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
                    <label for="category"
                           class="col-md-4 col-form-label text-md-right">{{ __('Category') }}
                    </label>
                    <div class="col-md-6">
                        <select class="form-control" name="category">
                            <option>Innovation</option>
                            <option>Consulting</option>
                            <option>Strategy</option>
                            <option>Tech</option>
                            <option>Design</option>
                        </select>

                        @if ($errors->has('category'))
                            <span class="invalid-feedback"><strong>{{ $errors->first('category') }}</strong></span>
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
