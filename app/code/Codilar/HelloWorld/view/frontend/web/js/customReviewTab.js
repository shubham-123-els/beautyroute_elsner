define([
    'jquery',
    'domReady',
    'dataTablesjs',
], function ($,dom,dataTablesjs) {
    'use strict';
    return function(config) {
        $(document).ready(function() {
            $('.reviewratingculoum').dataTable({
                "pageLength": 3,
                "responsive": true
            });
       });
    }
});