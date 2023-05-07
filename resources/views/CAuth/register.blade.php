<x-todo>
    <x-slot name="title">
        'this is title'
    </x-slot>
    @foreach ($tasks as $index => $task)
        <h3>{{ $index }}  - {{$task}}</h3>
    @endforeach
</x-todo>
