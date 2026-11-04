@extends('dashboard_layout.app')

@section('title', 'Logout Confirmation')
@section('header_title', 'Session Termination')

@section('content')
<div class="max-w-md mx-auto bg-white rounded-2xl shadow-sm border border-slate-200 p-8 text-center mt-12">
    <div class="w-16 h-16 bg-red-50 text-red-600 rounded-full flex items-center justify-center mx-auto mb-4 text-2xl">
        <i class="fa-solid fa-triangle-exclamation"></i>
    </div>
    <h3 class="text-xl font-bold text-slate-800 mb-2">Are you sure you want to logout?</h3>
    <p class="text-xs text-slate-500 mb-6">
        You will be securely signed out of your portal session. Any unsaved work in progress will require you to log back in.
    </p>
    <div class="flex space-x-3">
        <a href="{{ route('dashboard.home') }}" class="flex-1 bg-slate-100 text-slate-700 py-2.5 rounded-xl text-sm font-semibold hover:bg-slate-200 transition-colors">
            Cancel
        </a>
        <button onclick="alert('Session successfully ended. Goodbye, Jeobert!'); window.location.href='{{ route('dashboard.home') }}';" class="flex-1 bg-red-600 text-white py-2.5 rounded-xl text-sm font-semibold hover:bg-red-700 transition-colors shadow-md">
            Confirm Logout
        </button>
    </div>
</div>
@endsection
