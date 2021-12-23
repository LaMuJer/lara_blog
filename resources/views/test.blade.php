@extends('layouts.app')

@section('title') Test Page @stop

@section("content")
    @php $links = ['test'=>route('test')] @endphp
    <x-breadcrumb current-page="Test Page" :links="$links"></x-breadcrumb>

    <div class="row">
        <div class="col-md-12 col-lg-12 col-xl-6">
            <x-card-frame title="Test Card">
                <form method="post" action="{{ route('test') }}">
                    @csrf
                    <x-input label="Your Name" name="name" ></x-input>
                    <x-input label="Your age" type="date" name="age" ></x-input>
                    <x-input label="Photo" type="file" name="photo" ></x-input>
                    <x-text-area name="Description" row="20"></x-text-area>
                    <div class="d-flex align-items-end justify-content-between">
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault" required>
                            <label class="form-check-label" for="flexSwitchCheckDefault">
                                Confirm
                            </label>
                        </div>
                        <button class="btn btn-primary">Just Testing</button>
                    </div>
                </form>

            </x-card-frame>
        </div>
        <div class="col-md-12 col-lg-12 col-xl-6">
            <x-card-frame title="Test Card 2">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam atque aut corporis cum deserunt dignissimos fugiat id, laborum, magni minus molestias nam, natus possimus quis saepe sapiente sit suscipit voluptates?
                </p>
            </x-card-frame>
        </div>
    </div>
@stop



