<x-layout>
    
    @include('partials._search')
    <div class="flex space-x-10">
      <x-back-button />
      <x-job-roles-dropdown />
    </div>
    
    <div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">

        @unless(count($profiles) == 0)
    
        @foreach($profiles as $profile)
          <x-profile-card :profile="$profile" />
        @endforeach
    
        @else
        <p>No profiles found</p>
        @endunless
    
      </div>
    
      <div class="mt-6 p-4">
        {{$profiles->links()}}
      </div>
</x-layout>

