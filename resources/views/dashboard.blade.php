<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Clubs')  }}
        </h2>
        <x-jet-button > <a href="{{route('player.create')}}">Create New Player</a> </x-jet-button>
    </x-slot>
    <div>
        <div class="max-w-5xl mx-auto py-10 sm:px-6 lg:px-8">
            <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                        @foreach ($club as $c)
                        <div class="mt-8 text-2xl">
                            <h1  style="font-size: 32px; color : blue;">{{$c->name}}</h1>
                            <div class="mt-5 px-6 flex space-around">
                                <img src="{{asset('/'. $c->logo)}}" alt="Profile Club" style="height: 200px">
                                <div class="ml-7">
                                    <h3>{{$c->trophy}} Trophy</h3>
                                    <h3>Pesiden Club : {{$c->user->name}} </h3>
                                    <h3>Email : {{$c->user->email}}</h3>
                                    <h3>Web situs: <a href="{{$c->url}}">{{$c->name}}</a> </h3>
                                </div>
                                
                            </div>
                        </div>
                        @endforeach




                    </div>



                </div>
            </div>
            {{-- <x-jet-section-border /> --}}
        </div>
    </div>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 sm:px-20 bg-white border-b border-gray-200">

                    <div class="mt-8 text-2xl">
                        My Players
                            <form action="/dashboard" method="GET">
                                <div class="col-span-6">
                                    <x-jet-label for="term" value="{{ __('Search') }}" />
                                    
                                    <x-jet-input id="term" class="block mt-1 w-full" type="text" name="term"  />
                                </div>
                             
                                <x-jet-button class="ml-4" type="submit">
                                    {{ __('Serach') }}
                                </x-jet-button>
                            </form>
                        
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
