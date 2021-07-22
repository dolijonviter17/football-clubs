<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Clubs')  }}
        </h2>
        
    </x-slot>
    


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 sm:px-20 bg-white border-b border-gray-200">

                    <div class="mt-8 text-2xl">
                        Players 
                    </div>
                    <div class="mt-6">
                        <table class="table-fixed w-full">
                            <thead>
                                <tr class="bg-gray-100">
                                    <th class="px-4 py-2">Profile</th>
                                    <th class="px-4 py-2">Full Name</th>
                                    <th class="px-4 py-2">Heigh</th>
                                    <th class="px-4 py-2">Position</th>
                                    <th class="px-4 py-2">Options</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($players as $player)
                                <tr>
                                    <td class="border px-4 py-2">
                                        <img src="{{asset('/'. $player->photo)  }}" alt="Profile" height="70">
                                    </td>
                                    <td class="border px-4 py-2">{{ $player->name }}</td>
                                    <td class="border px-4 py-2">{{ $player->height }}</td>
                                    <td class="border px-4 py-2">{{ $player->position}}</td>
                                    <td class="border px-4 py-2">
                                        <button wire:click="edit({{ $player->id }})"
                                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Lihat</button>
                                        <button wire:click="delete({{ $player->id }})"
                                            class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Hapus</button>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td class="border px-4 py-2 text-center" colspan="5">Tidak ada data</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                        {{ $players->links()}}
                    </div>
                </div>



            </div>
        </div>
    </div>
</x-app-layout>
