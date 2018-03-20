(function() {
    'use strict';

    var headerElement = document.querySelector('header');
    var metaTagTheme = document.querySelector('meta[name=theme-color]');

    document.addEventListener('DOMContentLoaded', function(event) {
        if(!navigator.onLine) {
            updateNetworkStatus();
        }

        window.addEventListener('online', updateNetworkStatus, false);
        window.addEventListener('offline', updateNetworkStatus, false);


    });

    function updateNetworkStatus() {
        if(!navigator.onLine) {
            UIkit.notification({message: "<span uk-icon='icon:  info'></span> Та интернет холболтгүй байна.", pos: 'bottom-left', status: 'primary'});

        }
    }

})();