<!DOCTYPE html>
@extends('layout')

@section('head')
<title>Home page</title>
@endsection

@section('content')
  <h1>Home</h1>
  <h2>Welcome to my site!</h2>
  <article class="home-info">
    <div id="rcorners2">
      <p>On this site you will be able to find information about the HBO-ICT programme, some information about me, my
        view on ICT,
        Certain discussions regarding ICT problems and a few useful sites that we use for the HBO-ICT programme.
      </p>
    </div>
  </article>
  <pre></pre>
  <article class="home-pitch-intro">
    <h3>My pitch</h3>
    <div id="rcorners1">
      <div class="index-images">
        <div id="index-images">
          <img src="img/source-code.png">
          <p>In my pitch I will be talking about:</p>
          <ul>
            <li>Why I chose to do the HBO-ICT programme,</li>
            <li>How my site functions,</li>
            <li>Where you can find certain information</li>
          </ul>
        </div>
      </div>
    </div>
  </article>
  <pre></pre>
  <article class="home-pitch-info">
    <div id="rcorners1">
      <h4>The reason I chose HBO-ICT at HZ Middelburg</h4>
      <p>Since I was little I have been interested in computers,
        instead of playing outside I would rather sit at home and play games on our computer.
        This basically never changed and I still enjoy playing video games a lot,
        but I want to expand my knowledge now.
      <pre></pre>
      <p>I want to know more about ICT rather than only caring about video games.
      </p>
      <h4>I want to learn:</h4>
      <ul>
        <li>Why the world needs people who have a job that requires a lot ICT knowledge.</li>
        <li>What my futurue could look like after doing this course</li>
        <li>How to effectively use different coding languages</li>
      </ul>
      <p>Thats why I chose to do HBO-ICT and have my future job be something ICT related,
        at this point of time I am not quite sure what I want to be specialized in.
        I am leaning towards game development since that has been my main hobby since I was 5.
        But maybe I will find more interest in something else while im attending this course.
        Whether it is creating mobile phone apps, websites or something else,
        does not matter to me yet,
        but I hope to find out what I want to specialize in through this course.
        Right now I am not very experienced with coding but I hope to learn a lot about it soon,
        that is why I chose to go to HZ Middelburg since I heard a lot of good things from friends who also go/went to
        hz.
      </p>
      <div id="index-images">
        <img src="img/hz.png" style="width: 200px;">
      </div>
    </div>
  </article>
@endsection
