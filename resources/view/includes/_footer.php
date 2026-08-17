  <div id="toastNotif"></div>
  <!-- App JS -->
  <script src="/public/js/app.min.js" type="module" defer></script>
  <script>
    if ("serviceWorker" in navigator) {
      window.addEventListener("load", () => {
        navigator.serviceWorker
          .register("/public/sw.js")
        // .then((reg) => console.log("[SW] registered", reg))
        // .catch((err) => console.error("[SW] registration failed:", err));
      });
    }
  </script>
  </body>

  </html>