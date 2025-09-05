<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game;
use App\Models\Reviewing;
use App\Models\GameSimilarity;

class RecommendationController extends Controller
{
    //
    public function predictUserRating($userId, $gameId)
    {
        $reviews = Reviewing::where('user_id', $userId)->get();
        if ($reviews->isEmpty()) {
            return null;
        }

        $similarities = GameSimilarity::where('game_id', $gameId)->get()->keyBy('other_game_id');
        $numerator = 0;
        $denominator = 0;

        foreach ($reviews as $review) {
            if (isset($similarities[$review->game_id])) {
                $sim = $similarities[$review->game_id]->similarity;
                $numerator += $sim * $review->rating;
                $denominator += abs($sim);
            }
        }

        return $denominator > 0 ? $numerator / $denominator : null;
    }

    public function recommend($userId, $n = 5)
    {
        $games = Game::all();
        $reviews = Reviewing::where('user_id', $userId)->pluck('rating', 'game_id');
        $recommendations = [];

        foreach ($games as $game) {
            if (!$reviews->has($game->id)) {
                $predicted = $this->predictUserRating($userId, $game->id);
                if ($predicted !== null) {
                    $recommendations[] = [
                        'game' => $game->title,
                        'predicted_rating' => round($predicted, 2),
                    ];
                }
            }
        }

        usort($recommendations, fn($a, $b) => $b['predicted_rating'] <=> $a['predicted_rating']);
        return response()->json(array_slice($recommendations, 0, $n));
    }
}
