<?php 
    $pgName = 'Lessons - Day 03';
    include './templates/header.php';
?>
	<main class="col-1">
	    <div class="section-11">Day 03</div>
		<h2>Agenda</h2>
		<ul>
		    <li><strong>Referencing Stylesheets</strong></li>
		    <li><strong>Importing</strong></li>
		    <li><strong>Fonts</strong></li>
		    <li><strong>Compact CSS</strong></li>
		    <li><strong>Advanced Selectors</strong></li>
		    <li><strong>Rule Specificity</strong></li>
		    <li><strong>To Do</strong></li>
		</ul>
		<h2>Referencing CSS</h2>
		<p>When linking to external style sheets, there are a number of features to be aware of:</p>
		<ul>
		    <li>Each stylesheet requires it's own&nbsp;<strong>link</strong>&nbsp;tag</li>
		    <li>Multiple stylesheets can be loaded (main.css, fonts.css, layout.css, etc)</li>
		    <li><strong>rel</strong>&nbsp;determines how the HTML will use the file linked to (<em>REQUIRED)</em></li>
		    <li><strong>href</strong>&nbsp;defines the path, relative or absolute, to the css file (<em>REQUIRED</em>)</li>
		    <li><strong>type</strong>&nbsp;attribute is has been deprecated (dropped in HTML5)</li>
		    <li><strong>title</strong>&nbsp;attribute allows the user to group stylesheets</li>
		    <li><strong>media</strong>&nbsp;attribute allows you to specify what medium this should be viewed in</li>
		</ul>
		<p><strong>&lt;link&nbsp;&nbsp;&nbsp; rel="stylesheet" </strong></p>
		<p><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; href="http://www.mysite.com/css/styles.css" </strong></p>
		<p><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; type="text/css" </strong></p>
		<p><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; title="Main Style" </strong></p>
		<p><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; media="screen" /&gt;</strong></p>
		<h2>Media variations:&nbsp;media&nbsp;attribute</h2>
		<ul>
		    <li><strong>media="type"</strong>&nbsp;can be a powerful tool</li>
		    <li>Examples of media types:</li>
		    <ul>
		        <li><strong>all</strong>&nbsp;- well supported, commonly used (<em>DEFAULT)</em></li>
		        <li><strong>aural</strong></li>
		        <li><strong>braille</strong></li>
		        <li><strong>embossed</strong></li>
		        <li><strong>handheld</strong>&nbsp;- not common (smart phones identify as&nbsp;<strong>screen</strong>)</li>
		        <li><strong>print</strong>&nbsp;- well supported, commonly used</li>
		        <li><strong>projection</strong></li>
		        <li><strong>screen</strong>&nbsp;- well supported, commonly used</li>
		        <li><strong>tty</strong></li>
		        <li><strong>tv</strong></li>
		    </ul>
		    <li>Note that most smart phone devices (iPhones, Andriod, etc) do not identify themselves as media type&nbsp;<strong>handheld</strong>. The reasoning was that the devices were more than capable of displaying standard web sites, so they identify as&nbsp;<strong>screen</strong></li>
		</ul>
		<h2>Alternate style sheets:&nbsp;rel&nbsp;attribute</h2>
		<p>You can also have alternate stylesheets supported</p>
		<ul>
		    <li><strong>rel="stylesheet"</strong>&nbsp;defines the default stylesheets to use</li>
		    <li><strong>rel="alternate stylesheet"</strong>&nbsp;allows different styles to be defined</li>
		    <li><strong>Tip:</strong>&nbsp;If you have multiple sheets that belong to one "look" make sure they all have the same&nbsp;<strong>title</strong></li>
		    <li>You can create alternate style sheets for users, allowing them to select which ones they would like to see</li>
		    <li>An example would be to create a 'Larger Text' style sheet with everything in a larger font, or providing an option for users to choose an austere, simple page instead of a colorful/image heavy stylesheet</li>
		    <li>Many browsers are now giving users the ability to select which sheet they would like to see. (Firefox: View &gt; Page Style)</li>
		</ul>
		<h2>Alternate style sheets:&nbsp;title&nbsp;attribute</h2>
		<ul>
		    <li>A stylesheet is "persistent" if it is linked with&nbsp;<strong>rel="stylesheet"</strong>&nbsp;and has no&nbsp;<strong>title</strong>&nbsp;attribute. All persistent stylesheets are always used when rendering</li>
		    <li>A stylesheet is "preferred" if it is linked with&nbsp;<strong>rel="stylesheet"</strong>&nbsp;and has a&nbsp;<strong>title</strong>&nbsp;attribute. these styles will be used as the default. preferred stylesheets with the same title are grouped together</li>
		    <li>Finally, a stylesheet is "alternate" if it is linked with&nbsp;<strong>rel="alternate stylesheet"</strong>&nbsp;and has a&nbsp;<strong>title</strong>. These stylesheets are supposed to allow the user to choose stylesheets, they are grouped together by&nbsp;<strong>title</strong>&nbsp;and show up in the browser's stylesheet selector if it has one (<strong>View &gt; Page Style</strong>&nbsp;in Firefox). Each group (by&nbsp;<strong>title</strong>) is mutually exclusive.</li>
		</ul>
		<h2>Persistent Styles</h2>
		<p>Persistent styles apply in all cases, even when alternate styles are chosen.</p>
		<p><strong>&lt;!-- rel="stylesheet" with NO title="" --&gt;</strong></p>
		<p><strong>&lt;link&nbsp;&nbsp;&nbsp; rel="stylesheet" </strong></p>
		<p><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; href="css/persistent_styles.css" /&gt;</strong></p>
		<h2>Preferred Styles</h2>
		<p>Preferred styles will be the default, but will be replaced if alternate styles are chosen.</p>
		<p><strong>&lt;!-- rel="stylesheet" AND a title="" --&gt;</strong></p>
		<p><strong>&lt;link&nbsp;&nbsp;&nbsp; rel="stylesheet" </strong></p>
		<p><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; href="css/default_styles.css"</strong></p>
		<p><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; title="Standard Styling"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; /&gt;</strong></p>
		<h2>Alternate Styles</h2>
		<p>Alternate styles will not be applied by default, but may be chosen by the user agent. Each alternate stylesheet must have a&nbsp;<strong>title=""</strong>.</p>
		<p><strong>&lt;!-- use rel="alternate stylesheet" for alternative stylesheets... --&gt;</strong></p>
		<p><strong>&lt;link&nbsp;&nbsp;&nbsp; rel="alternate stylesheet" </strong></p>
		<p><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; href="css/large_text.css"</strong></p>
		<p><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; title="Large Text Styles" /&gt;</strong></p>
		<h2>Grouping Stylesheets</h2>
		<p>If more than one link tag shares the same&nbsp;<strong>title=""</strong>&nbsp;then they will be grouped together.</p>
		<p><strong>&lt;-- group stylesheets with shared title="" --&gt;</strong></p>
		<p><strong>&lt;link&nbsp;&nbsp;&nbsp; rel="alternate stylesheet" </strong></p>
		<p><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; href="css/monchrome_layout.css"</strong></p>
		<p><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; title="Monochrome Styles"&nbsp; /&gt;</strong></p>
		<p><strong>&lt;link&nbsp;&nbsp;&nbsp; rel="alternate stylesheet" </strong></p>
		<p><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; href="css/monchrome_fonts.css"</strong></p>
		<p><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; title="Monochrome Styles" /&gt;</strong></p>
		<p>To enable alternate stylesheet switching, you can either apply some javascript to manage the switch with hyperlinks, or use&nbsp;<a href="https://support.mozilla.org/en-US/questions/841578"><strong>Firefox for alternate stylesheets</strong></a>.</p>
		<h2>@import: Managing Multiple CSS Files</h2>
		<p>You can use the&nbsp;<strong>@import</strong>&nbsp;method to import multiple stylesheets from a basic stylesheet that you link to. This will reduce the clutter that can sometimes occur within the&nbsp;<strong>&lt;head&gt;</strong>&nbsp;section.</p>
		<p>It is also a great place to be able to manage your CSS. From your main document, create a&nbsp;<strong>&lt;link&gt;</strong>&nbsp;to your&nbsp;<strong>styles.css</strong>&nbsp;page.</p>
		<p>In the body of the&nbsp;<strong>styles.css</strong>&nbsp;file, import as many files as you need:</p>
		<ul>
		    <li><strong>@import url("css/type.css");</strong></li>
		    <li><strong>@import url("css/nav.css");</strong></li>
		    <li><strong>@import url("css/template.css");</strong></li>
		</ul>
		<p><strong>NOTE:</strong>&nbsp;when using the&nbsp;<strong>@import</strong>&nbsp;directive in an external CSS file, ensure it comes before your CSS selector rules. It might be best to not include any CSS rules in a page that uses&nbsp;<strong>@import</strong>.</p>
		<h2>@charset: Assigning CSS Character Set</h2>
		<p>If your CSS files only contain standard keyboard characters, assigning the character set is not required. The CSS language itself does not use any exotic characters, so assigning a charset is often omitted. If, however, your CSS needs to use special characters, ensuring the correct character set can be very important. Eg: When using a pseudoclass to add content to HTML&nbsp;<strong>content: "&Auml;wesome!"</strong></p>
		<p>If needed, add the&nbsp;<strong>@charset</strong>&nbsp;rule to the top of the CSS document.</p>
		<p><strong>/* assign charset at top of .css file */</strong></p>
		<p><strong>@charset "utf-8";</strong></p>
		<p><strong>&nbsp;</strong></p>
		<p><strong>/* CSS rules follow... */</strong></p>
		<h2>@font-face And Font Servers</h2>
		<p>Fonts that aren't available on the client machine can be provided by a third-party font server or by your website's server.</p>
		<ul>
		    <li><a href="https://fonts.google.com/"><strong>Google Fonts</strong></a></li>
		    <li><a href="https://typekit.com/"><strong>Adobe Typekit</strong></a></li>
		    <li><a href="https://www.fontsquirrel.com/"><strong>Font Squirrel</strong></a></li>
		    <li>Plenty more available online...</li>
		</ul>
		<h2>Third Party Font Server</h2>
		<p>Browse the font server site, select the fonts you like and they wil provide you with code for a&nbsp;<strong>&lt;link /&gt;</strong>&nbsp;tag to add to your HTML. You can then use the font in your CSS.</p>
		<p><strong>&lt;!-- add the link tag to the HTML --&gt;</strong></p>
		<p><strong>&lt;link href="https://fonts.googleapis.com/css?family=Bungee" rel="stylesheet" /&gt;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </strong></p>
		<p><strong>&nbsp;</strong></p>
		<p><strong>/* use the font in the CSS */</strong></p>
		<p><strong>selector{</strong></p>
		<p><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; font-family: 'Bungee', cursive;</strong></p>
		<p><strong>}</strong></p>
		<p>No longer stuck with 'Arial', 'Helvetica', 'Georgia' and the rest.</p>
		<h2>Serve Fonts From Your Website</h2>
		<p>If the font(s) are copyright free, or if you have license to distribute a font, you can serve them yourself using the CSS&nbsp;<a href="https://developer.mozilla.org/en-US/docs/Web/CSS/@font-face"><strong>@font-face</strong></a>&nbsp;directive.</p>
		<p>Different client systems will need fonts in varying formats, so if you are distributing the font yourself, be sure to have the font available in most common formats.</p>
		<ul>
		    <li>Obtain the font(s) you wish to use. You must either have license to distribute the font or the font must be copyright free.</li>
		    <li>Upload your font(s) to a&nbsp;<a href="https://www.fontsquirrel.com/tools/webfont-generator"><strong>Font Generator</strong></a>&nbsp;to obtain a font kit including various formats for the font(s)</li>
		    <li>Uncompress the font kit and locate it somewhere with your website files</li>
		    <li>Use&nbsp;<a href="https://developer.mozilla.org/en-US/docs/Web/CSS/@font-face"><strong>@font-face</strong></a>&nbsp;to load the fonts. The font-kit generated by Squirrel Font will include some same CSS to help you with the sometimes volumous coding</li>
		    <li>Apply the new font in CSS</li>
		</ul>
		<p><strong>/* load the font in CSS */</strong></p>
		<p><strong>@font-face {</strong></p>
		<p><strong>&nbsp;&nbsp;&nbsp; font-family: 'alex_brushregular';</strong></p>
		<p><strong>&nbsp;&nbsp;&nbsp; src: url('/fonts/alexbrush-regular-webfont.woff2') format('woff2'),</strong></p>
		<p><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; url('/fonts/alexbrush-regular-webfont.woff') format('woff'), </strong></p>
		<p><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;url('/fonts/alexbrush-regular-webfont.ttf') format('tff');</strong></p>
		<p><strong>}</strong></p>
		<p><strong>&nbsp;</strong></p>
		<p><strong>/* use the font in CSS */</strong></p>
		<p><strong>selector{&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </strong></p>
		<p><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; font: bold 20px alex_brushregular ;</strong></p>
		<p><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; color:#555;</strong></p>
		<p><strong>}</strong></p>
		<p><strong>Don't get carried away with wild font choices. Some fonts have very poor readability, reducing accessibility.</strong></p>
		<h2>CSS Measurements</h2>
		<p>In CSS, there are a number of measurement values that can be used in declarations.</p>
		<h3>Size measurements</h3>
		<ul>
		    <li><strong>px</strong>&nbsp;- Pixels is one of the most common measuring types. It is specific to computers, as it renders based on the pixel-display of all monitors. Great for specific measurements on boxes and borders, but for fonts, it can lead to difficulty as some browsers don't allow scaling and font can end up too small</li>
		    <li><strong>%</strong>&nbsp;- Percentage measurements are also very common.</li>
		    <li><strong>em</strong>&nbsp;- A relative measurement of the letter "m" in the chosen font. This is a popular one for spacing around text, as it inherits the font dimensions</li>
		    <li><strong>rem</strong>&nbsp;- Similar to&nbsp;<strong>em</strong>, this will inherit only the Root value, helpful for avoiding 'compound inheritance' values</li>
		    <li><strong>pt</strong>&nbsp;- Points is an aold system related to type-setting that had a standard size for points. This is a relative size based on the users' system</li>
		    <li><strong>pc</strong>&nbsp;- Picas is a very old system that was frequently related to typewritten documents. Rarely used.</li>
		    <li><strong>ex</strong>&nbsp;- Similar to&nbsp;<strong>em</strong>, this is a relative measurement of the letter "x". However, it is rarely used, and not fully supported</li>
		    <li><strong>vh, vw, vmin, vmax</strong>&nbsp;- size relative to viewport widths and heights. very useful for scaling, though may not enjoy full support yet</li>
		    <li><strong>named</strong>&nbsp;- This refers to fonts and a few other elements. The named sizes are xx-small, x-small, small, medium, large, x-large, xx-large. They are relative to the browsers base font size</li>
		</ul>
		<h2>Color Measurement</h2>
		<p>Colors can be specified in a number of ways, corresponding to the system that your organization or visual element requires. Almost all color systems use a method for expressing a combination of the three color spaces used for displaying colors on computer monitors: Red Green and Blue.</p>
		<ul>
		    <li><strong>Hex:&nbsp;#003366</strong>&nbsp;- One of the most common systems, it combines 2 digits each for Red Green and Blue. Each hex pair stand stands for digits between 00 and FF in hexadecimal</li>
		    <li><strong>Compact Hex:&nbsp;#f30</strong>&nbsp;- This is almost identical to the Hex version, except that when three numbers are used, most browsers will just double-up each digit. So,&nbsp;<strong>#f30</strong>&nbsp;will become&nbsp;<strong>#ff3300</strong></li>
		    <li><strong>Named:&nbsp;cornflowerblue</strong>&nbsp;- Although the official W3C specification only lists 16 named colors, almost every browser supports the various&nbsp;<a href="http://www.google.ca/search?q=css+named+colors"><strong>named colors</strong></a></li>
		    <li><strong>RGB:&nbsp;rgb(255, 0, 255)</strong>&nbsp;- This allows the user to specify the same thing as Hex, but in Decimal format</li>
		    <li><strong>RGB %:&nbsp;rgb(100%, 0%, 50%)</strong>&nbsp;- Almost identical to RGB, but with percentages of each color space instead</li>
		</ul>
		<h2>Compact CSS Code</h2>
		<p>When building your CSS rules, there are some easy ways to compact your code, reducing code bloat and filesize.</p>
		<h2>Grouping selectors</h2>
		<ul>
		    <li>If you would like to apply the same style to a multitude of different selectors, you can group them with the comma</li>
		    <li><strong>h1, h2, h3, h4, h5 { color: red; }</strong></li>
		    <li>This can be done with Elements, classes and IDs</li>
		    <li>Specific rules for H3 (for example) can come later</li>
		</ul>
		<h2>Grouping comes to Classes</h2>
		<ul>
		    <li>As well as grouping Elements, you can also group classes</li>
		    <li>Define several classes:&nbsp;<strong>.cool{ color:red; } .wicked { border:1px solid black; }</strong></li>
		    <li>Assign several classes at once:&nbsp;<strong>&lt;p class="cool wicked"&gt;</strong>&nbsp;will select both the&nbsp;<strong>cool</strong>&nbsp;and&nbsp;<strong>wicked</strong>&nbsp;classes</li>
		    <li>The order of the attribute values is irrelevant</li>
		    <li>Case is important! Remember to use a single rule for CSS naming and stick with it</li>
		</ul>
		<h2>Rule Compacting</h2>
		<p>There are a lot of rules that will accept a compacted ruleset:</p>
		<ul>
		    <li><a href="https://developer.mozilla.org/en/docs/Web/CSS/margin"><strong>margin</strong></a><strong>: top right bottom left;</strong></li>
		    <li><a href="https://developer.mozilla.org/en/docs/Web/CSS/padding"><strong>padding</strong></a><strong>: top right bottom left;</strong></li>
		    <li><a href="https://developer.mozilla.org/en/docs/Web/CSS/border"><strong>border</strong></a><strong>: width style color;</strong></li>
		    <li><a href="https://developer.mozilla.org/en/docs/Web/CSS/font"><strong>font</strong></a><strong>: font-style font-variant font-weight font-size/line-height font-family;</strong></li>
		    <li><a href="https://developer.mozilla.org/en-US/docs/Web/CSS/background"><strong>background</strong></a><strong>: color image position repeat size attachment;</strong></li>
		</ul>
		<p>Box model properties support 1, 2, 3 and 4 values. For example:</p>
		<ul>
		    <li><strong>border-width:10px;</strong></li>
		    <ul>
		        <li>all four borders are 10px</li>
		    </ul>
		    <li><strong>border-width:10px 20px;</strong></li>
		    <ul>
		        <li>top and bottom borders are 10px</li>
		        <li>left and right borders are 20px</li>
		    </ul>
		    <li><strong>border-width:10px 20px 30px;</strong></li>
		    <ul>
		        <li>top border is 10px</li>
		        <li>left and right borders are 20px</li>
		        <li>bottom border is 30px</li>
		    </ul>
		    <li><strong>border-width:10px 20px 30px 40px;</strong></li>
		    <ul>
		        <li>top border is 10px</li>
		        <li>right border is 20px</li>
		        <li>bottom border is 30px</li>
		        <li>left border is 40px</li>
		    </ul>
		</ul>
		<p>Note you do not need to specify values for all fields in a compact rule. Just keep the space delimited list in the correct order. For example, you could specify several font values all at once:
		    <br /> <strong>font: italic small-caps bold 1.3em "helvetica", sans-serif;</strong>&nbsp;
		    <br /> or, specify only a select couple.
		    <br /> <strong>font: 1.3em "helvetica", sans-serif;</strong></p>
		<h2>CSS Selectors</h2>
		<p>There are several&nbsp;<a href="http://css.maxdesign.com.au/selectutorial/"><strong>advanced CSS selector techniques</strong></a>&nbsp;that provide plenty of options for the application of style.</p>
		<p><strong>Universal Selector</strong></p>
		<ul>
		    <li>This is a fairly widely supported selector: the asterisk&nbsp;<strong>*</strong></li>
		    <li>Use it to specify a global rule</li>
		    <li><strong>* { color: red; }</strong>&nbsp;will make all font color red on your page</li>
		    <li>The universal selector can be very powerful, as it can command a lot of changes to your styles,</li>
		</ul>
		<h2>Pseudo-classes</h2>
		<p>A Pseudo-class is a selector that allows you to reference a specific action or attribute of an element. This is most often used when specifying&nbsp;<strong>a</strong>&nbsp;attributes, such as&nbsp;<strong>:visited</strong>&nbsp;and&nbsp;<strong>:link</strong>.</p>
		<p>There are other uses for pseudo elements, that will allow for greater detail in styling content, such as&nbsp;<strong>:first-letter</strong>&nbsp;and&nbsp;<strong>:first-line</strong>. These allow the browser to apply a style based on an unselected, but displayed element.</p>
		<p><em>Best part:</em>&nbsp;No&nbsp;<strong>span</strong>&nbsp;or&nbsp;<strong>div</strong>&nbsp;required to access these pseudo-elements.</p>
		<ul>
		    <li>Within&nbsp;<strong>a</strong>&nbsp;pseudo-elements in particular, it's important to follow a certain order:</li>
		    <ul>
		        <li><strong>a:link</strong></li>
		        <li><strong>a:visited</strong></li>
		        <li><strong>a:hover</strong></li>
		        <li><strong>a:active</strong></li>
		    </ul>
		</ul>
		<p>Easy mnemonic: LVHA -&nbsp;<strong>L</strong>o<strong>V</strong>e -&nbsp;<strong>HA</strong>te. Because of the way that CSS applies rules, it looks at the LAST rule for a given element and applies more weight to it. For example, if you are hovering over a link, you don't want to see the link state</p>
		<ul>
		    <li>There are several additional&nbsp;<a href="http://css.maxdesign.com.au/selectutorial/selectors_pseudo_class.htm"><strong>pseudo-classes</strong></a>&nbsp;and&nbsp;<a href="http://css.maxdesign.com.au/selectutorial/selectors_pseudo_element.htm"><strong>pseudo-elements</strong></a></li>
		    <ul>
		        <li><strong>selector:before, selector:after</strong>&nbsp;- add text content before or after the selector's content</li>
		        <li><strong>selector:first-line, selector:first-letter</strong>&nbsp;- style the first line or letter of the selector</li>
		        <li><strong>selector:first-of-type</strong>,&nbsp;<strong>selector:last-of-type</strong>&nbsp;- style the first or last tag of the selector type</li>
		        <li><strong>selector:nth-of-type(n)</strong>&nbsp;- select the nth() tag of the same type as selector</li>
		        <li><strong>selector:nth-child(n)</strong>&nbsp;- select the nth() child</li>
		        <li><strong>selector:nth-child(2n)</strong>&nbsp;- select every even numbered child</li>
		        <li><strong>selector:nth-child(2n+1)</strong>&nbsp;- select every odd numbered child</li>
		    </ul>
		</ul>
		<h2>Descendant Selectors</h2>
		<ul>
		    <li>Separated by a space, the last element is the one being styled</li>
		    <li><strong>h1 em</strong>&nbsp;will apply rules to all em's within an h1</li>
		    <li>You can have as many as you want:&nbsp;<strong>ul ol ul li</strong></li>
		    <li>Great for specifying different styles when they apply only in certain areas</li>
		    <li><strong>#nav a { ... }</strong>&nbsp;will only apply these rules to Anchors within the div called nav</li>
		    <li>Degree of separation can be infinite, so be careful</li>
		    <li><strong>p em</strong>&nbsp;will match ANY em that descends from a paragraph, no matter how nested</li>
		</ul>
		<h2>Child Selectors</h2>
		<ul>
		    <li>Uses the &gt; combinator to specify children</li>
		    <li>Will select an element that is directly descended from another element</li>
		    <li><strong>p &gt; strong</strong>&nbsp;will only select a strong tag that is inside a paragraph</li>
		    <li>Will not select a strong tag embedded in any other tag (even if it is within a paragraph)</li>
		</ul>
		<h2>Adjacent Sibling Selectors</h2>
		<ul>
		    <li>The + combinator specifies the first sibling tag following the root</li>
		    <li>It will not include the root for styling</li>
		    <li><strong>div + h2</strong>&nbsp;will select the first sibling h2 following a div tag</li>
		</ul>
		<h2>General Sibling Selectors</h2>
		<ul>
		    <li>The ~ combinator specifies all siblings tags following the root</li>
		    <li>It will not select sibling tags that precede the root, nor will it include the root</li>
		    <li><strong>h1 ~ h2</strong>&nbsp;will select all sibling h2 tags that follow an h1</li>
		</ul>
		<h2>Attribute Selectors</h2>
		<ul>
		    <li>You can also select elements by what the element contains</li>
		    <li>The method is:&nbsp;<strong>element[attribute=value]</strong></li>
		    <li>If you specify an attribute with no value, you will match any element that simply has the attribute present (no matter what it's value is)</li>
		    <li><strong>p[align] {color: red;}</strong>&nbsp;will turn red any paragraph that contains an align attribute</li>
		    <li>Similarly,&nbsp;<strong>img[alt] {border: 1pt red solid; }</strong>&nbsp;will draw a red line around all images with an alt attribute</li>
		    <li>You can further direct the attribute selector to find content that is at the beginning (using the carat: ^), somewhere inside (using the asterisk: *) or end of a value (using the dollar sign: $)</li>
		    <li>Attribute selector examples:</li>
		    <ul>
		        <li><strong>img[alt]</strong>&nbsp;- select all img tags that have alt attributes</li>
		        <li><strong>img[src="images/pic.jpg"]</strong>&nbsp;- select img tags whose src is 'images/pic.jpg'</li>
		        <li><strong>img[src^="gallery/"]</strong>&nbsp;- select all img tags whose src BEGINS with 'gallery/'</li>
		        <li><strong>img[src*="logo"]</strong>&nbsp;- select all img tags whose src CONTAINS 'logo'</li>
		        <li><strong>img[src$=".png"]</strong>&nbsp;- select all img tags whose src ENDS with '.png'</li>
		    </ul>
		</ul>
		<h2>Rule Order &amp; Specificity</h2>
		<p>When a style declaration is found to be in conflict with a previously declared style, there is a method for determining which one will win out. The process is built into every web browser, and almost all of them calculate the values identically (for once!).</p>
		<p>Here is how the W3C defines the process by which style order is determined:</p>
		<ul>
		    <li><strong>Discover all declarations.</strong>&nbsp;Find all declarations that apply to the element and property in question, for the target media type. Declarations apply if the associated selector matches the element in question.</li>
		    <li><strong>Sheet Order.</strong>&nbsp;The primary sort of the declarations is by weight and origin: for normal declarations, author style sheets override user style sheets which override the default style sheet.</li>
		    <ul>
		        <li><em>Note:</em>&nbsp;For "!important" declarations, user style sheets override author style sheets which override the default style sheet. "!important" declaration override normal declarations. An imported style sheet has the same origin as the style sheet that imported it.</li>
		    </ul>
		    <li><strong>Specificity:</strong>&nbsp;The secondary sort is by specificity of selector: more specific selectors will override more general ones. Pseudo-elements and pseudo-classes are counted as normal elements and classes, respectively.</li>
		    <li><strong>Sort by Order:</strong>&nbsp;Finally, sort by order specified: if two rules have the same weight, origin and specificity, the latter specified wins. Rules in imported style sheets are considered to be before any rules in the style sheet itself.</li>
		</ul>
		<p>All of the rules are pretty straightforward, except for Specificity, which bears some explanation.</p>
		<p><strong>Specificity</strong>&nbsp;is a method for determining what rules are applied when a conflict between two selectors occurs. Through a method of adding values when certain elements and selectors are present, a specificity number can be applied to any CSS rule. The one with highest specificity wins and the associated rule is applied to the element(s) in question.</p>
		<h2>Ruleset for Specificity</h2>
		<p>Style sheets can also override conflicting style sheets based on their level of specificity, where a more specific style will always win out over a less specific one. It is simply a counting game to calculate the specificity of a selector.</p>
		<ol>
		    <li>Count the number of IDs in the selector.</li>
		    <li>Count the number of CLASS, pseudoclass, and attribute selectors.</li>
		    <li>Count the number of HTML tag names in the selector.</li>
		</ol>
		<p>Next, write the three numbers in exact order with no spaces or commas to obtain a three digit number. (Note, you may need to convert the numbers to a larger base to end up with three digits.) The final list of numbers corresponding to selectors will easily determine specificity with the higher numbers winning out over lower numbers. Following is a list of selectors sorted by specificity:</p>
		<ul>
		    <li>#id1
		        <br /> /*&nbsp;<strong>id</strong>=1&nbsp;<strong>class</strong>=0&nbsp;<strong>HTML</strong>=0 --&gt; specificity = 100 */</li>
		    <li>UL UL LI.red
		        <br /> /*&nbsp;<strong>id</strong>=0&nbsp;<strong>class</strong>=1&nbsp;<strong>HTML</strong>=3 --&gt; specificity = 013 */</li>
		    <li>LI.red
		        <br /> /*&nbsp;<strong>id</strong>=0&nbsp;<strong>class</strong>=1&nbsp;<strong>HTML</strong>=1 --&gt; specificity = 011 */</li>
		    <li>LI
		        <br /> /*&nbsp;<strong>id</strong>=0&nbsp;<strong>class</strong>=0&nbsp;<strong>HTML</strong>=1 --&gt; specificity = 001 */</li>
		</ul>
		<h2>!important rule</h2>
		<ul>
		    <li>This declaration, when added to a rule, will override almost all other declarations, with no respect for specificity.</li>
		    <li>It indicates that this rule should take over any previous rules that might govern a specific element.</li>
		    <li>Example&nbsp;<strong>.selector{ color:blue !important; }</strong></li>
		    <li>This rule can cause havoc if overused, as it will overrule any other declaration with the same selector.&nbsp;<strong>Be careful with&nbsp;!important</strong></li>
		</ul>
		<h2>To Do</h2>
		<ul>
		    <li>Download, review, and complete the homework assignment from&nbsp;<a href="https://learn.bcit.ca/"><strong>D2L</strong></a></li>
		    <li>Find a partner for your homework.</li>
		    <li>Practice using&nbsp;<a href="http://bcitcomp.ca/1950/lecture/03/#advanced_selectors"><strong>advanced CSS selectors</strong></a></li>
		</ul>

<?php include './templates/footer.php'; ?>