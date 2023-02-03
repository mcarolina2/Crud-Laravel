<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    
    <div class="py-12">
    
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <h1 class="text-lg"> You're logged in! </h1>
    <a href="{{route('plantas.create')}}">Adicionar</a> 
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                   <h1 class="text-lg">Essas são as suas plantas</h1>
                    @foreach (Auth::user()->plantas as $planta)
                        <div class="border border-black">
                            {{$planta}}
                        </div> 


                        <a href="{{route('plantas.create')}}">Adicionar</a> 
                        <br>
                        <a class="bg-green-500 hover:bg-green-700  text-white font-bold mx-2 py-1 px-4 rounded"
                                        href="{{ route('plantas.edit', $planta->id) }}">Edit</a>
                                        <br>    <br> 
                            
                                        <form action="{{route('plantas.destroy',$planta->id)}}" method="POST">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-3 rounded">Delete</button>
                                        </form>

                    @endforeach
                
                      
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
