@extends('layouts.app')
@section('title') Change Password @stop
@section("content")
    @php $links = ['Profile'=>route('profile.index')] @endphp
    <x-breadcrumb current-page="Change Page" :links="$links"></x-breadcrumb>

    <div class="row">
        <div class="col-md-6 col-lg-5 col-xl-4">
            <x-card-frame title="Change Password">
                <form action="{{ route('profile.change-password') }}" method="post">
                    @csrf

                    <x-input name="current_password" type="password" label="Current Password"></x-input>
                    <x-input name="password" type="password" label="New Password"></x-input>
                    <x-input name="password_confirmation" type="password" label="Confirm Password"></x-input>

                    <div class="d-flex align-items-end justify-content-between">
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault" required>
                            <label class="form-check-label" for="flexSwitchCheckDefault">
                                Confirm
                            </label>
                        </div>
                        <button class="btn btn-primary">Update</button>
                    </div>
                </form>
            </x-card-frame>
        </div>
    </div>
    @stop
