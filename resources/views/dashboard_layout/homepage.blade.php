@extends('dashboard_layout.app')

@section('title', 'Homepage - WonderPets Portal')
@section('header_title', 'Welcome, ' . session('user_name', 'Student') . '!')
@section('header_subtitle', 'Institution Overview & Dashboard')

@section('content')
<div class="space-y-8">
    
    <!-- Hero Welcome Banner -->
    <div class="glass-panel rounded-3xl p-10 flex items-center justify-between relative overflow-hidden group border border-white">
        <div class="absolute right-0 top-0 w-64 h-full bg-gradient-to-l from-indigo-50 to-transparent pointer-events-none"></div>
        <div class="relative z-10">
            <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-emerald-50 border border-emerald-100 text-emerald-600 text-[10px] font-bold uppercase tracking-widest mb-5 shadow-sm">
                <span class="w-1.5 h-1.5 rounded-full bg-emerald-500 animate-pulse"></span> Network Active
            </div>
            <h3 class="text-3xl font-extrabold text-slate-800 mb-3 tracking-tight">SIA101 Central Workspace</h3>
            <p class="text-sm text-slate-500 max-w-xl leading-relaxed font-medium">
                Your elite portal for tracking academic timetables, participating in virtual classes, and collaborating with peers in real-time through the dedicated discussion network.
            </p>
        </div>
        <a href="{{ route('dashboard.online_classes') }}" class="relative z-10 bg-indigo-600 text-white px-8 py-4 rounded-xl text-sm font-extrabold shadow-lg shadow-indigo-600/30 hover:shadow-indigo-600/50 hover:-translate-y-0.5 transition-all flex items-center gap-2">
            View Classes <i class="fas fa-arrow-right"></i>
        </a>
    </div>

    <!-- NEW: Glass Metric Cards Grid -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <div class="glass-panel rounded-3xl p-7 border border-white flex items-center justify-between hover:shadow-xl hover:-translate-y-1 transition-all">
            <div>
                <p class="text-[10px] font-extrabold text-slate-400 uppercase tracking-widest">Enrolled Units (EXAMPLE)</p>
                <h4 class="text-3xl font-extrabold text-slate-800 mt-1">21.0</h4>
                <span class="text-[10px] font-bold text-emerald-700 bg-emerald-100 border border-emerald-200 px-2.5 py-0.5 rounded-full mt-3 inline-block shadow-sm">7 Courses Active</span>
            </div>
            <div class="w-14 h-14 rounded-2xl bg-indigo-50 border border-indigo-100 flex items-center justify-center text-indigo-600 text-2xl font-bold shadow-inner">
                <i class="fa-solid fa-book-open"></i>
            </div>
        </div>

        <div class="glass-panel rounded-3xl p-7 border border-white flex items-center justify-between hover:shadow-xl hover:-translate-y-1 transition-all">
            <div>
                <p class="text-[10px] font-extrabold text-slate-400 uppercase tracking-widest">Attendance Rate (EXAMPLE)</p>
                <h4 class="text-3xl font-extrabold text-slate-800 mt-1">98.5%</h4>
                <span class="text-[10px] font-bold text-indigo-700 bg-indigo-100 border border-indigo-200 px-2.5 py-0.5 rounded-full mt-3 inline-block shadow-sm">Excellent Standing</span>
            </div>
            <div class="w-14 h-14 rounded-2xl bg-emerald-50 border border-emerald-100 flex items-center justify-center text-emerald-600 text-2xl font-bold shadow-inner">
                <i class="fa-solid fa-chart-line"></i>
            </div>
        </div>

        <div class="glass-panel rounded-3xl p-7 border border-white flex items-center justify-between hover:shadow-xl hover:-translate-y-1 transition-all">
            <div>
                <p class="text-[10px] font-extrabold text-slate-400 uppercase tracking-widest">Next Lecture (EXAMPLE)</p>
                <h4 class="text-xl font-extrabold text-slate-800 mt-1 truncate max-w-[140px]">SIA101 Lab</h4>
                <span class="text-[10px] font-bold text-rose-700 bg-rose-100 border border-rose-200 px-2.5 py-0.5 rounded-full mt-3 inline-block shadow-sm">Starts in 45m</span>
            </div>
            <div class="w-14 h-14 rounded-2xl bg-rose-50 border border-rose-100 flex items-center justify-center text-rose-600 text-2xl font-bold shadow-inner">
                <i class="fa-solid fa-clock"></i>
            </div>
        </div>
    </div>

    <!-- Floating Content Cards -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-start">
        <div class="glass-panel rounded-3xl p-8 transition-all duration-300 hover:-translate-y-1 hover:shadow-xl group">
            <div class="w-12 h-12 rounded-2xl bg-indigo-50 border border-indigo-100 text-indigo-600 flex items-center justify-center font-bold text-xl mb-5 shadow-sm group-hover:scale-110 transition-transform">
                <i class="fas fa-bullseye"></i>
            </div>
            <h3 class="text-xl font-extrabold text-slate-800 mb-2">Our Mission (EXAMPLE)</h3>
            <p class="text-slate-500 text-sm leading-relaxed font-medium">
                To provide quality, accessible, and industry-aligned education in information technology and computer science, fostering technical competence, critical thinking, and ethical values among future software professionals.
            </p>
        </div>

        <div class="glass-panel rounded-3xl p-8 transition-all duration-300 hover:-translate-y-1 hover:shadow-xl group">
            <div class="w-12 h-12 rounded-2xl bg-blue-50 border border-blue-100 text-blue-600 flex items-center justify-center font-bold text-xl mb-5 shadow-sm group-hover:scale-110 transition-transform">
                <i class="fas fa-eye"></i>
            </div>
            <h3 class="text-xl font-extrabold text-slate-800 mb-2">Our Vision (EXAMPLE)</h3>
            <p class="text-slate-500 text-sm leading-relaxed font-medium">
                A premier institution of excellence recognized globally for producing innovative technology leaders, pioneering software solutions, and driving positive digital transformation in society.
            </p>
        </div>
    </div>
</div>
@endsection
