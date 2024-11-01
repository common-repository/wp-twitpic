=== wp-twitpic ===
Contributors: Sachin Khosla
Donate link: http://www.digimantra.com/
Tags: twitter,twitpic,image,shortcode
Requires at least: 2.0.2
Tested up to: 2.8.4
Stable tag: 1.1

wp-twitpic inserts an image from twitpic.com into your blog post using the unique hash (id) provided by twitpic.

== Description ==

Twitter has come into almost every blog and so does the twitter related applications. I shared a twitpic API class on my blog recently and after that I have got many requests about a sharing the code which allows you to insert an image from the twitpic.com into the blog posts.
However instead of limiting it to my blog users, I thought its a better idea to share it with the community across the globe. I will be adding many more applications in this plugin pretty soon. Stay tuned for more.

You can change size, url, alignment etc. of the image. To get kickstart activate the plugin and use [twitpic id=hash].

== Installation ==

1. Download and unzip the file.
2. Upload the folder wp-twitpic using FTP program into 'wp-content/plugins/' folder.
3. Activate the plugin and enjoy.

== Usage ==
It is fairly simple to use wp-twitpic plugin. Make sure the plugin is activated on the plugin's page and use any of the following shortcode while writing your blog post to display image from the twitpic.
wp-twitpic uses the unique hash (id) provided by twitpic to display image in your post. This unique hash(id) can be found in the twitpic URL. For instance the link http://twitpic.com/d63jg has the hash(id) d63jg , which can be used in the following shortcodes.

If you want to insert images from twitsnaps, replace twitpic with twitsnaps in the following shortcode examples. The unique id for images can be found in the twitsnaps URL. For instance the links http://twitsnaps.com/full_photo.php?img_id=14624 has the id 14624 and can be used in the following shortcodes.


Display twitpic thumb image with twitpic url.
[twitpic id=d63jg]

Display a full size image
[twitpic id=d63jg size=full]

Specify the alignment of the image.In the following case the css class is also assigned as 'alignright'
[twitpic id=d63jg size=full align=right]

Override the default URL(should have http:// prefixed)
[twitpic id=d63jg size=full align=right myurl=http://www.digimantra.com]

Specify a different css class to the image
[twitpic id=d63jg class=border2]

Specify alt tag (note the quotes around the alt value, as it has white spaces in it)
[twitpic id=d63jg alt="my alt value"]

Specify an image without any URL
[twitpic id=d63jg url=0]

NOTE: You can use the above options with any combination. The only mandatory part is to specify an id, if it is not passed the image won't be able to render.
== Frequently Asked Questions ==
= The images are not getting rendered even if the plugin is activated ? =
Make sure you have inserted the shortcode properly. Start troubleshooting by inserting the most basic shortcode i.e. [twitpic id=hash]. If nothing works check if http://twitpic.com is not down.
= Can I put my URL across the image ? =
wp-twitpic has an option 'myurl' which overrides the twitpic.com url. But according to the twipic API notes, you need to backlink the image to twitpic page or atleast have an information around the image that the image is hosted on twitpic. So I would advice you if you override the image link with your URL please do not forget to add the credits.


== Screenshots ==
1. The image embeded within the post behaves just like a normal embeded image.

== Changelog ==
= 1.0 =
You can insert images from twitpic using the unique hash(id) provided by twitpic.com
= 1.1 =
Support to insert images from http://twitsnaps.com 
