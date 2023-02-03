<x-app-layout>
    <x-slot name="header">
    </x-slot>
    <section class="flex justify-center ">
      
        <div class="py-12 w-full pl-28">
            
            <div class="p-6 bg-white border-b rounded-lg w-4/5 h-96 content-center">
                <div class=" flex flex-row justify-center gap-2">
                    <div class="flex flex-col ">
                    <h1>Editar Plantas</h1>
                        <form action="{{ route('plantas.edit')}}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="flex flex-col">
                                <label for="nomedaplanta">{{ __('Nome Da Planta') }}</label>
                                <input type="text" placeholder="{{ __('Digite o Nome Da Planta ') }}" name="nomedaplanta"
                                    class="" /> 

                                    <label for="descricao">{{ __('Descrição') }}</label>
                                <input type="text" placeholder="{{ __('Digite uma descrição') }}" name="descricao"
                                    class="" /> 

                                    <label for="local">{{ __('Local') }}</label>
                                <input type="text" placeholder="{{ __('Digite o local do plantio') }}" name="local"
                                    class="" /> 

                                    <label for="datadoplantio">{{ __('Data Do Plantio') }}</label>
                                <input type="date" " name="datadoplantio"
                                    class="" /> 

                                    <div class="flex flex-col">
                              <x-text-input type="submit" name="submit" value="Atualizar" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-3 rounded cursor-pointer w-24 mt-4"/>
                          </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div> 

            <a href="{{route('plantas.create')}}">Adicionar</a>
                        <a class="bg-green-500 hover:bg-green-700 text-white font-bold py-1 px-4 rounded"
                                                href="{{ route('plantas.edit', [$planta->id]) }}">Editar</a>

                                            <form action="{{route('plantas.destroy',$planta->id)}}" method="POST">
                                                @csrf
                                                @method('delete')
                                                <button type="submit"
                                                    class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-3 rounded">Deletar</button>
                                            </form>
        </div>



    </section>
</x-app-layout>