@props(['title' => null, 'code', 'output'])
<figure class="code-block">
    @if ($title)<figcaption>{{ $title }}</figcaption>@endif
    <pre tabindex="0" aria-label="PHP code"><code>{{ $code }}</code></pre>
    <div class="output">
        <p class="output-label">Output from <code>php</code>:</p>
        <pre tabindex="0" aria-label="Output"><samp>{{ $output }}</samp></pre>
    </div>
</figure>
