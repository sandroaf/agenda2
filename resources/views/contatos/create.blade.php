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
                    <h2>{{ __("Novo Contato") }}</h2>
                    <br>
                    <form action="{{route('contatos.store')}}" method="POST">
                        @csrf <!-- Segurança dos dados do Formulário -->
                        <x-input-label for="nome" :value="__('Nome')" />
                        <x-text-input id="nome" class="block mt-1 w-full" type="text" name="nome" :value="old('nome')" required autofocus autocomplete="nome" />
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        <x-input-label id="lemail" for="email"  :value="__('e-mail')" />
                        <x-text-input id="email" name="email" type="text" class="block mt-1 w-full" :value="old('email')" required autofocus autocomplete="email" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        <x-input-label id="ltelefone" for="telefone" :value="__('Telefone')" />
                        <x-text-input id="telefone" name="telefone" type="text" class="block mt-1 w-full" :value="old('telefone')" required autofocus autocomplete="telefone" />
                        <x-input-label id="lcidade" for="cidade" :value="__('Cidade')" />
                        <x-text-input id="cidade" name="cidade" type="text" class="block mt-1 w-full" :value="old('cidade')" required autofocus autocomplete="cidade"/>
                        <x-input-label id="lestado" for="estado" :value="__('Estado')" />
                        <x-text-input id="estado" name="estado" type="text" class="block mt-1 w-full" :value="old('estado')" required autofocus autocomplete="estado"/>
                        <div class="flex items-center justify-end mt-4">
                            <x-primary-button type="submit" class="ms-4">
                                {{ __('Salvar') }}
                            </x-primary-button>
                            <x-secondary-button type="reset" class="ms-4">
                                {{ __('Limpar') }}
                            </x-secondary-button>
                        </div>
                    </form>
                    <br>
                    <a href="{{url('contatos/')}}">Voltar</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
