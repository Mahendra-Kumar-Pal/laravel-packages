<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ZoomMeeting;
use App\Traits\ZoomMeetingTrait;

class ZoomMeetingController extends Controller
{
    use ZoomMeetingTrait;

    const MEETING_TYPE_INSTANT = 1;
    const MEETING_TYPE_SCHEDULE = 2;
    const MEETING_TYPE_RECURRING = 3;
    const MEETING_TYPE_FIXED_RECURRING_FIXED = 8;

    public function show($id)
    {
        $meeting = $this->get($id);
        return view('meetings.index', compact('meeting'));
    }

    public function store(Request $request)
    {
        $data = [];
        $data['topic'] = 'ZoomMeeting';
        $data['start_time'] = '10:02:00';
        $data['duration'] = '2 hours';
        $data['agenda'] = 'ZoomMeeting';
        $data['host_video'] = 1;
        $data['participant_video'] = 1;
        // dd($data);

        $this->create($data);
        return 'successfull';
        // return redirect()->route('meetings.index');
    }

    public function update($meeting, Request $request)
    {
        $this->update($meeting->zoom_meeting_id, $request->all());
        return redirect()->route('meetings.index');
    }

    public function destroy(ZoomMeeting $meeting)
    {
        $this->delete($meeting->id);
        return $this->sendSuccess('Meeting deleted successfully.');
    }
}
