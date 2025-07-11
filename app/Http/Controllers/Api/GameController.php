<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Game ;
use App\Models\User ;
use App\Models\Category ;
use App\Http\Resources\GameResource ;
use App\Http\Trait\GeneralTrait;
use App\Http\Resources\AllGameResource ;
use App\Http\Resources\MostFollowResource ;
use App\Http\Resources\GameResource2 ;



class GameController extends Controller
{
    use GeneralTrait;


    public function index(){
        $games = Game::withAvg('reviewings', 'rating')->get(); 
        return GameResource2::collection($games);
            }

    public function latestGames(){
       $games = Game::withAvg('reviewings', 'rating')
       ->orderBy('created_at','DESC')
       ->take(50)
       ->get(); 
    return GameResource2::collection($games);}

   public function MostFollow(){
   $mostFollows = Game::withCount('users')
    ->withAvg('reviewings', 'rating')
    ->orderBy('users_count','DESC')->get() ;
         return  MostFollowResource::collection($mostFollows) ;}

   public function show(request $request) {
      $game = Game::where('uuid',$request->uuid)->first() ;
       return new AllGameResource($game) ;
     }
    
     public function getGamesByCategory(request $request) {

       $uuid = Category::where('title',$request->title)->get()->pluck('uuid')->first() ; 
  
         if($uuid){

         $category = Category::with('games')->where('uuid', $uuid)->get();
         
         if (!$category) {
             return response()->json(['message' => 'Category not found'], 404);
         }
         return AllGameResource::collection($category->games);
        
        }else{
            return response()->json(['message' => 'uuid not found'], 404);

        }}
     




         
public function search(Request $request) {

    $gender = $request->input('gender');
    $age = $request->input('age');
    $minRating = $request->input('min_rating');
    $maxRating = $request->input('max_rating');
    $categoryTitle = $request->input('category');


    $query = Game::query();

    if ($gender) {
        $query->whereHas('users', function ($q) use ($gender) {
            $q->where('gender', $gender);
        });
    }
   
    if ($age) {
        // تحقق مما إذا كان العمر ضمن الفئات المحددة
        if ($age >= 6 && $age <= 12) {
            $query->whereHas('users', function ($q) {
                $q->whereBetween('age', [6, 12]);
            });
        } elseif ($age >= 12 && $age <= 19) {
            $query->whereHas('users', function ($q) {
                $q->whereBetween('age', [12, 19]);
            });
        } elseif ($age >= 20 && $age <= 25) {
            $query->whereHas('users', function ($q) {
                $q->whereBetween('age', [20, 25]);
            });
        } elseif ($age >= 25 && $age <= 40) {
            $query->whereHas('users', function ($q) {
                $q->whereBetween('age', [25, 40]);
            });
        }
    }

    // إضافة شرط التقييم
    if ($minRating || $maxRating) { 
        $query->whereHas('reviewings', function ($q) use ($minRating, $maxRating) {
            if ($minRating) {
                $q->where('rating', '>=', $minRating);
            }
            if ($maxRating) {
                $q->where('rating', '<=', $maxRating);
            }
        });
    }
    // إضافة شرط category
    if ($categoryTitle) {
        $query->whereHas('category', function ($q) use ($categoryTitle) {
            $q->where('title', $categoryTitle);
        });
    }

    $games = $query->get();
    return $this->apiResponse($games);

}


public function search2(Request $request)
{
    $request->validate([
        'title' => 'required|string|max:255'
    ]) ;
    $title = $request->input('title') ;

    $games = Game::where('title','LIKE',"$title%")->get() ;

    if($games->isEmpty())
    {
        return $this->apiResponse(null, false, 'No Games match this name .', 400);
    }
   // return $this->apiResponse($games);
   return GameResource2::collection($games) ;
}
        


///

public function getCommentsByGameName(Request $request)
      {
          // تحقق من صحة البيانات المدخلة
          $request->validate([
              'title' => 'required|string',
          ]);
     
          $title = $request->input('title');
     
          // ابحث عن اللعبة حسب الاسم
          $game = Game::where('title', $title)->first();
     
          if (!$game) {
              return response()->json([
                  'success' => false,
                  'error' => 'Game not found',
              ], 404);
          }
     
          // استرجع التعليقات مع بيانات المستخدمين
          $comments = $game->reviewings()->with('user:id,name')->get(['user_id', 'rating', 'comment']);
     
          // تحويل النتائج إلى مصفوفة بسيطة
          $result = $comments->map(function ($review) {
              return [
                  'user_name' => $review->user->name,
                  'rating' => $review->rating,
                  'comment' => $review->comment,
              ];
          });
     
          return response()->json([
            'success' => true,
            'data' => $result,
        ]);
       
      }
     }
    
