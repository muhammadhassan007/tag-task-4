<x-app-layout>
    <x-slot name="header">
       
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <h3>Users Listing</h3>
            <a href="{{ route('users.index') }}" class="btn btn-secondary mt-3" style="display: inline-block; padding: 10px 20px; font-size: 16px; color: #fff; background-color: #007bff; text-decoration: none; border-radius: 5px;">Go to Users</a>
        </h2>
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <h3>Create Post</h3>
            <a href="{{ route('posts.create') }}" class="btn btn-secondary mt-3" style="display: inline-block; padding: 10px 20px; font-size: 16px; color: #fff; background-color: #007bff; text-decoration: none; border-radius: 5px;">Create Post</a>
        </h2>

    </x-slot>

</x-app-layout>