<?php

namespace App\Policies;

use App\User;
use App\DiaryEntry;
use Illuminate\Auth\Access\HandlesAuthorization;

class DiaryEntryPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the diary entry.
     *
     * @param  \App\User  $user
     * @param  \App\DiaryEntry  $diaryEntry
     * @return mixed
     */
    public function view(User $user, DiaryEntry $diaryEntry)
    {
        //
    }

    /**
     * Determine whether the user can create diary entries.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the diary entry.
     *
     * @param  \App\User  $user
     * @param  \App\DiaryEntry  $diaryEntry
     * @return mixed
     */
    public function update(User $user, DiaryEntry $diaryEntry)
    {
        return $diaryEntry->user_id === $user->id;
    }

    /**
     * Determine whether the user can delete the diary entry.
     *
     * @param  \App\User  $user
     * @param  \App\DiaryEntry  $diaryEntry
     * @return mixed
     */
    public function delete(User $user, DiaryEntry $diaryEntry)
    {
        //
    }

    /**
     * Determine whether the user can restore the diary entry.
     *
     * @param  \App\User  $user
     * @param  \App\DiaryEntry  $diaryEntry
     * @return mixed
     */
    public function restore(User $user, DiaryEntry $diaryEntry)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the diary entry.
     *
     * @param  \App\User  $user
     * @param  \App\DiaryEntry  $diaryEntry
     * @return mixed
     */
    public function forceDelete(User $user, DiaryEntry $diaryEntry)
    {
        //
    }
}
