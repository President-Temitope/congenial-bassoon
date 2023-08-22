@if(session()->has('success'))
    <script>
        alert("{!! session()->get('success') !!}");
    </script>
@elseif(session()->has('errors'))
    @if(is_string(session()->get('errors')))
        <script>
            alert("{!! session()->get('errors') !!}");
        </script>
    @else
        <script>
            var errorMessage = '';
            @foreach(session()->get('errors') as $error)
                errorMessage += '<li>{!! $error !!}</li>';
            @endforeach
            if (errorMessage !== '') {
                alert('<ul>' + errorMessage + '</ul>');
            }
        </script>
    @endif
@elseif(session()->has('info'))
    <script>
        alert("{!! session()->get('info') !!}");
    </script>
@endif
