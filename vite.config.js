import { defineConfig } from "vite"
import { resolve } from "path"
import { VitePWA } from 'vite-plugin-pwa';
import { compression } from 'vite-plugin-compression2'

export default defineConfig({
  base: "/public/", // set base path for assets
  plugins: [
    // visualizer({
    //   filename: "bundle-report.html", // file saved in dist
    //   template: "treemap",            // "sunburst", "network", "treemap"
    //   open: true,                     // auto-open after build
    // }),
    compression({
      algorithms: [
        'gzip',
        'brotliCompress'
      ],
      ext: '.gz',
      deleteOriginalAssets: false,

      include: [
        '**/*.js',
        '**/*.css'
      ],

      exclude: [
        '**/sw.js',
        '**/workbox-*.js',
        '**/manifest.json',
        // Exclude images and other files from compression
        '**/*.png',
        '**/*.jpg',
        '**/*.jpeg',
        '**/*.webp',
        '**/*.svg',
        '**/*.ico',
        '**/*.pdf',
      ]
    }),
    compression({
      algorithm: 'brotliCompress',
      ext: '.br',
      deleteOriginalAssets: false,

      include: [
        '**/*.js',
        '**/*.css'
      ],

      exclude: [
        '**/sw.js',
        '**/workbox-*.js',
        '**/manifest.json',
        // Exclude images and other files from compression
        '**/*.png',
        '**/*.jpg',
        '**/*.jpeg',
        '**/*.webp',
        '**/*.svg',
        '**/*.ico',
        '**/*.pdf',
      ]
    }),
    VitePWA({
      registerType: 'autoUpdate',
      injectRegister: false,
      filename: "sw.js",
      manifestFilename: "manifest.json",
      manifest: {
        name: 'Mihfada',
        short_name: 'Mihfada',
        start_url: '/',
        scope: '/',
        display: 'standalone',
        description: "Modern portfolio app.",
        lang: 'en',
        direction: 'ltr',
        theme_color: '#00bfff',
        background_color: '#00bfff',
        orientation: 'any',
        icons: [
          {
            src: '/public/assets/icons/48x48.png',
            sizes: '48x48',
            type: 'image/png'
          },
          {
            src: '/public/assets/icons/72x72.png',
            sizes: '72x72',
            type: 'image/png'
          },
          {
            src: '/public/assets/icons/96x96.png',
            sizes: '96x96',
            type: 'image/png'
          },
          {
            src: '/public/assets/icons/144x144.png',
            sizes: '144x144',
            type: 'image/png'
          },
          {
            src: '/public/assets/icons/192x192.png',
            sizes: '192x192',
            type: 'image/png',
            purpose: 'any maskable'
          },
          {
            src: '/public/assets/icons/256x256.png',
            sizes: '256x256',
            type: 'image/png'
          },
          {
            src: '/public/assets/icons/384x384.png',
            sizes: '384x384',
            type: 'image/png'
          },
          {
            src: '/public/assets/icons/512x512.png',
            sizes: '512x512',
            type: 'image/png',
            purpose: 'any maskable'
          }
        ],
      },
      workbox: {
        cacheId: 'ho',
        skipWaiting: true,
        clientsClaim: true,
        globPatterns: ['**/*.{json,js,css,png,jpg,jpeg,webp,svg,ico,ttf}'],
        globIgnores: [
          'assets/icons/*'   // ignore icons
        ],
        navigateFallback: undefined,
        navigateFallbackDenylist: [/^\/admin-panel/, /\/assets\/files\/cvs\/.*$/],
        runtimeCaching: [
          {
            urlPattern: /^https?.*/,
            handler: 'NetworkFirst',
            options: {
              cacheName: 'ho-dynamic',
              networkTimeoutSeconds: 10,
            }
          }
        ],
        cleanupOutdatedCaches: true,
      },
      devOptions: {
        enabled: true
      }
    }),
  ],
  // css: {
  // },
  build: {
    outDir: "public",
    emptyOutDir: false,
    rollupOptions: {
      treeshake: true, // ensures dead code is removed
      input: {
        app: resolve(__dirname, "resources/js/app.js"),
      },
      output: {
        entryFileNames: "js/[name].min.js",
        chunkFileNames: "js/[name]-[hash].js",
        assetFileNames: (assetInfo) => {
          if (assetInfo.name && assetInfo.name.endsWith(".css")) {
            return "css/[name].min.css";
          }
          return "css/fonts/[name][extname]"; // fonts, images, etc.
        },
        manualChunks: {
          aos: ["aos"], // separate AOS for better caching
        }
      },
    },
    minify: "esbuild", // smaller + faster
  },
})