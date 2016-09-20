=== Crelly Slider ===
Contributors:  fabiorino
Donate link: http://fabiorino1.altervista.org/projects/crellyslider/contribute-and-support/
Tags: slider, slides, animations, drag & drop, drag and drop, layers, elements
Requires at least: 3.6.0
Tested up to: 4.6
Stable tag: 1.1.1
License: MIT
License URI: http://opensource.org/licenses/MIT

Free Responsive Slider with Elements and Layers Animations, featuring a Drag & Drop slides Builder.

== Description ==

= Crelly Slider has Layers Animations, is Free, Responsive and Easy to Use =
<br />
Crelly Slider is a Free / Open Source WordPress slider with a powerful Drag & Drop Builder. You can add Texts, Images, YouTube/Vimeo videos and animat each of them. It's perfect to display your creative content in posts and pages. With it's tons of features, Crelly Slider is the best free solution for your online WebSite.
<br />
<br />
<a href="http://fabiorino1.altervista.org/projects/crellyslider/">Official WebSite (with live demo)</a>
<br />
= User Friendly Admin Panel =
Crelly Slider does not require any Coding Knowledge. With the simple admin panel you will be able to create the sliders in the easiest way. Upload images with the default WordPress interface or choose colors using the picker.

= High Cross Browser Compatibility =
Most of the animations and the transitions are written in jQuery (using the "animate" function). In this way we can assure the compatibility with modern (even Android and iOs) and older browsers.

= Drag and Drop Builder =
How can you position all the elements in to the slider area? You just simply drag them in to the desired position. Like in Powerpoint, you just have to move the object around the Slide.

= Transitions & Animations =
Foreach element and slide you can choose an in animation and an out animation using a simple selection menu. You can set the transition speeds and how long the element will take to get in and out.

= Completely Responsive =
Responsive means that the Slider will be displayed correctly in every resolution that the user will use. If the display is small (like in a smartphone), the slides and the elements will be scaled to be adapted.

= Full & Fixed Width Modes =
Using Crelly Slider you can select between a fixed or a full-width layout (both of them can be responsive). You are the designer, you own the WebSite, just choose the best for it.

== Installation ==

Download this plugin directly from your Wordpress Admin Page.
<br />
Click Install.
<br />
Click Activate.
<br />
You can find the documentation <a href="http://fabiorino1.altervista.org/projects/crellyslider/documentation/">here</a>.

== Screenshots ==

1. An example of a slide you can create
2. Unlimited sliders
3. Slider settings
4. Slides and elements options (in this case, a text element)

== Changelog ==

= 1.1.1 =
* Bug fix: sometimes, the slider got stuck at loading screen

= 1.1.0 =
* Awesome community: the slider is now translated in 8 different languages! Thank you!<br />English,<br />Italian,<br />Spanish (<a href="https://github.com/eduardoarandah">Eduardo Aranda</a>),<br />Russian (<a href="http://dymskiy.ru/">Andrey Dymskiy</a>),<br />Slovak (<a href="https://github.com/webmandesign">Oliver Juhas</a>),<br />Serbian (Branislav Pakic),<br />French (sLy kereven),<br />German (Andreas Dolinar, <a href="http://elokron.de/">Jan Adams</a>)
* New feature: Duplicate sliders and slides
* New feature: Import/Export sliders
* New feature: Support for YouTube and Vimeo videos
* New feature: The slides can be linked (the entire background is a link)
* New feature: New preloader: when loading, the background is no more grey. Now the first slide background image is automatically blurred and used as background for the preloader. When the slider is loaded, the blurred background will fade away and the first slide will be displayed
* New feature: Navigation and controls are much better looking now
* New feature: Added public methods to control the slider. pause(), resume(), nextSlide(), previousSlide(), changeSlide(slide_index), getCurrentSlide(), getTotalSlides()
* New feature: Slides background color can now be set manually
* New feature: Custom CSS classes can now be added to elements
* New feature: Added "Center vertically" and "Center horizontally" buttons to align elements
* New feature: The slides background image can now be quickly set as "responsive full width image" or "pattern"
* Bug fix: Sometimes slides and elements weren't saved correctly
* Bug fix: Text elements were displayed on two lines when an inline tag was added
* Bug fix: When automatic slide was set to "no", the out animations were still performed
* Bug fix: When the backend interface was loading there were some graphical glitches
* Bug fix: Background position wasn't correct on Firefox
* Minor change: Texts have now a default line height, color and font. In this way, I can be sure that they are displayed exactly in the same way in the backend and in the frontend
* Minor change: dropped support for IE < 11
* Other minor changes and bug fixes

= 0.8.2 =
* Fixed: broken admin layout on Firefox (<a href="https://github.com/fabiorino/crelly-slider/pull/5">Thanks eduardoarandah</a>)
* Crelly Slider is now translated in Spanish (<a href="https://github.com/eduardoarandah/crelly-slider/commit/3b7d49b63d9dbe60c420669edea898de34cd720f">Again, thanks eduardoarandah</a>) and in Italian!
* Do you want to translate the plugin in your language? <a href="http://fabiorino1.altervista.org/projects/crellyslider/documentation/#translate">Check the documentation</a>

= 0.8.1 =
* Fixed: padding broken in IE8
* Fixed: background images with a long name weren't stored correctly into the database

= 0.8.0 =
* Changed: by default, elements out animations start before the slide out animation. In this way, they result more visible, therefore better than before. The option is customizable for each element
* Added: support for touch, swipe and drag
* Improved progress bar animation: now has a cool swing effect
* The current editing slide tab is now highlighted
* Fixed: before preloader, for about a second, the slider was displayed as an unordered list
* Fixed: now if you specify the opacity in custom CSS, that value won't be overwritten
* Changed: by default, line-height is now 1.5. Please, if you want to change it, specify a pure number to avoid compatibility issues
* Fixed: blue border around linked images in IE
* The text / HTML of a text element is now wrapped in a textarea (no more in an input)
* Fixed: apostrophes in text elements are now displayed correctly
* Removed useless file from the package.
* Removed afterSlideEnd(), afterSetResponsive(), afterPause(). They were useless
* Other minor bug fixes and changes

= 0.7.0 =
* Fixed "Error saving elements" if there are no elements

= 0.6.9 =
* Added the possibility to insert links in images and texts
* Added slider preloader (with a gif image)
* Added icon in the style of WordPress to the lateral sidebar in the admin panel
* Added confirm alert when you delete a slider
* Fixed: now HTML codes inserted in text elements are working properly
* Fixed: when you selected an element into the editing area weren't shown the correct element options
* Fixed invisible progress bar in Internet Explorer 8
* Fixed invisible slider navigation in Internet Explorer 8
* Changed: text output is now wrapped by a "div" and not a "p" for a better compatibility and a cleaner code
* Changed name to the "add image" button in the element options
* Other minor bug fixes and changes

= 0.6.8 =
* Added callback functions: beforeStart, beforeSetResponsive, afterSetResponsive, beforeSlideStart, afterSlideEnd, beforePause, afterPause, beforeResume
* Fixed responsive methods that restarted the slide in particular moments uselessly

= 0.6.7 =
* Fixed "Add image" not working on Firefox and Internet Explorer
* Fixed "Duplicate element" on animations

= 0.6.6 =
* Fixed directory error

= 0.6.5 =
* Initial release