<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Profil Diri PBKK</title>
	<meta name="description" content="The small framework with powerful features">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- <link rel="shortcut icon" type="image/png" href="/favicon.ico"/> -->
	<!-- <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/css/style.css"> -->
	<style>
	/* https://meyerweb.com/eric/tools/css/reset/
   v2.0 | 20110126
   License: none (public domain)
*/

html,
body,
div,
span,
applet,
object,
iframe,
h1,
h2,
h3,
h4,
h5,
h6,
p,
blockquote,
pre,
a,
abbr,
acronym,
address,
big,
cite,
code,
del,
dfn,
em,
img,
ins,
kbd,
q,
s,
samp,
small,
strike,
strong,
sub,
sup,
tt,
var,
b,
u,
i,
center,
dl,
dt,
dd,
ol,
ul,
li,
fieldset,
form,
label,
legend,
table,
caption,
tbody,
tfoot,
thead,
tr,
th,
td,
article,
aside,
canvas,
details,
embed,
figure,
figcaption,
footer,
header,
hgroup,
menu,
nav,
output,
ruby,
section,
summary,
time,
mark,
audio,
video {
    margin: 0;
    padding: 0;
    border: 0;
    font-size: 100%;
    font: inherit;
    vertical-align: baseline;
}


/* HTML5 display-role reset for older browsers */

article,
aside,
details,
figcaption,
figure,
footer,
header,
hgroup,
menu,
nav,
section,
main {
    display: block;
}

body {
    line-height: 1;
}

ol,
ul {
    list-style: none;
}

blockquote,
q {
    quotes: none;
}

blockquote:before,
blockquote:after,
q:before,
q:after {
    content: "";
    content: none;
}

table {
    border-collapse: collapse;
    border-spacing: 0;
}


/* --------------------------------

Primary style

-------------------------------- */

*,
*::after,
*::before {
    box-sizing: border-box;
}

html {
    font-size: 62.5%;
}

