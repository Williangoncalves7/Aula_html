<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Base de Ensino</title>
  <style>
    :root {.;
      --bg: #f7f6f2;
      --surface:rgb(240, 231, 231);
      --surface-2:rgb(229, 238, 241);
      --text:rgb(27, 27, 26);
      --muted:rgb(14, 14, 14);
      --primary: #01696f;
      --primary-2: #0c4e54;
      --border: #d4d1ca;
      --radius: 16px;
      --shadow: 0 10px 30px rgba(0,0,0,0.08);
      --sans: "Segoe UI", Arial, sans-serif;
    }

    * { box-sizing: border-box; }

    body {
      margin: 0;
      font-family: var(--sans);
      background: var(--bg);
      color: var(--text);
      line-height: 1.6;
    }

    .container {
      max-width: 1160px;
      margin: 0 auto;
      padding: 32px 20px 60px;
    }

    .hero {
      background: linear-gradient(135deg, #ffffff, #eef6f6);
      border: 1px solid var(--border);
      border-radius: 24px;
      padding: 36px;
      box-shadow: var(--shadow);
      margin-bottom: 28px;
    }

    .hero .tag {
      display: inline-block;
      padding: 6px 12px;
      border-radius: 999px;
      background: rgba(37, 39, 38, 0.1);
      color: var(--primary);
      font-weight: 700;
      font-size: 0.9rem;
      margin-bottom: 14px;
    }

    .hero h1 {
      margin: 0 0 10px;
      font-size: clamp(2rem, 4vw, 3.2rem);
    }

    .hero p {
      margin: 0;
      max-width: 72ch;
      color: var(--muted);
    }

    .secao {
      margin-top: 26px;
    }

    .secao h2 {
      margin: 0 0 6px;
      font-size: 1.6rem;
    }

    .secao p {
      margin: 0 0 18px;
      color: var(--muted);
    }

    .grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
      gap: 22px;
    }

    .card {
      background: var(--surface);
      border: 1px solid var(--border);
      border-radius: var(--radius);
      box-shadow: var(--shadow);
      overflow: hidden;
      display: flex;
      flex-direction: column;
      min-height: 100%;
    }

    .card-topo {
      padding: 18px 20px;
      background: var(--surface-2);
      border-bottom: 1px solid var(--border);
    }

    .icone {
      width: 52px;
      height: 52px;
      border-radius: 14px;
      display: grid;
      place-items: center;
      font-weight: 800;
      font-size: 1.1rem;
      color: #fff;
      margin-bottom: 14px;
    }

    .php { background:rgb(12, 44, 224); }
    .html { background:rgb(10, 209, 60); }
    .css { background:rgb(16, 221, 235); }
    .js { background:rgb(213, 235, 15); color: #1f1f1f; }
    .sql { background:rgb(156, 9, 137); }
    .outros { background: #01696f; }

    .card-topo h3 {
      margin: 0 0 8px;
      font-size: 1.2rem;
    }

    .card-topo p {
      margin: 0;
      color: var(--muted);
      font-size: 0.96rem;
    }

    .card-body {
      padding: 20px;
      display: flex;
      flex-direction: column;
      gap: 14px;
      flex: 1;
    }

    .lista {
      margin: 0;
      padding-left: 18px;
      color: var(--muted);
    }

    .botao {
      margin-top: auto;
      display: inline-block;
      text-align: center;
      text-decoration: none;
      background: var(--primary);
      color: #fff;
      padding: 12px 16px;
      border-radius: 12px;
      font-weight: 700;
      transition: background 0.2s ease;
    }

    .botao:hover {
      background: var(--primary-2);
    }

    .bloco-info {
      margin-top: 28px;
      background: var(--surface);
      border: 1px solid var(--border);
      border-radius: var(--radius);
      box-shadow: var(--shadow);
      padding: 22px;
    }

    .bloco-info code {
      background: #ece9e2;
      padding: 3px 8px;
      border-radius: 8px;
    }

    .rodape {
      margin-top: 28px;
      text-align: center;
      color: var(--muted);
      font-size: 0.95rem;
    }

    @media (max-width: 700px) {
      .hero,
      .bloco-info,
      .card-topo,
      .card-body {
        padding: 18px;
      }
    }
  </style>
</head>
<body>
  <main class="container">
    <section class="hero">
      <span class="tag">Página inicial</span>
      <h1>Base de Informação</h1>
      <p>
        Linguagens de programação! 
      </p>
    </section>

    <section class="secao">
      <h2>Temas disponíveis</h2>
      <p>PHP, HTML e CSS</p>

      <div class="grid">
        <article class="card">
          <div class="card-topo">
            <div class="icone php">PHP</div>
            <h3>PHP</h3>
            <p>Exemplos de extruturas em PHP.</p>
          </div>
          <div class="card-body">
            <ul class="lista">
              <li>Comandos básicos</li>
              <li>Estruturas de Concreto</li>
              <li>Laços de Amor</li>
            </ul>
            <a class="botao" href="paginaPHP.php">Acessar página PHP</a>
          </div>
        </article>

        <article class="card">
          <div class="card-topo">
            <div class="icone html">HTML</div>
            <h3>HTML</h3>
            <p>HTML é HTML e não html</p>
          </div>
          <div class="card-body">
            <ul class="lista">
              <li>Tags principais</li>
              <li>Formulários</li>
              <li>Estrutura de abobrinha</li>
            </ul>
            <a class="botao" href="html.html">Acessar página HTML</a>
          </div>
        </article>

        <article class="card">
          <div class="card-topo">
            <div class="icone css">CSS</div>
            <h3>CSS</h3>
            <p>SSCCSS</p>
          </div>
          <div class="card-body">
            <ul class="lista">
              <li>Pó Royal</li>
              <li>Margarina</li>
              <li>Brigadeiro</li>
            </ul>
            <a class="botao" href="css.html">Acessar página CSS</a>
          </div>
        </article>

        <article class="card">
          <div class="card-topo">
          <div class="icone js">JS</div>
            <h3>JavaScript</h3>
            <p>Interatividade para páginas web</p>
        </div>

        <div class="card-body">
         <ul class="lista">
            <li>Variáveis</li>
            <li>Funções</li>
            <li>Eventos</li>
        </ul>

            <a class="botao" href="javascript.html">Acessar página JavaScript</a>
        </div>
    </article>
    <article class="card">
        <div class="card-topo">
        <div class="icone sql">SQL</div>
        <h3>SQL</h3>
        <p>Gerenciamento de bancos de dados</p>
  </div>

    <div class="card-body">
      <ul class="lista">
        <li>SELECT</li>
        <li>INSERT</li>
        <li>UPDATE</li>
    </ul>

    <a class="botao" href="sql.html">Acessar página SQL</a>
  </div>
</article>

  </main>
</body>
</html>
