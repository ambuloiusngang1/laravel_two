<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Post') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form method="POST" action="{{ route('posts.update', $post) }}">
                        @csrf
                        @method('PUT')
                        Title:
                        <br>
                        <input class="block font-medium text-sm text-gray-700" type="text" name="title" value="{{$post->Title}}">
                        Post Text:
                        <br>
                        <textarea name="post_text"  cols="30" rows="10"> {{ $post->Post_Text}}</textarea>
                        <br><br>
                        <button class="inline-flex items-center px-4 py-2 bg-white border border-gray-300 
                        rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 
                        focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-25 transition ease-in-out duration-150" type="submit">Save</button>
                    </form>
                 
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