body {
    font-size: 1.6rem;
    font-family: "Sintony", sans-serif;
    color: #eaf2e3;
    background-color: #3a2c41;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}

a {
    color: #c0a672;
    text-decoration: none;
}

.cd-image-replace {
    /* replace text with image */
    display: inline-block;
    overflow: hidden;
    text-indent: 100%;
    white-space: nowrap;
    color: transparent;
}


/* --------------------------------

Navigation trigger - visible on small devices only

-------------------------------- */

.cd-nav-trigger {
    display: block;
    position: fixed;
    z-index: 2;
    bottom: 30px;
    right: 5%;
    height: 44px;
    width: 44px;
    border-radius: 0.25em;
    background: rgba(234, 242, 227, 0.9);
    /* reset button style */
    cursor: pointer;
    -webkit-appearance: none;
    -moz-appearance: none;
    -ms-appearance: none;
    -o-appearance: none;
    appearance: none;
    border: none;
    outline: none;
}

.cd-nav-trigger span {
    /* central dot */
    position: absolute;
    height: 4px;
    width: 4px;
    background-color: #3a2c41;
    border-radius: 50%;
    left: 50%;
    top: 50%;
    bottom: auto;
    right: auto;
    -webkit-transform: translateX(-50%) translateY(-50%);
    -moz-transform: translateX(-50%) translateY(-50%);
    -ms-transform: translateX(-50%) translateY(-50%);
    -o-transform: translateX(-50%) translateY(-50%);
    transform: translateX(-50%) translateY(-50%);
}

.cd-nav-trigger span::before,
.cd-nav-trigger span::after {
    /* bottom and top dots */
    content: "";
    position: absolute;
    left: 0;
    height: 100%;
    width: 100%;
    background-color: #3a2c41;
    border-radius: inherit;
}

.cd-nav-trigger span::before {
    top: -9px;
}

.cd-nav-trigger span::after {
    bottom: -9px;
}

@media only screen and (min-width: 800px) {
    .cd-nav-trigger {
        display: none;
    }
}


/* --------------------------------

Vertical navigation

-------------------------------- */

.cd-vertical-nav {
    position: fixed;
    z-index: 1;
    right: 5%;
    bottom: 30px;
    width: 90%;
    max-width: 400px;
    max-height: 90%;
    overflow-y: auto;
    -webkit-transform: scale(0);
    -moz-transform: scale(0);
    -ms-transform: scale(0);
    -o-transform: scale(0);
    transform: scale(0);
    -webkit-transform-origin: right bottom;
    -moz-transform-origin: right bottom;
    -ms-transform-origin: right bottom;
    -o-transform-origin: right bottom;
    transform-origin: right bottom;
    -webkit-transition: -webkit-transform 0.2s;
    -moz-transition: -moz-transform 0.2s;
    transition: transform 0.2s;
    border-radius: 0.25em;
    background-color: rgba(234, 242, 227, 0.9);
}

.cd-vertical-nav a {
    display: block;
    padding: 1em;
    color: #3a2c41;
    font-weight: bold;
    border-bottom: 1px solid rgba(58, 44, 65, 0.1);
}

.cd-vertical-nav a.active {
    color: #c0a672;
}

.cd-vertical-nav.open {
    -webkit-transform: scale(1);
    -moz-transform: scale(1);
    -ms-transform: scale(1);
    -o-transform: scale(1);
    transform: scale(1);
    -webkit-overflow-scrolling: touch;
}

.cd-vertical-nav.open+.cd-nav-trigger {
    background-color: transparent;
}

.cd-vertical-nav.open+.cd-nav-trigger span {
    background-color: rgba(58, 44, 65, 0);
}

.cd-vertical-nav.open+.cd-nav-trigger span::before,
.cd-vertical-nav.open+.cd-nav-trigger span::after {
    /* transform dots in 'X' icon */
    height: 3px;
    width: 20px;
    border-radius: 0;
    left: -8px;
}

.cd-vertical-nav.open+.cd-nav-trigger span::before {
    -webkit-transform: rotate(45deg);
    -moz-transform: rotate(45deg);
    -ms-transform: rotate(45deg);
    -o-transform: rotate(45deg);
    transform: rotate(45deg);
    top: 1px;
}

.cd-vertical-nav.open+.cd-nav-trigger span::after {
    -webkit-transform: rotate(135deg);
    -moz-transform: rotate(135deg);
    -ms-transform: rotate(135deg);
    -o-transform: rotate(135deg);
    transform: rotate(135deg);
    bottom: 0;
}

@media only screen and (min-width: 800px) {
    .cd-vertical-nav {
        /* reset style */
        right: 0;
        top: 0;
        bottom: auto;
        height: 100vh;
        width: 90px;
        max-width: none;
        max-height: none;
        -webkit-transform: scale(1);
        -moz-transform: scale(1);
        -ms-transform: scale(1);
        -o-transform: scale(1);
        transform: scale(1);
        background-color: transparent;
        /* vertically align its content*/
        display: table;
    }
    .cd-vertical-nav::before {
        /* this is the navigation background */
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.8);
        -webkit-transform: translateX(100%);
        -moz-transform: translateX(100%);
        -ms-transform: translateX(100%);
        -o-transform: translateX(100%);
        transform: translateX(100%);
        -webkit-transition: -webkit-transform 0.4s;
        -moz-transition: -moz-transform 0.4s;
        transition: transform 0.4s;
    }
    .no-touch .cd-vertical-nav:hover::before,
    .touch .cd-vertical-nav::before {
        -webkit-transform: translateX(0);
        -moz-transform: translateX(0);
        -ms-transform: translateX(0);
        -o-transform: translateX(0);
        transform: translateX(0);
    }
    .cd-vertical-nav ul {
        /* vertically align <ul> inside <nav>*/
        display: table-cell;
        vertical-align: middle;
        text-align: center;
    }
    .cd-vertical-nav a {
        position: relative;
        padding: 3em 0 0;
        margin: 1.4em auto;
        border-bottom: none;
        font-size: 1.2rem;
        color: #eaf2e3;
    }
    .cd-vertical-nav a.active {
        color: #eaf2e3;
    }
    .cd-vertical-nav a::before,
    .cd-vertical-nav a::after {
        /* used to create the filled circle and the background icon */
        content: "";
        position: absolute;
        left: 50%;
        /* Force Hardware Acceleration */
        -webkit-backface-visibility: hidden;
        backface-visibility: hidden;
        -webkit-transform: translateZ(0);
        -moz-transform: translateZ(0);
        -ms-transform: translateZ(0);
        -o-transform: translateZ(0);
        transform: translateZ(0);
    }
    .cd-vertical-nav a::before {
        /* filled circle */
        top: 0;
        height: 32px;
        width: 32px;
        border-radius: 50%;
        background: #eaf2e3;
        -webkit-transform: translateX(-50%) scale(0.25);
        -moz-transform: translateX(-50%) scale(0.25);
        -ms-transform: translateX(-50%) scale(0.25);
        -o-transform: translateX(-50%) scale(0.25);
        transform: translateX(-50%) scale(0.25);
        -webkit-transition: -webkit-transform 0.4s, background-color 0.2s;
        -moz-transition: -moz-transform 0.4s, background-color 0.2s;
        transition: transform 0.4s, background-color 0.2s;
    }
    .cd-vertical-nav a::after {
        /* icon */
        opacity: 0;
        top: 8px;
        height: 16px;
        width: 16px;
        -webkit-transform: translateX(-50%) scale(0);
        -moz-transform: translateX(-50%) scale(0);
        -ms-transform: translateX(-50%) scale(0);
        -o-transform: translateX(-50%) scale(0);
        transform: translateX(-50%) scale(0);
        -webkit-transition: -webkit-transform 0.4s 0s, opacity 0.1s 0.3s;
        -moz-transition: -moz-transform 0.4s 0s, opacity 0.1s 0.3s;
        transition: transform 0.4s 0s, opacity 0.1s 0.3s;
    }
    .cd-vertical-nav a.active::before,
    .no-touch .cd-vertical-nav a:hover::before {
        background-color: #c0a672;
    }
    .cd-vertical-nav li:first-of-type a::after {
        /* change icon using image sprites */
        background-position: 0px -48px;
        /* fix bug with transitions - set scale(0.01) rather than scale(0) */
        -webkit-transform: translateX(-50%) translateY(4.5em) scale(0.01);
        -moz-transform: translateX(-50%) translateY(4.5em) scale(0.01);
        -ms-transform: translateX(-50%) translateY(4.5em) scale(0.01);
        -o-transform: translateX(-50%) translateY(4.5em) scale(0.01);
        transform: translateX(-50%) translateY(4.5em) scale(0.01);
    }
    .cd-vertical-nav li:first-of-type a::before {
        -webkit-transform: translateX(-50%) translateY(4.5em) scale(0.25);
        -moz-transform: translateX(-50%) translateY(4.5em) scale(0.25);
        -ms-transform: translateX(-50%) translateY(4.5em) scale(0.25);
        -o-transform: translateX(-50%) translateY(4.5em) scale(0.25);
        transform: translateX(-50%) translateY(4.5em) scale(0.25);
    }
    .cd-vertical-nav li:nth-of-type(2) a::after {
        background-position: 0px -32px;
        -webkit-transform: translateX(-50%) translateY(1.5em) scale(0.01);
        -moz-transform: translateX(-50%) translateY(1.5em) scale(0.01);
        -ms-transform: translateX(-50%) translateY(1.5em) scale(0.01);
        -o-transform: translateX(-50%) translateY(1.5em) scale(0.01);
        transform: translateX(-50%) translateY(1.5em) scale(0.01);
    }
    .cd-vertical-nav li:nth-of-type(2) a::before {
        -webkit-transform: translateX(-50%) translateY(1.5em) scale(0.25);
        -moz-transform: translateX(-50%) translateY(1.5em) scale(0.25);
        -ms-transform: translateX(-50%) translateY(1.5em) scale(0.25);
        -o-transform: translateX(-50%) translateY(1.5em) scale(0.25);
        transform: translateX(-50%) translateY(1.5em) scale(0.25);
    }
    .cd-vertical-nav li:nth-of-type(3) a::after {
        background-position: 0px -16px;
        -webkit-transform: translateX(-50%) translateY(-1.5em) scale(0.01);
        -moz-transform: translateX(-50%) translateY(-1.5em) scale(0.01);
        -ms-transform: translateX(-50%) translateY(-1.5em) scale(0.01);
        -o-transform: translateX(-50%) translateY(-1.5em) scale(0.01);
        transform: translateX(-50%) translateY(-1.5em) scale(0.01);
    }
    .cd-vertical-nav li:nth-of-type(3) a::before {
        -webkit-transform: translateX(-50%) translateY(-1.5em) scale(0.25);
        -moz-transform: translateX(-50%) translateY(-1.5em) scale(0.25);
        -ms-transform: translateX(-50%) translateY(-1.5em) scale(0.25);
        -o-transform: translateX(-50%) translateY(-1.5em) scale(0.25);
        transform: translateX(-50%) translateY(-1.5em) scale(0.25);
    }
    .cd-vertical-nav li:nth-of-type(4) a::after {
        background-position: 0px 0px;
        -webkit-transform: translateX(-50%) translateY(-4.5em) scale(0.01);
        -moz-transform: translateX(-50%) translateY(-4.5em) scale(0.01);
        -ms-transform: translateX(-50%) translateY(-4.5em) scale(0.01);
        -o-transform: translateX(-50%) translateY(-4.5em) scale(0.01);
        transform: translateX(-50%) translateY(-4.5em) scale(0.01);
    }
    .cd-vertical-nav li:nth-of-type(4) a::before {
        -webkit-transform: translateX(-50%) translateY(-4.5em) scale(0.25);
        -moz-transform: translateX(-50%) translateY(-4.5em) scale(0.25);
        -ms-transform: translateX(-50%) translateY(-4.5em) scale(0.25);
        -o-transform: translateX(-50%) translateY(-4.5em) scale(0.25);
        transform: translateX(-50%) translateY(-4.5em) scale(0.25);
    }
    .cd-vertical-nav .label {
        display: block;
        /* Force Hardware Acceleration */
        -webkit-backface-visibility: hidden;
        backface-visibility: hidden;
        -webkit-transform: translateZ(0);
        -moz-transform: translateZ(0);
        -ms-transform: translateZ(0);
        -o-transform: translateZ(0);
        transform: translateZ(0);
        -webkit-transform: translateX(100%);
        -moz-transform: translateX(100%);
        -ms-transform: translateX(100%);
        -o-transform: translateX(100%);
        transform: translateX(100%);
        -webkit-transition: -webkit-transform 0.4s;
        -moz-transition: -moz-transform 0.4s;
        transition: transform 0.4s;
    }
    .no-touch .cd-vertical-nav:hover a::before,
    .no-touch .cd-vertical-nav:hover a::after,
    .touch .cd-vertical-nav li:nth-of-type(n) a::before,
    .touch .cd-vertical-nav li:nth-of-type(n) a::after {
        -webkit-transform: translateX(-50%) scale(1);
        -moz-transform: translateX(-50%) scale(1);
        -ms-transform: translateX(-50%) scale(1);
        -o-transform: translateX(-50%) scale(1);
        transform: translateX(-50%) scale(1);
        /* set a rotation to fix bug on Firefox - http://gielberkers.com/how-to-fix-shaking-css-transitions-in-firefox/ */
        -moz-transform: translateX(-50%) scale(1) rotate(0.02deg);
    }
    .no-touch .cd-vertical-nav:hover a::after,
    .touch .cd-vertical-nav a::after {
        opacity: 1;
        -webkit-transition: -webkit-transform 0.4s, opacity 0s;
        -moz-transition: -moz-transform 0.4s, opacity 0s;
        transition: transform 0.4s, opacity 0s;
    }
    .no-touch .cd-vertical-nav:hover .label,
    .touch .cd-vertical-nav .label {
        -webkit-transform: translateX(0);
        -moz-transform: translateX(0);
        -ms-transform: translateX(0);
        -o-transform: translateX(0);
        transform: translateX(0);
    }
}


