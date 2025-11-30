<?php
require_once 'log.php';
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/home.css">
    <link rel="stylesheet" href="../../assets/css/sobrenos.css">
    <script src="https://kit.fontawesome.com/71e3785a50.js" crossorigin="anonymous"></script>
    <title>ReciclaMais - Recompensas</title>
</head>

<body>
    <header>
        <nav>
            <div class="logo">
                <a href="home.html">
                    <i class="fa-solid fa-recycle"></i>
                    ReciclaMais
                </a>
            </div>
            <ul class="nav-links">
                <li><a href="#inicio">Início</a></li>
                <li><a href="#comofunciona">Como funciona</a></li>
                <li><a href="#aprenda">Aprenda</a></li>
                <li><a href="sobrenos.html">Sobre Nós</a></li>
                <?php
                if (isUserLoggedIn() == true) {
                ?>
                    <li><a href="recompensas.html">Recompensas</a></li>
                    <li><a href="logout.php"><i class="fa-solid fa-circle-user"></i>LogOut</a></li>
                <?php
                } else {
                ?>
                    <li><a href="login.php"><i class="fa-solid fa-circle-user"></i>Login</a></li>
                <?php
                }
                ?>
            </ul>
        </nav>
    </header>

    <section class="hero">
        <div class="container">
            <h1>Sobre Nós</h1>
            <p>Conheça nossa missão, visão e valores para um futuro mais sustentável através da reciclagem consciente</p>
        </div>
    </section>

    <section class="about-content">
        <div class="container">
            <div class="section-title">
                <h2>Nossa História</h2>
                <p>Como começamos nossa jornada em direção a um planeta mais limpo</p>
            </div>

            <div class="about-grid">
                <div class="about-card">
                    <div class="card-icon">♻️</div>
                    <h3>Missão</h3>
                    <p>Promover a reciclagem consciente e a sustentabilidade ambiental através de soluções inovadoras que conectam pessoas, empresas e comunidades.</p>
                </div>
                <div class="about-card">
                    <div class="card-icon">🌍</div>
                    <h3>Visão</h3>
                    <p>Ser referência nacional em soluções de reciclagem, contribuindo para um mundo onde os resíduos são vistos como recursos valiosos.</p>
                </div>
                <div class="about-card">
                    <div class="card-icon">💚</div>
                    <h3>Valores</h3>
                    <p>Sustentabilidade, inovação, transparência, responsabilidade social e compromisso com as futuras gerações.</p>
                </div>
            </div>

            <div class="section-title">
                <h2>O Que Fazemos</h2>
                <p>Nossas principais atividades e serviços</p>
            </div>

            <div class="about-grid">
                <div class="about-card">
                    <div class="card-icon">🏠</div>
                    <h3>Coleta Seletiva</h3>
                    <p>Implementamos sistemas de coleta seletiva em residências, condomínios e empresas, facilitando o descarte correto de materiais recicláveis.</p>
                </div>
                <div class="about-card">
                    <div class="card-icon">🏭</div>
                    <h3>Processamento</h3>
                    <p>Operamos centros de triagem e processamento onde os materiais são separados, limpos e preparados para reciclagem.</p>
                </div>
                <div class="about-card">
                    <div class="card-icon">📚</div>
                    <h3>Educação Ambiental</h3>
                    <p>Desenvolvemos programas educativos para escolas, empresas e comunidades, promovendo a conscientização sobre reciclagem e sustentabilidade.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="team-section">
        <div class="container">
            <div class="section-title">
                <h2>Nossa Equipe</h2>
                <p>Conheça as pessoas por trás do ReciclaMais</p>
            </div>

            <ul class="team-list">
                <li class="team-item">
                    <div class="member-img" style="background-color: #4CAF50;"><i class="fa-solid fa-circle-user"></i></div>
                    <div class="member-info">
                        <h3>Denilson Carl Schultz</h3>
                        <p>Responsável pela página "Como funciona"</p>
                    </div>
                </li>
                <li class="team-item">
                    <div class="member-img" style="background-color: #2E7D32;"><i class="fa-solid fa-circle-user"></i></div>
                    <div class="member-info">
                        <h3>Vinicius Mazzoccato Brito</h3>
                        <p>Responsável pela página "Como funciona"</p>
                    </div>
                </li>
                <li class="team-item">
                    <div class="member-img" style="background-color: #388E3C;"><i class="fa-solid fa-circle-user"></i></div>
                    <div class="member-info">
                        <h3>Henrique Gorges Bitencourt</h3>
                        <p>Responsável pela página "Aprenda"</p>
                    </div>
                </li>
                <li class="team-item">
                    <div class="member-img" style="background-color: #009689;"><i class="fa-solid fa-circle-user"></i></div>
                    <div class="member-info">
                        <h3>Matheus Nycolas Maiola</h3>
                        <p>Responsável pela página "Aprenda"</p>
                    </div>
                </li>
                <li class="team-item">
                    <div class="member-img" style="background-color: #2E8B57;"><i class="fa-solid fa-circle-user"></i></div>
                    <div class="member-info">
                        <h3>Mariana Borges Fanhani</h3>
                        <p>Responsável pela página "Recompensa"</p>
                    </div>
                </li>
                <li class="team-item">
                    <div class="member-img" style="background-color: #3CB371;"><i class="fa-solid fa-circle-user"></i></div>
                    <div class="member-info">
                        <h3>Ayme Adna Batista da Costa</h3>
                        <p>Responsável pelas páginas "Recompensa e login"</p>
                    </div>
                </li>
                <li class="team-item">
                    <div class="member-img" style="background-color: #66BB6A;"><i class="fa-solid fa-circle-user"></i></div>
                    <div class="member-info">
                        <h3>Rodrigo de Sá Martins</h3>
                        <p>Responsável pela página "Sobre nós"</p>
                    </div>
                </li>
                <li class="team-item">
                    <div class="member-img" style="background-color: #81C784;"><i class="fa-solid fa-circle-user"></i></div>
                    <div class="member-info">
                        <h3>Gustavo Henrique Duarte</h3>
                        <p>Responsável pela página "Login" e pelo banco de dados</p>
                    </div>
                </li>
                <li class="team-item">
                    <div class="member-img" style="background-color: #AED581;"><i class="fa-solid fa-circle-user"></i></div>
                    <div class="member-info">
                        <h3>Maria Luiza</h3>
                        <p>Responsável pelo banco de dados</p>
                    </div>
                </li>
            </ul>
        </div>
    </section>
     <footer>
        <div class="container">
            <div class="footer-grid">
                <div class="footer-column">
                    <h3>ReciclaMais</h3>
                    <p>Transformando resíduos em recursos para um futuro mais sustentável.</p>
                </div>
                <div class="footer-column">
                    <h3>Contato</h3>
                    <ul class="footer-links">
                        <li>Email: contato@reciclamais.com</li>
                        <li>Telefone: (11) 3456-7890</li>
                        <li>Endereço: Rua Sustentável, 123 - São Paulo, SP</li>
                    </ul>
                </div>
            </div>
            <div class="copyright">
                &copy; 2023 ReciclaMais. Todos os direitos reservados.
            </div>
        </div>
    </footer>
</body>
</html>