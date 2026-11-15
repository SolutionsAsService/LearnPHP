<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class PageController extends Controller
{
    public function home(): View
    {
        return view('pages.home', ['example' => $this->example('hello')]);
    }

    public function features(): View
    {
        return view('pages.features');
    }

    public function syntax(): View
    {
        return view('pages.syntax', [
            'examples' => [
                'Hello, World' => $this->example('hello'),
                'Variables' => $this->example('variables'),
                'Loops and arrays' => $this->example('loops'),
                'Functions' => $this->example('functions'),
            ],
        ]);
    }

    public function benefits(): View
    {
        return view('pages.benefits');
    }

    public function examples(): View
    {
        return view('pages.examples', [
            'examples' => [
                '1. Dynamic web pages' => $this->example('date'),
                '2. Form handling' => $this->example('form'),
            ],
        ]);
    }

    /**
     * Source of an example script and the output the php CLI produced for it
     * (resources/examples/<name>.php and <name>.out).
     *
     * @return array{code: string, output: string}
     */
    private function example(string $name): array
    {
        $dir = resource_path('examples');

        return [
            'code' => rtrim(file_get_contents("$dir/$name.php")),
            'output' => rtrim(file_get_contents("$dir/$name.out")),
        ];
    }
}
