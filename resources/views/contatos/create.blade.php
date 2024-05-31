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
                        <label id="lnome" for="nome">Nome: </label>
                        <input id="nome" name="nome" type="text"><br>
                        <label id="lemail" for="email">e-mail: </label>
                        <input id="email" name="email" type="text"><br>
                        <label id="ltelefone" for="telefone">Telefone: </label>
                        <input id="telefone" name="telefone" type="text"><br>
                        <label id="lcidade" for="cidade">Cidade: </label>
                        <input id="cidade" name="cidade" type="text"><br>
                        <label id="lestado" for="estado">Estado: </label>
                        <input id="estado" name="estado" type="text"><br>
                        <br>
                        <button type="submit">Salvar</button> <button type="reset">Limpar</button>
                    </form>
                    <br>
                    <a href="{{url('contatos/')}}">Voltar</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
