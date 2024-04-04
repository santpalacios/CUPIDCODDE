<?php
require_once 'conec.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Header</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-w2nHjr+dIYUWxjUvBp+OXQmU5FKdqUxX0qCmqnpFQSgk/xC79vZ2cbqGNdHywqJT3tzijTk5Sj2EZKc+IWQ62w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <link rel="shortcut icon" href="images/favico.ico" />

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</head>

<body>

  <style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap");

    .light {
      --mainColor: #64bcf4;
      --hoverColor: #5bacdf;
      --backgroundColor: #f1f8fc;
      --darkOne: #312f3a;
      --darkTwo: #45424b;
      --lightOne: #919191;
      --lightTwo: #aaa;
    }

    .dark {
      --mainColor: #64bcf4;
      --hoverColor: #5bacdf;
      --backgroundColor: #192e3a;
      --darkOne: #f3f3f3;
      --darkTwo: #fff;
      --lightOne: #ccc;
      --lightTwo: #e7e3e3;
    }

    *,
    *::before,
    *::after {
      padding: 0;
      margin: 0;
      box-sizing: border-box;
    }

    body {
      font-family: "Poppins", sans-serif;
    }

     .stop-scrolling {
      height: 100%;
      overflow: hidden;
    } 

    img {
      width: 100%;
    }

    a {
      text-decoration: none;
    }

    .big-wrapper {
      position: relative;
      padding: 1.7rem 0 2rem;
      width: 100%;
      min-height: 100vh;
      overflow: hidden;
      background-color: var(--backgroundColor);
      display: flex;
      flex-direction: column;
      justify-content: space-between;
    }

    .container {
      position: relative;
      max-width: 81rem;
      width: 100%;
      margin: 0 auto;
      padding-top: 0 3m;
      z-index: 2;

    }

    header {
      padding-top: 2rem;
      position: relative;
      z-index: 6;
    }

    header .container {
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .overlay {
      display: none;
    }

    .logo {
      display: flex;
      align-items: center;
      cursor: pointer;
    }

    .logo img {
      width: 1px;
      margin-right: 0.6rem;
      margin-top: -0.6rem;
    }

    .logo h3 {
      color: var(--darkOne);
      font-size: 1.55rem;
      line-height: 1.2;
      font-weight: 700;
    }

    .links_header ul {
      display: flex;
      list-style: none;
      align-items: center;
    }

    .links_header a {
      color: var(--lightTwo);
      margin-left: 4.5rem;
      display: inline-block;
      transition: 0.3s;
    }

    .links_header a:hover {
      color: var(--hoverColor);
      transform: scale(1.05);
      text-decoration: none;
    }

    .btn {
      display: inline-block;
      padding: 0.9rem 1.9rem;
      color: #fff !important;
      background-color: var(--mainColor);
      border-radius: 16px;
      text-transform: capitalize;
      transition: 0.3s;
    }

    .btn:hover {
      background-color: var(--hoverColor);
      transform: scale(1) !important;
    }

    .hamburger-menu {
      position: relative;
      z-index: 99;
      width: 2rem;
      height: 2rem;
      display: flex;
      align-items: center;
      justify-content: center;
      cursor: pointer;
      display: none;
    }

    .hamburger-menu .bar {
      position: relative;
      width: 100%;
      height: 3px;
      background-color: var(--darkTwo);
      border-radius: 3px;
      transition: 0.5s;
    }

    .bar::before,
    .bar::after {
      content: "";
      position: absolute;
      width: 100%;
      height: 100%;
      background-color: var(--darkTwo);
      border-radius: 3px;
      transition: 0.5s;
    }

    .bar::before {
      transform: translateY(-8px);
    }

    .bar::after {
      transform: translateY(8px);
    }

    .big-wrapper.active .hamburger-menu .bar {
      background-color: transparent;
    }

    .big-wrapper.active .bar::before {
      transform: translateY(0) rotate(-45deg);
    }

    .big-wrapper.active .bar::after {
      transform: translateY(0) rotate(45deg);
    }

    .showcase-area .container {
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      align-items: center;
      justify-content: center;
    }

    .big-title {
      font-size: 1.4rem;
      color: var(--darkOne);
      text-transform: capitalize;
      line-height: 1.4;
    }

    .text {
      color: var(--lightOne);
      font-size: 1.1rem;
      margin: 1.9rem 0 2.5rem;
      max-width: 600px;
      line-height: 2.3;
    }

    .showcase-area .btn {
      box-shadow: 0 0 40px 2px rgba(0, 0, 0, 0.05);
    }

    .person {
      width: 100%;
      transform: translate(15%, 25px);
    }

    .toggle-btn {
      display: inline-block;
      border: none;
      background: var(--darkTwo);
      color: var(--backgroundColor);
      outline: none;
      cursor: pointer;
      height: 39px;
      width: 39px;
      border-radius: 50%;
      font-size: 1.1rem;
      transition: 0.3s;
    }

    .toggle-btn i {
      line-height: 39px;
    }

    .toggle-btn:hover {
      background: var(--mainColor);
    }

    .big-wrapper.light .toggle-btn i:last-child {
      display: none;
    }

    .big-wrapper.light .toggle-btn i:first-child {
      display: block;
    }

    .big-wrapper.dark .toggle-btn i:last-child {
      display: block;
    }

    .big-wrapper.dark .toggle-btn i:first-child {
      display: none;
    }

    .shape {
      position: absolute;
      z-index: 0;
      width: 500px;
      bottom: -180px;
      left: -15px;
      opacity: 0.1;
    }

    .copy {
      position: absolute;
      top: 0;
      left: 0;
      z-index: 100;
      animation: appear 1s 1 both;
    }

    @keyframes appear {
      0% {
        clip-path: circle(30% at -25% -25%);
      }

      100% {
        clip-path: circle(150% at 0 0);
      }
    }

    @media screen and (max-width: 870px) {
      .hamburger-menu {
        display: flex;
      }

      .links_header {
        position: fixed;
        top: 0;
        right: 0;
        max-width: 450px;
        width: 100%;
        height: 100%;
        background-color: var(--mainColor);
        z-index: 95;
        display: flex;
        align-items: center;
        justify-content: center;
        transform: translateX(100%);
        transition: 0.5s;
      }

      .links_header ul {
        flex-direction: column;
      }

      .links_header a {
        color: #fff;
        margin-left: 0;
        padding: 2rem 0;
      }

      .links_header .btn {
        background: none;
      }

      .overlay {
        display: block;
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: rgba(0, 0, 0, 0.7);
        opacity: 0;
        pointer-events: none;
        transition: 0.5s;
      }

      .big-wrapper.active .links_header {
        transform: translateX(0);
        box-shadow: 0 0 50px 2px rgba(0, 0, 0, 0.4);
      }

      .big-wrapper.active .overlay {
        pointer-events: all;
        opacity: 1;
      }

      .showcase-area {
        padding: 2.5rem 0;
        max-width: 700px;
        margin: 0 auto;
      }

      .showcase-area .container {
        grid-template-columns: 1fr;
        justify-content: center;
        grid-gap: 2rem;
      }

      .big-title {
        font-size: 1.1rem;
      }

      .text {
        font-size: 0.95rem;
        margin: 1.4rem 0 1.5rem;
      }

      .person {
        width: 100%;
        transform: none;
      }

      .logo h3 {
        font-size: 1.8rem;
      }

      .shape {
        bottom: -180px;
        left: -150px;
      }
    }

    @media screen and (max-width: 470px) {
      .container {
        padding: 0 1.5rem;
      }

      .big-title {
        font-size: 0.9rem;
      }

      .text {
        margin: 1.1rem 0 1.5rem;
      }

      .showcase-area .btn {
        font-size: 0.8rem;
      }
    }
  </style>

  <header>
    <div class="container">
      <div class="logo">
        <img src="images/logo.png" alt="Logo" />
        <a class="logo" href="index.html"><h3>CupidCode</h3></a>
      </div>

      <div class="links_header">
        <ul>
          <li><a href="index.html">Inicio</a></li>
          <li><a href="#">Sobre nosotros</a></li>
          <li><a href="#">¿Por qué CupidCode?</a></li>
          <li><a href="#"></a></li>

        </ul>
      </div>
  </header>

  <script src="js/index.js"></script>
</body>

</html>