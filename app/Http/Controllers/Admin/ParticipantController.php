<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class ParticipantController extends Controller
{
    public function __construct()
    {
        //
    }

    public function index()
    {
        $participants = User::query()
        ->when(request()->participant_type, function ($query) {
                if (request()->participant_type == 2) {
                    $query->where('is_vivographer', 1);
                }
            })
            ->latest()
            ->paginate(25);
        return view('admin.participants.index', compact('participants'));
    }

    public function update_vivographer_status(User $user)
    {
        $status_to_update = request()->status;

        try {
            $user->is_vivographer = $status_to_update;
            $user->save();

            session()->flash('success', 'Successfully updated');
        } catch (\Exception $e) {
            session()->flash('error', 'Update failed');
        }

        return back();
    }
}
