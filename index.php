
<?php
// Fortnite Pirate Token Fan Website
?>
<!DOCTYPE html>
<html lang="nl">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Fortnite Pirate Token</title>
<style>
*{box-sizing:border-box}
body{
 margin:0;
 font-family:Arial,sans-serif;
 background:linear-gradient(135deg,#090f1c,#172d48,#090f1c);
 color:white;
}
header{
 text-align:center;
 padding:65px 20px;
 background:linear-gradient(#0008,#000b),url('https://images.unsplash.com/photo-1518709268805-4e9042af9f23?auto=format&fit=crop&w=1600&q=80') center/cover;
}
header h1{
 font-size:clamp(40px,8vw,75px);
 color:#ffc857;
 text-shadow:3px 4px #542d0b;
 margin:15px 0;
}
header p{font-size:18px;color:#eee}
nav{
 background:#101b2b;
 padding:15px;
 text-align:center;
 position:sticky;
 top:0;
 z-index:10;
 border-bottom:2px solid #d99b32;
}
nav a{
 color:#ffc857;
 text-decoration:none;
 margin:8px 12px;
 font-weight:bold;
}
nav a:hover{color:white}
.container{max-width:1000px;margin:auto;padding:25px}
h2{color:#ffc857}
.card{
 background:#192b42;
 border:1px solid #3d5571;
 border-radius:15px;
 padding:25px;
 margin:20px 0;
 box-shadow:0 8px 25px #0005;
}
.grid{
 display:grid;
 grid-template-columns:repeat(auto-fit,minmax(230px,1fr));
 gap:18px;
}
.stat{
 font-size:35px;
 font-weight:bold;
 color:#ffc857;
}
button,.button{
 display:inline-block;
 background:#ffc857;
 color:#211706;
 border:0;
 border-radius:9px;
 padding:13px 20px;
 font-weight:bold;
 text-decoration:none;
 cursor:pointer;
 margin:5px;
}
button:hover,.button:hover{background:#ffe49b}
input{
 padding:13px;
 width:100%;
 border-radius:8px;
 border:1px solid #526783;
 background:#0d1929;
 color:white;
 font-size:17px;
}
.note{
 padding:15px;
 border-left:4px solid #ffc857;
 background:#332a1d;
 border-radius:5px;
}
li{margin:12px 0;line-height:1.6}
a{color:#ffd778}
footer{
 text-align:center;
 color:#aaa;
 padding:30px;
 border-top:1px solid #344762;
}
@media(max-width:600px){
 nav a{display:inline-block;margin:5px}
 .container{padding:15px}
}
</style>
</head>
<body>

<header>
 <div style="font-size:75px">🏴‍☠️</div>
 <h1>PIRATE TOKEN</h1>
 <p>De complete Fortnite Pirate Token gids!</p>
 <a class="button" href="#krijgen">Hoe krijg ik hem?</a>
 <a class="button" href="#kans">Bekijk de dropkans</a>
</header>

<nav>
 <a href="#info">Informatie</a>
 <a href="#krijgen">Token krijgen</a>
 <a href="#activeren">Activeren</a>
 <a href="#kans">Dropkans</a>
 <a href="#video">Yarasky</a>
</nav>

<div class="container">

<section id="info">
<h2>🏴‍☠️ Wat is de Pirate Token?</h2>
<div class="grid">
 <div class="card">
  <div class="stat">14 dagen</div>
  <p>Na activatie kun je gedurende 14 dagen veel in aanmerking komende cosmetische items uit de Fortnite Item Shop gratis claimen.</p>
 </div>
 <div class="card">
  <div class="stat">2026 + 2027</div>
  <p>Volgens recente gidsen zijn er twee activaties beschikbaar. Controleer de voorwaarden in je eigen game.</p>
 </div>
</div>
<div class="note">Dit is een fanwebsite en geen officiële Epic Games-website.</div>
</section>

<section id="krijgen">
<h2>🗺️ Hoe krijg je de Pirate Token?</h2>
<div class="card">
<ol>
 <li>Start een Battle Royale- of Zero Build-match tijdens het Treasure Hunters-evenement.</li>
 <li>Zoek naar kisten en open ze.</li>
 <li>Blijf kisten openen. De Pirate Shop Access is een extreem zeldzame willekeurige beloning.</li>
 <li>Als je de token vindt, verschijnt er een melding in beeld.</li>
 <li>Ga terug naar de lobby en controleer je Item Shop.</li>
</ol>
<p>Tip: speel gezellig met vrienden en blijf zoeken naar schatkisten!</p>
</div>
</section>

<section id="activeren">
<h2>⚓ Hoe activeer je hem?</h2>
<div class="card">
<ol>
 <li>Open Fortnite.</li>
 <li>Ga naar de Item Shop.</li>
 <li>Zoek Pirate Shop Access.</li>
 <li>Controleer de voorwaarden en de einddatum.</li>
 <li>Kies Activate Now wanneer je klaar bent.</li>
</ol>
<div class="note">Let op: de periode van 14 dagen begint bij het activeren, niet bij het vinden.</div>
</div>
</section>

<section id="kans">
<h2>🎲 Hoe zeldzaam is de token?</h2>
<div class="grid">
 <div class="card">
  <div class="stat">1 op 137.500</div>
  <p>Dit is de gerapporteerde kans per kist in recente berichtgeving. De werkelijke kans kan veranderen.</p>
 </div>
 <div class="card">
  <h3>Bereken jouw theoretische kans</h3>
  <label for="chests">Hoeveel kisten open je?</label>
  <input type="number" id="chests" min="0" value="100">
  <p class="stat" id="result">0%</p>
  <small>Dit is een rekenvoorbeeld, geen garantie.</small>
 </div>
</div>
</section>

<section>
<h2>🚨 Pas op voor scams!</h2>
<div class="card">
<ul>
 <li>Geef nooit je Epic Games-wachtwoord aan iemand.</li>
 <li>Gebruik geen nep-token-generators.</li>
 <li>Download geen verdachte bestanden.</li>
 <li>Een fanwebsite kan geen token op je account zetten.</li>
</ul>
</div>
</section>

<section id="video">
<h2>🎥 Hoe te krijgen?</h2>
<div class="card">
<p>hoe te krijgen?:</p>
<a class="button"
 href="https://www.youtube.com/watch?v=gj9ERO96fmo&t=56s"
 target="_blank" rel="noopener noreferrer">
 🔴 Bekijk op YouTube
</a>
<p>Dit is een zoeklink, omdat de exacte video niet met zekerheid is geverifieerd.</p>
</div>
</section>

<section>
<h2>📚 Meer informatie</h2>
<div class="card">
<ul>
 <li><a href="https://www.gamesradar.com/games/fortnite/fortnite-pirate-shop-token/" target="_blank">GamesRadar – Pirate Token</a></li>
 <li><a href="https://www.videogameschronicle.com/" target="_blank">Video Games Chronicle</a></li>
 <li><a href="https://www.epicgames.com/fortnite/" target="_blank">Officiële Fortnite website</a></li>
</ul>
</div>
</section>

</div>

<footer>
 <p>🏴‍☠️ Fortnite Pirate Token Fanpage</p>
 <p>Niet officieel verbonden aan Epic Games.</p>
</footer>

<script>
const input = document.getElementById('chests');
const result = document.getElementById('result');

function calculate(){
 const n = Math.max(0, Math.floor(Number(input.value) || 0));
 const chance = (1 - Math.pow(1 - 1/137500, n)) * 100;
 result.textContent = chance.toLocaleString('nl-NL',{
  maximumFractionDigits:4
 }) + '%';
}

input.addEventListener('input',calculate);
calculate();
</script>

</body>
</html>
