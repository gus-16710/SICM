<!-- Blade -->
<x-template-layout>
    <div class="container-fluid p-0">
        <h1 class="h3 mb-3">Sistema Integral para Central de Mezclas</h1>                    
        <div class="row">                   
            <div class="col">
                <div class="card flex-fill w-100">
                <div class="card-header">
                    <h5 class="card-title mb-0">Escritorio</h5>
                </div>
                <div class="card-body py-3">
                    <p>¡Ya has iniciado sesión!</p>   
                    {{ Auth::user()->modules->pluck('Permiso') }}                    
                    <div style="overflow: hidden;">
                        <div id="jqxgrid">
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>                  
    </div>   
</x-template-layout>

@vite(['resources/lib/jqwidgets/styles/jqx.base.css'])
@vite(['resources/lib/jqwidgets/jqxcore.js'])
@vite(['resources/lib/jqwidgets/jqxbuttons.js'])
@vite(['resources/lib/jqwidgets/jqxdata.js'])
@vite(['resources/lib/jqwidgets/jqxscrollbar.js'])
@vite(['resources/lib/jqwidgets/jqxmenu.js'])
@vite(['resources/lib/jqwidgets/jqxgrid.js'])
@vite(['resources/lib/jqwidgets/jqxgrid.selection.js'])
@vite(['resources/lib/jqwidgets/jqxgrid.pager.js'])
@vite(['resources/lib/jqwidgets/jqxlistbox.js'])
@vite(['resources/lib/jqwidgets/jqxdropdownlist.js'])

@vite(['resources/js/pages/dashboard.js'])

