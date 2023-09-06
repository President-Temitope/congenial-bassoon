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
<!-- start Gist JS code-->
<script>
    (function (d, h, w) {
        var gist = w.gist = w.gist || [];
        gist.methods = ['trackPageView', 'identify', 'track', 'setAppId'];
        gist.factory = function (t) {
            return function () {
                var e = Array.prototype.slice.call(arguments);
                e.unshift(t);
                gist.push(e);
                return gist;
            }
        };
        for (var i = 0; i < gist.methods.length; i++) {
            var c = gist.methods[i];
            gist[c] = gist.factory(c)
        }
        s = d.createElement('script'), s.src = "https://widget.getgist.com", s.async = !0, e = d.getElementsByTagName(h)[0], e.appendChild(s), s.addEventListener('load', function (e) {
        }, !1), gist.setAppId("env4v3il"), gist.trackPageView()
    })(document, 'head', window);
</script>
<!-- end Gist JS code-->