/* --------------------------------

Content Sections - basic style

-------------------------------- */

.cd-section {
    /* vertically align its content*/
    display: table;
    width: 100%;
    height: 100vh;
    background: #53354a;
}

a.github:hover,
a.github:focus,
a.github:active {
    color: #4183c4;
}

a.linkedin:hover,
a.linkedin:focus,
a.linkedin:active {
    color: #0077b5;
}

a.twitter:hover,
a.twitter:focus,
a.twitter:active {
    color: #55acee;
}

a.freecode:hover,
a.freecode:focus,
a.freecode:active {
    color: darkgreen;
}

.cd-section.home-section b {
    font-size: 70%;
}

.cd-section.home-section b a {
    color: #7f7585;
}

.cd-section.home-section b a:hover,
.cd-section.home-section b a:focus,
.cd-section.home-section b a:active {
    color: #c0a672;
}

.cd-section:nth-of-type(even) {
    background-color: #2b2e4a;
}

.cd-section>div {
    /* vertically align <div> inside <section> */
    display: table-cell;
    vertical-align: middle;
    text-align: center;
}

.cd-section h1,
.cd-section h2 {
    width: 90%;
    margin: 0 auto;
    text-transform: uppercase;
    font-size: 2.4rem;
    line-height: 1.4;
}

