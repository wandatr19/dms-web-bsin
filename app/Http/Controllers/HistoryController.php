<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use Yajra\DataTables\DataTables;
use Illuminate\Http\Request;

class HistoryController extends Controller
{
    // public function index(Request $request)
    // {
    //     if ($request->ajax()) {
    //         $data = Activity::all();
    //         return DataTables::of($data)
    //             ->addColumn('action', function ($row) {
    //                 $btn = '<button type="button" class="btn btn-danger btn-sm" onclick="deleteLog(' . $row->id . ')">Delete</button>';
    //                 return $btn;
    //             })
    //             ->rawColumns(['action'])
    //             ->make(true);
    //     }

    //     return view('history2');
    // }
    public function index()
    {
        return view('history2');
    }
    // public function getActivities()
    // {
    //     $activities = Activity::select(['description', 'properties', 'created_at']);
    //     return DataTables::of($activities)
    //         ->addColumn('action', function ($activity) {
    //             return '<button class="btn btn-danger btn-sm delete-btn" data-id="' . $activity->id . '">Hapus</button>';
    //         })
    //         ->rawColumns(['action'])
    //         ->make(true);
    // }
    public function getActivities()
    {
        $activities = Activity::select(['description', 'properties', 'created_at']);
        return DataTables::of($activities)->make(true);
    }

    public function export()
    {
    }
    public function delete()
    {
    }
    public function destroy()
    {
        try {
            Activity::truncate();

            return response()->json([
                'success' => true,
                'message' => 'Semua data log activity berhasil dihapus.'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Terjadi kesalahan saat menghapus data log activity.'
            ]);
        }    
    }
}
