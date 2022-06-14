@props(['name'])

@if ($name === 'sound' || $name === 'lyd')
    <svg
        viewBox="0 0 24 24"  
        fill="none" 
        stroke="currentColor"  
        stroke-width="2" 
        stroke-linecap="round"  
        stroke-linejoin="round"
        {{ $attributes(['class' => 'h-8 w-8 text-white inline-block']) }}
    >  
        
        <rect x="4" y="2" width="16" height="20" rx="2" ry="2" />
        <circle cx="12" cy="14" r="4" />
        <line x1="12" y1="6" x2="12.01" y2="6" />
    </svg>
@endif

@if ($name === 'light' || $name === 'lys')
    <svg 
        fill="none" 
        viewBox="0 0 24 24" 
        stroke="currentColor"
        {{ $attributes(['class' => 'h-8 w-8 text-white inline-block']) }}
    >
        
        <path 
            stroke-linecap="round" 
            stroke-linejoin="round" 
            stroke-width="2" 
            d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"
        /> 
    </svg>
@endif

@if ($name === 'scene')
    <svg 
        viewBox="0 0 24 24"  
        fill="none"  
        stroke="currentColor"  
        stroke-width="2"  
        stroke-linecap="round"  
        troke-linejoin="round"
        {{ $attributes(['class' => 'h-8 w-8 text-white inline-block']) }}
    >  
    
        <polygon points="12 2 22 8.5 22 15.5 12 22 2 15.5 2 8.5 12 2" />  
        <line x1="12" y1="22" x2="12" y2="15.5" />  
        <polyline points="22 8.5 12 15.5 2 8.5" /> 
        <polyline points="2 15.5 12 8.5 22 15.5" />  
        <line x1="12" y1="2" x2="12" y2="8.5" />
    </svg>
@endif


@if ($name === 'av')
    <svg
        viewBox="0 0 24 24"  
        fill="none" 
        stroke="currentColor" 
        stroke-width="2" 
        stroke-linecap="round" 
        stroke-linejoin="round"
        {{ $attributes(['class' => 'h-8 w-8 text-white inline-block']) }}
    > 

        <polygon points="23 7 16 12 23 17 23 7" />  
        <rect x="1" y="5" width="15" height="14" rx="2" ry="2" />
    </svg>
@endif

@if ($name === 'crew')
    <svg  
        width="24" 
        height="24" 
        viewBox="0 0 24 24" 
        stroke-width="2" 
        stroke="currentColor"
        fill="none" 
        stroke-linecap="round"
        stroke-linejoin="round"
        {{ $attributes(['class' => 'h-8 w-8 text-white inline-block']) }}
    >  

        <path stroke="none" d="M0 0h24v24H0z"/>  
        <path d="M15 4l6 2v5h-3v8a1 1 0 0 1 -1 1h-10a1 1 0 0 1 -1 -1v-8h-3v-5l6 -2a3 3 0 0 0 6 0" />
    </svg>
@endif

@if ($name === 'driver' || $name === 'chauffør')
    <svg   
        width="24" 
        height="24" 
        viewBox="0 0 24 24"
        stroke-width="2" 
        stroke="currentColor" 
        fill="none" 
        stroke-linecap="round"
        stroke-linejoin="round"
        {{ $attributes(['class' => 'h-8 w-8 text-white inline-block']) }}
    >
        <path stroke="none" d="M0 0h24v24H0z"/>  
        <circle cx="7" cy="17" r="2" />  
        <circle cx="17" cy="17" r="2" />  
        <path d="M5 17h-2v-11a1 1 0 0 1 1 -1h9v12m-4 0h6m4 0h2v-6h-8m0 -5h5l3 5" />
    </svg>
@endif

@if ($name === 'hands' || $name === 'hænder')
    <svg 
        width="24" 
        height="24" 
        fill="none" 
        viewBox="0 0 24 24" 
        stroke="currentColor" 
        {{ $attributes(['class' => 'h-8 w-8 text-white inline-block']) }}
    >
        <path 
            stroke-linecap="round" 
            stroke-linejoin="round" 
            stroke-width="2" 
            d="M7 11.5V14m0-2.5v-6a1.5 1.5 0 113 0m-3 6a1.5 1.5 0 00-3 0v2a7.5 7.5 0 0015 0v-5a1.5 1.5 0 00-3 0m-6-3V11m0-5.5v-1a1.5 1.5 0 013 0v1m0 0V11m0-5.5a1.5 1.5 0 013 0v3m0 0V11"
        />
    </svg>