.cd-section h1 b,
.cd-section h2 b {
    color: #7f7585;
}

.cd-section p {
    margin: 1em auto 0;
    line-height: 1.6;
    width: 90%;
    max-width: 680px;
    color: rgba(234, 242, 227, 0.6);
}

@media only screen and (min-width: 800px) {
    .cd-section h1,
    .cd-section h2 {
        font-size: 3rem;
    }
    .cd-section p {
        font-size: 2rem;
    }
}

.cd-scroll-down {
    position: absolute;
    left: 50%;
    right: auto;
    -webkit-transform: translateX(-50%);
    -moz-transform: translateX(-50%);
    -ms-transform: translateX(-50%);
    -o-transform: translateX(-50%);
    transform: translateX(-50%);
    bottom: 20px;
    width: 44px;
    height: 44px;
}


/* --------------------------------

no-js

-------------------------------- */

.no-js .cd-nav-trigger {
    display: none;
}

.no-js .cd-vertical-nav {
    position: static;
    height: auto;
    width: 100%;
    max-width: none;
    background-color: rgba(0, 0, 0, 0.8);
    border-radius: 0;
    -webkit-transform: scale(1);
    -moz-transform: scale(1);
    -ms-transform: scale(1);
    -o-transform: scale(1);
    transform: scale(1);
}

