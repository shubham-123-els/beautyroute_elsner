# How do I know WebP is used?
Make sure to test things with the obvious caches disabled (Full Page Cache, Block HTML Cache). Once this extension is working, catalog images (like on a category page) should be replaced with: Their `<img>` tag should be replaced with a `<picture>` tag that lists both the old image and the new WebP image. If the conversion from the old image to WebP goes well.

You can expect the HTML to be changed, so inspecting the HTML source gives a good impression. You can also use the Error Console to inspect network traffic: If some `webp` images are flying be in a default Magento environment, this usually proofs that the extension is working to some extent.

# My CPU usage goes up. Is that normal?
Yes, it is normal. This extension does two things: It shows a WebP on the frontend of your shop. And it
generates that WebP when it is missing. Obviously, generating an image takes up system resources. And if
you have a large catalog, it is going to do more time. How much time? Do make sure to calculate this
yourself: Take an image, resize it using the `cwebp` binary and measure the time - multiply it by how many
images there are. This should give a fair estimation on how much time is needed.

Note that this extension allows for using various mechanisms (aka *convertors*). Tune the **Convertors**
settings if you want to try to optimize things. Sometimes, GD is faster than `cwebp`. Sometimes, GD just
breaks things. It depends, so you need to pick upon the responsibility to try this in your specific
environment.

Also note that this extension allows for setting an *encoding*. The default is `auto` which creates both a lossy and a lossless WebP and then picks the smallest one. Things could be twice as fast by setting this to `lossy`.

If you don't like the generation of images at all, you could also use other CLI tools instead.

# Class 'WebPConvert\WebPConvert' not found
We only support the installation of our Magento 2 extensions, if they are installed via `composer`. Please note that - as we see it - `composer` is the only way for managing Magento depedencies. If you want to install the extension manually in `app/code`, please study the contents of `cmoposer.json` to install all dependencies of this module manually as well.

# After installation, I'm still seeing only PNG and JPEG images
This could mean that the conversion failed. New WebP images are stored in the same path as the original path (somewhere in `pub/`) which means that all folders need to be writable by the webserver. Specifically, if your deployment is based on artifacts, this could be an issue.

Also make sure that your PHP environment is capable of WebP: The function `imagewebp` should exist in PHP and we recommend a `cwebp` binary to be placed in `/usr/local/bin/`.

Last but not least, WebP images only work in WebP-capable browsers. The extension detects the browser support. Make sure to test this in Chrome first, which natively supports WebP.

# Warning: filesize(): stat failed for xxx.webp
If you are seeing this issue in the `exception.log` and/or `system.log`,
do make sure to wipe out Magento caching and do make sure that the WebP
file in question is accessible: The webserver running Magento should have
read access to the file. Likewise, if you want this extension to
automatically convert a JPEG into WebP, do make sure that the folder
containing the JPEG is writable.

# Some of the images are converted, but others are not.
Not all JPEG and PNG images are fit for conversion to WebP. In the past, WebP has had issues with alpha-transparency and partial transparency. If the WebP image can't be generated by our extension, it is not generated. Simple as that. If some images are converted but some are not, try to upload those to online conversion tools to see if they work.

Make sure your `cwebp` binary and PHP environment are up-to-date.

# This sucks. It only works in some browsers.
Don't complain to us. Instead, ask the other browser vendors to support this as well. And don't say this
is not worth implementing, because I bet more than 25% of your sites visitors will benefit from WebP. Not
offering this to them, is wasting additional bandwidth.

# Some emails are also displaying WebP
It could be that your transactional email templates are including XML layout handles that suddenly introduce this extensions functionality, while actually adding WebP to emails is a bad idea (because most email clients will not support anything of the like). 

If you encounter such an email, find out which XML layout handle is the cause of this (`{handle layout="foobar"}`). Next, create a new XML layout file with that name (`foobar.xml`) and call the `webp_skip` handle from it (`<update handle="webp_skip" />`). So this instructs the WebP extension to skip loading itself.

# error while loading shared libraries: libjpeg.so.8: cannot open shared object file: No such file or directory
Ask your system administrator to install this library. Or ask the system administrator to install WebP support in PHP by upgrading PHP itself to the right version and to include the right PHP modules (like imagemagick). Or skip converting WebP images by disabling the setting in our extension and then convert all WebP images by hand.

# Can I use this with Amasty Shopby?
Yes, you can. Make sure to install the addition https://github.com/yireo/Yireo_Webp2ForAmastyShopby as well.


