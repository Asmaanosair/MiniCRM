<x-app-layout>
    <x-slot name="header">
        <a href="{{route('company.create')}}" class="font-semibold text-xl text-gray-800 leading-tight  bg-gray-500 bg-amber-800 p-2  rounded">{{ __('Add Company') }}</a>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-12 lg:px-12">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <table class="table block" style="width: 100%">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">WebSite</th>
                            <th scope="col">Revenue</th>
                            <th scope="col">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($company as $item)
                        <tr class="mb-6 p-2 border-b-2">
                            <th scope="row">{{$item->id}}</th>
                            <td >{{$item->name}}</td>
                            <td>{{$item->email}}</td>
                            <td>{{$item->website}}</td>
                            <td>{{$item->revenue}}</td>
                            <td>
                                <a href="{{route('company.edit',$item->id)}}" class="backdrop-blur-sm bg-gray-500 p-2  block rounded">{{ __('Edit') }}</a>
                                <form method="post" action="{{route('company.destroy',$item->id)}}" class="float-left">
                                    @csrf
                                    @method('delete')
                                    <x-danger-button>{{ __('Delete') }}</x-danger-button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div>
                {{$company->links()}}
            </div>

        </div>
    </div>
</x-app-layout>
