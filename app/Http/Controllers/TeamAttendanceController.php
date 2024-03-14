<?php

namespace App\Http\Controllers;

use App\Models\TeamEvents;
use App\Models\TeamAttendance;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TeamAttendanceController extends Controller
    {
    public function index ( $id )
        {
        $events     = TeamEvents::find ( $id );
        $attendance = TeamAttendance::where ( 'team_event_id', $id )->join ( 'users', 'users.id', 'team_attendances.user_id' )->select ( 'team_attendances.*', 'users.full_name as name' )->orderBy ( 'active', 'asc' )->orderBy ( 'name', 'asc' )->get ();
        return view ( 'team-attendance.form', [ 'events' => $events, 'attendance' => $attendance ] );
        }

    public function update ( Request $request )
        {
        $attendance             = TeamAttendance::findOrFail ( $request->id );
        $attendance->active     = ! $attendance->active;
        $events_id              = $attendance->team_event_id;
        $attendance->updated_by = Auth::id ();
        $attendance->save ();

        return redirect ( '/team-attendance/' . $events_id );

        }
    }
