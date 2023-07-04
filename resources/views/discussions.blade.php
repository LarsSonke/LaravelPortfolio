@extends('layout')

@section('content')
  <article class="discussion-page">
    <h2>Discussions about sections and articles</h2>
  </article>
  <article class="discussion-info">
    <p id="rcorners2">Here you will find posts about certain discussions regarding of ICT.
      on top of that I will also give my opinion on these discussions.</p>
  </article>
  <pre></pre>
  <article class="discussions">
    <div id="rcorners1">
      <h2>Discussion one:</h2>
      <h4>Which is the right tag to use? 'section' or 'article'</h4>
      <h4>Start of the discussion:</h4>
      <p>I have a page made up of various "sections" like videos, a newsfeed etc.. I am a bit confused how to represent
        these with HTML5. Currently I have them as HTML5 'sections', but on further inspection it looks they the more
        correct tag would be 'article'. Could anyone shed some light on this for me?</p>
      <a href="https://stackoverflow.com/questions/7549561/section-vs-article-html5" target="_blank">Click here for the
        full post</a>
      <pre>

      </pre>
      <h2>Discussion two:</h2>
      <h4>Should 'sections' have 'articles' or should 'articles' have 'sections'?</h4>
      <h4>Start of the discussion:</h4>
      <p>I'm reading Mark Pilgirm's "Dive into HTML5" and in the semantics section,
        it talks about how HTML5 introduces the 'article' and 'section' elements.
        It says that 'section's represent a generic document or section, while 'article's represent a self-contained
        composition.
        I don't see a logically semantic parent-child relationship either way.</p>
      <a href="https://stackoverflow.com/questions/9527378/should-sections-have-articles-or-should-articles-have-sections"
        target="_blank">Click here for the full post</a>
      <pre>

      </pre>
      <h2>Discussion three:</h2>
      <h4>'section' or 'article', which is contained in which?</h4>
      <h4>Start of the discussion:</h4>
      <p>Trying to get my head around the new semantic elements in HTML5.
        Does a 'section' belong inside an 'article' or is it the other way around?
        Does it even matter?
        I'm looking at re-structuring a wordpress blog.</p>
      <a href="https://stackoverflow.com/questions/1789692/section-or-article-which-is-contained-in-which"
        target="_blank">Click here for the full post</a>
    </div>
  </article>
  <pre></pre>
  <article class="discussion-opinion">
    <div id="rcorners1">
      <h3>My opinion</h3>
      <p>After reading all of the full posts I've made up my mind, I think there is no right or wrong option,
        but I do think there are certain cases where 'article' inside of 'section' works better and the other way around
        too ofcourse.
        Articles and sections are related but they still are really different,
        so it makes sense that their uses are different too.
        In my opinion it would be better to use 'article' inside of 'section' when you have a text block that is
        completely unrelated to other blocks on the page,
        but I would rather use 'section' inside of 'article' when you have the main part of the text and you try to make
        a
        smaller paragraph inside of the main part about a subject thats related to the main subject. </p>
    </div>
  </article>
  <pre></pre>
  <summary id="rcorners1">
    <p>In conclusion there is not really a right way on whether to use 'sections' inside of 'articles' or the other way
      around,
      both ways have different uses but it is mainly about preference.</p>
  </summary>
@endsection
