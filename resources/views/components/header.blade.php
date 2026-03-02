@props(['home' => false])

@php
    $projectsHref = $home ? '#projects' : '/#projects';
    $skillsHref = $home ? '#skills' : '/#skills';
    $contactHref = $home ? '#contact' : '/#contact';
    $tutorialHref = $home ? '/tutorial' : '/#tutorial';
@endphp

<nav>
    <a class="logo" href="/" aria-label="Home">
        <span class="logo-flip">
            <img class="logo-face logo-front" src="{{ asset('mingmingfront.png') }}" alt="Site Logo Front">
            <img class="logo-face logo-back" src="{{ asset('mingmingtalikod.png') }}" alt="Site Logo Back">
        </span>
    </a>
    <ul>
        <li><a href="/">Meee</a></li>
        <li class="separator">|</li>
        <li><a href="{{ $projectsHref }}">Projects</a></li>
        <li class="separator">|</li>
        <li><a href="{{ $skillsHref }}">Skills</a></li>
        <li class="separator">|</li>
        <li><a href="{{ $contactHref }}">Contact</a></li>
        <li class="separator">|</li>
        <li><a href="{{ $tutorialHref }}">Tutorial</a></li>
        <li class="separator">|</li>
        <li><a href="http://bryandacera.me">Chatgpt</a></li>
    </ul>
</nav>