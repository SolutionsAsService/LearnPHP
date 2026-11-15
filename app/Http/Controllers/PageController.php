<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function home()
    {
        return view('pages.home', ['sample' => $this->example('hello')]);
    }

    public function features()
    {
        return view('pages.features');
    }

    public function syntax()
    {
        return view('pages.syntax', ['hello' => $this->example('hello')]);
    }

    public function benefits()
    {
        return view('pages.benefits');
    }

    public function examples()
    {
        $examples = [
            ['title' => 'Dynamic web pages', 'text' => 'The date() function formats a timestamp. Here a fixed timestamp keeps the output the same every run.', 'ex' => $this->example('date')],
            ['title' => 'Form handling', 'text' => 'Always escape what a visitor types with htmlspecialchars() before you print it. The script fakes a POST so it can run in a terminal.', 'ex' => $this->example('form')],
            ['title' => 'Loops, arrays and functions', 'text' => 'foreach walks an array, and a typed function returns a value.', 'ex' => $this->example('loop')],
        ];

        return view('pages.examples', ['examples' => $examples]);
    }

    /** Source of resources/examples/<name>.php and the output the php CLI produced for it. */
    private function example(string $name): array
    {
        $base = resource_path("examples/{$name}");

        return [
            'code' => rtrim(file_get_contents($base.'.php')),
            'output' => rtrim(file_get_contents($base.'.out')),
        ];
    }
}
