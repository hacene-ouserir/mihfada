import { defineConfig } from 'vite'
import { resolve } from 'path'
import { visualizer } from 'rollup-plugin-visualizer'
import { compression } from 'vite-plugin-compression2'

export default defineConfig({
  plugins: [
    // visualizer({
    //   filename: "bundle-report.html", // file saved in dist
    //   template: "treemap",            // "sunburst", "network", "treemap"
    //   open: false,                     // auto-open after build
    // }),
    compression({
      algorithms: [
        'gzip',
        'brotliCompress'
      ]
    })
  ],
  build: {
    outDir: "build",
    emptyOutDir: false,
    rollupOptions: {
      treeshake: true, // ensures dead code is removed
      input: {
        app: resolve(__dirname, "src/js/app.js"),
      },
      output: {
        entryFileNames: "js/[name].min.js",
        chunkFileNames: "js/[name]-[hash].js",
        assetFileNames: (assetInfo) => {
          const ext = assetInfo.name.split('.').pop()
          if (ext === 'css') return 'css/[name].min.css'
        },
        manualChunks: {
          apexcharts: ["apexcharts"],
          alpine: ["alpinejs"],
          persist: ["@alpinejs/persist"],
          flatpickr: ["flatpickr"]
        }
      },
    },
    minify: "esbuild", // smaller + faster
  },
})