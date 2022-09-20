<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @can('isAdmin')
                        <div class="btn btn-success btn-lg">
                            You are logged in as Admin!
                        </div>
                    @elsecan('isManager')
                        <div class="btn btn-primary btn-lg">
                            You are logged in as Manager!
                        </div>
                    @else
                        <div class="btn btn-info btn-lg">
                            You are logged in as Client!
                        </div>
                    @endcan
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
