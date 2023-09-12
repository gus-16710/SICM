<x-template-layout>      
    <div class="container-fluid p-0">
        <h1 class="h3 mb-3">Perfíl</h1>                    
        <div class="row">                   
            <div class="col">                
                @include('profile.partials.update-profile-information-form')                                                  
                @include('profile.partials.update-password-form')                                     
                @include('profile.partials.delete-user-form')                     
            </div>
        </div>                  
    </div>     
</x-template-layout>

@vite(['resources/js/pages/profile.edit.js'])
