<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    
    <div class="py-12">
    
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <h1 class="text-lg"> You're logged in! </h1>
  
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                   <h1 class="text-lg">Essas são as suas plantas</h1>
                <div class="border border-black">

                        <table class="w-full divide-y divide-gray-200">
                            <thead class="bg-gray-200 ">
                            <tr class="bg-emerald-500 ">
                                <th class="px-6 py-3 text-left text-center text-xs font-medium text-white text-lg uppercase tracking-wider" 
                                scope="col">Nome Da Planta</th>

                                <th class="px-6 py-3 text-left text-xs text-center font-medium text-white text-lg uppercase tracking-wider" 
                                scope="col">Descrição</th>

                                <th class="px-6 py-3 text-left text-xs text-center font-medium text-white text-lg uppercase tracking-wider" 
                                scope="col">Local</th>

                                <th class="px-6 py-3 text-left text-xs text-center font-medium text-white text-lg uppercase tracking-wider" 
                                scope="col">Data Do Plantio</th>

                                <th class="px-6 py-3 text-left text-xs text-center font-medium text-white text-lg uppercase tracking-wider" 
                                scope="col" scope="col"> 
                            
                                <a class="bg-emerald-500 hover:bg-emerald-700  text-white font-bold mx-2 py-1 px-4 rounded" href="{{route('plantas.create')}}">Adicionar Uma Nova Planta</a> 
 


                            </th>
                               
                            </tr>
                      
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200 ">
                          
                        @foreach (Auth::user()->plantas as $planta)
                          
                                <tr class="bg-emerald-100">
                                   <th class="px-6 py-4 text-sm font-medium text-gray-900 whitespace-nowrap">
                                        {{ $planta->nomedaplanta }}
                                    </th>

                                     <th class="px-6 py-4 text-sm font-medium text-gray-900 whitespace-nowrap">
                                        {{ $planta->descricao }}
                                    </th>
                                    
                                     <th class="px-6 py-4 text-sm font-medium text-gray-900 whitespace-nowrap">
                                        {{ $planta->local}}
                                    </th>
                                    
                                     <th class="px-6 py-4 text-sm font-medium text-center text-gray-900 whitespace-nowrap">
                                        {{ $planta->datadoplantio}}
                                    </th>
                                    
                                    
                                     <th class="flex px-6 py-4 text-sm font-medium items-center text-gray-900 whitespace-nowrap">

                                       
                                         <a class="bg-green-500 hover:bg-green-700  text-white font-bold mx-2 py-1 px-4 rounded"
                                            href="{{ route('plantas.edit', $planta->id) }}">Edit</a>
                                    
                            
                                        <form action="{{route('plantas.destroy',$planta->id)}}" method="POST">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-3 rounded">Delete</button>
                         </form>
                         </th>
                         </tr>
                 @endforeach
                 </tbody>
                 </table>
</div>
                    
                 
                
                      
                </div>
                        </div> 


            </div>
        </div>
    </div>
</x-app-layout>
