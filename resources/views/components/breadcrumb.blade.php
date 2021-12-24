<div class="">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb my-3">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
            @if(count($links))
                @foreach($links as $key=>$link)
                    <li class="breadcrumb-item"><a href="{{ $link }}">{{ $key }}</a></li>
                @endforeach
            @endif
            <li class="breadcrumb-item active" aria-current="page">{{ $currentPage }}</li>
        </ol>
    </nav>
</div>
