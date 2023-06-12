<x-app-layout>

    {{-- Header --}}
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight">
            {{ __('Tags') }}
        </h2>
    </x-slot>

    <section class="px-6">

        @if ($tags->isEmpty())
            {{-- Contenido para cuando no hay etiquetas --}}
            <div class="max-w-large text-center mx-auto">
                <div class="p-6">
                    <h2 class="text-2xl font-bold mb-4">Comienza a crear tags</h2>
                    <p class="text-gray-700 mb-3">Las etiquetas son palabras clave que ayudan a clasificar los hilos de
                        conversación en categorías específicas. Al crear tags relevantes, los usuarios podrán encontrar
                        fácilmente los hilos relacionados con sus temas de interés.</p>
                    <a href="{{ route('admin.tags.create') }}"
                        class="bg-blue-600 text-white px-4 py-2 rounded-md mt-6">Crear etiquetas</a>
                </div>
            </div>
        @else
            {{-- Contenido para cuando hay etiquetas --}}
            <div class="overflow-hidden border-b border-gray-200">
                <table class="min-w-full">
                    <thead class="bg-blue-500">
                        <tr>
                            <x-table.head>Id</x-table.head>
                            <x-table.head>Name</x-table.head>
                            <x-table.head>Slug</x-table.head>
                            <x-table.head class="text-center">Created At</x-table.head>
                            <x-table.head class="text-center">Actions</x-table.head>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200 divide-solid">
                        @foreach ($tags as $tag)
                            <tr>
                                <x-table.data>
                                    <div>{{ $tag->id }}</div>
                                </x-table.data>
                                <x-table.data>
                                    <div>{{ $tag->name }}</div>
                                </x-table.data>
                                <x-table.data>
                                    <div>{{ $tag->slug }}</div>
                                </x-table.data>
                                <x-table.data>
                                    <div class="text-center">{{ $tag->createdAt() }}</div>
                                </x-table.data>
                                <x-table.data>
                                    <div class="flex justify-center space-x-4">
                                        <a href="{{ route('admin.tags.edit', $tag) }}" class="text-yellow-400">
                                            <x-zondicon-edit-pencil class="w-5 h-5" />
                                        </a>
                                        <x-form action="{{ route('admin.tags.delete', $tag) }}" method="DELETE">
                                            <button type="submit" class="text-red-400">
                                                <x-zondicon-trash class="w-5 h-5" />
                                            </button>
                                        </x-form>
                                    </div>
                                </x-table.data>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif

    </section>

</x-app-layout>
