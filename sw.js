const app_version="0.0.1"

self.addEventListener('fetch', event => {
  if (event.request.url.endsWith('.png')) {
      console.log("PngImgRequested: " + event.request.url);
  }
});