<div class="card mb-4">
    <div class="card-body">
        <div class="border-bottom mb-4 d-flex justify-content-between align-items-center pb-3">
            <h4 class="mb-0">{{ $title }}</h4>
            @isset($rightMenuText)
            <a href="{{ $rightMenuLink }}" class="btn btn-outline-primary">{{ $rightMenuText }}</a>
            @endisset
        </div>
        <div class="">
            {{ $slot }}
        </div>
    </div>
</div>
