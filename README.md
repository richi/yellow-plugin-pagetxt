PageTxt plugin 0.1.1
=================

A plugin for overwriting language.ini entries in pages.txt.

Imagine a domain with more than one wiki or blog. Right now all automatically generated pages will have the same title text etc.. For example "Wiki: Recent Changes" or whatever translation you have in your language.ini. With this little plugin one can include (as an example)

        wikiFilter: Articles
        recentChanges: What we did Yesterday 

in the meta data section of pages.txt for one of the wikis. The text for the "Wiki: Recent Changes" page in this particular wiki will now be "Articles: What we did Yesterday" without harming the other wikis.

This code might eat all your data or nuke your server. Use at your own risk.

How to install?
----------------------
1. Download and install [Yellow](https://github.com/datenstrom/yellow/).  
2. Download [pagetxt.php](pagetxt.php?raw=true), copy it into your `system/plugins` folder.  
3. In your page.txt files insert the keys you want to overwrite .  

To uninstall delete the plugin files.

License
----------------------

[WTFPL](http://www.wtfpl.net)