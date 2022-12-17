<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('employee') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    <section>
                        <header>
                            <h2 class="text-lg font-medium text-gray-900">
                                {{ __('Edit Employee') }}
                            </h2>
                        </header>
                        <form method="post" action="{{route('employee.update',$employee->id)}}" class="mt-6 space-y-6" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div>
                                <x-input-label for="name" :value="__('Name')" />
                                <x-text-input id="first_name" name="first_name" type="text" class="mt-1 block w-full" value="{{$employee->first_name}}" required autofocus autocomplete="first_name" />
                                <x-input-error class="mt-2" :messages="$errors->get('first_name')" />
                            </div>
                            <div>
                                <x-input-label for="last_name" :value="__('Last Name')" />
                                <x-text-input id="last_name" name="last_name" type="text" class="mt-1 block w-full" value="{{$employee->last_name}}" required autofocus autocomplete="last_name" />
                                <x-input-error class="mt-2" :messages="$errors->get('first_name')" />
                            </div>
                            <div>
                                <x-input-label for="phone" :value="__('Phone')" />
                                <x-text-input id="phone" name="phone" type="text" class="mt-1 block w-full" value="{{$employee->phone}}" required autofocus autocomplete="phone" />
                                <x-input-error class="mt-2" :messages="$errors->get('phone')" />
                            </div>

                            <div>
                                <x-input-label for="email" :value="__('Email')" />
                                <x-text-input id="email" name="email" type="email" class="mt-1 block w-full" value="{{$employee->email}}" required autocomplete="email" />
                                <x-input-error class="mt-2" :messages="$errors->get('email')" />

                            </div>
                            <div>
                                <x-input-label for="occupation" :value="__('occupation')" />
                                <x-text-input id="occupation" name="occupation" type="text" class="mt-1 block w-full" value="{{$employee->occupation}}" required autocomplete="occupation" />
                                <x-input-error class="mt-2" :messages="$errors->get('occupation')" />

                            </div>
                            <div>
                                <label>Company</label>
                              <select name="company_id" class="mt-1 block w-full ">
                                  @foreach($company as $item)
                                  <option value="{{$item->id}}" @if($item->id===$employee->company_id) {{'selected'}} @endif> {{$item->name}}</option>
                                  @endforeach
                              </select>
                            </div>

                            <div class="flex items-center gap-4">
                                <x-primary-button>{{ __('Save') }}</x-primary-button>
                            </div>
                        </form>
                    </section>
                </div>
            </div>

        </div>
        </div>

</x-app-layout>