.no-js .cd-vertical-nav::before {
    display: none;
}

.no-js .cd-vertical-nav ul::after {
    clear: both;
    content: "";
    display: table;
}

.no-js .cd-vertical-nav li {
    display: inline-block;
    float: left;
}

.no-js .cd-vertical-nav a {
    padding: 0 1em;
    margin: 1.5em 1em;
    color: #eaf2e3;
}

.no-js .cd-vertical-nav a.active {
    color: #c0a672;
}

.no-js .cd-vertical-nav a::after,
.no-js .cd-vertical-nav a::before {
    display: none;
}

.no-js .cd-vertical-nav .label {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
}

.menu--iris .menu__item {
    margin: 0 1em;
}

.menu {
    line-height: 1;
    margin: 0 auto 3em;
    display: inline-block;
}

.menu__list {
    position: relative;
    display: -webkit-flex;
    display: flex;
    -webkit-flex-wrap: wrap;
    flex-wrap: wrap;
    margin: 0;
    padding: 0;
    list-style: none;
}

.menu__item {
    display: block;
    margin: 1em 0;
}

.menu__link {
    font-size: 1.05em;
    font-weight: bold;
    display: block;
    padding: 1em;
    cursor: pointer;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    -webkit-touch-callout: none;
    -khtml-user-select: none;
    -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
}

.menu__link:hover,
.menu__link:focus {
    outline: none;
}

.menu--iris .menu__link {
    position: relative;
    text-align: center;
    color: #b5b5b5;
    -webkit-transition: color 0.3s;
    transition: color 0.3s;
}

.menu--iris .menu__link:hover,
.menu--iris .menu__link:focus {
    color: #929292;
}

.menu--iris .menu__item:hover .menu__link {
    color: #c0a672;
}

.menu--iris .menu__link::before,
.menu--iris .menu__link::after {
    content: "";
    position: absolute;
    width: 10px;
    height: 10px;
    opacity: 0;
    border: 2px solid #c0a672;
    -webkit-transition: -webkit-transform 0.3s, opacity 0.3s;
    transition: transform 0.3s, opacity 0.3s;
    -webkit-transition-timing-function: cubic-bezier(0.17, 0.67, 0.05, 1.29);
    transition-timing-function: cubic-bezier(0.17, 0.67, 0.05, 1.29);
}

