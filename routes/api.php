<?php

use App\Http\Resources\TodayTaskResource;
use App\Http\Resources\UpcomingResource;
use App\Models\Today;
use App\Models\Upcoming;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// ** UPcoming Task *//

Route::get("/upcoming", function(){
    $upcoming = Upcoming::all();
    
    return UpcomingResource::collection($upcoming);
});
// Add a new task
Route::post("/upcoming", function(Request $request){
    return Upcoming::create([
        'title' => $request->title,
        'taskId' => $request->taskID,
        'waiting' => $request->waiting
     ]);
});

// Delete upcoming task

Route::delete("/upcoming/{taskId}", function(Request $request){
    DB::table('upcomings')->where('taskId', $taskId)->delete();
    
    return 204;
});
//** Today Task */

// Get all task
Route::get("/dailyTask", function(){
    $todaytask = Today::all();
    return TodayTaskResource::colection($todaytask);
});
//Add a task
    Route::post('/dailytask', function (Request $request) {
        return Today::create([
        'id' => $request->id,
        'title' => $request->title,
        'taskid' => $request->taskID
         ]);
  ]);
 

