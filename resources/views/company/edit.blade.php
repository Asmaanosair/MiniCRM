<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Company') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    <section>
                        <header>
                            <h2 class="text-lg font-medium text-gray-900">
                                {{ __('Add company') }}
                            </h2>
                        </header>
                        <form method="post" action="{{route('company.update',$company->id)}}" class="mt-6 space-y-6" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div>
                                <x-input-label for="name" :value="__('Name')" />
                                <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" value="{{$company->name}}" required autofocus autocomplete="name" />
                                <x-input-error class="mt-2" :messages="$errors->get('name')" />
                            </div>

                            <div>
                                <x-input-label for="email" :value="__('Email')" />
                                <x-text-input id="email" name="email" type="email" class="mt-1 block w-full" value="{{$company->email}}" required autocomplete="email" />
                                <x-input-error class="mt-2" :messages="$errors->get('email')" />

                            </div>
                            <div>
                                <x-input-label for="email" :value="__('Website')" />
                                <x-text-input id="website" name="website" type="text" class="mt-1 block w-full" value="{{$company->website}}" required autocomplete="website" />
                                <x-input-error class="mt-2" :messages="$errors->get('website')" />

                            </div>
                            <div>
                                <x-input-label for="email" :value="__('Revenue')" />
                                <x-text-input id="revenue" name="revenue" type="text" class="mt-1 block w-full" value="{{$company->revenue}}" required autocomplete="revenue" />
                                <x-input-error class="mt-2" :messages="$errors->get('revenue')" />

                            </div>
                            <div>
                                <x-input-label for="logo" :value="__('Logo')" />

                                <x-text-input id="logo" name="logo" type="file" class="mt-1 block w-full"  />

                                <x-input-error class="mt-2" :messages="$errors->get('logo')" />
                                <img src="{{url('/storage/company/'.$company->logo)}}" width="100" height="100">
                            </div>

                            <div class="flex items-center gap-4">
                                <x-primary-button>{{ __('Save') }}</x-primary-button>

                                @if (session('status') === 'profile-updated')
                                    <p
                                        x-data="{ show: true }"
                                        x-show="show"
                                        x-transition
                                        x-init="setTimeout(() => show = false, 2000)"
                                        class="text-sm text-gray-600"
                                    >{{ __('Saved.') }}</p>
                                @endif
                            </div>
                        </form>
                    </section>
                </div>
            </div>

        </div>
        </div>

</x-app-layout>
