<?php

namespace App\Http\Controllers;
 
use Inertia\Inertia;
use Inertia\Response;

class InertiajsController extends Controller
{
    public function index(): Response
    {
        return Inertia::render('Index', [
            'title' => 'Laravel 10, Inertia.js, Svelte, Tailwind CSS',
        ]);
    }

    public function test(): Response
    {
        return Inertia::render('Test', [
            'title' => 'Laravel 10, Inertia.js, "This is test page"',
        ]);
    }
}
