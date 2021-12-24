<a href="{{ $link }}" class="sidebar-link {{ request()->url() == $link ? 'active' : '' }}">
    <div class="d-flex justify-content-between">
        <div class="">
            <i class="{{ $class }} fa-fw sidebar-link-icon"></i>
            {{ $name }}
        </div>
        @isset($count)
        <spn class="bg-white px-2 rounded border shadow-sm">
            {{ $count }}
        </spn>
        @endisset
    </div>
</a>
