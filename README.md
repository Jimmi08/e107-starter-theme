# e107 starter theme with plugin
Renamed basic theme to avoid conflict with Basic theme from Maw
Just rename folder name and 2x word starter with  your theme name

## Some rules for plugins 01.06.2017
With all my pro theme I use 3 custom plugins:

**Themeoptions plugin** - actual functionality:
- added colorpicker options
- solves multilan problem on some core prefs
- available export/import option
Note: I use themeprefs only for free themes or lite versions that are downloadable from e107.org

**Contactpage plugin** - actual functionality:
- extended contact info page
- planned to add branches

**Contentblocks plugin** - actual functionality:
- layer between content and menus
- more easier work with section of site
- sections groups etc.
- build contect of custom pages from admin area not hardcoded in layout

To not messing with core shortcodes I decided to use this rules:
prefix for each plugins (shortcodes, tables):
tojm_
cpjm_
cbjm_

And I try to add example of using these shortcodes (it's more easier just copy them)

## Theme Options Plugin 17.05.2017
Added colorpicker options for admin area. Use in any other plugin:

for normal picker:
`'writeParms' => array('class' => 'colorpicker')`, 

for picker that returns RGB value (f.e. opacity): 
` 'writeParms' => array('class' => 'colorpicker-rgb')`, 


