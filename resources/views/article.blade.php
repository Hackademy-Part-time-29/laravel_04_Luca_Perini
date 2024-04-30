<x-layout>
    <header>
      <h1>Hai selezionato {{$pageArticle['title']}}:</h1>
  </header>
<main>
    <a href="{{route('welcome')}}">Home</a>
    <a href="{{route('articles')}}">>Articles</a>
    <h2>{{$pageArticle['title']}}</h2>
    <br>
    <p>{{$pageArticle['description']}}</p>
</main>
</x-layout>
