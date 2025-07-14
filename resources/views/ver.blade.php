<x-app-layout>

    <x-navbar></x-navbar>
    
    @livewire('VerPrograma', ['id_programa' => $id_programa])


    @livewire('VerTodosLosEpisodios', ['id_programa' => $id_programa])

    <x-footer></x-footer>
</x-app-layout>