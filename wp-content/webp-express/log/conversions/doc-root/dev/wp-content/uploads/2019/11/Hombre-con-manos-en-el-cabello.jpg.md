WebP Express 0.17.2. Conversion triggered with the conversion script (wod/webp-on-demand.php), 2019-11-06 01:01:13

*WebP Convert 2.3.0*  ignited.
- PHP version: 7.3.10
- Server software: LiteSpeed

Stack converter ignited

Options:
------------
The following options have been set explicitly. Note: it is the resulting options after merging down the "jpeg" and "png" options and any converter-prefixed options.
- source: [doc-root]/dev/wp-content/uploads/2019/11/Hombre-con-manos-en-el-cabello.jpg
- destination: [doc-root]/dev/wp-content/webp-express/webp-images/doc-root/dev/wp-content/uploads/2019/11/Hombre-con-manos-en-el-cabello.jpg.webp
- log-call-arguments: true
- converters: (array of 9 items)

The following options have not been explicitly set, so using the following defaults:
- converter-options: (empty array)
- shuffle: false
- preferred-converters: (empty array)
- extra-converters: (empty array)

The following options were supplied and are passed on to the converters in the stack:
- encoding: "auto"
- metadata: "none"
- near-lossless: 60
- quality: 70
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
- source: [doc-root]/dev/wp-content/uploads/2019/11/Hombre-con-manos-en-el-cabello.jpg
- destination: [doc-root]/dev/wp-content/webp-express/webp-images/doc-root/dev/wp-content/uploads/2019/11/Hombre-con-manos-en-el-cabello.jpg.webp
- encoding: "auto"
- log-call-arguments: true
- metadata: "none"
- near-lossless: 60
- preset: "none"
- quality: 70
- smart-subsample: false

The following options have not been explicitly set, so using the following defaults:
- alpha-quality: 85
- auto-filter: false
- default-quality: 75
- low-memory: false
- max-quality: 85
- method: 6
- skip: false
------------

Encoding is set to auto - converting to both lossless and lossy and selecting the smallest file

Converting to lossy
Quality: 70. 
Consider setting quality to "auto" instead. It is generally a better idea

**Error: ** **vips_realpath: unable to form filename
unix error: No such file or directory
glib: Error creating thread: Resource temporarily unavailable

glib: Error creating thread: Resource temporarily unavailable

** 
*vips_realpath: unable to form filename
unix error: No such file or directory
glib: Error creating thread: Resource temporarily unavailable

glib: Error creating thread: Resource temporarily unavailable

* 
vips failed in 429 ms

*Trying: imagick* 

Options:
------------
The following options have been set explicitly. Note: it is the resulting options after merging down the "jpeg" and "png" options and any converter-prefixed options.
- source: [doc-root]/dev/wp-content/uploads/2019/11/Hombre-con-manos-en-el-cabello.jpg
- destination: [doc-root]/dev/wp-content/webp-express/webp-images/doc-root/dev/wp-content/uploads/2019/11/Hombre-con-manos-en-el-cabello.jpg.webp
- encoding: "auto"
- log-call-arguments: true
- metadata: "none"
- quality: 70

The following options have not been explicitly set, so using the following defaults:
- alpha-quality: 85
- auto-filter: false
- default-quality: 75
- low-memory: false
- max-quality: 85
- method: 6
- skip: false

The following options were supplied but are ignored because they are not supported by this converter:
- near-lossless
------------

Encoding is set to auto - converting to both lossless and lossy and selecting the smallest file

Converting to lossy
Quality: 70. 
Consider setting quality to "auto" instead. It is generally a better idea
Reduction: 76% (went from 128 kb to 31 kb)

Converting to lossless
Reduction: -303% (went from 128 kb to 516 kb)

Picking lossy
imagick succeeded :)

Converted image in 15265 ms, reducing file size with 76% (went from 128 kb to 31 kb)
