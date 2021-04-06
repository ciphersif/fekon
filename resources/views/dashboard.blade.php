<x-app-layout>
    <x-slot name="header">
	
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">{{ __('Dashboard') }}</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
            </ol>
          </div><!-- /.col -->
        
    </x-slot>

                <x-jet-welcome />
            
</x-app-layout>
