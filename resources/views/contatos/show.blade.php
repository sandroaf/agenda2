<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h2>{{ __("Contato:") }} - {{ $contato->id }} - {{ $contato->nome}}</h2>
                    <br>
                    ID: {{ $contato->id }}<br>
                    Nome: {{ $contato->nome }}<br>
                    e-mail: {{ $contato->email }}<br>
                    Telefone: {{ $contato->telefone }}<br>
                    Cidade: {{ $contato->cidade }}<br>
                    Estado: {{ $contato->estado }}<br>
                    <br>
                    <a href="{{url('contatos/')}}">Voltar</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
