var cacheName = "v1";

var cacheFiles = [
  './',
  './index.php',
  './favicon.ico',
  'https://fonts.googleapis.com/css?family=Roboto|Josefin+Slab%7cRaleway:900',
  'https://fonts.googleapis.com/icon?family=Material+Icons',
  'https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css',
  'https://code.jquery.com/jquery-3.2.1.min.js',
  'https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js',
  './css/main.css',
  './js/main.js',
  './private/views/cards-add.php',
  './private/views/contact-form.php',
  './private/views/footer.php',
  './private/views/head.php',
  './private/views/nav.php',
]

self.addEventListener('install', function(e) {
  console.log('[Service Worker] installed');

  e.waitUntil(
    caches.open(cacheName).then(function(cache) {
      console.log('[Service Worker] Caching cache files');
      return cache.addAll(cacheFiles);
    })
  )
})

self.addEventListener('activate', function(e) {
  console.log('[Service Worker] activated');
})

self.addEventListener('fetch', function(e) {
  console.log('[Service Worker] fetching ');
})
