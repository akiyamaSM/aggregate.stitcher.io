<svg
    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
    x="0px" y="0px" width="15" height="15"
    viewBox="0 0 100 100"
    xml:space="preserve">
        <g>
            <g>
                <path
                    @isset($color)
                        style="--upvote-icon-color: {{ $color }}"
                    @endisset
                    class="upvote-icon"
                    d="M50.056,88.113c-0.038,0.001-0.075,0.001-0.113,0c-0.432,0-0.869-0.129-1.249-0.399    c-1.199-0.851-29.502-21.038-39.93-38.067c-0.014-0.023-0.027-0.046-0.041-0.069c-2.327-3.86-3.557-8.292-3.557-12.823    c0-13.712,11.156-24.868,24.868-24.868c7.939,0,15.311,3.772,19.965,10.037c4.654-6.265,12.027-10.037,19.965-10.037    c13.712,0,24.868,11.156,24.868,24.868c0,4.531-1.23,8.963-3.557,12.823c-0.013,0.023-0.026,0.046-0.041,0.069    c-10.427,17.029-38.73,37.216-39.93,38.067C50.926,87.984,50.489,88.113,50.056,88.113z">
                </path>
            </g>
        </g>
</svg>

{{--<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" style="margin-top:-4px;" viewBox="0 0 24 24">--}}
    {{--<path--}}
        {{--@isset($color)--}}
            {{--style="--upvote-icon-color: {{ $color }}"--}}
        {{--@endisset--}}
        {{--class="upvote-icon"--}}
        {{--d="M17 22v2h-10v-2h10zm0-4h-10v2h10v-2zm-10-7v5h10v-5h6l-11-11-11 11h6z"/>--}}
        {{--d="M7 11h-6l11-11 11 11h-6v13h-10z"/>--}}
{{--</svg>--}}