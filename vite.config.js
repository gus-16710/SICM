import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
    plugins: [
        laravel({
            input: [               
                "resources/css/template.css",
                "resources/css/app.css",                                                
                "resources/js/app.js",
                "resources/js/pages/dashboard.js",   
                "resources/js/pages/profile.edit.js",   
                "resources/lib/jqwidgets/styles/jqx.base.css",             
                "resources/lib/jqwidgets/jqxcore.js",
                "resources/lib/jqwidgets/jqxbuttons.js",
                "resources/lib/jqwidgets/jqxdata.js",
                "resources/lib/jqwidgets/jqxscrollbar.js",             
                "resources/lib/jqwidgets/jqxmenu.js",
                "resources/lib/jqwidgets/jqxgrid.js",
                "resources/lib/jqwidgets/jqxgrid.selection.js",
                "resources/lib/jqwidgets/jqxgrid.pager.js",
                "resources/lib/jqwidgets/jqxgrid.filter.js",
                "resources/lib/jqwidgets/jqxgrid.sort.js",
                "resources/lib/jqwidgets/jqxlistbox.js",
                "resources/lib/jqwidgets/jqxdropdownlist.js",                
            ],
            refresh: true,
        }),
    ],
    resolve: {
        alias: {
            $: "jQuery",
        },
    },
});
