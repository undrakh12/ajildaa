var cacheName = 'adjildaa-v1';
var cacheFiles = [
    '/',
    '/css/main.css',
    '/css/uikit.min.css',
    '/js/app.js',
    '/js/uikit.min.js',
    '/js/uikit-icons.min.js',
    '/images/logo.png'
]

self.addEventListener('install', function(e) {
    e.waitUntil(
        caches.open(cacheName).then(function(cache) {

            console.log('Service worker caching cacheFiles');
            return cache.addAll(cacheFiles);
        })
    );
});

self.addEventListener('activate', function(e) {
    e.waitUntil(
        caches.keys().then(function(cacheNames) {
            return Promise.all(cacheNames.map(function(thisCachename) {

                if(thisCachename !== cacheName) {

                    console.log('Removing cached files from cache', thisCachename);
                    return caches.delete(thisCachename);
                }

            }))
        })
    );
});

self.addEventListener('fetch', (event) => {
    event.respondWith(
        caches.open('offline').then(function(cache) {
            return cache.match(event.request).then(function(response) {
                var fetchPromise = fetch(event.request).then(function(networkResponse) {
                    cache.put(event.request, networkResponse.clone());
                    return networkResponse;
                })
                return response || fetchPromise;
            })
        })
    );
    
});