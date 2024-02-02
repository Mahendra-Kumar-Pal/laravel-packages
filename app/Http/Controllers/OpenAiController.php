<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\OpenAI;
// use OpenAI\Laravel\Facades\OpenAI;
use OpenAI;

class OpenAiController extends Controller
{
    public function index()
    {
        return view('chatbot');
    }
    
    public function store(Request $request)
    {
        $yourApiKey = env('OPENAI_API_KEY');
        $client = OpenAI::client($yourApiKey);

        $result = $client->completions()->create([
            'model' => 'text-davinci-003',
            'prompt' => $request->query,
        ]);

        return $result['choices'][0]['text'];
    }
}
