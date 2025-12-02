<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Backend\Utilities\ContactForm;
use Illuminate\Http\Request;

class AdminPanelController extends Controller
{
    public function index()
    {
        $totalMessages = ContactForm::count();
        $unreadMessages = ContactForm::where('is_read', false)->count();
        $recentMessages = ContactForm::orderBy('created_at', 'desc')->limit(5)->get();

        return view('admin.dashboard', compact('totalMessages', 'unreadMessages', 'recentMessages'));
    }
}
