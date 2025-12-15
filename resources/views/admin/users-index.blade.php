<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800">
            User Management
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            @if(session('success'))
                <div class="mb-4 text-green-600">
                    {{ session('success') }}
                </div>
            @endif

            <div class="bg-white shadow rounded p-6">
                <table class="min-w-full border">
                    <thead>
                    <tr class="bg-gray-100">
                        <th class="p-2 border">Name</th>
                        <th class="p-2 border">Email</th>
                        <th class="p-2 border">Role</th>
                        <th class="p-2 border">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td class="p-2 border">{{ $user->name }}</td>
                            <td class="p-2 border">{{ $user->email }}</td>
                            <td class="p-2 border">
                                    <span class="px-2 py-1 rounded bg-gray-200">
                                        {{ ucfirst($user->role) }}
                                    </span>
                            </td>
                            <td class="p-2 border">
                                <a href="{{ route('admin.users.edit', $user) }}"
                                   class="text-blue-600 hover:underline">
                                    Edit
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</x-app-layout>
