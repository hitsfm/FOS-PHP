# FOS-PHP
FOS Desktop Modified To PHP And Themed With CSS.  Including Support Of Running Basic Windows Apps From The Browser.


I really enjoyed the original HTML script called FOS aka Fake Operating System. It is a very nice basic desktop like UI. It really simulates a polished version of what the Windows 3.1 Program Manager worked like. But after building up a few windows with the FOS script. I quickly understood how quicky things got glitchy. The original script had settings in the verious js scripts that has settings like icon sizes offset math etc... It had been setup to show a nice offset when you open up FOS windows. This is not needed but it looked pretty as your many opened FOS windows don't just over lap one another. But after about 6 windows. The FOS windows would open up out of the browsers view range. I had the idea of building a large site with FOS so this could not work.


Another issue I had ran into with the orginal HTML FOS js script is the obvious cluttering up of the index.html file. This static file holds all the FOS "sections" or modules. Windows,Icons information as html code. It was not long that with just adding a handful of FOS windows. My main index.html file was over 2k lines! Now build up even more and its not long until you end up with something with 10k plus lines of HTML code. As your site grows. This gets tedious to load and work with. So I first tried to load some various HTML js injecting scripts so I could kind of do like PHP includes but without PHP. No matter what this would break parts of the FOS scripts. I had no such luck. So I then moddified the main index.html file and converted it to PHP so that I could seperate all FOS sections into serpate static HTML includes files. You will thank me later as your site grows!

The next issue I had was with the original FOS script. Adding the content of every FOS window is done all in the index.html file. This allows you to enter some text and some basic html. Issue is any advanced html,styles,scripts loading would break the whole FOS styles. I wanted to be able to theme every FOS window content the way I feel. So my fix was to make a folder for every "FOS" window content and within that folder include its own HTML file(full website). Like this you can load all CSS scripts and styles and load it up in a FOS window by calling it as an Iframe. See code example!


FOS has a nice basic UI. I tried all other "WEB" desktops and they are all so very complicated. Some need perl. Some need databases. Yeah I understand they offer extra features like a fake "Task List" and user login and such. How ever for just a static site that hold information. Nothing of that was needed for me and I had a hard time understanding the hardcore programming codes, Some of these windows work and program more like real app modules you need to program in Java etc.....







Here is a quick list of my modifications:


-Changed the icons settings sizes fonts and offsets in the various FOS js files. So that it looks pretty and can support 100s of FOS Windows if you ever feel like doing.

-Added a basic "theme" switcher that slides between 2 CSS theme files. More or less a glorified version of a Day mode/ Night Mode toggle idea. 

-Converted the main FOS index.html file into PHP and split up the FOS index page into seperate includes,located in /includes directory. Taking advantage of PHP readfile function.

-Added boxedwine, Created an App example via FOS that loads up WinXP sol.exe within a FOS window. If Wine can run your app. Good changes boxedwine will load it as well. 




Requirements:



*Web server with at lease PHP5. file:// protocal not supported. Sorry not my rule. It's a web browser thing. 

*Server app handlers need to be properly setup for .wasm

*Flatfile no database

*Lots of time to build new FOS Windows!




How to add FOS Windows:

Please take a look at the code. I have spent some great amount of time commenting what the code does. Just follow it as a template to add/moddify site content. I can give you some pointers.

When you create a new FOS Window control html page. The ID must must be lower case and no numbers or else this breaks FOS!

exemple: <fos-window name="winsol" (good)
                     
exemple: <fos-window name="WinSol" (bad)

exemple: <fos-window name="win_sol" (bad)
                     
exemple: <fos-window name="winsol98" (bad)

exemple: <fos-window name="winsol98" (bad)
                     
example: <fos-window name="winsolninetyeight" (good)


The name is internal so no worries that it might show up on the site and look bad! Just keep them all unique.



Because the index is PHP and broken down into includes. Once you built a new FOS window folder and html files. Don't forget to call that html file by adding a new php function readfile line pointing to the new FOS window html or else your new icon won't load anything. Take a look at code example. It is well documented within. I tried to make this as simple and easy to maintain and update as the site grows.
                     

*

