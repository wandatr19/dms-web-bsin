<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use Yajra\DataTables\DataTables;
use Illuminate\Http\Request;

class HistoryController extends Controller
{
    public function index()
    {
        // $activites = Activity::paginate(20);
        return view('history2');
    }
    public function getActivities()
    {
        $activities = Activity::select(['description', 'properties', 'created_at']);
        return DataTables::of($activities)
            ->addColumn('action', function ($activity) {
                return '<button class="btn btn-danger btn-sm delete-btn" data-id="' . $activity->id . '">Hapus</button>';
            })
            ->rawColumns(['action'])
            ->make(true);
    }
    public function export()
    {
    }
    public function delete()
    {
    }
    public function destroy()
    {
    }
}
