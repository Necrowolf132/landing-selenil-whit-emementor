WebP Express 0.17.2. Conversion triggered with the conversion script (wod/webp-on-demand.php), 2019-10-14 15:51:32

*WebP Convert 2.3.0*  ignited.
- PHP version: 7.3.10
- Server software: LiteSpeed

Stack converter ignited
Destination folder does not exist. Creating folder: [doc-root]/dev/wp-content/webp-express/webp-images/doc-root/dev/wp-content/themes/oceanwp-child-theme-master

Options:
------------
The following options have been set explicitly. Note: it is the resulting options after merging down the "jpeg" and "png" options and any converter-prefixed options.
- source: [doc-root]/dev/wp-content/themes/oceanwp-child-theme-master/screenshot.png
- destination: [doc-root]/dev/wp-content/webp-express/webp-images/doc-root/dev/wp-content/themes/oceanwp-child-theme-master/screenshot.png.webp
- log-call-arguments: true
- converters: (array of 9 items)

The following options have not been explicitly set, so using the following defaults:
- converter-options: (empty array)
- shuffle: false
- preferred-converters: (empty array)
- extra-converters: (empty array)

The following options were supplied and are passed on to the converters in the stack:
- alpha-quality: 85
- encoding: "auto"
- metadata: "none"
- near-lossless: 60
- quality: 85
------------


*Trying: cwebp* 

**Error: ** **exec() is not enabled.** 
exec() is not enabled.
cwebp failed in 2 ms

*Trying: vips* 
vipslib version: 8.8.3
vips extension version: 1.0.8

Options:
------------
The following options have been set explicitly. Note: it is the resulting options after merging down the "jpeg" and "png" options and any converter-prefixed options.
- source: [doc-root]/dev/wp-content/themes/oceanwp-child-theme-master/screenshot.png
- destination: [doc-root]/dev/wp-content/webp-express/webp-images/doc-root/dev/wp-content/themes/oceanwp-child-theme-master/screenshot.png.webp
- alpha-quality: 85
- encoding: "auto"
- log-call-arguments: true
- metadata: "none"
- near-lossless: 60
- preset: "none"
- quality: 85
- smart-subsample: false

The following options have not been explicitly set, so using the following defaults:
- auto-filter: false
- default-quality: 85
- low-memory: false
- max-quality: 85
- method: 6
- skip: false
------------

Encoding is set to auto - converting to both lossless and lossy and selecting the smallest file

Converting to lossy
Quality: 85. 
Reduction: 35% (went from 33 kb to 22 kb)

Converting to lossless
Reduction: 15% (went from 33 kb to 28 kb)

Picking lossy
vips succeeded :)

Converted image in 1031 ms, reducing file size with 35% (went from 33 kb to 22 kb)
