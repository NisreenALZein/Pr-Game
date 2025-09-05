<?php

namespace App\Http\Controllers;

use App\Models\GameSimilarity;
use Illuminate\Http\Request;
use App\Models\Game;


class GameSimilarityController extends Controller
{

    public function similar($gameId, $n = 5)
    {
        $similarities = GameSimilarity::where('game_id', $gameId)
            ->orderByDesc('similarity')
            ->take($n)
            ->get();

        $result = [];
        foreach ($similarities as $sim) {
            $game = Game::find($sim->other_game_id);
            if ($game) {
                $result[] = [
                    'game' => $game->title,
                    'similarity' => round($sim->similarity, 3)
                ];
            }
        }

        return response()->json($result);
    }
}
    