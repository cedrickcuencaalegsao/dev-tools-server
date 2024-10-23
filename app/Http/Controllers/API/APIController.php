<?php

namespace App\Http\Controllers\API;

use App\Application\Tools\RegisterTools;
use App\Domain\Tools\Tools;
use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
    public function getTool(int $id)
    {
        $tool = $this->registerTools->findByID($id);

        if ($tool === null) {
            return response()->json(['message' => 'Tool not found.'], 404);
        }
        return response()->json(['data' => $tool->toArray()], 200);
    }
    public function FindAll(): JsonResponse
    {
        $tools = $this->registerTools->findAll();

        $toolsArray = array_map(fn($tool) => $tool->toArray(), $tools);

        return response()->json(['data' => $toolsArray], 200);
    }
    public function search(Request $request)
    {
        $searchTerm = $request->input('searched');

        if (!$searchTerm) {
            return response()->json(['message' => 'Invalid search'], 400);
        }

        $result = $this->registerTools->searchTools($searchTerm);
        if (is_null($result['exactMatch'] && empty($result['relatedItems']))) {
            return response()->json(['message' => 'No match found.'], 404);
        }

        return response()->json($result);
    }
    public function getTrending()
    {
        $tools = $this->registerTools->getToolsOrderedByClickCount();
        return response()->json(['data' => $tools], 200);
    }
    public function updateClickCount(int $id)
    {
        try {
            $this->registerTools->updateClickCount($id);
            return response()->json(true, 200);
        } catch (\Throwable $th) {
            return response()->json(false, 400);
        }
    }
}
