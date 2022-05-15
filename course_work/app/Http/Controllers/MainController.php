<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Employee;
use App\Models\Work;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        return view('pages.index');
    }

    public function ourWorks()
    {
        $works = Work::all();
        return view('pages.our-works', compact('works'));
    }

    public function staff()
    {
        $employees = Employee::all();
        return view('pages.staff', compact('employees'));
    }

    public function contactUs()
    {
        return view('pages.contact-us');
    }

    public function sendTask(Request $request)
    {
        $this->validate($request, [
            'task' => 'required',
            'tz' => 'required',
            'photo' => 'required'
        ]);
        $contact = new Contact;
        $contact->task = $request->task;
        $contact->path_to_task = $request->file('tz')->store('tasks');
        $contact->path_to_img = $request->file('photo')->store('images');
        $contact->save();
        return redirect()->back()->with('success', 'Форма успешно отправлена!');
    }
}
