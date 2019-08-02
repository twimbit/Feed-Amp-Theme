=== Gutenberg ===
Contributors: matveb, joen, karmatosed
Requires at least: 5.1.0
Tested up to: 5.2
Stable tag: 6.1.1
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

### Enhancements
- Introduce [Link Target](https://github.com/WordPress/gutenberg/pull/10128)  [support](https://github.com/WordPress/gutenberg/pull/16497) in Button block.  
- Limit the [maximum height of the HTML block](https://github.com/WordPress/gutenberg/pull/16187).
- Show the [preview button on mobile viewports](http://update/show-post-preview-button-on-mobile).
- [Remove nested block restrictions](https://github.com/WordPress/gutenberg/pull/16751) from the Cover and Media & Text blocks.
- A11y: Improving and standardize the [block styles focus and active states](https://github.com/WordPress/gutenberg/pull/16545).
- Always [collapse block alignment toolbars](https://github.com/WordPress/gutenberg/pull/16557).

### Bug Fixes
- Fix using the [Classic block in nested contexts](https://github.com/WordPress/gutenberg/pull/16477).
- Fix [lost nested blocks](https://github.com/WordPress/gutenberg/pull/14443) if the container block is missing.
- Fix [pasting content into nested blocks](https://github.com/WordPress/gutenberg/pull/16717).
- Fix [race condition in the block moving animation](https://github.com/WordPress/gutenberg/pull/16750) causing blocks to overlap.
- A11y: Make the [Table block accessible](https://github.com/WordPress/gutenberg/pull/16324) at high zoom levels.
- A11y: Change the [font size picker markup](https://github.com/WordPress/gutenberg/pull/16148) to use select.
- A11y: Match the [primary button disabled](https://github.com/WordPress/gutenberg/pull/16103)  [state](https://github.com/WordPress/gutenberg/pull/16769) to Core's color contrast.
- Fix the [z-index of the block toolbars](https://github.com/WordPress/gutenberg/pull/16530) for blocks following wide aligned blocks.
- [Hide the columns count control](https://github.com/WordPress/gutenberg/pull/16476) when the columns block placeholder is shown.
- [Prevent the block movers from disappearing](https://github.com/WordPress/gutenberg/pull/16579) on middle breakpoints for full/wide blocks.
- [Slimmer top/bottom spacing inside notices](https://github.com/WordPress/gutenberg/pull/16589) shown outside the editor canvas.
- Fix [converting video shortcode into video blocks](https://github.com/WordPress/gutenberg/pull/16588) when file type sources are used.
- [Localize the read more link](https://github.com/WordPress/gutenberg/pull/16665) in the latest posts block.
- Fix issue with [inconsistent nesting appender](https://github.com/WordPress/gutenberg/pull/16453).
- Fix styling of [IconButton used in ButtonGroup](https://github.com/WordPress/gutenberg/pull/16686) components.
- [Remove Change Permalinks button](https://github.com/WordPress/gutenberg/pull/16395) when permalink is not editable.
- Fix [aspect ratio typo and recalculate padding](https://github.com/WordPress/gutenberg/pull/16573) in embed block.
- Ensure [hour/minute fields are always shown left to right](https://github.com/WordPress/gutenberg/pull/16375) in RTL languages.
- Refactor the empty line padding in the RichText component. This fixes [padding issues in the list block in Firefox](https://github.com/WordPress/gutenberg/pull/14846).
- Improve the stability of the [RichText placeholder](https://github.com/WordPress/gutenberg/pull/16733).
- Add [custom placeholder support](https://github.com/WordPress/gutenberg/pull/16783) for the button block.
- Show the [image size labels on the block-based widget screen](https://github.com/WordPress/gutenberg/pull/16763).

### Documentation
- Clarify the [block title and description conventions](https://github.com/WordPress/gutenberg/pull/16458).
- Add [RichText component documentation](https://github.com/WordPress/gutenberg/pull/15956) to the Block Editor Handbook.
- Improve the [repository triage docs](https://github.com/WordPress/gutenberg/pull/16234).
- Adds documentation for the [PluginDocumentSettingPanel SlotFill](https://github.com/WordPress/gutenberg/pull/16620).
- Tweaks and typos: [1](https://github.com/WordPress/gutenberg/pull/16438), [2](https://github.com/WordPress/gutenberg/pull/16455), [3](https://github.com/WordPress/gutenberg/pull/16468), [4](https://github.com/WordPress/gutenberg/pull/16456), [5](https://github.com/WordPress/gutenberg/pull/16470), [6](https://github.com/WordPress/gutenberg/pull/16469), [7](https://github.com/WordPress/gutenberg/pull/16526), [8](https://github.com/WordPress/gutenberg/pull/16531), [9](https://github.com/WordPress/gutenberg/pull/16528), [10](https://github.com/WordPress/gutenberg/pull/16610), [11](https://github.com/WordPress/gutenberg/pull/16450), [12](https://github.com/WordPress/gutenberg/pull/16756) , [13](https://github.com/WordPress/gutenberg/pull/16693), [14](https://github.com/WordPress/gutenberg/pull/16787).

### Divers
- Add a [simple API to register block style variations](https://github.com/WordPress/gutenberg/pull/16356) on the server.
- Allow alternative blocks to be used to handle [Grouping interactions](https://github.com/WordPress/gutenberg/pull/16278).
- Fix Travis instability by [waiting for MySQL availability](https://github.com/WordPress/gutenberg/pull/16461) before install the plugin.
- Continue the [generic RichText component](https://github.com/WordPress/gutenberg/pull/16309) refactoring.
- Remove the [usage of the editor store](https://github.com/WordPress/gutenberg/pull/16184) from the block editor module.
- Update the [MilestoneIt Github action](https://github.com/WordPress/gutenberg/pull/16511) to read the plugin version from master.
- Refactor the post meta block attributes to use a generic [custom sources mechanism](https://github.com/WordPress/gutenberg/pull/16402).
- Expose [position prop in DotTip](https://github.com/WordPress/gutenberg/pull/14972) component.
- Avoid docker [containers automatic restart](https://github.com/WordPress/gutenberg/pull/16547).
- Bump [Lodash dependencies to 4.17.14](https://github.com/WordPress/gutenberg/pull/16567).
- Fix the [build command on Windows](https://github.com/WordPress/gutenberg/pull/16029) environments.
- Add allowedFormats and withoutInteractiveFormats props to the RichText component to [control the available formats per RichText](https://github.com/WordPress/gutenberg/pull/14542).
- Remove [inappropriate executable permissions](https://github.com/WordPress/gutenberg/pull/16687) from core-data package files.
- ESLint Plugin: [Exempt React hooks from no-unused-vars-before-return](https://github.com/WordPress/gutenberg/pull/16737).
- Use React [Portal based slots for the block toolbar](https://github.com/WordPress/gutenberg/pull/16421).
- Use [combineReducers utility from the data module](https://github.com/WordPress/gutenberg/pull/16752) instead of redux.
- Support [hideLabelFromVision prop](https://github.com/WordPress/gutenberg/pull/16701) in all control components.
- Adds missing [babel-jest and core-js](https://github.com/WordPress/gutenberg/pull/16259) dependencies to the scripts package.

### Mobile
- [Tapping on an empty editor](https://github.com/WordPress/gutenberg/pull/16439) area creates a new paragraph block.
- [Fix video uploads](https://github.com/WordPress/gutenberg/pull/16331) when the connection is lost and restored.
- Track [unsupported block list](https://github.com/WordPress/gutenberg/pull/16434).
- Insert [new block below the post title](https://github.com/WordPress/gutenberg/pull/16440) if the post title is selected.
- Run the [mobile tests in the Gutenberg CI](https://github.com/WordPress/gutenberg/pull/16404) server.
- Replace use of [deprecated componentWillReceiveProps](https://github.com/WordPress/gutenberg/pull/16577) in ImageEdit.
- Show placeholder when [adding block from the post title](https://github.com/WordPress/gutenberg/pull/16539).
- [Blur post title](https://github.com/WordPress/gutenberg/pull/16642) any time another block is selected.
- Inserting block from the post title [replaces empty blocks](https://github.com/WordPress/gutenberg/pull/16574).
- [Update Video caption placeholder color](https://github.com/WordPress/gutenberg/pull/16716) to match other placeholder text styles.
- Move the [post title selection state](https://github.com/WordPress/gutenberg/pull/16704) to the store.


