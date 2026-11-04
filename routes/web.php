<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

// --- AUTHENTICATION ROUTES ---
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::post('/login', function (Request $request) {
    $request->validate(['email' => 'required|email', 'password' => 'required']);
    $name = explode('@', $request->email)[0];
    session(['user_id' => 1, 'user_name' => ucfirst($name), 'user_email' => $request->email]);
    return redirect()->route('dashboard.home');
})->name('login.submit');

Route::get('/register', function () {
    return view('auth.register');
})->name('register');

Route::post('/register', function (Request $request) {
    $request->validate(['name' => 'required', 'email' => 'required|email', 'password' => 'required']);
    session(['user_id' => 1, 'user_name' => $request->name, 'user_email' => $request->email]);
    return redirect()->route('dashboard.home');
})->name('register.submit');

Route::get('/logout', function () {
    session()->flush();
    return redirect()->route('login');
})->name('logout');


// --- PROTECTED DASHBOARD ROUTES ---
Route::get('/', function () {
    if (!session()->has('user_id')) { return redirect()->route('login'); }
    return view('dashboard_layout.homepage');
})->name('dashboard.home');


// --- FUNCTIONAL CHAT ROUTES ---
Route::get('/chat', function () {
    if (!session()->has('user_id')) { return redirect()->route('login'); }
    // Initialize empty chat array if it doesn't exist
    if (!session()->has('chat_messages')) {
        session(['chat_messages' => []]);
    }
    return view('dashboard_layout.chat');
})->name('dashboard.chat');

Route::post('/chat/send', function (Request $request) {
    if (!session()->has('user_id')) { return redirect()->route('login'); }
    $request->validate(['message' => 'required|string']);
    
    // Retrieve, update, and save the chat messages array
    $messages = session('chat_messages', []);
    $messages[] = [
        'name' => session('user_name'),
        'initials' => strtoupper(substr(session('user_name', 'SU'), 0, 2)),
        'text' => $request->message,
        'time' => now()->format('h:i A')
    ];
    session(['chat_messages' => $messages]);
    
    return redirect()->route('dashboard.chat');
})->name('dashboard.chat.send');

Route::post('/chat/clear', function () {
    if (!session()->has('user_id')) { return redirect()->route('login'); }
    session()->forget('chat_messages'); // Clears the chat history
    return redirect()->route('dashboard.chat');
})->name('dashboard.chat.clear');
// ------------------------------


Route::get('/calendar', function () {
    if (!session()->has('user_id')) { return redirect()->route('login'); }
    return view('dashboard_layout.calendar');
})->name('dashboard.calendar');

Route::get('/online-classes', function () {
    if (!session()->has('user_id')) { return redirect()->route('login'); }
    return view('dashboard_layout.online_classes');
})->name('dashboard.online_classes');

// --- THEME SIDEBAR ROUTES (Prevents 404 Errors) ---
Route::get('/settings', function () {
    if (!session()->has('user_id')) { return redirect()->route('login'); }
    return view('dashboard_layout.homepage'); 
})->name('dashboard.settings');

Route::get('/tasks', function () {
    if (!session()->has('user_id')) { return redirect()->route('login'); }
    return view('dashboard_layout.homepage'); 
})->name('dashboard.tasks');

Route::get('/team', function () {
    if (!session()->has('user_id')) { return redirect()->route('login'); }
    return view('dashboard_layout.homepage'); 
})->name('dashboard.team');
