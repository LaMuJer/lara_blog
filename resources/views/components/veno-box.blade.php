<a class="venobox" @if($gall) data-gall="{{ $gall }}" @endif href="{{ isset($big) ? $big : $small }}">
    <img src="{{ $small }}" class="w-100" alt="image alt"/>
</a>
