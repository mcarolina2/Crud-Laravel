<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    
    <div class="py-12">
    <h1 class="text-lg"> You're logged in! </h1>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                   <h1 class="text-lg">Essas são as suas plantas</h1>
                    @foreach (Auth::user()->plantas as $planta)
                        <div class="border border-black">
                            {{$planta}}
                        </div>
                    @endforeach
                
                        <a href="{{route('plantas.create')}}">Adicionar</a>
                 
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
