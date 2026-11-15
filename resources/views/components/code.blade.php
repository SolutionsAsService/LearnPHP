@props(['code', 'output' => null, 'label' => 'PHP'])
<figure class="code">
    <figcaption>{{ $label }}</figcaption>
    <pre><code>{{ $code }}</code></pre>
    @if ($output !== null)
        <div class="out"><span>Output from <code>php</code>:</span><pre><code>{{ $output }}</code></pre></div>
    @endif
</figure>
