@extends('_layouts.master')

@push('meta')
<meta property="og:title" content="About {{ $page->siteName }}" />
<meta property="og:type" content="website" />
<meta property="og:url" content="{{ $page->getUrl() }}" />
<meta property="og:description" content="A little bit about {{ $page->siteName }}" />
@endpush

@section('body')
<h1>About</h1>

<img src="/assets/img/businessman.svg" alt="About image"
    class="flex rounded-full h-64 w-64 bg-contain mx-auto md:float-right my-6 md:ml-10">

<p class="mb-6">
    My name is Mahdi Ebrahimi. I am a 21-year-old full-stack web developer. I live in Iran and I am still studying at
    the Amirkabir Technical University Of Arak. I spend my spare time programming, learning, meditating, and exercising,
    though. Hence I love the GNU community I use Linux as my main OS.
</p>

<p class="mb-6">

    I started programing language when I was 16. First of all, I started learning Pascal programing language, then PHP
    and after that, I learned JavaScript. Whilst I was learning javascript I aspired to learn Laravel but that was
    difficult for me at that time, so I decided to first learn CodeIgniter and MVC and then learn the Laravel framework.
    Before starting to learn Laravel, I learned How to use SQL and making an application using Mysql and Sqlite. I also
    have some experiences with MongoDB and Redis. Generally, I have used these tools:
</p>


<ul class="ml-10">
    <li>HTML</li>
    <li>CSS</li>
    <li>W3.css</li>
    <li>Sass</li>
    <li>JavaScript</li>
    <li>JQuery</li>
    <li>Vue.js</li>
    <li>Vuex</li>
    <li>Nuxt.js</li>
    <li>VuePress</li>
    <li>Electron</li>
    <li>Mysql</li>
    <li>MongoDB</li>
    <li>Adonis.Js</li>
    <li>PHP</li>
    <li>Codeigniter</li>
    <li>Symfony</li>
    <li>Laravel</li>
    <li>OctoberCMS</li>
    <li>Jigsaw</li>
</ul>

<p class="mb-6">


    Personally, I think I have some algorithms and mathematical problems. So my first priority in the future is
    enhancing my abilities in those subjects. I really like to be a pragmatic programmer. I want to be a skilled
    craftsman to make useful applications for people on the whole planet. Also, I really need to learn more about
    computer engineering. I intend to invest my time in PHP and Laravel in the future.
</p>
@endsection