<x-app-layout>
    <x-slot name="header">
        <a href="{{route('employee.create')}}" class="font-semibold text-xl text-gray-800 leading-tight  bg-gray-500 bg-amber-800 p-2  rounded">{{ __("Add Employee") }}</a>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-12 lg:px-12">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">phone</th>
                            <th scope="col">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($employee as $item)
                        <tr>
                            <th scope="row">{{$item->id}}</th>
                            <td >{{$item->first_name .'_'. $item->last_name }}</td>
                            <td>{{$item->email}}</td>
                            <td>{{$item->phone}}</td>
                            <td>
                                <a href="{{route('employee.edit',$item->id)}}" class="backdrop-blur-sm bg-gray-500 p-2  block rounded">{{ __('Edit') }}</a>
                                <form method="post" action="{{route('employee.destroy',$item->id)}}" class="float-left">
                                    @csrf
                                    @method('delete')
                                    <x-danger-button>{{ __('Delete') }}</x-danger-button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {{$employee->links()}}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
