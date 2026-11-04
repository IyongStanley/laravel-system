<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - WonderPets Portal</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; background-color: #F8FAFC; }
        .glass-card { 
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(24px);
            -webkit-backdrop-filter: blur(24px);
            border: 1px solid rgba(255, 255, 255, 0.9);
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body class="text-slate-800 antialiased flex items-center justify-center h-screen overflow-hidden selection:bg-indigo-200 selection:text-indigo-900 relative">
    
    <!-- Animated Ambient Background for Glass Effect -->
    <div class="absolute inset-0 z-0 overflow-hidden pointer-events-none">
        <div class="absolute top-[-10%] left-[-10%] w-[50%] h-[50%] rounded-full bg-indigo-300/40 blur-[120px] animate-pulse"></div>
        <div class="absolute bottom-[-10%] right-[-10%] w-[60%] h-[60%] rounded-full bg-blue-300/30 blur-[140px] animate-pulse" style="animation-delay: 1s;"></div>
        <div class="absolute top-[20%] right-[10%] w-[40%] h-[40%] rounded-full bg-emerald-200/30 blur-[100px] animate-pulse" style="animation-delay: 2s;"></div>
    </div>

    <!-- Login Glass Card -->
    <div class="w-full max-w-md glass-card rounded-[2rem] p-10 relative z-10 mx-4 transition-all hover:shadow-2xl">
        <div class="flex items-center gap-3 mb-8">
            <div class="w-12 h-12 rounded-2xl bg-indigo-600 flex items-center justify-center shadow-lg shadow-indigo-600/30">
                <i class="fa-solid fa-paw text-white font-extrabold text-xl"></i>
            </div>
            <span class="text-2xl font-extrabold tracking-tight text-slate-800">WonderPets (SIA PORTAL)</span>
        </div>

        <h2 class="text-3xl font-extrabold mb-2 text-slate-800 tracking-tight">Welcome Back</h2>
        <p class="text-slate-500 text-sm font-medium mb-8">Sign in to access your academic portal</p>

        <form action="{{ route('login.submit') }}" method="POST" class="space-y-5">
            @csrf
            <div>
                <label class="block text-xs font-bold text-slate-600 mb-2 uppercase tracking-wide">Email Address</label>
                <input type="email" name="email" required class="w-full px-5 py-4 bg-white/60 backdrop-blur-sm rounded-xl text-sm text-slate-800 focus:outline-none focus:ring-2 focus:ring-indigo-500 border border-slate-200 shadow-sm transition-all" placeholder="student@institution.edu / student@gmail.com ">
            </div>
            <div>
                <label class="block text-xs font-bold text-slate-600 mb-2 uppercase tracking-wide">Password</label>
                <input type="password" name="password" required class="w-full px-5 py-4 bg-white/60 backdrop-blur-sm rounded-xl text-sm text-slate-800 focus:outline-none focus:ring-2 focus:ring-indigo-500 border border-slate-200 shadow-sm transition-all" placeholder="••••••••">
            </div>
            <button type="submit" class="w-full py-4 bg-indigo-600 text-white font-extrabold rounded-xl hover:bg-indigo-700 hover:-translate-y-0.5 hover:shadow-lg hover:shadow-indigo-600/30 transition-all text-sm border border-indigo-700 mt-2">
                Sign In to Dashboard <i class="fas fa-arrow-right ml-1"></i>
            </button>
        </form>

        <p class="text-center text-sm text-slate-500 mt-8 font-medium">
            Don't have an account? <a href="{{ route('register') }}" class="text-indigo-600 hover:text-indigo-800 hover:underline font-extrabold transition-colors">Register here</a>
        </p>
    </div>
</body>
</html>
