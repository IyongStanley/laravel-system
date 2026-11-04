@extends('dashboard_layout.app')

@section('title', 'Chat - WonderPets Portal')
@section('header_title', 'Class Discussions')
@section('header_subtitle', 'Live communication with instructors and peers')

@section('content')
<div class="glass-panel rounded-3xl flex h-[650px] overflow-hidden border border-white">
    
    <!-- Chat List Sidebar -->
    <div class="w-1/3 border-r border-slate-200/60 flex flex-col bg-white/40">
        <div class="p-5 border-b border-slate-200/60">
            <div class="relative">
                <i class="fas fa-search absolute left-4 top-1/2 -translate-y-1/2 text-slate-400"></i>
                <input type="text" placeholder="Search messages..." class="w-full pl-10 pr-4 py-3 bg-white/60 backdrop-blur-md rounded-xl text-sm text-slate-800 focus:outline-none focus:ring-2 focus:ring-indigo-500 border border-slate-200 shadow-sm transition-all">
            </div>
        </div>
        <div class="overflow-y-auto flex-1 divide-y divide-slate-100">
            <div class="p-5 bg-indigo-50/50 border-l-4 border-indigo-600 cursor-pointer">
                <div class="flex justify-between items-center mb-1.5">
                    <h4 class="text-sm font-bold text-slate-800">SIA101 Integration</h4>
                    <span class="text-[10px] font-bold text-indigo-700 bg-indigo-100 px-2.5 py-0.5 rounded-full border border-indigo-200">ACTIVE</span>
                </div>
                <p class="text-xs text-slate-500 truncate font-medium">Main classroom discussion channel</p>
            </div>
        </div>
    </div>

    <!-- Chat Window -->
    <div class="flex-1 flex flex-col bg-slate-50/30">
        <div class="p-5 border-b border-slate-200/60 flex items-center justify-between bg-white/60 backdrop-blur-sm">
            <div class="flex items-center gap-4">
                <div class="w-10 h-10 rounded-xl bg-indigo-50 border border-indigo-100 flex items-center justify-center text-indigo-600 shadow-sm">
                    <i class="fas fa-hashtag text-lg"></i>
                </div>
                <div>
                    <h3 class="text-sm font-extrabold text-slate-800">SIA101 System Integration</h3>
                    <p class="text-xs text-emerald-600 font-bold mt-0.5 flex items-center gap-1.5">
                        <span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span> 42 Members Online (EXAMPLE)
                    </p>
                </div>
            </div>
            <!-- Clear Chat Button -->
            <form action="{{ route('dashboard.chat.clear') }}" method="POST">
                @csrf
                <button type="submit" class="text-xs font-bold text-slate-500 hover:text-rose-600 transition-all bg-white hover:bg-rose-50 hover:border-rose-200 border border-slate-200 px-4 py-2 rounded-xl shadow-sm">
                    <i class="fas fa-trash-alt mr-1"></i> Clear History
                </button>
            </form>
        </div>
        
        <!-- Messages Area -->
        <div class="flex-1 p-6 overflow-y-auto flex flex-col space-y-6" id="chatContainer">
            
            <!-- Default Static Message -->
            <div class="flex items-start space-x-3">
                <div class="w-9 h-9 rounded-full bg-slate-800 text-white font-extrabold flex items-center justify-center text-xs shadow-md shrink-0">PS</div>
                <div class="flex flex-col items-start max-w-[70%]">
                    <div class="flex items-baseline space-x-2 mb-1 pl-1">
                        <span class="text-xs font-bold text-slate-700">Prof. Samuel Camorongan</span>
                        <span class="text-[10px] font-bold text-slate-400">10:30 AM</span>
                    </div>
                    <div class="bg-white border border-slate-200 px-4 py-3 rounded-2xl rounded-tl-sm text-sm text-slate-700 shadow-sm leading-relaxed">
                        Welcome to the SIA101 Midterm Portal!
                    </div>
                </div>
            </div>

            <!-- Dynamic Smart Messages Loop -->
            @foreach(session('chat_messages', []) as $msg)
                @if($msg['name'] === session('user_name'))
                    <!-- LOGGED IN USER (Align Right, Indigo Bubble) -->
                    <div class="flex items-start space-x-3 flex-row-reverse space-x-reverse self-end max-w-[70%]">
                        <div class="w-9 h-9 rounded-full bg-indigo-600 text-white font-extrabold flex items-center justify-center text-xs shadow-md shrink-0 border border-indigo-700">
                            {{ $msg['initials'] }}
                        </div>
                        <div class="flex flex-col items-end">
                            <div class="flex items-baseline space-x-2 mb-1 pr-1 flex-row-reverse space-x-reverse">
                                <span class="text-xs font-bold text-slate-700">You</span>
                                <span class="text-[10px] font-bold text-slate-400">{{ $msg['time'] }}</span>
                            </div>
                            <div class="bg-indigo-600 px-4 py-3 rounded-2xl rounded-tr-sm text-sm text-white font-medium shadow-md leading-relaxed text-left border border-indigo-700">
                                {{ $msg['text'] }}
                            </div>
                        </div>
                    </div>
                @else
                    <!-- OTHER USERS (Align Left, White Bubble) -->
                    <div class="flex items-start space-x-3 max-w-[70%]">
                        <div class="w-9 h-9 rounded-full bg-slate-800 text-white font-extrabold flex items-center justify-center text-xs shadow-md shrink-0">
                            {{ $msg['initials'] }}
                        </div>
                        <div class="flex flex-col items-start">
                            <div class="flex items-baseline space-x-2 mb-1 pl-1">
                                <span class="text-xs font-bold text-slate-700">{{ $msg['name'] }}</span>
                                <span class="text-[10px] font-bold text-slate-400">{{ $msg['time'] }}</span>
                            </div>
                            <div class="bg-white border border-slate-200 px-4 py-3 rounded-2xl rounded-tl-sm text-sm text-slate-700 shadow-sm leading-relaxed">
                                {{ $msg['text'] }}
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
            
        </div>

        <!-- Chat Input Form -->
        <form action="{{ route('dashboard.chat.send') }}" method="POST" class="p-5 border-t border-slate-200/60 bg-white/60 backdrop-blur-md flex items-center gap-4">
            @csrf
            <div class="flex-1 relative">
                <input type="text" name="message" required autocomplete="off" placeholder="Type your message..." class="w-full pl-5 pr-12 py-3.5 bg-white rounded-xl text-sm text-slate-800 focus:outline-none focus:ring-2 focus:ring-indigo-500 border border-slate-200 shadow-sm transition-all">
                <button type="button" class="absolute right-4 top-1/2 -translate-y-1/2 text-slate-400 hover:text-indigo-600 transition">
                    <i class="fas fa-paperclip"></i>
                </button>
            </div>
            <button type="submit" class="bg-indigo-600 text-white px-6 py-3.5 rounded-xl text-sm font-extrabold hover:-translate-y-0.5 hover:shadow-lg hover:shadow-indigo-600/30 transition-all flex items-center gap-2 border border-indigo-700">
                Send <i class="fas fa-paper-plane"></i>
            </button>
        </form>
    </div>
</div>

<script>
    const chatBox = document.getElementById('chatContainer');
    chatBox.scrollTop = chatBox.scrollHeight;
</script>
@endsection
