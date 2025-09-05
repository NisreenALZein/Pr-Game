<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Reviewing;
use App\Models\GameSimilarity;

class ComputeSimilarities extends Command
{
    protected $signature = 'knn:compute-similarities';
    protected $description = 'حساب تشابه الألعاب باستخدام KNN';

    public function handle()
    {
        $data = Reviewing::all()->groupBy('game_id');
        GameSimilarity::truncate();

        foreach ($data as $gameId => $reviews) {
            foreach ($data as $otherId => $otherReviews) {
                if ($gameId >= $otherId) continue;

                $commonUsers = $reviews->whereIn('user_id', $otherReviews->pluck('user_id'))->pluck('user_id');
                if ($commonUsers->isEmpty()) continue;

                $r1 = $reviews->whereIn('user_id', $commonUsers)->pluck('rating', 'user_id');
                $r2 = $otherReviews->whereIn('user_id', $commonUsers)->pluck('rating', 'user_id');

                $num=0; $den1=0; $den2=0;
                foreach ($commonUsers as $u) {
                    $num  += $r1[$u] * $r2[$u];
                    $den1 += pow($r1[$u], 2);
                    $den2 += pow($r2[$u], 2);
                }
                $sim = ($den1 && $den2) ? $num / (sqrt($den1)*sqrt($den2)) : 0;

                if ($sim > 0) {
                    GameSimilarity::create([
                        'game_id' => $gameId,
                        'other_game_id' => $otherId,
                        'similarity' => $sim
                    ]);
                }
            }
        }

        $this->info('تم حساب التشابهات بنجاح');
    }
}
