@if( count($clients) > 0 )
    @foreach($clients as $client)
        nationaliteit: {{$client->nationality}}
        <br>
        testall: {{$client}}
        <hr>
        @endforeach
@endif