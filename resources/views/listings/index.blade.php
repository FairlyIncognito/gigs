<x-layout>
    
    @include('partials._search')
    <div class="flex space-x-10">
      <x-back-button />
      <x-job-roles-dropdown />
    </div>
    
    
    <div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">

        @unless(count($listings) == 0)
    
        @foreach($listings as $listing)
          <x-listing-card :listing="$listing" />
        @endforeach
    
        @else
        <p>No listings found</p>
        @endunless
    
      </div>
    
      <div class="mt-6 p-4">
        {{$listings->links()}}
      </div>
</x-layout>

