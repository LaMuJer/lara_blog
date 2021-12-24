@extends('layouts.app')

@section('title') Category Manager @stop

@section("content")
    <x-breadcrumb current-page="Category Manager"></x-breadcrumb>

    <div class="row">
        <div class="col-12">
            <x-card-frame title="Category Manager">
                <form action="{{ route('category.store') }}" method="post">
                    @csrf
                    <div class="row align-items-end">
                        <div class="col-4">
                            <x-input name="title" label="New Category"></x-input>
                        </div>
                        <div class="col-4">
                            <button class="btn btn-lg btn-primary mb-3">Add New</button>
                        </div>
                    </div>

                </form>
                @include('category.list')
            </x-card-frame>
        </div>
    </div>
@stop



