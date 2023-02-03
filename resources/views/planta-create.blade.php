<x-app-layout>
    <x-slot name="header">
    </x-slot>
    <section class="flex justify-center ">
      
        <div class="py-12 w-full pl-28">
            
            <div class="p-6 bg-white border-b rounded-lg w-4/5 h-96 content-center">
                <div class=" flex flex-row justify-center gap-2">
                    <div class="flex flex-col ">
                       
                        <form action="{{ route('plantas.store')}}" method="POST">
                            @csrf
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

                                    <button>Enviar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>



    </section>
</x-app-layout>