<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Reviewing;
use App\Http\Trait\GeneralTrait;
use Illuminate\Support\Str ;
use App\Models\Game;




class ReviewingController extends Controller
{
    use GeneralTrait;
    
public function addOrUpdateComment(Request $request)
{$request->validate([
    'comment' => 'required|string|max:255', // تمت إزالة regex
    'title' => 'required|string|exists:games,title'
    ]);

   $userId = Auth::id();
 if (!$userId) {
 return response()->json(['message' => 'Unauthorized'], 401);
  }

  $comment = $request->input('comment');
   $title = $request->input('title');

   $game = Game::where('title', $title)->first();

 if (!$game) {
 return response()->json(['message' => 'Game not found'], 404);
  }

$gameId = $game->id;

  $reviewing = Reviewing::where('user_id', $userId)
                         ->where('game_id', $gameId)
                         ->first();

 if ($reviewing) {
    $reviewing->comment = $comment;
    $reviewing->save();
   } else {
        Reviewing::create([
         "uuid"=>Str::uuid(),
         'user_id' => $userId,
          'game_id' => $gameId,
          'comment'=>$comment,
   ]);
 }

$data = [
     'comment' => $comment,
     'game_title' => $title,
    
    ];
   return $this->apiResponse($data, true, 'Comment added/updated successfully', 200);

}

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
