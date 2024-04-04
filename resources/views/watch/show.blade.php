@extends('layouts.app')

@section('template_title')
    {{ $watch->name ?? __('Show') . " " . __('Watch') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Watch</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('watches.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                        <div class="form-group mb-2 mb20">
                            <strong>Title:</strong>
                            {{ $watch->title }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Description:</strong>
                            {{ $watch->description }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Price:</strong>
                            {{ $watch->price }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Stock:</strong>
                            {{ $watch->stock }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
