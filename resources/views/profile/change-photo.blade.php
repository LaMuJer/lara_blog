@extends('layouts.app')
@section('title') Change Photo @stop
@section("content")
    @php $links = ['Profile'=>route('profile.index')] @endphp
    <x-breadcrumb current-page="Change Photo" :links="$links"></x-breadcrumb>

    <div class="row">
        <div class="col-md-6 col-lg-5 col-xl-4">
            <x-card-frame title="Change Photo">
                <div class="">
                    <img src="{{ asset('storage/user-photo/'.Auth::user()->photo) }}" class="d-block w-50 rounded-circle mx-auto" alt="">
                </div>
                <form action="{{ route('profile.update-photo') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <x-input name="photo" type="file" label="Select New Photo"></x-input>

                    <div class="d-flex align-items-end justify-content-between">
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault" required>
                            <label class="form-check-label" for="flexSwitchCheckDefault">
                                Confirm
                            </label>
                        </div>
                        <button class="btn btn-primary">Upload</button>
                    </div>
                </form>

            </x-card-frame>
        </div>
    </div>
@stop


