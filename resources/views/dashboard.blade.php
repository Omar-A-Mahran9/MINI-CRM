<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="">
               
                {{-- <x-jet-welcome /> --}}
                @if(!isset($addemp))

                @if(isset($acc))
                <x-admin-dashbord  :acc='$acc' />
                @else
                <x-admin-dashbord />
                @endif
                @endif
                @if(isset($addemp)&& $addemp==='employee')
                 <x-add-emp/>
                @endif

                @if(isset($addemp)&& $addemp==='customer')
                <x-addcust/>
               @endif
             
            </div>
        </div>
    </div>
</x-app-layout>
