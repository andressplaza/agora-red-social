<x-app-layout>

    {{-- Header --}}
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight">
            {{ __('Categories') }}
        </h2>
    </x-slot>

    <section class="px-6">
        @if ($categories->isEmpty())
            {{-- Contenido para cuando no hay categorías --}}
            <div class="max-w-large text-center mx-auto">
                <div class="p-6">
                    <h2 class="text-2xl font-bold mb-4">Comienza a crear categorías</h2>
                    <p class="text-gray-700 mb-3">Las categorías te permiten organizar los hilos de conversación en grupos temáticos. Al crear categorías relevantes, los usuarios podrán encontrar fácilmente los hilos relacionados con sus intereses.</p>
                    <a href="{{ route('admin.categories.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded-md mt-6">Crear categorías</a>
                </div>
            </div>
        @else
            {{-- Contenido para cuando hay categorías --}}
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
                        @foreach ($categories as $category)
                            @if ($category->enabled)
                                <tr>
                                    <x-table.data>
                                        <div>{{ $category->id }}</div>
                                    </x-table.data>
                                    <x-table.data>
                                        <div>{{ $category->name }}</div>
                                    </x-table.data>
                                    <x-table.data>
                                        <div>{{ $category->slug }}</div>
                                    </x-table.data>
                                    <x-table.data>
                                        <div class="text-center">{{ $category->createdAt() }}</div>
                                    </x-table.data>
                                    <x-table.data>
                                        <div class="flex justify-center space-x-4">
                                            <a href="{{ route('admin.categories.edit', $category) }}" class="text-yellow-400">
                                                <x-zondicon-edit-pencil class="w-5 h-5" />
                                            </a>
                                            <x-form action="{{ route('admin.categories.delete', $category) }}" method="DELETE">
                                                <button type="submit" class="text-red-400">
                                                    <x-zondicon-trash class="w-5 h-5" />
                                                </button>
                                            </x-form>
                                        </div>
                                    </x-table.data>
                                </tr>
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif
    </section>

</x-app-layout>
