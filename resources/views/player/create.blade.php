<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create New Player')  }}
        </h2>
    </x-slot>
    <div>
        <div class="max-w-5xl mx-auto py-10 sm:px-6 lg:px-8">
            <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <form method="POST" enctype="multipart/form-data" action="{{route('player.store')}}">
                        @csrf
                    <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                        <div class="mb-4">
                            <label for="exampleFormControlInput1"
                                class="block text-gray-700 text-sm font-bold mb-2">Name Player</label>
                            <input type="text"
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                id="exampleFormControlInput1" placeholder="Enter Name" name="name" >
                            {{-- @error('name') <span class="text-red-500">{{ $message }}</span>@enderror --}}
                        </div>
                        
                        <div class="mb-4">
                            <label for="exampleFormControlInput1"
                                class="block text-gray-700 text-sm font-bold mb-2">Height</label>
                            <input type="text"
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                id="exampleFormControlInput1" placeholder="Enter Heigh" name="height">
                            {{-- @error('name') <span class="text-red-500">{{ $message }}</span>@enderror --}}
                        </div>
                        <div class="mb-4">
                            <label for="exampleFormControlInput1"
                                class="block text-gray-700 text-sm font-bold mb-2">Position</label>
                                <select name="position" id="position">
                                    <option>-- chose --</option>
                                    @foreach ($position as $pos)
                                        <option>{{$pos}}</option>
                                    @endforeach
                                </select>
                        </div>
                        <div class="mb-4">
                            <label for="exampleFormControlInput1"
                                class="block text-gray-700 text-sm font-bold mb-2">Photo</label>
                            <input type="file"
                                id="exampleFormControlInput1" placeholder="Enter Name" name="profile">
                            {{-- @error('name') <span class="text-red-500">{{ $message }}</span>@enderror --}}
                        </div>
                    </div>
                    <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                        <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">
                            <button  type="submit"
                                class="inline-flex justify-center w-full rounded-md border border-transparent px-4 py-2 bg-red-600 text-base leading-6 font-bold text-white shadow-sm hover:bg-red-700 focus:outline-none focus:border-green-700 focus:shadow-outline-green transition ease-in-out duration-150 sm:text-sm sm:leading-5">
                                Store
                            </button>
                        </span>
                        <span class="mt-3 flex w-full rounded-md shadow-sm sm:mt-0 sm:w-auto">
                            <button wire:click="closeModalPopover()" type="button"
                                class="inline-flex justify-center w-full rounded-md border border-gray-300 px-4 py-2 bg-white text-base leading-6 font-bold text-gray-700 shadow-sm hover:text-gray-700 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue transition ease-in-out duration-150 sm:text-sm sm:leading-5">
                                Close
                            </button>
                        </span>
                    </div>
                </form>
                    

                </div>
            </div>
            {{-- <x-jet-section-border /> --}}
        </div>
    </div>
</x-app-layout>
