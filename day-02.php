<?php 
    $pgName = 'Lessons - Day 02';
    include './templates/header.php';
?>
	<main class="col-1">
	    <div class="section-11">Day 02</div>
		<h2>Agenda</h2>
		<ul>
		    <li><strong>Charsets</strong></li>
		    <li><strong>HTML</strong>,&nbsp;<strong>XHTML</strong>,&nbsp;<strong>HTML5</strong></li>
		    <li><strong>Semantics</strong></li>
		    <li><strong>Forms</strong>,&nbsp;<strong>SVG</strong>,&nbsp;<strong>Multimedia</strong></li>
		    <li><strong>To Do</strong></li>
		</ul>
		<h2>Character Sets And Languages</h2>
		<p>The W3C recommends the&nbsp;<a href="https://www.w3.org/International/questions/qa-choosing-encodings"><strong>UTF-8 charset</strong></a>&nbsp;for web development. It includes an impressive array of languages and special characters, and is well supported in common devices.</p>
		<h2>Assign Character Set</h2>
		<p>If it is not specified, a web browser will choose the character set it thinks is most appropriate, but it is a better practice for the developer to ensure the correct character set by applying the&nbsp;<strong>meta</strong>&nbsp;tag to the&nbsp;<strong>head</strong>&nbsp;section of every HTML page:</p>
		<p><strong>&lt;meta charset="utf-8" /&gt;</strong></p>
		<ul>
		    <li>Write all your text-based code (<strong>.html</strong>,&nbsp;<strong>.css</strong>,&nbsp;<strong>.js</strong>,&nbsp;<strong>.php</strong>, etc) in UTF-8. At development time, ensure your text editor is saving files in this format. This setting is usually found in the application's Preferences menu option.</li>
		    <li>Unless your audience includes very old browsers, you can&nbsp;<a href="https://tools.oratory.com/altcodes.html"><strong>code special characters</strong></a>&nbsp;directly into the HTML (you dont need to use HTML entities for most special characters).</li>
		    <li>You cannot copy-paste rich text (such as Microsoft Word, or WordPad) into your HTML. The rich text formatting may result in an unreadable mess.</li>
		    <li>An HTTP server can over-ride your charset preferences when it generates the HTTP header. Details on how to control this will be discussed later in this course.</li>
		</ul>
		<h2>HTML&nbsp;lang&nbsp;Attribute</h2>
		<p>Use the&nbsp;<strong>lang=""</strong>&nbsp;attribute to&nbsp;<a href="https://www.w3.org/International/questions/qa-html-language-declarations"><strong>declare the language in HTML</strong></a>. This is usually applied to the&nbsp;<strong>html</strong>&nbsp;element. Assigning the appropriate language code will apply to all contained content, unless over-ridden with another&nbsp;<strong>lang=""</strong>.</p>
		<p>Use the language abbreviations from the&nbsp;<a href="http://www.loc.gov/standards/iso639-2/php/code_list.php"><strong>standard ISO 639-1</strong></a>&nbsp;code set (don't use ISO 639-2).</p>
		<h2>HTML</h2>
		<p>What started as a language defined by&nbsp;<a href="http://www.w3.org/MarkUp/SGML/"><strong>SGML</strong></a>&nbsp;<em>(Standard Generalized Markup Language)</em>, HTML is used to mark up billions of pages, making up the bulk of the web.</p>
		<ul>
		    <li>Late 1991, Tim Berners-Lee releases the first iteration of what would become HTML 2.0 (there was no real 1.0+)</li>
		    <li>HTML was a language created at the dawn of the Web, using SGML (Standard Generalized Markup Language) as a template</li>
		    <li>Over the next decade, various additions, improvements and changes are introduced</li>
		    <li><a href="https://www.w3.org/TR/1999/REC-html401-19991224/"><strong>HTML 4.01</strong></a>&nbsp;released in December 1999</li>
		    <li>Initially used for documents and a place for the technically inclined, the web did not have the international pervasiveness it does today</li>
		    <li>Most developers were new to the language and there were no real classes in it</li>
		    <li>People had to learn as they went along</li>
		    <li>A lot of early sites are poorly designed</li>
		</ul>
		<h2>HTML 4.01 template</h2>
		<p>The problem with the state of HTML then was its reputation as a loose language. Poorly structured code would be rendered differently across user agents, leading to forked code and less predictable results.</p>
		<h2>XHTML</h2>
		<p>The&nbsp;<a href="https://www.w3.org/TR/2002/REC-xhtml1-20020801/"><strong>XHTML specification</strong></a>&nbsp;was the result of rewriting&nbsp;<a href="https://www.w3.org/TR/1999/REC-html401-19991224/"><strong>HTML 4.01</strong></a>&nbsp;using the ruleset derived from&nbsp;<a href="https://www.w3.org/XML/"><strong>XML</strong></a></p>
		<ul>
		    <li>HTML 4.01 + XML = XHTML 1.0</li>
		    <li>X = eXtensible</li>
		    <li>X = XML related</li>
		    <li>Better, more predictable coding patterns.</li>
		    <li>Verifiable or "well-formed" code can be produced.</li>
		    <li>Forces a higher standard of HTML.</li>
		    <li>Predictable behavior across user agents.</li>
		    <li>Porting to HTML5 is easy (if you also observe&nbsp;<strong>semantic</strong>&nbsp;guidelines).</li>
		</ul>
		<h3>XHTML Rules:</h3>
		<ul>
		    <li>All elements must be properly nested</li>
		    <ul>
		        <li>This is not valid:&nbsp;<strong>&lt;p&gt;&lt;b&gt;Bolded Text&lt;/p&gt;&lt;/b&gt;</strong></li>
		        <li>This can be a problem with things like Lists &lt;ol&gt; and &lt;ul&gt;.</li>
		        <li>Especially when closing the List Item &lt;li&gt; tag that contains the &lt;ul&gt; or &lt;ol&gt; tag.</li>
		    </ul>
		    <li>All tags must close</li>
		    <ul>
		        <li>Example:&nbsp;<strong>&lt;p&gt;Some text here&lt;/p&gt;</strong></li>
		        <li>Empty Elements are closed as well:&nbsp;<strong>&lt;br /&gt;</strong>&nbsp;or&nbsp;<strong>&lt;img src="#" /&gt;</strong></li>
		        <li>An extra space is required before the slash to work with all browsers.</li>
		    </ul>
		    <li>All tag names must be in lower case</li>
		    <ul>
		        <li><strong>&lt;Img Src="some_image.gif"&gt;</strong>&nbsp;is not valid</li>
		    </ul>
		    <li>Attribute names are always in lower case</li>
		    <ul>
		        <li><strong>&lt;p ALIGN="center"&gt;</strong>&nbsp;should be&nbsp;<strong>&lt;p align="center"&gt;</strong></li>
		    </ul>
		    <li>All attributes must be quoted</li>
		    <ul>
		        <li><strong>&lt;body bgcolor=black&gt;</strong>&nbsp;will not work, you need:&nbsp;<strong>&lt;body bgcolor="black"&gt;</strong></li>
		    </ul>
		    <li>Attributes cannot be minimized</li>
		    <ul>
		        <li><strong>&lt;input type="checkbox" checked&gt;</strong>&nbsp;cannot be used. The valid code is:&nbsp;<strong>&lt;input type="checkbox" checked="checked" /&gt;</strong></li>
		    </ul>
		    <li>Name Attribute is no longer used (except with forms). Replace "name" with "id".</li>
		    <ul>
		        <li><strong>&lt;img src="picture.gif" name="myimage" /&gt;</strong>&nbsp;will not validate. Use&nbsp;<strong>id="myimage"</strong>&nbsp;instead.</li>
		    </ul>
		    <li>Mandatory Elements: Every XHTML document&nbsp;<strong>must have</strong>&nbsp;these elements:</li>
		    <ul>
		        <li><strong>&lt;html&gt;</strong></li>
		        <li><strong>&lt;head&gt;</strong></li>
		        <li><strong>&lt;title&gt;</strong></li>
		        <li><strong>&lt;body&gt;</strong></li>
		        <li>The&nbsp;<strong>&lt;!DOCTYPE&gt;</strong>&nbsp;declaration&nbsp;<em>must</em>&nbsp;be there, but it is&nbsp;<em>part</em>&nbsp;of the document itself rather than an element of the document.</li>
		    </ul>
		    <li>Documents must be well-formed</li>
		    <ul>
		        <li>The document must conform to all of the above rules</li>
		    </ul>
		    <li>Optional XML declaration</li>
		    <ul>
		        <li>Not&nbsp;<em>required</em>, but good practice:</li>
		        <li><strong>&lt;?xml version="1.0" encoding="ISO-8859-1"?&gt;</strong></li>
		    </ul>
		    <li>Optional Element: An XHTML document should also declare the type and character encoding in the head section to ensure the server sends the correct content-type header:&nbsp;
		        <br /> <strong>&lt;meta http-equiv="Content-Type" content="text/html" charset="UTF-8"&gt;</strong></li>
		</ul>
		<h3>XHTML 1.0 template</h3>
		<h2>HTML5</h2>
		<p>As of October 28, 2014,&nbsp;<a href="http://www.w3.org/TR/html5/"><strong>HTML5 is the official W3C recommendation</strong></a></p>
		<p>HTML5 is more evolutionary then revolutionary. The bulk of previous HTML elements and attributes are maintained, with a few deprecations, and several additions.</p>
		<p>Significant features include:</p>
		<ul>
		    <li>Ultra simple Doctype:&nbsp;<strong>&lt;!DOCTYPE html&gt;</strong></li>
		    <li>Specifies how browsers should behave with imperfect code</li>
		    <li>Ability to embed&nbsp;<a href="https://www.w3.org/XML/"><strong>XML</strong></a>,&nbsp;<a href="http://www.w3.org/Math/"><strong>MathML</strong></a>&nbsp;or&nbsp;<a href="http://www.w3.org/Graphics/SVG/"><strong>SVG</strong></a>&nbsp;markup.</li>
		    <li>Standardized Javascript API increases client side script compatibility across browsers</li>
		    <li>Backwards compatible - older versions of HTML can effectively be updated by simply changing the doctype to HTML5</li>
		    <li>Guiding principles: Enhance semantic coding, Support existing content, Pave the cowpaths</li>
		</ul>
		<h3>HTML 5 template</h3>
		<h3>Paving the Cowpaths</h3>
		<p>Common developer practices have been simplified</p>
		<ul>
		    <li>Finally a DOCTYPE we can all remember:
		        <br /> <strong>&lt;!DOCTYPE html&gt;</strong></li>
		    <li>Declaring the character encoding is easier:
		        <br /> <strong>&lt;meta charset="utf-8"&gt;</strong></li>
		    <li>When linking to external stylesheets the&nbsp;<strong>type</strong>&nbsp;attribute is not required:
		        <br /> <strong>&lt;link rel="stylesheet" href="style.css" /&gt;</strong></li>
		    <li>When embedding CSS the&nbsp;<strong>type</strong>&nbsp;attribute is not required:
		        <br /> <strong>&lt;style&gt;&lt;/style&gt;</strong></li>
		    <li>Including javascripts is simplified as well (<strong>type</strong>&nbsp;attribute is not required)
		        <br /> <strong>&lt;script src="javascripts.js"&gt;&lt;/script&gt;</strong></li>
		</ul>
		<h3>HTML5: Enhanced Semantic Coding</h3>
		<p>It is crucial for all HTML content to be&nbsp;<a href="https://en.wikipedia.org/wiki/Semantic_HTML"><strong>semantically marked up</strong></a>. This is how browsers, search engines, and screen readers make sense of online content.</p>
		<p>HTML5 provides more than just adjustments to the markup, there are new, powerfully semantic elements:</p>
		<ul>
		    <li><a href="https://developer.mozilla.org/en-US/docs/Web/HTML/Element/section"><strong>&lt;section&gt;</strong></a>&nbsp;is a tag representing a document or application section. in general, if you are planning to use a heading, start a new&nbsp;<strong>section</strong>. a&nbsp;<strong>section</strong>&nbsp;must contain a heading, and may contain&nbsp;<strong>article</strong>(s), possibly&nbsp;<strong>aside</strong>s or even sub-<strong>section</strong>s</li>
		    <li><a href="https://developer.mozilla.org/en-US/docs/Web/HTML/Element/article"><strong>&lt;article&gt;</strong></a>&nbsp;is an independent piece of content in a document (it could stand alone if removed from the page). an&nbsp;<strong>article</strong>&nbsp;might be a blog post, forum thread, news story, collection of product information, etc</li>
		    <li><a href="https://developer.mozilla.org/en-US/docs/Web/HTML/Element/aside"><strong>&lt;aside&gt;</strong></a>&nbsp;is for content "only slightly" related to the main page content.&nbsp;<strong>aside</strong>s fill the role of a sidebar. if the content could be removed without reducing the meaning of the main content of the HTML document, then use an&nbsp;<strong>aside</strong></li>
		    <li><a href="https://developer.mozilla.org/en-US/docs/Web/HTML/Element/header"><strong>&lt;header&gt;</strong></a>&nbsp;and&nbsp;<a href="https://developer.mozilla.org/en-US/docs/Web/HTML/Element/footer"><strong>&lt;footer&gt;</strong></a>&nbsp;are for the header or footer of a page</li>
		    <li><a href="https://developer.mozilla.org/en-US/docs/Web/HTML/Element/nav"><strong>&lt;nav&gt;</strong></a>&nbsp;represents an area for navigation</li>
		    <li><a href="https://developer.mozilla.org/en-US/docs/Web/HTML/Element/main"><strong>&lt;main&gt;</strong></a>&nbsp;used for containing content that is focused on the central topic of the page. this content is usually unique to the page, and not shared by other pages (main will usually NOT contain navigations, footers, sidebars, etc)</li>
		    <li><a href="https://developer.mozilla.org/en-US/docs/Web/HTML/Element/figure"><strong>&lt;figure&gt;</strong></a>&nbsp;will likely contain an&nbsp;<strong>img</strong>&nbsp;or graphic. self-contained content (could usually be removed from the page and stand on its own). allows for captioning of embedded content like an image graphic or video. if you want to associate a caption, add a&nbsp;<strong>figcaption</strong>&nbsp;child</li>
		    <li><a href="https://developer.mozilla.org/en-US/docs/Web/HTML/Element/figcaption"><strong>&lt;figcaption&gt;</strong></a>&nbsp;used as first or last child of&nbsp;<strong>figure</strong>&nbsp;to define the caption or legend for a figure</li>
		</ul>
		<p>These represent some big changes in HTML, allowing for more flexibility in coding and specifying content. Many of these will replace and reduce the need for many&nbsp;<strong>div</strong>&nbsp;tags. eg: instead of the typical&nbsp;<strong>&lt;div id="header"&gt;</strong>, use&nbsp;<strong>&lt;header&gt;</strong>.</p>
		<p>Having trouble deciding which tag to use for what content? Try this&nbsp;<a href="http://html5doctor.com/downloads/h5d-sectioning-flowchart.pdf"><strong>HTML5 flowchart</strong></a>.</p>
		<h3>HTML5 Semantic Alterations</h3>
		<p>HTML5 also brings a few notable semantic alterations to older tags:</p>
		<ul>
		    <li><a href="https://developer.mozilla.org/en-US/docs/Web/HTML/Element/a"><strong>&lt;a&gt;</strong></a>&nbsp;though still an inline tag, it is now ok to nest multiple block level tags (headings, paragraphs etc) inside an anchor tag</li>
		    <li><a href="https://developer.mozilla.org/en/docs/Web/HTML/Element/small"><strong>&lt;small&gt;</strong></a>&nbsp;no longer a 'physical' tag for smaller sized print, it now has semantic value: meaning 'small print', i.e. 'legalese'. the&nbsp;<strong>big</strong>&nbsp;element has been deprecated</li>
		    <li><a href="https://developer.mozilla.org/en-US/docs/Web/HTML/Element/b"><strong>&lt;b&gt;</strong></a>&nbsp;no longer means 'render bold'. now it means the text is 'stylisticly offset from the normal text', without conveying any extra importance. to convey extra importance, use&nbsp;<a href="https://developer.mozilla.org/en-US/docs/Web/HTML/Element/strong"><strong>&lt;strong&gt;</strong></a></li>
		    <li><a href="https://developer.mozilla.org/en-US/docs/Web/HTML/Element/i"><strong>&lt;i&gt;</strong></a>&nbsp;now means the text is 'in an alternate voice or mood', without conveying any extra emphasis. to convey extra emphasis, use&nbsp;<a href="https://developer.mozilla.org/en-US/docs/Web/HTML/Element/em"><strong>&lt;em&gt;</strong></a></li>
		    <li>Deprecated tags:&nbsp;<strong>&lt;big&gt;, &lt;font&gt;, &lt;strike&gt;</strong>, and a few more. Developers should use CSS instead of these deprecated tags.</li>
		    <li>Deprecated attributes:&nbsp;<strong>align, bgcolor, border, height, size, type, width</strong>&nbsp;and more. Developers should use CSS instead of these deprecated attributes.</li>
		</ul>
		<p><strong>HTML5 Content Models</strong></p>
		<p>Pre-HTML5, there were basically two categories of tags: inline and block. HTML5 intoduces a more nuanced set of categories that allow for greater semantic sectioning of content. The content model will help the browser to determine the semantics of your content.</p>
		<h2>Content Models</h2>
		<ul>
		    <li>text-level content: most inline tags</li>
		    <li>grouping content: most block tags</li>
		    <li>replaced content: all the form widgets and related tags</li>
		    <li>embedded content: video, audio, canvas</li>
		    <li>sectioning content: new structural, semantic options</li>
		</ul>
		<h2>Sectioning Content</h2>
		<p>The&nbsp;<a href="https://developer.mozilla.org/en-US/docs/Web/HTML/Element/section"><strong>&lt;section&gt;</strong></a>&nbsp;tag can be used to semantically group content. It can remove ambiguity when a page is being processed by the browser, a screen reader, or search engine.</p>
		<p>For example, imagine you have created the following code:</p>
		<p>Since content that follows a heading is presumed to be associated with that heading, the code above carries plenty of semantic value already. But, if the&nbsp;<strong>small</strong>&nbsp;tag's content is intended to apply to all cities, a browser has no way of knowing that. It will instead assume the&nbsp;<strong>small</strong>&nbsp;tag is associated with the preceding heading (<strong>&lt;h3&gt;Tokyo&lt;/h3&gt;</strong>)</p>
		<p>Use the&nbsp;<strong>section</strong>&nbsp;tag to explicitly demarcate the start and end of the related content:</p>
		<p>This new sectioning will inform the browser that the&nbsp;<strong>small</strong>&nbsp;is associated with the&nbsp;<strong>h1</strong></p>
		<p>In HTML5, each piece of sectioned content has its own self-contained outline. This means you wont need to worry as much about which level heading tag to use. You can use an&nbsp;<strong>h1</strong>&nbsp;inside a section and it will be treated as the heading of the section, and have lesser semantic impact than an&nbsp;<strong>h1</strong>&nbsp;that is at a higher level.</p>
		<h2>Forms</h2>
		<p>HTML 5 adds several new&nbsp;<a href="https://developer.mozilla.org/en-US/docs/Web/HTML/Element/input"><strong>form attributes</strong></a>&nbsp;that prove quite useful, even if some are as yet poorly supported.</p>
		<ul>
		    <li><strong>placeholder="value"</strong>: prepopulates field with data</li>
		    <li><strong>autofocus="autofocus"</strong>: sets the input to have cursor focus</li>
		    <li><strong>required="required"</strong>: ensures field is filled in before submission</li>
		    <li>There are also several new&nbsp;<strong>&lt;input&gt;</strong>&nbsp;type attribute variants:</li>
		    <ul>
		        <li><strong>type="email"</strong>: checkes for the pattern of emails</li>
		        <li><strong>type="url"</strong>: web addesses</li>
		        <li><strong>type="date"</strong>: calendar popup</li>
		        <li><strong>type="tel"</strong>: telephone numbers</li>
		        <li><strong>type="search"</strong>: formats text input as search input</li>
		        <li><strong>type="color"</strong>: color picker popup</li>
		        <li><strong>type="range"</strong>: sliding scales</li>
		        <li><strong>type="pattern"</strong>: regular expression pattern matching</li>
		    </ul>
		</ul>
		<h2>Scaleable Vector Graphics</h2>
		<p><a href="http://www.w3.org/Graphics/SVG/"><strong>Scaleable Vector Graphics (SVG)</strong></a>&nbsp;can be embedded into HTML5 documents. SVG are 100% scalable without the pixelated effect that scaled raster images can suffer from. SVG file data is stored as text, so they are much smaller in file size than a raster equivalent.</p>
		<p>You can use SVG graphics with the&nbsp;<strong>img</strong>&nbsp;tag, just as with raster graphics. You can also use .svg as a CSS&nbsp;<strong>background-image</strong>.</p>
		<p><strong>&lt;img src="images/logo.svg" alt="COMP 1950 logo" /&gt;</strong></p>
		<p>The&nbsp;<strong>png</strong>&nbsp;on the left is 26KB. The&nbsp;<strong>.svg</strong>&nbsp;on the right is only 4KB.</p>
		<p>Alternatively, you can use SVG code 'inline' with the&nbsp;<strong>svg</strong>&nbsp;tag. The advantage of doing this is it will result in one less request/response between the client and the server. The disadvantage to inline SVG is that it adds considerable clutter to your your&nbsp;<strong>.html</strong>&nbsp;code. Just copy the source code from your&nbsp;<strong>.svg</strong>&nbsp;file and paste it directly into your&nbsp;<strong>.html</strong>!</p>
		<p><strong>&lt;svg viewBox="0 0 55 28"&gt;</strong></p>
		<p><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;!-- svg code goes here... sometimes there is a LOT of code here! --&gt;</strong></p>
		<p><strong>&lt;/svg&gt;</strong></p>
		<h3>SVG Tools</h3>
		<p>Use an SVG application to help you create and manipulate your SVG code.</p>
		<ul>
		    <li><a href="http://www.adobe.com/ca/products/illustrator.html"><strong>Adobe Illustrator</strong></a></li>
		    <li><a href="https://inkscape.org/en/"><strong>Inkscape</strong></a>&nbsp;(Open source, Windows/Mac/Linux)</li>
		</ul>
		<h2>Multimedia</h2>
		<p>HTML5's more responsive multimedia features have made it easier to provide appropriately formatted video and audio to the client.</p>
		<h3>Audio</h3>
		<p>The&nbsp;<a href="https://developer.mozilla.org/en/docs/Web/HTML/Element/audio"><strong>audio</strong></a>&nbsp;element provides a way to offer many audio formats to the client, allowing the browser to choose the one most suitable.</p>
		<p>The most common audio formats for the web are:&nbsp;<strong>audio/mp3</strong>,&nbsp;<strong>audio/mpeg</strong>&nbsp;and&nbsp;<strong>audio/ogg</strong>.</p>
		<p><strong>Each audio tag may contain:</strong></p>
		<ul>
		    <li><strong>source</strong>&nbsp;tags as children of the&nbsp;<strong>audio</strong>&nbsp;tag, one for each audio format available. Each&nbsp;<strong>source</strong>&nbsp;must have a&nbsp;<strong>src</strong>&nbsp;(path to audio file) and&nbsp;<strong>type</strong>&nbsp;(audio file MIME type)</li>
		    <li><strong>controls="controls"</strong>&nbsp;give the user control over the audio *important for usability*</li>
		    <li><strong>loop="loop"</strong>&nbsp;loop audio playback</li>
		    <li><strong>preload="none"</strong>&nbsp;dont load the audio until the user clicks 'play',&nbsp;<strong>preload="metadata"</strong>&nbsp;preloads the clip duration statistic only,&nbsp;<strong>preload="auto"</strong>&nbsp;loads the audio clip to the client before they click 'play'</li>
		    <li><strong>autoplay="autoplay"</strong>&nbsp;begin playing audio as soon as page is loaded *NOT very user friendly*</li>
		    <li>you may also wish to include a direct link for your users to download the file</li>
		</ul>
		<p><strong>&lt;audio controls="controls"&gt;</strong></p>
		<p><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;source src="media/house-a-square.mpg" type="audio/mpeg" /&gt;</strong></p>
		<p><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;source src="media/house-a-square.mp3" type="audio/mp3" /&gt;</strong></p>
		<p><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;source src="media/house-a-square.ogg" type="audio/ogg" /&gt;</strong></p>
		<p><strong>&lt;/audio&gt;</strong></p>
		<p><a href="http://bcitcomp.ca/1950/media/house-a-square.mp3"><strong>Download the audio</strong></a></p>
		<h3>Video</h3>
		<p>The&nbsp;<a href="https://developer.mozilla.org/en/docs/Web/HTML/Element/video"><strong>video</strong></a>&nbsp;element provides a way to offer many video formats to the client, allowing the browser to choose the one most suitable.</p>
		<p>The most common video formats for the web are:&nbsp;<strong>video/mp4</strong>,&nbsp;<strong>video/ogg</strong>&nbsp;and&nbsp;<strong>video/webm</strong>.</p>
		<p><strong>Each video tag may contain:</strong></p>
		<ul>
		    <li><strong>source</strong>&nbsp;tags as children of the&nbsp;<strong>video</strong>&nbsp;tag, one for each video format available. Each&nbsp;<strong>source</strong>&nbsp;must have a&nbsp;<strong>src</strong>&nbsp;(path to video file) and&nbsp;<strong>type</strong>&nbsp;(video file MIME type)</li>
		    <li><strong>controls="controls"</strong>&nbsp;give the user control over the video playback *important for usability*</li>
		    <li><strong>width="250" height="100"</strong>&nbsp;set the size of the video (use CSS instead. absolute values only, no percentages)</li>
		    <li><strong>poster="image.jpg"</strong>&nbsp;display a static image when the video is not playing</li>
		    <li><strong>loop="loop"</strong>&nbsp;loop playback</li>
		    <li><strong>muted="muted"</strong>&nbsp;begin with audio silenced</li>
		    <li><strong>preload="none"</strong>&nbsp;dont load the video until the user clicks 'play',&nbsp;<strong>preload="metadata"</strong>&nbsp;preloads the clip duration statistic only,&nbsp;<strong>preload="auto"</strong>&nbsp;loads the clip to the client before they click 'play'</li>
		    <li><strong>autoplay="autoplay"</strong>&nbsp;begin playing video as soon as page is loaded *NOT very user friendly*</li>
		    <li>you may also wish to include a direct link for your users to download the file</li>
		</ul>
		<p><strong>&lt;video &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; preload="none" </strong></p>
		<p><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; controls="controls" </strong></p>
		<p><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; poster="media/poster-bear-in-water.jpg"&gt;</strong></p>
		<p><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </strong></p>
		<p><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;source src="media/bear-in-water.webm" type="video/webm" /&gt; </strong></p>
		<p><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;source src="media/bear-in-water.mp4" type="video/mp4" /&gt;</strong></p>
		<p><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;source src="media/bear-in-water.ogg" type="video/ogg" /&gt;</strong></p>
		<p><strong>&lt;/video&gt;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </strong></p>
		<p><a href="http://bcitcomp.ca/1950/media/bear-in-water.mp4"><strong>Download the video</strong></a></p>
		<h2>HTML5 Today</h2>
		<p>User agent browsers will have varying support for the HTML5 specification.</p>
		<ul>
		    <li><a href="https://caniuse.com/"><strong>caniuse.com</strong></a>&nbsp;is an excellent source for compatibility testing</li>
		    <li>Try the&nbsp;<a href="http://html5test.com/"><strong>HTML5Test</strong></a>&nbsp;to test a specific browser.</li>
		    <li>To ensure early versions of Internet Explorer will render HTML5 tags correctly, you can add the HTML5 shiv:</li>
		    <ul>
		        <li><strong>&lt;script&gt;document.createElement("article");&lt;/script&gt;</strong></li>
		        <li>This creates an element called&nbsp;<strong>&lt;article&gt;</strong>&nbsp;which the browser (IE, in this case) can understand and style appropriately</li>
		    </ul>
		    <li>Creating an entry for every element can get a bit heavy, so you can use the&nbsp;<a href="https://github.com/aFarkas/html5shiv"><strong>HTML5shiv</strong></a>&nbsp;script written by&nbsp;<a href="http://remysharp.com/"><strong>Remy Sharp</strong></a>. Insert a coded-comment that will apply the shiv ONLY with IE browsers earlier than version 9:</li>
		    <li><strong>&lt;!--[if lt IE 9]&gt;</strong></li>
		    <li><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"&gt;&lt;/script&gt;</strong></li>
		</ul>
		<p><strong>&lt;![endif]--&gt;</strong></p>
		<ul>
		    <li>Since HTML5 understands both HTML4 and XHTML tags, converting an older HTML file into HTML5 is simply a matter of updating the DOCTYPE and meta tag for charset.</li>
		</ul>
		<h2>To Do</h2>
		<ul>
		    <li>Download, review, and complete the homework assignment from&nbsp;<a href="https://learn.bcit.ca/"><strong>D2L</strong></a></li>
		    <li>Review the&nbsp;<a href="http://bcitcomp.ca/1950/lecture/02/#semantics"><strong>HTML5 semantic tags</strong></a>, know how and when to use them to maxmize the semantic strucure of your HTML</li>
		</ul>
<?php include './templates/footer.php'; ?>