# Render Parts - how to use

1. Create in your project folder **/inc** (for example) - for backend files - classes, functions etc
2. Choose your destination for **Render Parts** , can you choose folder **/inc**
3. `gh repo clone webites/Render`
4. Create folder with
   - CSS files
   - HTML, PHP templates
5. Config your path in file RenderConfig.php

## Display templates

`RenderPart::name(<part>, <type>);`

\<part\>

**required**

Name of your part in folder with your templates parts.

\<type\>

**optional** | default = html

If you have not html template , for example php, set second parameter. But **remember** write good code.

## Render CSS files

`RenderPart::css(<file>, <cdn>, <min>, <id>)`

\<file\>

**required**

Set up string or array with file name of your css file.
For local files without `.css`, another filename.
For CDN files full url.

\<cdn\>

**optional** | default = false

If you set CDN files take here true

\<min\>

**optional** | default = false

If you have minify file or files (for array) tak here true.
This option is off for CDN.

\<id\>

**optional** | default = ''

If you want identify you asset setup here.
This option is off for arrays.

## Render JS files from source

`RenderPart::js_src(<url>)`

\<url\>

**required**

Set url file or files from CDN for example.
You can take it string or array, but must to be network files.

## Not working ?

Check your namespaces and use syntax in files and check again.
You can check package.json too and run `composer update`

## Need a website?

Check [Agencja interatywna Wrocław](https:/webites.pl/ "Agencja interatywna Wrocław").
