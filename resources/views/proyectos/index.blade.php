<x-layout titulo="Listado de proyectos">
    @forelse ($proyectos as $id => $proyecto)
        <x-tarjeta-proyecto :proyecto="$proyecto" :id="$id" />
    @empty
        <li>Todavía no hay proyectos.</li>
    @endforelse
</x-layout>