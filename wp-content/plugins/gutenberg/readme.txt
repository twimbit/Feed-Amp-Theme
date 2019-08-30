=== Gutenberg ===
Contributors: matveb, joen, karmatosed
Requires at least: 5.1.0
Tested up to: 5.2
Stable tag: 6.3.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

The block editor was introduced in core WordPress with version 5.0. This beta plugin allows you to test bleeding-edge features around editing and customization projects before they land in future WordPress releases.

== Description ==

Gutenberg is more than an editor. While the editor is the focus right now, the project will ultimately impact the entire publishing experience including customization (the next focus area).

<a href="https://wordpress.org/gutenberg">Discover more about the project</a>.

= Editing focus =

> The editor will create a new page- and post-building experience that makes writing rich posts effortless, and has “blocks” to make it easy what today might take shortcodes, custom HTML, or “mystery meat” embed discovery. — Matt Mullenweg

One thing that sets WordPress apart from other systems is that it allows you to create as rich a post layout as you can imagine -- but only if you know HTML and CSS and build your own custom theme. By thinking of the editor as a tool to let you write rich posts and create beautiful layouts, we can transform WordPress into something users _love_ WordPress, as opposed something they pick it because it's what everyone else uses.

Gutenberg looks at the editor as more than a content field, revisiting a layout that has been largely unchanged for almost a decade.This allows us to holistically design a modern editing experience and build a foundation for things to come.

Here's why we're looking at the whole editing screen, as opposed to just the content field:

1. The block unifies multiple interfaces. If we add that on top of the existing interface, it would _add_ complexity, as opposed to remove it.
2. By revisiting the interface, we can modernize the writing, editing, and publishing experience, with usability and simplicity in mind, benefitting both new and casual users.
3. When singular block interface takes center stage, it demonstrates a clear path forward for developers to create premium blocks, superior to both shortcodes and widgets.
4. Considering the whole interface lays a solid foundation for the next focus, full site customization.
5. Looking at the full editor screen also gives us the opportunity to drastically modernize the foundation, and take steps towards a more fluid and JavaScript powered future that fully leverages the WordPress REST API.

= Blocks =

Blocks are the unifying evolution of what is now covered, in different ways, by shortcodes, embeds, widgets, post formats, custom post types, theme options, meta-boxes, and other formatting elements. They embrace the breadth of functionality WordPress is capable of, with the clarity of a consistent user experience.

Imagine a custom “employee” block that a client can drag to an About page to automatically display a picture, name, and bio. A whole universe of plugins that all extend WordPress in the same way. Simplified menus and widgets. Users who can instantly understand and use WordPress  -- and 90% of plugins. This will allow you to easily compose beautiful posts like <a href="http://moc.co/sandbox/example-post/">this example</a>.

Check out the <a href="https://wordpress.org/gutenberg/handbook/reference/faq/">FAQ</a> for answers to the most common questions about the project.

= Compatibility =

Posts are backwards compatible, and shortcodes will still work. We are continuously exploring how highly-tailored metaboxes can be accommodated, and are looking at solutions ranging from a plugin to disable Gutenberg to automatically detecting whether to load Gutenberg or not. While we want to make sure the new editing experience from writing to publishing is user-friendly, we’re committed to finding  a good solution for highly-tailored existing sites.

= The stages of Gutenberg =

Gutenberg has three planned stages. The first, aimed for inclusion in WordPress 5.0, focuses on the post editing experience and the implementation of blocks. This initial phase focuses on a content-first approach. The use of blocks, as detailed above, allows you to focus on how your content will look without the distraction of other configuration options. This ultimately will help all users present their content in a way that is engaging, direct, and visual.

These foundational elements will pave the way for stages two and three, planned for the next year, to go beyond the post into page templates and ultimately, full site customization.

Gutenberg is a big change, and there will be ways to ensure that existing functionality (like shortcodes and meta-boxes) continue to work while allowing developers the time and paths to transition effectively. Ultimately, it will open new opportunities for plugin and theme developers to better serve users through a more engaging and visual experience that takes advantage of a toolset supported by core.

= Contributors =

Gutenberg is built by many contributors and volunteers. Please see the full list in <a href="https://github.com/WordPress/gutenberg/blob/master/CONTRIBUTORS.md">CONTRIBUTORS.md</a>.

== Frequently Asked Questions ==

= How can I send feedback or get help with a bug? =

