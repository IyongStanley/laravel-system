<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'WonderPets Portal')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Alpine.js for UI interactions -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; background-color: #F8FAFC; }
        ::-webkit-scrollbar { width: 6px; height: 6px; }
        ::-webkit-scrollbar-track { background: transparent; }
        ::-webkit-scrollbar-thumb { background: #CBD5E1; border-radius: 4px; }
        ::-webkit-scrollbar-thumb:hover { background: #94A3B8; }
        
        /* Frosted Glass UI Classes */
        .glass-panel { 
            background: rgba(255, 255, 255, 0.65);
            backdrop-filter: blur(24px);
            -webkit-backdrop-filter: blur(24px);
            border: 1px solid rgba(255, 255, 255, 0.9);
            box-shadow: 0 10px 40px -10px rgba(0, 0, 0, 0.08);
        }
        .glass-header {
            background: rgba(255, 255, 255, 0.65);
            backdrop-filter: blur(24px);
            -webkit-backdrop-filter: blur(24px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.9);
        }
    </style>
</head>
<body class="text-slate-800 antialiased flex h-screen overflow-hidden selection:bg-indigo-200 selection:text-indigo-900 relative">
    
    <!-- Abstract Ambient Background -->
    <div class="absolute inset-0 z-0 overflow-hidden pointer-events-none">
        <div class="absolute top-[-10%] left-[-10%] w-[40%] h-[40%] rounded-full bg-indigo-300/40 blur-[120px] animate-pulse"></div>
        <div class="absolute bottom-[10%] right-[-10%] w-[50%] h-[50%] rounded-full bg-blue-300/30 blur-[140px] animate-pulse" style="animation-delay: 2s;"></div>
        <div class="absolute top-[30%] left-[30%] w-[30%] h-[30%] rounded-full bg-purple-300/20 blur-[100px] animate-pulse" style="animation-delay: 4s;"></div>
        <div class="absolute top-[10%] right-[20%] w-[25%] h-[25%] rounded-full bg-emerald-200/40 blur-[90px] animate-pulse" style="animation-delay: 1s;"></div>
    </div>

    <!-- Glass Sidebar -->
    <nav class="w-[90px] bg-white/40 backdrop-blur-3xl border-r border-white/80 flex flex-col items-center py-8 z-20 shrink-0 shadow-[4px_0_24px_rgba(0,0,0,0.03)]">
        <a href="{{ route('dashboard.home') }}" class="w-12 h-12 rounded-2xl bg-white flex items-center justify-center shrink-0 shadow-md border border-slate-100 mb-10 transition-transform hover:scale-105 hover:shadow-lg">
            <i class="fa-solid fa-paw text-indigo-600 font-extrabold text-xl"></i>
        </a>
        
        <!-- Navigation Icons -->
        <div class="flex flex-col items-center space-y-6 text-slate-400 text-xl w-full">
            <a href="{{ route('dashboard.home') }}" class="relative group p-3 rounded-xl transition-all duration-300 w-14 flex justify-center {{ request()->routeIs('dashboard.home') ? 'bg-white shadow-md text-indigo-600 border border-slate-100 scale-110' : 'hover:bg-white/60 hover:text-indigo-500' }}">
                <i class="fas fa-th-large"></i>
                <span class="absolute left-16 top-1/2 -translate-y-1/2 bg-white border border-slate-100 px-3 py-1.5 rounded-lg text-xs font-bold opacity-0 group-hover:opacity-100 transition-all text-slate-700 shadow-xl pointer-events-none whitespace-nowrap z-50">Homepage</span>
            </a>

            <a href="{{ route('dashboard.chat') }}" class="relative group p-3 rounded-xl transition-all duration-300 w-14 flex justify-center {{ request()->routeIs('dashboard.chat') ? 'bg-white shadow-md text-indigo-600 border border-slate-100 scale-110' : 'hover:bg-white/60 hover:text-indigo-500' }}">
                <i class="fas fa-comments"></i>
                <span class="absolute left-16 top-1/2 -translate-y-1/2 bg-white border border-slate-100 px-3 py-1.5 rounded-lg text-xs font-bold opacity-0 group-hover:opacity-100 transition-all text-slate-700 shadow-xl pointer-events-none whitespace-nowrap z-50">Discussions</span>
            </a>

            <a href="{{ route('dashboard.calendar') }}" class="relative group p-3 rounded-xl transition-all duration-300 w-14 flex justify-center {{ request()->routeIs('dashboard.calendar') ? 'bg-white shadow-md text-indigo-600 border border-slate-100 scale-110' : 'hover:bg-white/60 hover:text-indigo-500' }}">
                <i class="fas fa-calendar-alt"></i>
                <span class="absolute left-16 top-1/2 -translate-y-1/2 bg-white border border-slate-100 px-3 py-1.5 rounded-lg text-xs font-bold opacity-0 group-hover:opacity-100 transition-all text-slate-700 shadow-xl pointer-events-none whitespace-nowrap z-50">Timetable</span>
            </a>

            <a href="{{ route('dashboard.online_classes') }}" class="relative group p-3 rounded-xl transition-all duration-300 w-14 flex justify-center {{ request()->routeIs('dashboard.online_classes') ? 'bg-white shadow-md text-indigo-600 border border-slate-100 scale-110' : 'hover:bg-white/60 hover:text-indigo-500' }}">
                <i class="fas fa-laptop-code"></i>
                <span class="absolute left-16 top-1/2 -translate-y-1/2 bg-white border border-slate-100 px-3 py-1.5 rounded-lg text-xs font-bold opacity-0 group-hover:opacity-100 transition-all text-slate-700 shadow-xl pointer-events-none whitespace-nowrap z-50">Virtual Classrooms</span>
            </a>
        </div>

        <a href="{{ route('logout') }}" class="mt-auto relative group p-3 rounded-xl text-slate-400 hover:bg-rose-50 hover:text-rose-500 hover:border-rose-100 border border-transparent transition-all w-14 flex justify-center hover:scale-110">
            <i class="fas fa-sign-out-alt text-xl"></i>
            <span class="absolute left-16 top-1/2 -translate-y-1/2 bg-white border border-slate-100 text-rose-500 px-3 py-1.5 rounded-lg text-xs font-bold opacity-0 group-hover:opacity-100 transition-all shadow-xl pointer-events-none whitespace-nowrap z-50">Terminate Session</span>
        </a>
    </nav>

    <!-- Main Workspace -->
    <div class="flex-1 flex flex-col min-w-0 z-10">
        <header class="h-[90px] glass-header flex items-center justify-between px-10 shrink-0 z-10 sticky top-0 shadow-[0_4px_20px_-10px_rgba(0,0,0,0.05)]">
            <div>
                <h2 class="text-2xl font-extrabold text-slate-800 tracking-tight drop-shadow-sm">@yield('header_title')</h2>
                <p class="text-indigo-600 text-[10px] font-extrabold mt-1 uppercase tracking-widest">@yield('header_subtitle')</p>
            </div>
            
            <div class="flex items-center gap-5">
                <div class="bg-white/80 border border-white px-4 py-2 rounded-full flex items-center gap-3 shadow-sm hidden md:flex backdrop-blur-md">
                    <span class="relative flex h-2.5 w-2.5">
                      <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75"></span>
                      <span class="relative inline-flex rounded-full h-2.5 w-2.5 bg-emerald-500"></span>
                    </span>
                    <span class="text-[11px] text-slate-600 font-extrabold tracking-widest uppercase">Dev: WONDERPETS</span>
                </div>
                
                <div class="flex items-center gap-3 bg-white/90 border border-white pl-5 pr-2 py-2 rounded-full shadow-md cursor-pointer hover:shadow-lg transition-all backdrop-blur-md">
                    <div class="flex flex-col items-end">
                        <span class="text-sm font-extrabold text-slate-800 tracking-wide">
                            {{ session('user_name', 'Student') }}
                        </span>
                        <span class="text-[9px] text-indigo-600 font-bold uppercase tracking-widest">Active Status</span>
                    </div>
                    <div class="w-9 h-9 rounded-full bg-indigo-600 text-white flex items-center justify-center font-extrabold text-sm shadow-inner border border-indigo-700">
                        {{ strtoupper(substr(session('user_name', 'SU'), 0, 2)) }}
                    </div>
                </div>
            </div>
        </header>

        <main class="flex-1 overflow-y-auto p-10">
            <div class="max-w-7xl mx-auto">
                @yield('content')
            </div>
        </main>
    </div>

    <!-- Floating Global Toast Notification -->
    <div x-data="{ show: true }" 
         x-show="show" 
         x-init="setTimeout(() => show = false, 4500)" 
         x-transition:enter="transition ease-out duration-300" 
         x-transition:enter-start="opacity-0 translate-y-10" 
         x-transition:enter-end="opacity-100 translate-y-0" 
         x-transition:leave="transition ease-in duration-200" 
         x-transition:leave-start="opacity-100 translate-y-0" 
         x-transition:leave-end="opacity-0 translate-y-10" 
         class="fixed bottom-8 right-8 z-50 glass-panel bg-white/80 border border-white px-6 py-4 rounded-2xl shadow-2xl flex items-center gap-4 transition-all" style="display: none;">
        <div class="w-10 h-10 rounded-full bg-emerald-100 text-emerald-600 flex items-center justify-center text-lg font-bold border border-emerald-200 shadow-sm">
            <i class="fas fa-check"></i>
        </div>
        <div>
            <h5 class="text-sm font-extrabold text-slate-800">System Online</h5>
            <p class="text-xs font-bold text-slate-500 mt-0.5">Welcome back, {{ session('user_name', 'Student') }}!</p>
        </div>
        <button @click="show = false" class="text-slate-400 hover:text-slate-600 ml-6 bg-slate-100 hover:bg-slate-200 w-8 h-8 rounded-full flex items-center justify-center transition-colors">
            <i class="fas fa-times text-xs"></i>
        </button>
    </div>

</body>
</html>