.menu--iris .menu__link::before {
    top: 0;
    left: 0;
    border-width: 2px 0 0 2px;
    -webkit-transform: translate3d(10px, 10px, 0);
    transform: translate3d(10px, 10px, 0);
}

.menu--iris .menu__link::after {
    right: 0;
    bottom: 0;
    border-width: 0 2px 2px 0;
    -webkit-transform: translate3d(-10px, -10px, 0);
    transform: translate3d(-10px, -10px, 0);
}

.menu--iris .menu__item:hover .menu__link::before,
.menu--iris .menu__item:hover .menu__link::after {
    opacity: 1;
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
}

.menu--viola .menu__item {
    position: relative;
    margin: 0 1em;
}

.menu--viola .menu__link {
    position: relative;
    display: block;
    text-align: center;
    color: #929292;
    -webkit-transition: color 0.4s;
    transition: color 0.4s;
}

.menu--viola .menu__link:hover,
.menu--viola .menu__link:focus {
    color: #fff;
}

.menu--viola .menu__item:hover .menu__link {
    color: #c0a672;
}

.menu--viola .menu__item::before,
.menu--viola .menu__item::after,
.menu--viola .menu__link::before,
.menu--viola .menu__link::after {
    content: "";
    position: absolute;
    background: #c0a672;
    -webkit-transition: -webkit-transform 0.2s;
    transition: transform 0.2s;
}

.menu--viola .menu__item::before,
.menu--viola .menu__item::after {
    top: 0;
    width: 2px;
    height: 100%;
    -webkit-transform: scale3d(1, 0, 1);
    transform: scale3d(1, 0, 1);
}

.menu--viola .menu__item::before {
    left: 0;
    -webkit-transform-origin: 50% 100%;
    transform-origin: 50% 100%;
}

.menu--viola .menu__item::after {
    right: 0;
    -webkit-transform-origin: 50% 0%;
    transform-origin: 50% 0%;
}

.menu--viola .menu__link::before,
.menu--viola .menu__link::after {
    left: 0;
    width: 100%;
    height: 2px;
    -webkit-transform: scale3d(0, 1, 1);
    transform: scale3d(0, 1, 1);
}

.menu--viola .menu__link::before {
    top: 0;
    -webkit-transform-origin: 0 50%;
    transform-origin: 0 50%;
}

.menu--viola .menu__link::after {
    bottom: 0;
    -webkit-transform-origin: 100% 50%;
    transform-origin: 100% 50%;
}

.menu--viola .menu__item:hover::before,
.menu--viola .menu__item:hover::after,
.menu--viola .menu__item:hover .menu__link::before,
.menu--viola .menu__item:hover .menu__link::after {
    -webkit-transform: scale3d(1, 1, 1);
    transform: scale3d(1, 1, 1);
    -webkit-transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
    transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
    -webkit-transition-duration: 0.4s;
    transition-duration: 0.4s;
}

.menu-portofolio {
    margin-top: 20px;
}

.menu-portofolio .menu__list {
    display: inline-block;
}

.menu-portofolio small {
    display: inline-block;
    width: 100%;
    text-align: center;
}

.menu-portofolio li.menu__item {
    width: 20%;
    display: inline-block;
}

@media screen and (max-width: 1000px) {
    .menu-portofolio li.menu__item {
        width: 40%;
    }
}

@media screen and (max-width: 550px) {
    .menu-portofolio li.menu__item {
        width: 90%;
    }
}

.img-responsive {
    display: block;
    max-width: 100%;
    height: auto;
}
	</style>
<body>

<nav class="cd-vertical-nav">
  <ul>
    <li><a href="#section1" class="active"><span class="label">Home</span></a></li>
    <li><a href="#section2"><span class="label">About</span></a></li>
    <li><a href="#section3"><span class="label">Portofolio</span></a></li>
    <li><a href="#section4"><span class="label">Contact</span></a></li>
  </ul>
</nav>

