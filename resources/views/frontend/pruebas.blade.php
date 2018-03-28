<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>JS Bin</title>
 {{--  <script src="https://npmcdn.com/minigrid@3.0.1/dist/minigrid.min.js"></script> --}}

 
<style>
  
.card {
  width: 22%;
}

/* Anything bellow here isn't necessary, it's only for the demo */

.card {
  background-color: #F25D9C ; 
}

/* Set some height to cards */
/*.card:nth-child(1) {
  height: 240px;
}

.card:nth-child(2) {
  height: 190px;
}

.card:nth-child(3) {
  height: 210px;
}

.card:nth-child(4) {
  height: 230px;
}

.card:nth-child(5) {
  height: 180px;
}

.card:nth-child(6) {
  height: 200px;
}*/

body {
  background-color: #F9F7F7;
}

.cards {
  width: 100%;
  max-width: 1040px;
  margin: 0 auto;
  text-align: center;
}
</style>
</head>
<body>
  <div class="cards">
    <div class="card">
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga sequi, ut recusandae dolores minima in illo rem culpa dolore quaerat aspernatur, dolor iure. Doloremque quae illum sunt aut, voluptatum impedit!
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid quisquam, incidunt dolore ipsa distinctio, sunt hic nesciunt recusandae corporis ea fugiat! Officiis debitis quam facilis? Repudiandae odio, voluptatum a fugit.
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi, perspiciatis, esse. Nisi eos quod accusamus eligendi repellendus quaerat vero itaque, molestias ad ullam quia dicta error, ut et pariatur aliquid.
    </div>
    <div class="card">
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni officiis accusantium molestiae, ducimus maxime aut ex soluta error eius laudantium. Illum fugit, ex. Quaerat quo, numquam quidem nulla minima consequatur!
    </div>
    <div class="card">
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem quisquam repellendus eveniet debitis nesciunt cumque architecto soluta incidunt tenetur tempore quos quam, iusto voluptates porro rem pariatur rerum itaque illo.
    </div>
    <div class="card">
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut natus recusandae rem quaerat explicabo eos officiis enim commodi cumque ipsa, assumenda, voluptates iure dolorem, dolores eum consectetur repellendus veritatis. Laboriosam!
    </div>
    <div class="card">
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio voluptates dignissimos at, fugit aliquam voluptas pariatur, soluta harum accusamus reiciendis ipsam voluptatem distinctio, similique, nihil voluptatum quidem error. Perferendis, quas.
    </div>
    <div class="card">
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic ex consectetur voluptatibus libero expedita nostrum quas numquam accusantium ratione odio, dicta non quo assumenda praesentium nobis sit voluptates magnam deserunt?
    </div>
     <div class="card">
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio voluptates dignissimos at, fugit aliquam voluptas pariatur, soluta harum accusamus reiciendis ipsam voluptatem distinctio, similique, nihil voluptatum quidem error. Perferendis, quas.
    </div>
    <div class="card">
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic ex consectetur voluptatibus libero expedita nostrum quas numquam accusantium ratione odio, dicta non quo assumenda praesentium nobis sit voluptates magnam deserunt?
      <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus, rem quibusdam ut cum quisquam quidem laudantium molestiae voluptates dolore itaque, magni eum aspernatur ullam fugit beatae incidunt odit ea modi!</div>
      <div>Numquam eaque explicabo dolore corporis asperiores, dolorum animi, repellat omnis iure reiciendis dolorem iusto impedit ducimus sed vel est temporibus aut illo totam dicta tempore cumque, ex. Tenetur, debitis magnam.</div>
      <div>Enim architecto saepe, natus consectetur. Facilis accusantium sunt ut dignissimos! Eum, a, laboriosam! Cum aperiam eos veritatis, architecto dolor fugiat eius velit? Voluptatum vero, fugit fugiat sapiente eveniet vel. Quas.</div>
    </div>

  </div>
   <script src="{{ asset('js/minigrid.min.js') }}"></script>
  <script>
    (function(){
  var grid;
  function init() {
    grid = new Minigrid({
      container: '.cards',
      item: '.card',
      gutter: 12
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
</body>
</html>