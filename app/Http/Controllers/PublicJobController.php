<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;

class PublicJobController extends Controller
{
    public function index(Request $request)
    {
        $query = Job::query();

        // Filter by title if search query provided
        if ($request->filled('title')) {
            $query->where('title', 'like', '%' . $request->title . '%');
        }

        // Filter by location if provided
        if ($request->filled('location')) {
            $query->where('location', 'like', '%' . $request->location . '%');
        }

        $jobs = $query->orderBy('deadline', 'asc')->paginate(10);

        return view('public.jobs.index', compact('jobs'));
    }

    public function show(Job $job)
    {
        return view('public.jobs.show', compact('job'));
    }
}