<button class="cd-nav-trigger cd-image-replace">Open navigation<span aria-hidden="true"></span></button>

<section id="section1" class="cd-section home-section">
  <div class="content-wrapper">
    <h1>Ryukazu Andara Saviestyan<br /><b>05111840000129 - PBKK C</b></h1>
  </div>
</section>

<section id="section2" class="cd-section">
  <div class="content-wrapper">
    <h2>About</h2>
    <p>A college student of Sepuluh Nopember Institute of Technology, Major at Informatics.
	 I love coding and wanna improve my coding skill in here.<br />
	 View my full skillset on <a href="https://www.linkedin.com/in/ryukazu-saviestyan-2a09431b9/" target="_blank">LinkedIn</a>.</p>
  </div>
</section>

<section id="section3" class="cd-section">
  <div class="content-wrapper">
    <h2>Portofolio</h2>
	<p>Checkout for my portofolio through this link.</p>
    <nav class="menu menu--viola menu-portofolio">
        <div class="menu__item">
          <a href="https://github.com/rykz-s" class="menu__link" target="_blank">
            <!-- <img src="https://placehold.it/50x50" alt="" class="img-responsive" /> -->
            <br />
            <small>Github</small>
          </a>
        </div>
    </nav>
  </div>
</section>

<section id="section4" class="cd-section">
  <div class="content-wrapper">
    <h2>Connect with me</h2>
    <nav class="menu menu--iris">
      <ul class="menu__list">
        <li class="menu__item">
          <a href="https://twitter.com/ryukazu_s" class="menu__link" target="_blank">Twitter</a>
        </li>
        <li class="menu__item">
          <a href="https://www.linkedin.com/in/ryukazu-saviestyan-2a09431b9/" class="menu__link" target="_blank">LinkedIn</a>
        </li>
        <li class="menu__item">
          <a href="https://github.com/rykz-s" class="menu__link" target="_blank">GitHub</a>
        </li>
        <li class="menu__item">
          <a href="mailto: ryukazuas@gmail.com" class="menu__link" target="_blank">Mail</a>
        </li>
      </ul>
    </nav>
  </div>
</section>
<!-- -->
<script>
jQuery(document).ready(function($) {
    var scrolling = false;
    var contentSections = $(".cd-section"),
        verticalNavigation = $(".cd-vertical-nav"),
        navigationItems = verticalNavigation.find("a"),
        navTrigger = $(".cd-nav-trigger"),
        scrollArrow = $(".cd-scroll-down");

    $(window).on("scroll", checkScroll);

    //smooth scroll to the selected section
    verticalNavigation.on("click", "a", function(event) {
        event.preventDefault();
        smoothScroll($(this.hash));
        verticalNavigation.removeClass("open");
    });

    //smooth scroll to the second section
    scrollArrow.on("click", function(event) {
        event.preventDefault();
        smoothScroll($(this.hash));
    });

    // open navigation if user clicks the .cd-nav-trigger - small devices only
    navTrigger.on("click", function(event) {
        event.preventDefault();
        verticalNavigation.toggleClass("open");
    });

    function checkScroll() {
        if (!scrolling) {
            scrolling = true;
            !window.requestAnimationFrame ?
                setTimeout(updateSections, 300) :
                window.requestAnimationFrame(updateSections);
        }
    }

    function updateSections() {
        var halfWindowHeight = $(window).height() / 2,
            scrollTop = $(window).scrollTop();
        contentSections.each(function() {
            var section = $(this),
                sectionId = section.attr("id"),
                navigationItem = navigationItems.filter('[href^="#' + sectionId + '"]');
            section.offset().top - halfWindowHeight < scrollTop &&
                section.offset().top + section.height() - halfWindowHeight > scrollTop ?
                navigationItem.addClass("active") :
                navigationItem.removeClass("active");
        });
        scrolling = false;
    }

    function smoothScroll(target) {
        $("body,html").animate({ scrollTop: target.offset().top }, 300);
    }
});
</script>
<!-- <script type="text/javascript" src=""></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://cpwebassets.codepen.io/assets/common/stopExecutionOnTimeout-8216c69d01441f36c0ea791ae2d4469f0f8ff5326f00ae2d00e4bb7d20e24edb.js"></script>
</body>
</html>
