@extends('dashboard_layout.app')

@section('title', 'Online Classes - WonderPets Portal')
@section('header_title', 'Virtual Classrooms')
@section('header_subtitle', 'Join active lectures and seminars')

@section('content')
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 items-start">
    
    <!-- Active Class Card -->
    <div class="glass-panel rounded-3xl flex flex-col overflow-hidden transition-all duration-300 hover:-translate-y-1 hover:shadow-xl group border border-white">
        <div class="p-7 border-b border-slate-100 bg-white/60 relative overflow-hidden">
            <div class="flex justify-between items-start relative z-10">
                <div>
                    <h3 class="text-2xl font-extrabold text-slate-800">SIA101</h3>
                    <p class="text-xs text-slate-500 font-bold mt-1 uppercase tracking-widest">System Integration</p>
                </div>
                <div class="flex items-center gap-1.5 bg-rose-50 border border-rose-200 text-rose-600 px-3 py-1.5 rounded-full shadow-sm">
                    <span class="relative flex h-2 w-2">
                      <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-rose-400 opacity-75"></span>
                      <span class="relative inline-flex rounded-full h-2 w-2 bg-rose-500"></span>
                    </span>
                    <span class="text-[10px] font-bold uppercase tracking-wider">Live</span>
                </div>
            </div>
        </div>
        <div class="p-7 flex flex-col flex-1 bg-white/40">
            <div class="space-y-4 mb-8 flex-1">
                <div class="flex items-center gap-4 text-sm text-slate-600">
                    <div class="w-9 h-9 rounded-xl bg-indigo-50 border border-indigo-100 flex items-center justify-center text-indigo-600 shadow-sm"><i class="fa-solid fa-chalkboard-user"></i></div>
                    <span class="font-extrabold">Prof. Samuel Camorongan</span>
                </div>
                <div class="flex items-center gap-4 text-sm text-slate-600">
                    <div class="w-9 h-9 rounded-xl bg-indigo-50 border border-indigo-100 flex items-center justify-center text-indigo-600 shadow-sm"><i class="fa-solid fa-video"></i></div>
                    <span class="font-extrabold">Google Meet</span>
                </div>
            </div>
            <a href="#" class="w-full text-center bg-indigo-600 border border-indigo-700 text-white py-3.5 rounded-xl text-sm font-extrabold transition-all hover:bg-indigo-700 hover:shadow-lg hover:shadow-indigo-600/20">
                Join Classroom <i class="fas fa-sign-in-alt ml-1"></i>
            </a>
        </div>
    </div>

    <!-- Scheduled Class Card -->
    <div class="glass-panel rounded-3xl flex flex-col overflow-hidden transition-all duration-300 hover:-translate-y-1 hover:shadow-xl group border border-white">
        <div class="p-7 border-b border-slate-100 bg-white/60 relative overflow-hidden">
            <div class="flex justify-between items-start relative z-10">
                <div>
                    <h3 class="text-2xl font-extrabold text-slate-800">CC106</h3>
                    <p class="text-xs text-slate-500 font-bold mt-1 uppercase tracking-widest">App Development</p>
                </div>
                <span class="text-[10px] bg-slate-100 text-slate-500 border border-slate-200 px-3 py-1.5 rounded-full uppercase font-bold tracking-wider shadow-sm">Scheduled</span>
            </div>
        </div>
        <div class="p-7 flex flex-col flex-1 bg-white/40">
            <div class="space-y-4 mb-8 flex-1">
                <div class="flex items-center gap-4 text-sm text-slate-600">
                    <div class="w-9 h-9 rounded-xl bg-slate-50 border border-slate-200 flex items-center justify-center text-slate-500 shadow-sm"><i class="fa-solid fa-chalkboard-user"></i></div>
                    <span class="font-extrabold">Prof. Harold Sarmiento
                </div>
                <div class="flex items-center gap-4 text-sm text-slate-600">
                    <div class="w-9 h-9 rounded-xl bg-slate-50 border border-slate-200 flex items-center justify-center text-slate-500 shadow-sm"><i class="fa-solid fa-video"></i></div>
                    <span class="font-extrabold">Google Meet</span>
                </div>
            </div>
            <a href="#" class="w-full text-center bg-white border border-slate-200 text-slate-700 py-3.5 rounded-xl text-sm font-extrabold hover:bg-slate-50 hover:shadow-md transition-all">
                View Details
            </a>
        </div>
    </div>
</div>
@endsection
