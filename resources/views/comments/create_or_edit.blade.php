<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form method="POST" action="{{ empty($comment) ? route('store') : route('update', $comment) }}">
                        @csrf

                        @if (empty($comment))
                            @method('post')
                        @else
                            @method('put')
                        @endif

                        <x-text-input id="title" class="block mt-1 w-full" type="text" name="title" :value="old('title', empty($comment) ? '' : $comment -> title)" placeholder="Ingresa título" />
                        <x-input-error :messages="$errors->get('title')" class="mt-2" />

                        <textarea
                            name="description"
                            class="mt-2 block w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-500 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm"
                        >{{ old('description', empty($comment) ? 'Mi comentario...' : $comment->description) }}
                        </textarea>
                        <x-input-error :messages="$errors->get('message')" class="mt-2" />

                        <div class="mt-4 space-x-8">
                            <x-primary-button>{{ empty($comment) ? 'Guardar' : 'Actualizar'}} </x-primary-button>
                            <a href="{{ route('comment') }}" class="dark:text-gray-100">{{ __('Cancelar') }}</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>