We'd love to hear your bug reports, feature suggestions and any other feedback! Please head over to <a href="https://github.com/WordPress/gutenberg/issues">the GitHub issues page</a> to search for existing issues or open a new one. While we'll try to triage issues reported here on the plugin forum, you'll get a faster response (and reduce duplication of effort) by keeping everything centralized in the GitHub repository.

= How can I contribute? =

We’re calling this editor project "Gutenberg" because it's a big undertaking. We are working on it every day in GitHub, and we'd love your help building it.You’re also welcome to give feedback, the easiest is to join us in <a href="https://make.wordpress.org/chat/">our Slack channel</a>, `#core-editor`.

See also <a href="https://github.com/WordPress/gutenberg/blob/master/CONTRIBUTING.md">CONTRIBUTING.md</a>.

= Where can I read more about Gutenberg? =

- <a href="http://matiasventura.com/post/gutenberg-or-the-ship-of-theseus/">Gutenberg, or the Ship of Theseus</a>, with examples of what Gutenberg might do in the future
- <a href="https://make.wordpress.org/core/2017/01/17/editor-technical-overview/">Editor Technical Overview</a>
- <a href="https://wordpress.org/gutenberg/handbook/reference/design-principles/">Design Principles and block design best practices</a>
- <a href="https://github.com/Automattic/wp-post-grammar">WP Post Grammar Parser</a>
- <a href="https://make.wordpress.org/core/tag/gutenberg/">Development updates on make.wordpress.org</a>
- <a href="https://wordpress.org/gutenberg/handbook/">Documentation: Creating Blocks, Reference, and Guidelines</a>
- <a href="https://wordpress.org/gutenberg/handbook/reference/faq/">Additional frequently asked questions</a>


== Changelog ==

