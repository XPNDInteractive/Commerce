

     @if(isset($blocks['categories toolbar']['links']))
        @foreach($blocks['categories toolbar']['links'] as $link)
       
            <a href="{{$link['url']}}" class="btn btn-primary ml-1">{{$link['name']}}</a>

        @endforeach
    @endif

     @if(isset($blocks['pages toolbar']['links']))
        @foreach($blocks['pages toolbar']['links'] as $link)
       
            <a href="{{$link['url']}}" class="btn btn-primary ml-1">{{$link['name']}}</a>

        @endforeach
    @endif

     @if(isset($blocks['products toolbar']['links']))
        @foreach($blocks['products toolbar']['links'] as $link)
       
            <a href="{{$link['url']}}" class="btn btn-primary ml-1">{{$link['name']}}</a>

        @endforeach
    @endif
    