@endif

@if ($name === 'home' || $name === 'hjem')
    <svg
        fill="none" 
        stroke="currentColor" 
        viewBox="0 0 24 24" 
        {{ $attributes(['class' => 'h-8 w-8 text-white inline-block']) }}
        >
            <path 
                stroke-linecap="round" 
                stroke-linejoin="round" 
                stroke-width="2" 
                d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"
            />
        </svg>
@endif

@if ($name === 'office' || $name === 'kontor')
    <svg
        {{ $attributes(['class' => 'h-8 w-8 text-white inline-block']) }}
        fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>    
@endif

@if ($name === 'template' || $name === 'skabelon')
    <svg
        {{ $attributes(['class' => 'h-8 w-8 text-white inline-block']) }}
        fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z"></path></svg>
@endif

@if ($name === 'trash' || $name === 'affald')
    <svg
        {{ $attributes(['class' => 'h-8 w-8 text-white inline-block']) }}
        fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg> 
@endif

@if ($name === 'user' || $name === 'bruger')
    <svg
        {{ $attributes(['class' => 'h-8 w-8 text-white inline-block']) }}
        fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
@endif

@if ($name === 'users' || $name === 'brugere')
    <svg
        {{ $attributes(['class' => 'h-8 w-8 text-white inline-block']) }}
        fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
@endif

@if ($name === 'grid' || $name === 'gitter')
    <svg
        {{ $attributes(['class' => 'h-8 w-8 text-white inline-block']) }}
        fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path></svg>
@endif

@if ($name === 'list' || $name === 'liste')
    <svg
        {{ $attributes(['class' => 'h-8 w-8 text-white inline-block']) }}
        fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 10h16M4 14h16M4 18h16"></path></svg>
@endif

@if ($name === 'edit' || $name === 'rediger')
    <svg
        {{ $attributes(['class' => 'h-8 w-8 text-white inline-block']) }}
        fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg>
@endif

@if ($name === 'phone' || $name === 'telefon')
    <svg
        {{ $attributes(['class' => 'h-8 w-8 text-white inline-block']) }}
        fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
@endif

@if ($name === 'map' || $name === 'kort')
    <svg
        {{ $attributes(['class' => 'h-8 w-8 text-white inline-block']) }}
        fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7"></path></svg>
@endif

@if ($name === 'mail' || $name === 'brev')
    <svg
        {{ $attributes(['class' => 'h-8 w-8 text-white inline-block']) }}
        fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
@endif

@if ($name === 'link')
    <svg
        {{ $attributes(['class' => 'h-8 w-8 text-white inline-block']) }}
        fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"></path></svg> 
@endif

@if ($name === 'extlink')
    <svg
        {{ $attributes(['class' => 'h-8 w-8 text-white inline-block']) }}
        fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
@endif

@if ($name === 'profile' || $name === 'profil')
    <svg
        {{ $attributes(['class' => 'h-8 w-8 text-white inline-block']) }}
        fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V8a2 2 0 00-2-2h-5m-4 0V5a2 2 0 114 0v1m-4 0a2 2 0 104 0m-5 8a2 2 0 100-4 2 2 0 000 4zm0 0c1.306 0 2.417.835 2.83 2M9 14a3.001 3.001 0 00-2.83 2M15 11h3m-3 4h2"></path></svg>
@endif

@if ($name === 'plus' || $name === 'plus')
    <svg
        {{ $attributes(['class' => 'h-8 w-8 text-white inline-block']) }}
        fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path></svg>
@endif



<!-- Search icon, different colors -->
@if ($name === 'search' || $name === 'søg')
    <svg  
        width="24" 
        height="24" 
        fill="none" 
        viewBox="0 0 24 24" 
        stroke="currentColor"
        {{ $attributes(['class' => 'w-4 h-4 text-gray-700 mt-3']) }}
    >
        <path 
            stroke-linecap="round" 
            stroke-linejoin="round" 
            stroke-width="2" 
            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" 
        />
    </svg>
@endif