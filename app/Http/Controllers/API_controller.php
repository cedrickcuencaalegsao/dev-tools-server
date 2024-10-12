<?php

namespace App\Http\Controllers;

use App\Application\Tools\RegisterTools;
use App\Domain\Tools\Tools;
use App\Infrastructure\Persistence\Eloquent\Tools\ToolsModel;
use Illuminate\Http\Request;

class API_controller extends Controller
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
    public function FindAll()
    {
        // Assuming you are getting an array of tools
        $data = $this->registerTools->findAll(); // This returns an array

        // Convert array to a collection of Tool objects
        $tools = collect($data)->map(function ($item) {
            return new ToolsModel($item->toArray()); // Create a new Tool object for each item
        });

        return response()->json(['data' => $tools], 200);
    }
}
