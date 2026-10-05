<!DOCTYPE html>
<html>
<head>
<style>
@import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap');

* {
  box-sizing: border-box;
}

body {
  margin: 0;
  min-height: 100vh;
  font-family: 'Montserrat', sans-serif;
  color: #fff;
  background:
    radial-gradient(circle at top left, #ff8fb8 0%, transparent 35%),
    radial-gradient(circle at bottom right, #8e4d9e 0%, transparent 40%),
    linear-gradient(135deg, #210c22, #4a173f, #8b3d70);
  padding: 40px;
}

/* Título */
h1 {
  text-align: center;
  font-size: 48px;
  margin-bottom: 8px;
  color: #ffd1e5;
  text-shadow:
    0 0 10px #ff72ad,
    0 0 25px #ff3f91;
  letter-spacing: 2px;
}

body > p {
  text-align: center;
  max-width: 800px;
  margin: 8px auto;
  color: #ffd9e9;
}

body > p:first-of-type {
  font-size: 22px;
  font-weight: 700;
  color: #ff8fbe;
}

/* Container principal */
.container {
  display: grid;
  grid-template-areas:
    "header header"
    "menu content"
    "footer footer";

  grid-template-columns: 220px 1fr;
  gap: 12px;

  max-width: 1100px;
  margin: 35px auto;

  padding: 12px;

  background: rgba(255, 130, 180, 0.08);
  border: 1px solid rgba(255, 174, 207, 0.35);
  border-radius: 22px;

  box-shadow:
    0 0 30px rgba(255, 64, 145, 0.25),
    inset 0 0 30px rgba(255, 255, 255, 0.03);

  backdrop-filter: blur(12px);
}

/* Todos os blocos */
.container div {
  background: rgba(255, 255, 255, 0.08);
  padding: 22px;
  border: 1px solid rgba(255, 190, 220, 0.2);
  border-radius: 16px;

  box-shadow:
    0 8px 25px rgba(0, 0, 0, 0.18);

  transition: 0.3s ease;
}

.container div:hover {
  transform: translateY(-3px);
  border-color: rgba(255, 140, 190, 0.6);
  box-shadow:
    0 0 25px rgba(255, 79, 157, 0.25);
}

/* Header */
.container div.header {
  grid-area: header;
  text-align: center;

  background:
    linear-gradient(
      90deg,
      rgba(255, 91, 157, 0.25),
      rgba(190, 82, 177, 0.25),
      rgba(255, 91, 157, 0.25)
    );
}

.header h2 {
  margin: 0;
  letter-spacing: 7px;
  text-shadow: 0 0 15px #ff6da9;
}

/* Menu */
.container div.menu {
  grid-area: menu;
}

.menu a {
  display: block;
  text-decoration: none;

  color: #ffd5e6;
  background: rgba(255, 92, 158, 0.12);

  padding: 13px 15px;
  margin-bottom: 10px;

  border: 1px solid rgba(255, 150, 195, 0.2);
  border-radius: 10px;

  transition: 0.3s ease;
}

.menu a:hover {
  color: white;
  background: linear-gradient(90deg, #ff4f9a, #b84d9e);
  transform: translateX(6px);

  box-shadow:
    0 0 15px rgba(255, 79, 157, 0.5);
}

/* Conteúdo */
.container div.content {
  grid-area: content;
}

.content h3 {
  margin-top: 0;

  color: #ff9fc5;
  font-size: 25px;

  text-shadow: 0 0 10px rgba(255, 101, 166, 0.5);
}

.content p {
  color: #ffe2ee;
  line-height: 1.8;
}

/* Footer */
.container div.footer {
  grid-area: footer;
  text-align: center;

  color: #ffc5dc;
  background: rgba(255, 75, 150, 0.1);
}

.footer h4 {
  margin: 0;
  letter-spacing: 2px;
}

/* Responsividade */
@media (max-width: 700px) {
  body {
    padding: 20px;
  }

  h1 {
    font-size: 36px;
  }

  .container {
    grid-template-areas:
      "header"
      "menu"
      "content"
      "footer";

    grid-template-columns: 1fr;
  }
}
</style>
</head>
<body>

<h1>Megurine Luka</h1>

<p>Luka Luka Night Fever</p>
<p>Luka luka night fever hajikeru rizumu ni awasete iya na koto nani mo kamo zenbu wasurete Luka luka night fever watashi wa koko ni iru kara sukoshi demo shisen wo sorashi cha dame dame yo</p>

<div class="container">
  <div class="header"><h2>🩷🩷🩷🩷🩷🩷🩷🩷</h2></div>
  <div class="menu"><a href="uploads/">Fotos</a><br><a href="create.php">Criar Registro</a><br><a href="read.php">Ler Registros</a></div>
  <div class="content"><h3>Megurine Luka a melhor? Obvio que sim</h3><p>A Luka é a mais linda, maravilhosa, perfeita, majestosa, ethereal, angélica, babilônica, babulônica, faraônica!!!!!!!!</p></div>
  <div class="footer"><h4>Footer</h4></div>
</div>

</body>
</html>
