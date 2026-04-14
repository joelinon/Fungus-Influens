<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>The Last of Us – A Tribute</title>
  <link rel="stylesheet" href="styles.css">
  <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@700&family=Lato:wght@400&display=swap" rel="stylesheet">
</head>

<body>
<header>
  <nav id="myNav" class="overlay">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <div id="links">
      <a href="#home" onclick="closeNav()">Home</a>
      <a href="#about" onclick="closeNav()">About</a>
      <a href="#characters" onclick="closeNav()">Characters</a>
      <a href="#gallery" onclick="closeNav()">Gallery</a>
      <a href="#timeline" onclick="closeNav()">Timeline</a>
      <a href="#merch" onclick="closeNav()">Merch</a>
      <a href="#tv" onclick="closeNav()">TV Series</a>
    </div>
  </nav>

  <span id="menuIcon" onclick="openNav()">☰</span>
</header>


<section id="home" class="hero">
  <div id="logo">
    <img src="img/txt.png" alt="logo">
  </div>
  <h1 id="tagline">Celebrating the game and the HBO series</h1>
</section>
<div class="container">
<section id="about"><h2>About</h2>
<p>The Last of Us is more than a game or a TV series — it’s a story about survival, loss, and the fragile connections that define us as human.</p>
<img src="img/The-Last-of-US-scaled.jpeg" alt="The Last of Us Scenery">
<p>Set in a post-apocalyptic world where a fungal infection has devastated humanity, society has collapsed into chaos. Survivors navigate danger, loss, and moral dilemmas every day.</p>
<p>Originally released by Naughty Dog in 2013, the game quickly became one of the most celebrated stories in gaming. In 2023, HBO brought the story to life in a critically acclaimed TV adaptation.</p>
<p>Survival</p>
<p>Love & loss</p>
<p>Moral choices</p>
<p>Humanity</p>
</section>
<section id="characters"><h2>Characters</h2>
<div class="cards">
    <div class="card">
        <img src="img/joel.jpg" alt="Joel">
        <h3>Joel</h3>
        <p>A hardened survivor with a tragic past, Joel is a complex character whose journey is defined by his love for Ellie and his struggle to protect her at all costs.</p>
    </div>
    <div class="card">
        <img src="img/ellie.jpg" alt="Ellie">
        <h3>Ellie</h3>
        <p>A brave and resourceful teenager, Ellie’s journey from innocence to resilience is central to the story. Her relationship with Joel is the emotional heart of the narrative.</p>
    </div>
    <div class="card">
        <img src="img/tess.jpg" alt="Tess">
        <h3>Tess</h3>
        <p>Joel’s tough and loyal partner, Tess is a skilled survivor who shares a complicated history with Joel. Her presence adds depth to Joel’s character and the story’s themes of trust and betrayal.</p>
    </div>
    <div class="card">
        <img src="img/tommy.jpg" alt="Tommy">
        <h3>Tommy</h3>
        <p>Joel’s younger brother, Tommy is a former soldier who has found a semblance of peace in a fortified community. His relationship with Joel is strained but ultimately rooted in family loyalty.</p>
    </div>
    <div class="card">
        <img src="img/bill.jpg" alt="Bill">
        <h3>Bill</h3>
        <p>A paranoid and resourceful survivor, Bill is a skilled scavenger who has fortified his town against the infected. His relationship with Frank adds a poignant layer to his character.</p>
    </div>
    <div class="card">
      <img src="img/marlene.jpg" alt="Marlene">
      <h3>Marlene</h3>
      <p>A compassionate and strong-willed leader, Marlene is a key figure in the resistance against the infected. Her character represents hope and resilience in the face of adversity.</p>
    </div>

</div>
</section>
<section id="gallery"><h2>Gallery</h2>
<div class="cards-gallery">
    <div class="card">
        <button><img src="img/img1.jpg" alt="Joel"></button>
    </div>
    <div class="card">
        <button><img src="img/img2.jpg" alt="Ellie"></button>
    </div>
    <div class="card">
        <button><img src="img/img3.jpg" alt="Tess"></button>
    </div>
    <div class="card">
        <button><img src="img/img4.jpg" alt="Tommy"></button>
    </div>
    <div class="card">
        <button><img src="img/img5.jpg" alt="Bill"></button>
    </div>
    <div class="card">
        <button><img src="img/marlene.jpg" alt="Marlene"></button>
    </div>
</div>
<div class="modal1">
  <span class="closebtn" onclick="closeModal('modal1')">&times;</span>
  <img src="img/img1.jpg" alt="">
</div>
<div class="modal2">
  <span class="closebtn" onclick="closeModal('modal2')">&times;</span>
  <img src="img/img2.jpg" alt="">
</div>
<div class="modal3">
  <span class="closebtn" onclick="closeModal('modal3')">&times;</span>
  <img src="img/img3.jpg" alt="">
</div>
<div class="modal4">
  <span class="closebtn" onclick="closeModal('modal4')">&times;</span>
  <img src="img/img4.jpg" alt="">
</div>
<div class="modal5">
  <span class="closebtn" onclick="closeModal('modal5')">&times;</span>
  <img src="img/img5.jpg" alt="">
</div>
</section>
<section id="timeline"><h2>Timeline</h2>

</section>
<section id="tv"><h2>TV Series</h2>

</section>
<section id="merch"><h2>Merch</h2>

</section>
</div>

<script src="script.js"></script>
</body>
</html>
