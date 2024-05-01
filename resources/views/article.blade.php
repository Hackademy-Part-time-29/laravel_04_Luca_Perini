<x-layout>
    <header>
      <h1>Hai selezionato {{$pageArticle['title']}}:</h1>
  </header>
<main>
  <div class="article-section">
    <div class="link-items">
      <a href="{{route('welcome')}}">Home</a>
      <a href="{{route('articles')}}">>Articles</a>
    </div>
    <h2>{{$pageArticle['title']}}</h2>
    <br>
    <p>{{$pageArticle['description']}}</p>
  </div>

</main>
</x-layout>
