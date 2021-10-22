<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Games') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    My Games:
                    <ul>
                        @foreach($games as $game)
                        <li>{{$game->name}} - {{$game->gameType->name}}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h3 class="text-purple-600 text-5xl font-bold">All Games </h3>
                    <table class="table-fixed border-collapse border-purple-800">
                        <tr>
                            <th class="w-1/4 border border-purple-600">Game Image</th> 
                            <th class="w-1/4 border border-purple-600">Title</th> 
                            <th class="w-1/4 border border-purple-600">View Game</th> 
                        </tr>
                        @foreach($games as $key=>$game) 
                        <tr>
                            <td class="content-center border border-purple-600"><img src="{{$game->image}}"> </td> 
                            <td class="text-center  border border-purple-600">{{$game->name}}</td>
                            <td class="text-center border border-purple-600">
                            <a href="{{ route('gameView', ['id' => $key]) }}">Details</a>    
                            </td>                     
                        </tr>  
                        @endforeach
                    </table>
</x-app-layout>