<?php

namespace App\Http\Controllers\API;

use App\Application\Tools\RegisterTools;
use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class APIController extends Controller
{
    private RegisterTools $registerTools;
    public function __construct(RegisterTools $registerTools)
    {
        $this->registerTools = $registerTools;
    }
    public function index()
    {
        return response()->json("Hello World!");
    }
    public function FindAll(): JsonResponse
    {
        $tools = $this->registerTools->findAll();

        $toolsArray = array_map(fn($tool) => $tool->toArray(), $tools);

        return response()->json(['data' => $toolsArray], 200);
    }
}
