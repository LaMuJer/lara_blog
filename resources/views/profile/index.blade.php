@extends('layouts.app')
@section('title') Your Profile @stop
@section("content")
    <x-breadcrumb current-page="Your Profile"></x-breadcrumb>

    <div class="row">
        <div class="col-md-6 col-lg-5 col-xl-4">
            <x-card-frame title="Your Profile" margin="">
                <div class="">
                    <img src="{{ asset('storage/user-photo/'.Auth::user()->photo) }}" class="d-block w-50 rounded-circle border border-5 border-white shadow-sm mx-auto" alt="">
                </div>
                <table class="table mt-3 align-middle mb-0">
                    <tbody>
                    <tr>
                        <td>Name</td>
                        <td>{{ Auth::user()->name }}</td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>{{ Auth::user()->email }}</td>
                    </tr>
                    <tr>
                        <td>Phone</td>
                        <td>{{ Auth::user()->phone ? Auth::user()->phone  : '-'}}</td>
                    </tr>
                    <tr>
                        <td>Controls</td>
                        <td>
                            <a href="{{ route('profile.change-password') }}" class="btn btn-outline-primary btn-sm">
                                <i class="fas fa-key"></i>
                            </a>
                            <a href="{{ route('profile.update-photo') }}" class="btn btn-outline-primary btn-sm">
                                <i class="fas fa-image"></i>
                            </a>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </x-card-frame>
        </div>
    </div>
@stop


