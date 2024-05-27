<?php
namespace App\Http\Controllers\Watchlist;

use App\Http\Controllers\Controller;
use App\Models\MonitoringPimpinan\Monitoring\Subject;
use App\Models\MonitoringPimpinan\Monitoring\SubjectDetail;
use Illuminate\Http\Request;

class SubjectDetailStoreController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, Subject $subject)
    {
        $request->validate([
            'name'  => 'required|max:50',
            'start' => 'required|date',
            'end'   => 'required|date',
        ]);

        SubjectDetail::create([
            'name'       => $request->name,
            'comment'    => $request->comment,
            'start'      => $request->start,
            'end'        => $request->end,
            'subject_id' => $subject->id,
        ]);

        return redirect(
            '/watchlist/subject/' . $subject->id
        )->with('success', 'Sukses menambahkan aksi');
    }
}