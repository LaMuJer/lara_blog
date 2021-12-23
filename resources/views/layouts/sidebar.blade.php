<div class="sidebar min-vh-100  " >
    <ul>
        <li class="my-3">
            <a href="{{ route('home') }}" >
                <img src="{{ asset('images/logos/logo.png') }}" class="brand-logo" height="50" alt="">
            </a>
        </li>
        <li>
            <x-side-bar-spacer></x-side-bar-spacer>
        </li>
        <li>
            <x-side-bar-link name="home" link="{{ route('home') }}" class="fas fa-home"></x-side-bar-link>
        </li>
        <li>
            <x-side-bar-link name="test" link="{{ route('test') }}" count="5"></x-side-bar-link>
        </li>
        <li>
            <x-side-bar-spacer></x-side-bar-spacer>
        </li>
        <li>
            <x-side-bar-title>Manage Profile</x-side-bar-title>
        </li>
        <li>
            <x-side-bar-link name="Your Profile" link="{{ route('profile.index') }}" class="fas fa-user"></x-side-bar-link>
        </li>
        <li>
            <x-side-bar-link name="Update Photo" link="{{ route('profile.update-photo') }}" class="fas fa-image"></x-side-bar-link>
        </li>
        <li>
            <x-side-bar-link name="Change Password" link="{{ route('profile.change-password') }}" class="fas fa-key"></x-side-bar-link>
        </li>


        <li>
            <x-side-bar-spacer></x-side-bar-spacer>
        </li>
        <li>
            <a href="#" class="sidebar-link bg-light" onclick="document.getElementById('logoutForm').submit()">
                <i class="fas fa-unlock fa-fw sidebar-link-icon"></i>
                Logout
            </a>
        </li>
    </ul>
</div>
