<?php

namespace App\Http\Controllers;

use App\Services\ChatBotService;
use Illuminate\Http\Request;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function index(Request $request, ChatBotService $chatBot): View
    {
        $health = $chatBot->getHealth();
        $stats = $chatBot->getStats();
        $conversations = $chatBot->getRecentConversations(20);

        return view('admin.dashboard', [
            'health' => $health,
            'stats' => $stats,
            'conversations' => $conversations,
        ]);
    }
}
