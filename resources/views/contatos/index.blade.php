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
                    <h2>{{ __("Listagem de Contatos") }}</h2>
                    <a href="{{ url('contatos/create') }}">Criar</a>
                    <br>
                    @foreach($contatos as $contato)
                        <p>Contato: <a href="{{url('contatos')}}/{{ $contato->id }}">{{ $contato->id }} - {{ $contato->nome }}</a>
                        <a href="{{url('contatos')}}/{{ $contato->id }}/edit">Alterar</a>
                        <span onclick="document.getElementById('contatos-excluir-{{ $contato->id }}').submit();">Excluir</span>
                        <form id="contatos-excluir-{{ $contato->id }}" action="{{route('contatos.destroy',$contato->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                        </form>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
