<?php $__env->startSection('content'); ?><p>This starter template comes pre-loaded with <a href="https://tailwindcss.com">Tailwind CSS</a>, a utility CSS framework that allows you to customize and build complex designs without touching a line of CSS. There are also a few base Sass files in the <code>/source/_assets/sass</code> folder, set up with the expectation that you can add any custom CSS into <code>_blog.scss</code>.</p>

<blockquote>
  <p>You can also re-work the architecture of the Sass files any way you’d like; just make sure to keep the <code><?php echo e('@'); ?>tailwind</code> references in your final <code>main.scss</code> file.</p>
</blockquote>

<pre><code class="language-scss">// source/_assets/sass/main.scss

<?php echo e('@'); ?>tailwind preflight;
<?php echo e('@'); ?>tailwind components;

// Code syntax highlighting,
// https://highlightjs.org
<?php echo e('@'); ?>import '~highlightjs/styles/default';

<?php echo e('@'); ?>import 'base';
<?php echo e('@'); ?>import 'navigation';
<?php echo e('@'); ?>import 'mailchimp';
<?php echo e('@'); ?>import 'blog';

<?php echo e('@'); ?>tailwind utilities;
</code></pre>

<hr />

<h2>Typography Styles</h2>

<p>Here’s a quick preview of what some of the basic type styles will look like in this starter template:</p>

<h1>h1 Heading</h1>

<h2>h2 Heading</h2>

<h3>h3 Heading</h3>

<h4>h4 Heading</h4>

<h5>h5 Heading</h5>

<h6>h6 Heading</h6>

<p>The quick brown fox jumps over the lazy dog</p>

<p><s>The quick brown fox jumps over the lazy dog</s></p>

<p><u>The quick brown fox jumps over the lazy dog</u></p>

<p><em>The quick brown fox jumps over the lazy dog</em></p>

<p><strong>The quick brown fox jumps over the lazy dog</strong></p>

<p><code>The quick brown fox jumps over the lazy dog</code></p>

<p><small>The quick brown fox jumps over the lazy dog</small></p>

<blockquote>
  <p>The quick brown fox jumps over the lazy dog</p>
</blockquote>

<p><a href="#">The quick brown fox jumps over the lazy dog</a></p>

<pre><code class="language-php">class Foo extends bar
{
    public function fooBar()
    {
        //
    }
}
</code></pre>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('_layouts.post', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>