@extends('dashboard_layout.app')

@section('title', 'Timetable - WonderPets Portal')
@section('header_title', 'Class Calendar')
@section('header_subtitle', 'Weekly schedule and assigned room locations')

@section('content')
<div class="glass-panel rounded-3xl p-8 border border-white">
    
    <div class="flex justify-between items-center mb-8">
        <h3 class="text-xl font-extrabold text-slate-800">Midterm Semester Schedule</h3>
        
        <!-- NEW: Interactive UI Filter Tabs -->
        <div class="flex bg-slate-100/50 p-1 rounded-xl border border-slate-200/60 shadow-inner">
            <button class="px-4 py-1.5 text-xs font-extrabold bg-white text-indigo-600 rounded-lg shadow-sm border border-slate-200">All Days</button>
            <button class="px-4 py-1.5 text-xs font-bold text-slate-500 hover:text-slate-700 transition-colors">Monday</button>
            <button class="px-4 py-1.5 text-xs font-bold text-slate-500 hover:text-slate-700 transition-colors">Tuesday</button>
            <button class="px-4 py-1.5 text-xs font-bold text-slate-500 hover:text-slate-700 transition-colors">Wednesday</button>
        </div>
    </div>

    <div class="overflow-hidden rounded-2xl border border-slate-200 shadow-sm bg-white/50">
        <table class="w-full text-left border-collapse">
            <thead>
                <tr class="bg-slate-50/80 border-b border-slate-200 text-xs font-extrabold text-slate-500 uppercase tracking-wider">
                    <th class="p-5">Day</th>
                    <th class="p-5">Time</th>
                    <th class="p-5">Subject Description</th>
                    <th class="p-5">Assigned Room</th>
                    <th class="p-5">Status</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-100 text-sm">
                <tr class="hover:bg-white transition-colors cursor-pointer group">
                    <td class="p-5 font-extrabold text-slate-800 group-hover:text-indigo-600 transition-colors">Monday</td>
                    <td class="p-5 text-slate-500 font-medium">08:00 AM - 11:00 AM</td>
                    <td class="p-5 text-slate-700 font-bold">SIA101 - System Integration</td>
                    <td class="p-5"><span class="bg-slate-100 border border-slate-200 px-3 py-1.5 rounded-lg font-mono text-xs font-bold text-slate-600 shadow-sm">Lab Room 302</span></td>
                    <td class="p-5"><span class="text-emerald-600 font-bold text-xs bg-emerald-50 border border-emerald-200 px-3 py-1 rounded-md"><i class="fa-solid fa-check-circle mr-1"></i> Confirmed</span></td>
                </tr>
                <tr class="hover:bg-white transition-colors cursor-pointer group">
                    <td class="p-5 font-extrabold text-slate-800 group-hover:text-indigo-600 transition-colors">Tuesday</td>
                    <td class="p-5 text-slate-500 font-medium">01:00 PM - 04:00 PM</td>
                    <td class="p-5 text-slate-700 font-bold">CC106 - App Development</td>
                    <td class="p-5"><span class="bg-slate-100 border border-slate-200 px-3 py-1.5 rounded-lg font-mono text-xs font-bold text-slate-600 shadow-sm">ComLab 2</span></td>
                    <td class="p-5"><span class="text-emerald-600 font-bold text-xs bg-emerald-50 border border-emerald-200 px-3 py-1 rounded-md"><i class="fa-solid fa-check-circle mr-1"></i> Confirmed</span></td>
                </tr>
                <tr class="hover:bg-white transition-colors cursor-pointer group">
                    <td class="p-5 font-extrabold text-slate-800 group-hover:text-indigo-600 transition-colors">Wednesday</td>
                    <td class="p-5 text-slate-500 font-medium">09:00 AM - 12:00 PM</td>
                    <td class="p-5 text-slate-700 font-bold">IPT101 - Info Assurance</td>
                    <td class="p-5"><span class="bg-slate-100 border border-slate-200 px-3 py-1.5 rounded-lg font-mono text-xs font-bold text-slate-600 shadow-sm">Room 405</span></td>
                    <td class="p-5"><span class="text-emerald-600 font-bold text-xs bg-emerald-50 border border-emerald-200 px-3 py-1 rounded-md"><i class="fa-solid fa-check-circle mr-1"></i> Confirmed</span></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection
