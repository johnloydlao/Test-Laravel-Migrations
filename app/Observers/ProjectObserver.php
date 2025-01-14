<?php
 
namespace App\Observers;
 
use App\Models\Project;
use Illuminate\Contracts\Events\ShouldHandleEventsAfterCommit;
 
class ProjectObserver implements ShouldHandleEventsAfterCommit;
{
    /**
     * Handle the User "created" event.
     */
    public function created(Project $project): void
    {
        // ...
    }
 
    /**
     * Handle the User "updated" event.
     */
    public function updated(Project $project): void
    {
       Stat::increment('projects_count', 1);
    }
 
    /**
     * Handle the User "deleted" event.
     */
    public function deleted(Project $project): void
    {
        // ...
    }
 
    /**
     * Handle the User "restored" event.
     */
    public function restored(Project $project): void
    {
        // ...
    }
 
    /**
     * Handle the User "forceDeleted" event.
     */
    public function forceDeleted(Project $project): void
    {
        // ...
    }
}
