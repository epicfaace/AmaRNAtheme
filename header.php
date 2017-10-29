<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Project AmaRNA- <? echo get_the_title(); ?></title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script>
    $(document).ready(function(){
  $('#diseases-dropdown').click(function(){
    menuResolveConflict('diseases','about');
  });
  $('#about-dropdown').click(function(){
    menuResolveConflict('about','diseases');
  });
  function menuResolveConflict(id1, id2) {
    $('#'+id1+'-dropdown').toggleClass('active-menu');
    if($('#'+id2+'-dropdown').hasClass('active-menu')){
      $('#'+id2+'-dropdown').removeClass('active-menu');
    }
    $('#'+id1+'-menu').toggleClass('display');
    if($('#'+id2+'-menu').hasClass('display')){
      $('#'+id2+'-menu').removeClass('display');
    }
  }
});

  </script>
  <?php wp_head(); ?>
</head>
<body>

<div id="top-nav">
    <nav>
      <div class="container-fluid" id="navbar">
        <div class="row">
          <div class="col">
            <a id="diseases-dropdown">Diseases
              <svg>
                <polygon points="0,3 12,3 6,9"/>
              </svg>
            </a>
          </div>
          <div class="col-auto">
            <a href="index.html" id="logo">
              <img src="images/navbar.png">
            </a>
          </div>
          <div class="col">
            <a id="about-dropdown">About
              <svg>
                <polygon points="0,3 12,3 6,9"/>
              </svg>
            </a>
          </div>
        </div>
      </div>
      <div id="diseases-menu">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-3">
              <div class="row">
                <div class="col-5 col-sm-3 col-lg-12">
                  <a class="menu-button">
                    <img src="images/index.png">
                  </a>
                  <h5>Index</h5>
                </div>
                <div class="col-7 col-sm-9 col-lg-12"><p>Browse the alphabetized list of diseases we have information about, along with a short description of each.</p></div>
              </div>
              <hr class="hidden-lg-up">
            </div>
            <div class="col-lg-3">
              <div class="row">
                <div class="col-5 col-sm-3 col-lg-12">
                  <a class="menu-button">
                    <img src="images/research.png">
                  </a>
                  <h5>Research</h5>
                </div>
                <div class="col-7 col-sm-9 col-lg-12"><p>Learn about the latest research our pre-med students are currently exploring and/or conducting.</p></div>
              </div>
              <hr class="hidden-lg-up">
            </div>
            <div class="col-lg-3">
              <div class="row">
                <div class="col-5 col-sm-3 col-lg-12">
                  <a class="menu-button">
                    <img src="images/glossary.png">
                  </a>
                  <h5>Glossary</h5>
                </div>
                <div class="col-7 col-sm-9 col-lg-12"><p>Find the definitions of scientific terms here. We'll break down those seemingly complex terms for you to help you understand them.</p></div>
              </div>
              <hr class="hidden-lg-up">
            </div>
            <div class="col-lg-3">
              <div class="row">
                <div class="col-5 col-sm-3 col-lg-12">
                  <a class="menu-button">
                    <img src="images/rna.png">
                  </a>
                  <h5>Knowledge</h5>
                </div>
                <div class="col-7 col-sm-9 col-lg-12"><p>Solidify the foundations of your knowledge, as our articles will build upon those.</p></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div id="about-menu">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-3">
              <div class="row">
                <div class="col-5 col-sm-3 col-lg-12">
                  <a class="menu-button">
                    <img src="images/story.png">
                  </a>
                  <h5>Our Story</h5>
                </div>
                <div class="col-7 col-sm-9 col-lg-12"><p>Learn more about the origins of the name of our organization and about our purpose.</p></div>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="row">
                <div class="col-5 col-sm-3 col-lg-12">
                  <a class="menu-button">
                    <img src="images/projects.png">
                  </a>
                  <h5>Our Projects</h5>
                </div>
                <div class="col-7 col-sm-9 col-lg-12"><p>Find out more about the projects we're currently working on, and learn how you can help.</p></div>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="row">
                <div class="col-5 col-sm-3 col-lg-12">
                  <a class="menu-button">
                    <img src="images/team.png">
                  </a>
                  <h5>Who We Are</h5>
                </div>
                <div class="col-7 col-sm-9 col-lg-12"><p>Get to know us! Meet the individuals that comprise our organization.</p></div>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="row">
                <div class="col-5 col-sm-3 col-lg-12">
                  <a class="menu-button">
                    <img src="images/contact.png">
                  </a>
                  <h5>Contact Us</h5>
                </div>
                <div class="col-7 col-sm-9 col-lg-12"><p>We're human too! All of us want to help people, and we're passionate about what we do. Let us know how we can make this experience more comfortable for you.</p></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </nav>
  </div>
  <div id="side-nav">
  </div>

</nav>

<div class="container">