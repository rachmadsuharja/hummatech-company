<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Inbox;
use App\Mail\ReplyContacts;
use App\Models\Notification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class ContactsController extends Controller
{
    public function index(Request $request) {
        $admin = User::where('role', 'admin')->where('id', Auth::id())->first();
        $notification = Notification::where('category', 'inbox')->get();
        $search = $request->input('search');
        $inbox = Inbox::query()->when(request()->has('search'), function ($query) {
            $search = request('search');
            $query->where(function ($subquery) use ($search) {
                $subquery->where('name', 'like', '%' . $search . '%')->orWhere('subject', 'like', '%' . $search . '%');
            });
        })->paginate(6);
        $inbox->appends(['search' => $search]);
        return view('admin.inbox', compact('admin','inbox','notification'));
    }

    public function reply(Request $request, string $id) {
        $inbox = Inbox::findOrFail($id);
        $inbox->update([
            'subject2' => $request->subject2,
            'replied_message' => $request->replied_message,
        ]);

        Mail::to($inbox->email)->send(new ReplyContacts($inbox));
        $inbox->delete();
        toastr()->success('Berhasil membalas pesan','Success');
        return back();
    }
}
