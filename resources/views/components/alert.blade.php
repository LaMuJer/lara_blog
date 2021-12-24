<div class="alert alert-{{ $color }} alert-dismissible fade show" role="alert">
    <p class="mb-0">
        {{ $slot }} <span class="badge bg-primary">{{ $checkResult() }}</span> {{ $myName }}
    </p>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
