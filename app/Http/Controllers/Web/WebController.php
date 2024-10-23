<?php

namespace App\Http\Controllers\Web;

use App\Domain\Tools\ToolsRepository;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WebController extends Controller
{
    private ToolsRepository $toolsRepository;
    public function __construct(ToolsRepository $toolsRepository)
    {
        $this->toolsRepository = $toolsRepository;
    }
    public function viewDashBoard()
    {
        $tools = $this->toolsRepository->findAll();
        return view('pages.dashboard', compact('tools'));
    }
    public function viewAddTool($id)
    {
        dd($id);
        return view('pages.addTools');
    }
}
