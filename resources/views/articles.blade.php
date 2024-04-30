<x-layout>
    <header>
      <h1>Articoli</h1>
  </header>
<main>
<div class="articles">
  @foreach ($pageArticles as $pageArticle)
  <div class="card">
    <div class="card-content">
      <h2>{{$pageArticle['title']}}</h2>
      <p>{{$pageArticle['description']}}</p>
      <img src="https://picsum.photos/200" alt="Immagine Articolo">
      <a href="{{route('article',['id'=>$pageArticle['id']])}}" class="btn">Leggi di più</a>
    </div>
  </div>
  @endforeach  
</div>
</main>
</x-layout>
