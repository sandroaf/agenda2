<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __("Listagem de Contatos") }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <x-primary-button type="button" class="" onclick="location.href='{{ url('contatos/create') }}'">
                            {{ __('criar') }}
                    </x-primary-button>

                    <br><br>
                    @foreach($contatos as $contato)
                    <ul role="list" class="divide-y divide-gray-100">
                        <li class="flex justify-between gap-x-6 py-5">
                            <div class="flex min-w-0 gap-x-4">
                            <a href="{{url('contatos')}}/{{ $contato->id }}">
                                <div class="min-w-0 flex-auto">
                                <p class="text-sm font-semibold leading-6 text-gray-900">{{ $contato->id }} - {{ $contato->nome }}</p>
                                </div>
                            </a>
                          </div>
                          <div class="hidden shrink-0 sm:flex sm:flex-col sm:items-end">
                            <p class="cursor-pointer text-sm leading-6 text-gray-900"><a href="{{url('contatos')}}/{{ $contato->id }}/edit">Alterar</a>
                            &nbsp;<a href="#" onclick="document.getElementById('contatos-excluir-{{ $contato->id }}').submit();">Excluir</a>
                                <form id="contatos-excluir-{{ $contato->id }}" action="{{route('contatos.destroy',$contato->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                </form></p>
                          </div>
                        </li>
                    @endforeach
                </div>





            </div>
        </div>
    </div>
</x-app-layout>
