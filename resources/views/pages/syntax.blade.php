<x-layout page="syntax" title="Syntax">
    <x-page-head kicker="02 / Syntax" title="Basic Syntax of PHP">
        <p class="lede">PHP code runs on the server, and the browser receives plain HTML.</p>
    </x-page-head>
    <section class="band"><div class="wrap prose">
        <h2>A first script</h2>
        <p>Here is a simple PHP script:</p>
        <x-code :code="$hello['code']" :output="$hello['output']" />
        <p>PHP scripts are enclosed in <code>&lt;?php</code> and <code>?&gt;</code> tags. The <code>echo</code> statement is used to output text to the browser. A file that contains only PHP may leave the closing tag off.</p>
        <h2>Three rules to remember</h2>
        <ul>
            <li>Every statement ends with a semicolon.</li>
            <li>Variable names start with a dollar sign, such as <code>$name</code>.</li>
            <li>Function and keyword names are not case sensitive, but variable names are.</li>
        </ul>
    </div></section>
</x-layout>
