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

<part>
required

Name of your part in folder with your templates parts.

<type>
optional |  default = html

If you have not html template , for example php, set second parameter. But **remember** write good code.
