@extends('layout')

@section('head')
<title>Profile</title>
@endsection

@section('content')

  <h1>Profile</h1>

  <main>
    <h2>Welcome to my profile page!</h2>
    <div id="rcorners2">
      <article class="profile-info">
        <p>On this page I will be giving you information about who I am and what my interests are.</p>
    </div>
    </article>
    <article class="profile-me">
      <h3>Who am I?</h3>
      <div id="rcorners1">
        <p>
          Greetings! My name is Lars Sonke.
          I am 20 years old and I was born 12 November 2000.
          Since I was born I have been living in 's-Gravenpolder with both my parents.
          I have no experience with coding yet but I am looking forward to learning more about it!
        </p>
      </div>
    </article>
    <article class="profile-hobbies">
      <h3> Hobbies </h3>
      <div class="hobbies">
        <div id="rcorners3">
          <ul>
            <li> Playing video games</li>
            <li>Drawing</li>
            <li>Watching anime</li>
            <li>Cooking</li>
          </ul>
          <p>The main thing I spend my free time on is playing video games,
            my favorite ones in order I play the most nowadays are:
          <ol>
            <div class="game-images">
              <div id="game-images">
                <li>League of legends</li><img src="img/league.png">
                <li>Genshin impact</li><img src="img/genshin.png">
                <li>Valorant</li> <img src="img/valorant.png">
                <li>Dead by Daylight</li><img src="img/dbd.png">
              </div>
            </div>
          </ol>
        </div>
      </div>
    </article>
    <pre>

    </pre>
    <article class="profile-other">
      <h3>Other information about me</h3>
      <div id="rcorners1">
        <h4>Just a bit of random information about me:</h4>
        <p>Since I was 6 I started playing soccer but I stopped when i was 17,
          I am considering to start playing soccer again but I am not sure yet.
        <pre></pre>
        <p>
          I used to watch a lot of movies.
          My favorite movie used to be Real Steel,
          which is a movie about different types of robots who are controlled by humans to fight eachother for money,
          fame
          and other prizes.
          After I started watching anime I kind of stopped watching movies.</p>
        <pre></pre>
        <p>
          My favorite anime is Danganronpa,
          which is a show about a few students who get locked up into their school building,
          all of the students have a special talent, such as being good at baseball or being good at gambling.
          After they get locked up they need to kill eachother in order to leave the school.
          Once a kill has happened an investigation will start and it will be followed by a class trial.
          The students will try to figure out who the culprit is during the class trial and if they find the right
          culprit
          that person will be executed,
          if they find the wrong culprit the entire class except for that person will be executed.
        </p>
      </div>
    </article>
  </main>
@endsection