### Features
- Add the option to [select the style that is automatically applied](https://github.com/WordPress/gutenberg/pull/16465).
- Add the option to [resize Cover Block ](https://github.com/WordPress/gutenberg/pull/17143).
- Allow directly setting a [solid background color on Cover](https://github.com/WordPress/gutenberg/pull/17041) block.
- Add [list start, reversed settings](https://github.com/WordPress/gutenberg/pull/15113).
- Add a [help panel to the inserter available in all blocks](https://github.com/WordPress/gutenberg/pull/16813).  
- [Typewriter experience](https://github.com/WordPress/gutenberg/pull/16460). 
- Add [circle-crop variation](https://github.com/WordPress/gutenberg/pull/16475) to Image block.

### Enhancements
-   Add [overflow support inside block switcher](https://github.com/WordPress/gutenberg/pull/16984). 
-   Update [GitHub action exit codes.](https://github.com/WordPress/gutenberg/pull/17002) 
-   Core Data: [return updated record in saveEntityRecord](https://github.com/WordPress/gutenberg/pull/17030).  
-   Latest Posts Block: [(no title) instead of (Untitled) for a post without a title](https://github.com/WordPress/gutenberg/pull/17074).  
-   [Remove borders around inserter items for blocks with children blocks](https://github.com/WordPress/gutenberg/pull/17083).  
-   Add [disabled block count](https://github.com/WordPress/gutenberg/pull/17103) in the block manager.  
-   Writing Flow:  
	-   Add [splitting in the quote block](https://github.com/WordPress/gutenberg/pull/17121).   
	-   Allow [undoing of patterns with BACKSPACE and ESC.](https://github.com/WordPress/gutenberg/pull/14776)   

### Experiments
-   Widgets Screen:
	-   Fix: [Blocks are too close together](https://github.com/WordPress/gutenberg/issues/16992).
	-   Add [Button block appender](https://github.com/WordPress/gutenberg/pull/16971).

### New APIs
- Add [callbacks to ServerSideRenderer](https://github.com/WordPress/gutenberg/pull/16512) to handle failures with custom renderers.  
- Add the [block example API](https://github.com/WordPress/gutenberg/pull/17124) and use it for inserter and switcher previews.
- Enable an [optional namespace parameter for hasAction & hasFilter ](https://github.com/WordPress/gutenberg/pull/15362).
    

### Bug Fixes
- The [duplicate button appears even if the block is not allowed](https://github.com/WordPress/gutenberg/pull/17007).
- [Double scrollbar appearing](https://github.com/WordPress/gutenberg/pull/17031) in full-screen mode.
- RichText: [ignore selection changes during composition](https://github.com/WordPress/gutenberg/pull/16960)
- Missing [default functions as props in BlockEditorProvider](https://github.com/WordPress/gutenberg/pull/17036).
- [Button block does not center](https://github.com/WordPress/gutenberg/pull/17063)  on the editor.
- Guard [block component against zombie state](https://github.com/WordPress/gutenberg/pull/17092) bug.
- Add [truthy check for the Popover component](https://github.com/WordPress/gutenberg/pull/17100) onClose prop before calling it.
- Make InnerBlocks [only force the template on directly set lockings](https://github.com/WordPress/gutenberg/pull/16973).
- Check to [ensure focus has intentionally left the wrapped component in withFocusOutside](https://github.com/WordPress/gutenberg/pull/17051) HOC.
- Correctly [transform images with external sources](https://github.com/WordPress/gutenberg/pull/16548) into a gallery.
- [Block toolbar appears above sidebar](https://github.com/WordPress/gutenberg/pull/17108) on medium viewports.
- [Basecontrol name undefined](https://github.com/WordPress/gutenberg/pull/17044/files) triggring eslint-plugin TypeError.
- [Image flickering & focus lose](https://github.com/WordPress/gutenberg/pull/17175) on resizing.
- Add [get_item_schema function to WP_REST_Widget_Areas_Controller ](https://github.com/WordPress/gutenberg/pull/15981).
- [Empty Classic Editor inside innerBlock fatal error](https://github.com/WordPress/gutenberg/pull/17164).
- [Changing month in post publish date closes the popover](https://github.com/WordPress/gutenberg/pull/17164).

### Various

-   Update [re-resizable dependency](https://github.com/WordPress/gutenberg/pull/17011) 
-   Use [mixins in button styles instead of media queries.](https://github.com/WordPress/gutenberg/pull/17012)  
-   [Fix performance tests with the introduction of the navigation mode](https://github.com/WordPress/gutenberg/pull/17034)  
-   RichText code improvements: [#16905](https://github.com/WordPress/gutenberg/pull/16905), [#16962](https://github.com/WordPress/gutenberg/pull/16962).
-   Scripts:
	- Improve the way [test files are discovered](https://github.com/WordPress/gutenberg/pull/17033).
	- Improve [recommended settings](https://github.com/WordPress/gutenberg/pull/17027) included in the package.
	- Use [the SCSS shared stylelint-config-wordpress config](https://github.com/WordPress/gutenberg/pull/17060).  
-   [Ignore the WordPress directory](https://github.com/WordPress/gutenberg/pull/16243) in stylelint.
-   Fix: [edit post sets some default block appender styles](https://github.com/WordPress/gutenberg/pull/16943).
-   Build: [remove global install of latest npm](https://github.com/WordPress/gutenberg/pull/17134).
-   Project automation:
    - Rewrite [actions using JavaScript](https://github.com/WordPress/gutenberg/pull/17080).
    - Fix: [Add first-time contributor label](https://github.com/WordPress/gutenberg/pull/17156).
    - Fix: [Add milestone](https://github.com/WordPress/gutenberg/pull/17157).
-   Remove [unused CSS from ColorPalette](https://github.com/WordPress/gutenberg/pull/17152) component.
    

### Documentation
-   Add [examples for the lockPostSaving and unlockPostSaving](https://github.com/WordPress/gutenberg/pull/16713)actions.
-   Add guidance for [adding/proposing/suggesting new components](https://github.com/WordPress/gutenberg/pull/16845) to the wordpress/components npm package.
-   Add section about [updating package after new releases](https://github.com/WordPress/gutenberg/pull/17026).
-   Add [ESNext examples to format API](https://github.com/WordPress/gutenberg/pull/16804) tutorial.
-   Document [server-side functions that allow registering block styles](https://github.com/WordPress/gutenberg/pull/16997).
    

### Mobile
-   [Reset toolbar scroll on content change](https://github.com/WordPress/gutenberg/pull/16945).
-   [Extract caption component](https://github.com/WordPress/gutenberg/pull/16825).
-   [Not use ListEdit](https://github.com/WordPress/gutenberg/pull/17070).
-   [Hide replaceable blocks when adding blocks](https://github.com/WordPress/gutenberg/pull/16931).
-   Make [tapping at the end of post always insert at the end of the post.](https://github.com/WordPress/gutenberg/pull/16934)
