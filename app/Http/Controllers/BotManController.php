<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use OpenAI\Laravel\Facades\OpenAI;

class BotManController extends Controller
{
    public function index(Request $request)
    {
        return view('botman');
    }

    public function store(Request $request)
    {
       try {
            $result = OpenAI::completions()->create([
                'max_tokens' => 1024,
                'model' => 'text-davinci-002',
                'prompt' => $request->chat
            ]);
            
            $response = array_reduce(
                $result->toArray()['choices'],
                fn(string $result, array $choice) => $result . $choice['text'], ""
            );
            
            return response()->json([
                'data' => $response
            ], 200);

       } catch (\Exception $e) {
            return $e->getMessage();
       }
    }
}
