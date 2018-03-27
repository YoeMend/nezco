@extends ('frontend.layaut')
@section('title', "Galeria -")

@section('tit-cabecera')

@section ('cabecera')
	@include ('frontend.cabecera')
@endsection

@section ('content')

	<div class="container">
			
		<div class="col pt-3">
			<h2 class="font-italic"> Título del album</h2>
		</div>
		<hr>

        <div class="col p-0 m-0">       

            <ul id="lightgallery" class="cards cards-galery text-center list-unstyled row">

                <li class=" card py-2" data-responsive="{{ asset('images/2.jpg') }}" data-src="{{ asset('images/2.jpg') }}" data-sub-html="<h4>Titulo</h4><p>acepta etiqueta HTML</p>" {{-- data-pinterest-text="Pin it1" data-tweet-text="share on twitter 1" --}}>
                    <a href="">
                        <img class="img-fluid" src="{{ asset('images/2.jpg') }}" alt="Thumb-1">
                    </a>
                </li>
       

                <li class=" card py-2" data-responsive="{{ asset('images/1.jpg') }}" data-src="{{ asset('images/1.jpg') }}" data-sub-html="" data-pinterest-text="" data-tweet-text="">
                    <a href="">
                        <img class="img-fluid" src="{{ asset('images/1.jpg') }}" alt="Thumb-2">
                    </a>
                </li>
         
                <li class=" card py-2" data-responsive="{{ asset('images/3.jpg') }}" data-src="{{ asset('images/3.jpg') }}" data-sub-html="<h4>Bowness Bay</h4><p>A beautiful Sunrise this morning taken En-route to Keswick not one as planned but I'm extremely happy I was passing the right place at the right time....</p>" data-pinterest-text="Pin it1" data-tweet-text="share on twitter 1">
                    <a href="">
                        <img class="img-fluid" src="{{ asset('images/3.jpg') }}" alt="Thumb-3">
                    </a>
                </li>
     
                <li class=" card py-2" data-responsive="{{ asset('images/4.jpg') }}" data-src="{{ asset('images/4.jpg') }}" data-sub-html="<h4>Bowness Bay</h4><p>A beautiful Sunrise this morning taken En-route to Keswick not one as planned but I'm extremely happy I was passing the right place at the right time....</p>" data-pinterest-text="Pin it1" data-tweet-text="share on twitter 1">
                    <a href="">
                        <img class="img-fluid" src="{{ asset('images/4.jpg') }}" alt="Thumb-4">
                    </a>
                </li>
    

                <li class=" card py-2" data-responsive="{{ asset('images/5.jpg') }}" data-src="{{ asset('images/5.jpg') }}" data-sub-html="<h4>Bowness Bay</h4><p>A beautiful Sunrise this morning taken En-route to Keswick not one as planned but I'm extremely happy I was passing the right place at the right time....</p>" data-pinterest-text="Pin it1" data-tweet-text="share on twitter 1">
                    <a href="">
                        <img class="img-fluid" src="{{ asset('images/5.jpg') }}" alt="Thumb-4">
                    </a>
                </li>

                <li class=" card py-2" data-responsive="{{ asset('images/1.jpg') }}" data-src="{{ asset('images/1.jpg') }}" data-sub-html="" data-pinterest-text="" data-tweet-text="">
                    <a href="">
                        <img class="img-fluid" src="{{ asset('images/1.jpg') }}" alt="Thumb-2">
                    </a>
                </li>
         
                <li class=" card py-2" data-responsive="{{ asset('images/3.jpg') }}" data-src="{{ asset('images/3.jpg') }}" data-sub-html="<h4>Bowness Bay</h4><p>A beautiful Sunrise this morning taken En-route to Keswick not one as planned but I'm extremely happy I was passing the right place at the right time....</p>" data-pinterest-text="Pin it1" data-tweet-text="share on twitter 1">
                    <a href="">
                        <img class="img-fluid" src="{{ asset('images/3.jpg') }}" alt="Thumb-3">
                    </a>
                </li>
     
                <li class=" card py-2" data-responsive="{{ asset('images/4.jpg') }}" data-src="{{ asset('images/4.jpg') }}" data-sub-html="<h4>Bowness Bay</h4><p>A beautiful Sunrise this morning taken En-route to Keswick not one as planned but I'm extremely happy I was passing the right place at the right time....</p>" data-pinterest-text="Pin it1" data-tweet-text="share on twitter 1">
                    <a href="">
                        <img class="img-fluid" src="{{ asset('images/4.jpg') }}" alt="Thumb-4">
                    </a>
                </li>
    

                <li class=" card py-2" data-responsive="{{ asset('images/5.jpg') }}" data-src="{{ asset('images/5.jpg') }}" data-sub-html="<h4>Bowness Bay</h4><p>A beautiful Sunrise this morning taken En-route to Keswick not one as planned but I'm extremely happy I was passing the right place at the right time....</p>" data-pinterest-text="Pin it1" data-tweet-text="share on twitter 1">
                    <a href="">
                        <img class="img-fluid" src="{{ asset('images/2.jpg') }}" alt="Thumb-4">
                    </a>
                </li>
                <li class=" card py-2" data-responsive="{{ asset('images/5.jpg') }}" data-src="{{ asset('images/5.jpg') }}" data-sub-html="<h4>Bowness Bay</h4><p>A beautiful Sunrise this morning taken En-route to Keswick not one as planned but I'm extremely happy I was passing the right place at the right time....</p>" data-pinterest-text="Pin it1" data-tweet-text="share on twitter 1">
                    <a href="">
                        <img class="img-fluid" src="{{ asset('images/5.jpg') }}" alt="Thumb-4">
                    </a>
                </li>

                <li class=" card py-2" data-responsive="{{ asset('images/1.jpg') }}" data-src="{{ asset('images/1.jpg') }}" data-sub-html="" data-pinterest-text="" data-tweet-text="">
                    <a href="">
                        <img class="img-fluid" src="{{ asset('images/1.jpg') }}" alt="Thumb-2">
                    </a>
                </li>
         
                <li class=" card py-2" data-responsive="{{ asset('images/3.jpg') }}" data-src="{{ asset('images/3.jpg') }}" data-sub-html="<h4>Bowness Bay</h4><p>A beautiful Sunrise this morning taken En-route to Keswick not one as planned but I'm extremely happy I was passing the right place at the right time....</p>" data-pinterest-text="Pin it1" data-tweet-text="share on twitter 1">
                    <a href="">
                        <img class="img-fluid" src="{{ asset('images/3.jpg') }}" alt="Thumb-3">
                    </a>
                </li>
     
                <li class=" card py-2" data-responsive="{{ asset('images/4.jpg') }}" data-src="{{ asset('images/4.jpg') }}" data-sub-html="<h4>Bowness Bay</h4><p>A beautiful Sunrise this morning taken En-route to Keswick not one as planned but I'm extremely happy I was passing the right place at the right time....</p>" data-pinterest-text="Pin it1" data-tweet-text="share on twitter 1">
                    <a href="">
                        <img class="img-fluid" src="{{ asset('images/4.jpg') }}" alt="Thumb-4">
                    </a>
                </li>
    

                <li class=" card py-2" data-responsive="{{ asset('images/5.jpg') }}" data-src="{{ asset('images/5.jpg') }}" data-sub-html="<h4>Bowness Bay</h4><p>A beautiful Sunrise this morning taken En-route to Keswick not one as planned but I'm extremely happy I was passing the right place at the right time....</p>" data-pinterest-text="Pin it1" data-tweet-text="share on twitter 1">
                    <a href="">
                        <img class="img-fluid" src="{{ asset('images/2.jpg') }}" alt="Thumb-4">
                    </a>
                </li>
                <li class=" card py-2" data-responsive="{{ asset('images/5.jpg') }}" data-src="{{ asset('images/5.jpg') }}" data-sub-html="<h4>Bowness Bay</h4><p>A beautiful Sunrise this morning taken En-route to Keswick not one as planned but I'm extremely happy I was passing the right place at the right time....</p>" data-pinterest-text="Pin it1" data-tweet-text="share on twitter 1">
                    <a href="">
                        <img class="img-fluid" src="{{ asset('images/5.jpg') }}" alt="Thumb-4">
                    </a>
                </li>

                <li class=" card py-2" data-responsive="{{ asset('images/1.jpg') }}" data-src="{{ asset('images/1.jpg') }}" data-sub-html="" data-pinterest-text="" data-tweet-text="">
                    <a href="">
                        <img class="img-fluid" src="{{ asset('images/1.jpg') }}" alt="Thumb-2">
                    </a>
                </li>
         
                <li class=" card py-2" data-responsive="{{ asset('images/3.jpg') }}" data-src="{{ asset('images/3.jpg') }}" data-sub-html="<h4>Bowness Bay</h4><p>A beautiful Sunrise this morning taken En-route to Keswick not one as planned but I'm extremely happy I was passing the right place at the right time....</p>" data-pinterest-text="Pin it1" data-tweet-text="share on twitter 1">
                    <a href="">
                        <img class="img-fluid" src="{{ asset('images/3.jpg') }}" alt="Thumb-3">
                    </a>
                </li>
     
                <li class=" card py-2" data-responsive="{{ asset('images/4.jpg') }}" data-src="{{ asset('images/4.jpg') }}" data-sub-html="<h4>Bowness Bay</h4><p>A beautiful Sunrise this morning taken En-route to Keswick not one as planned but I'm extremely happy I was passing the right place at the right time....</p>" data-pinterest-text="Pin it1" data-tweet-text="share on twitter 1">
                    <a href="">
                        <img class="img-fluid" src="{{ asset('images/4.jpg') }}" alt="Thumb-4">
                    </a>
                </li>
    

                <li class=" card py-2" data-responsive="{{ asset('images/5.jpg') }}" data-src="{{ asset('images/5.jpg') }}" data-sub-html="<h4>Bowness Bay</h4><p>A beautiful Sunrise this morning taken En-route to Keswick not one as planned but I'm extremely happy I was passing the right place at the right time....</p>" data-pinterest-text="Pin it1" data-tweet-text="share on twitter 1">
                    <a href="">
                        <img class="img-fluid" src="{{ asset('images/2.jpg') }}" alt="Thumb-4">
                    </a>
                </li>

            </ul>
   
        </div>  
    </div>


		<script src="{{ asset('js/lightgallery.js') }}"></script>
         <script src="{{ asset('js/minigrid.min.js') }}"></script>
        <script>
            lightGallery(document.getElementById('lightgallery'));
        </script>

    <script>

    (function(){
        var grid;
        function init() {
            grid = new Minigrid({
              container: '.cards',
              item: '.card',
              gutter: 18
            });
            grid.mount();
        }
  
      // mount
      function update() {
        grid.mount();
      }

    document.addEventListener('DOMContentLoaded', init);
    window.addEventListener('resize', update);

    })();

    </script>

		
		
	

@endsection
