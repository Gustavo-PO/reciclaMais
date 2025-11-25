<?php
require_once __DIR__ . '/../../database/connect.php'; // se precisar conectar ao DB
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EcoRecicla - Recicle Hoje, Preserve o Amanhã</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar">
        <div class="container nav-container">
            <div class="logo">
                <svg class="logo-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                    <path d="M17 1l4 4-4 4" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                    <path d="M3 11V9a4 4 0 014-4h14" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                    <path d="M7 23l-4-4 4-4" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                    <path d="M21 13v2a4 4 0 01-4 4H3" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                </svg>
                <span>EcoRecicla</span>
            </div>
            <div class="nav-links">
                <a href="#materiais">Materiais</a>
                <a href="#processo">Como Funciona</a>
                <a href="#dashboard">Painel</a>
                <a href="#aprenda">Aprenda</a>
                <a href="#comunidade">Comunidade</a>
                <a href="#recompensas">Recompensas</a>
                <a href="#contato">Contato</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-overlay"></div>
        <div class="hero-content">
            <div class="hero-badge">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor">
                    <path d="M17 1l4 4-4 4M3 11V9a4 4 0 014-4h14M7 23l-4-4 4-4M21 13v2a4 4 0 01-4 4H3" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                </svg>
                <span>Juntos por um planeta mais limpo</span>
            </div>
            <h1>Recicle Hoje,<br><span class="highlight">Preserve o Amanhã</span></h1>
            <p class="hero-text">Descubra como a reciclagem pode transformar o futuro. Aprenda a separar corretamente seus resíduos e contribua para um mundo sustentável.</p>
            <div class="hero-buttons">
                <button class="btn btn-primary">Começar Agora</button>
                <button class="btn btn-secondary">Saiba Mais</button>
            </div>
        </div>
        <div class="scroll-indicator">
            <div class="mouse"></div>
        </div>
    </section>

    <!-- Material Cards Section -->
    <section id="materiais" class="section materials-section">
        <div class="container">
            <div class="section-header">
                <h2>Materiais Recicláveis</h2>
                <p>Conheça os principais tipos de materiais que podem ser reciclados e faça a diferença</p>
            </div>
            <div class="materials-grid" id="materialsGrid"></div>
        </div>
    </section>

    <!-- Process Section -->
    <section id="processo" class="section process-section">
        <div class="container">
            <div class="section-header">
                <h2>Como Funciona a Reciclagem</h2>
                <p>Um processo simples que faz toda a diferença para o meio ambiente</p>
            </div>
            <div class="process-grid" id="processGrid"></div>
        </div>
    </section>

    <!-- Dashboard Section -->
    <section id="dashboard" class="section dashboard-section">
        <div class="container">
            <div class="section-header">
                <h2>Painel de Controle</h2>
                <p>Acompanhe suas metas e veja o impacto da sua reciclagem</p>
            </div>
            <div class="dashboard-grid">
                <div class="dashboard-main">
                    <div class="weekly-goal">
                        <div class="goal-header">
                            <div>
                                <h3>Meta Semanal</h3>
                                <p>Você está quase lá!</p>
                            </div>
                            <div class="goal-badge">150kg</div>
                        </div>
                        <div class="progress-circle">
                            <svg class="progress-ring" width="200" height="200">
                                <circle class="progress-ring-bg" cx="100" cy="100" r="88" />
                                <circle class="progress-ring-fill" cx="100" cy="100" r="88" id="progressCircle" />
                            </svg>
                            <div class="progress-text">
                                <span class="progress-value" id="weeklyTotal">150</span>
                                <span class="progress-label">kg de 150kg</span>
                            </div>
                        </div>
                        <div class="weekly-chart" id="weeklyChart"></div>
                    </div>
                </div>
                <div class="dashboard-sidebar">
                    <div class="my-trash">
                        <h3>Meu Lixo</h3>
                        <div class="trash-items" id="trashItems"></div>
                        <div class="trash-total">
                            <span>Total Mensal</span>
                            <span class="total-value">150kg</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="stats-grid" id="statsGrid"></div>
        </div>
    </section>

    <!-- Learn Section -->
    <section id="aprenda" class="section learn-section">
        <div class="container">
            <div class="section-header">
                <div class="section-badge">Aprenda</div>
                <h2>Educação Ambiental</h2>
                <p>Conteúdos educativos para você se tornar um especialista em reciclagem</p>
            </div>
            <div class="learn-grid" id="learnGrid"></div>
            <div class="tips-box">
                <div class="tips-content">
                    <h3>Boas Práticas de Reciclagem</h3>
                    <p>Seguir estas dicas simples aumenta significativamente a qualidade dos materiais reciclados.</p>
                </div>
                <div class="tips-list" id="tipsList"></div>
            </div>
        </div>
    </section>

    <!-- Impact Stats Section -->
    <section id="impacto" class="section impact-section">
        <div class="container">
            <div class="section-header">
                <h2>O Impacto da Reciclagem</h2>
                <p>Números que mostram como a reciclagem faz a diferença no planeta</p>
            </div>
            <div class="impact-grid" id="impactGrid"></div>
            <div class="callout-box">
                <h3>Cada pequena ação conta!</h3>
                <p>Reciclando apenas 1kg de plástico, você economiza energia suficiente para manter uma lâmpada LED acesa por 100 horas.</p>
                <div class="callout-badges">
                    <span>♻️ Recicle sempre que possível</span>
                    <span>🌍 Pense no futuro do planeta</span>
                    <span>💚 Inspire outras pessoas</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Community Section -->
    <section id="comunidade" class="section community-section">
        <div class="container">
            <div class="section-header">
                <div class="section-badge purple">Comunidade</div>
                <h2>Juntos Somos Mais Fortes</h2>
                <p>Conecte-se com milhares de pessoas comprometidas com a sustentabilidade</p>
            </div>
            <div class="community-grid">
                <div class="community-feed">
                    <h3>Atividades Recentes</h3>
                    <div id="communityPosts"></div>
                </div>
                <div class="community-sidebar">
                    <div class="leaderboard">
                        <h3>🏆 Ranking Mensal</h3>
                        <div id="leaderboardList"></div>
                    </div>
                    <div class="partnerships">
                        <h3>Parcerias</h3>
                        <div id="partnershipsList"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Rewards Section -->
    <section id="recompensas" class="section rewards-section">
        <div class="container">
            <div class="section-header">
                <div class="section-badge amber">Recompensas</div>
                <h2>Ganhe Prêmios Reciclando</h2>
                <p>Acumule pontos e troque por recompensas incríveis</p>
            </div>
            <div class="points-balance">
                <div class="points-badge">Seus Pontos</div>
                <div class="points-value">1,245</div>
                <p>Continue reciclando para ganhar mais pontos!</p>
                <button class="btn btn-white">Ver Histórico de Pontos</button>
            </div>
            <div class="rewards-grid">
                <div class="achievements">
                    <h3>Conquistas</h3>
                    <div id="achievementsList"></div>
                </div>
                <div class="rewards-store">
                    <h3>Loja de Recompensas</h3>
                    <div id="rewardsList"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contato" class="section contact-section">
        <div class="container">
            <div class="contact-grid">
                <div class="contact-image">
                    <img src="https://images.unsplash.com/photo-1591193686104-fddba4d0e4d8?w=800" alt="Reciclagem">
                    <div class="floating-card">
                        <p><strong>Faça parte da mudança!</strong></p>
                        <p>Mais de 10.000 pessoas já estão reciclando com a gente.</p>
                    </div>
                </div>
                <div class="contact-form">
                    <h2>Comece a Reciclar Hoje</h2>
                    <p>Entre em contato para saber mais sobre nossos pontos de coleta.</p>
                    <form id="contactForm">
                        <div class="form-group">
                            <label for="name">Nome Completo</label>
                            <input type="text" id="name" placeholder="Seu nome" required>
                        </div>
                        <div class="form-group">
                            <label for="email">E-mail</label>
                            <input type="email" id="email" placeholder="seu@email.com" required>
                        </div>
                        <div class="form-group">
                            <label for="message">Mensagem</label>
                            <textarea id="message" rows="4" placeholder="Como podemos ajudar você?" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary btn-full">Enviar Mensagem</button>
                    </form>
                    <div class="contact-info">
                        <div class="contact-item">
                            <span>📍</span>
                            <span>Rua da Sustentabilidade, 123 - São Paulo, SP</span>
                        </div>
                        <div class="contact-item">
                            <span>📞</span>
                            <span>(11) 98765-4321</span>
                        </div>
                        <div class="contact-item">
                            <span>✉️</span>
                            <span>contato@ecorecicla.com.br</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-grid">
                <div class="footer-brand">
                    <div class="logo">
                        <svg class="logo-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                            <path d="M17 1l4 4-4 4M3 11V9a4 4 0 014-4h14M7 23l-4-4 4-4M21 13v2a4 4 0 01-4 4H3" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                        </svg>
                        <span>EcoRecicla</span>
                    </div>
                    <p>Transformando resíduos em recursos. Construindo um futuro sustentável para todos.</p>
                </div>
                <div class="footer-links">
                    <h4>Links Rápidos</h4>
                    <ul>
                        <li><a href="#materiais">Materiais Recicláveis</a></li>
                        <li><a href="#processo">Como Funciona</a></li>
                        <li><a href="#impacto">Impacto Ambiental</a></li>
                        <li><a href="#contato">Contato</a></li>
                    </ul>
                </div>
                <div class="footer-links">
                    <h4>Recursos</h4>
                    <ul>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Guia de Reciclagem</a></li>
                        <li><a href="#">Pontos de Coleta</a></li>
                        <li><a href="#">Perguntas Frequentes</a></li>
                    </ul>
                </div>
                <div class="footer-social">
                    <h4>Redes Sociais</h4>
                    <p>Siga-nos nas redes sociais e fique por dentro das novidades.</p>
                    <div class="social-links">
                        <a href="#">📘</a>
                        <a href="#">📷</a>
                        <a href="#">🐦</a>
                        <a href="#">💼</a>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <p>© 2025 EcoRecicla. Todos os direitos reservados. Juntos por um planeta mais sustentável.</p>
            </div>
        </div>
    </footer>

    <script src="/script.js"></script>
</body>
</html>
