// Data
const materials = [
    {
        icon: '📦',
        name: 'Papel e Papelão',
        color: '#3b82f6',
        description: 'Caixas, revistas, jornais, cadernos e embalagens.',
        examples: ['Jornais', 'Caixas de papelão', 'Revistas', 'Cadernos']
    },
    {
        icon: '💧',
        name: 'Plástico',
        color: '#ef4444',
        description: 'Garrafas PET, embalagens, sacolas e potes.',
        examples: ['Garrafas PET', 'Embalagens', 'Potes', 'Sacolas']
    },
    {
        icon: '♻️',
        name: 'Metal',
        color: '#eab308',
        description: 'Latas de alumínio, aço e outros metais.',
        examples: ['Latas de refrigerante', 'Enlatados', 'Tampas', 'Ferragens']
    },
    {
        icon: '🗑️',
        name: 'Vidro',
        color: '#10b981',
        description: 'Garrafas, potes e frascos de vidro.',
        examples: ['Garrafas', 'Potes de conserva', 'Frascos', 'Copos']
    },
    {
        icon: '🍃',
        name: 'Orgânico',
        color: '#d97706',
        description: 'Restos de alimentos e materiais biodegradáveis.',
        examples: ['Cascas de frutas', 'Restos de comida', 'Folhas', 'Borra de café']
    },
    {
        icon: '🔋',
        name: 'Eletrônicos',
        color: '#8b5cf6',
        description: 'Pilhas, baterias e equipamentos eletrônicos.',
        examples: ['Pilhas', 'Celulares', 'Baterias', 'Computadores']
    }
];

const processSteps = [
    { icon: '🗑️', number: '01', title: 'Separação', description: 'Separe seus resíduos em casa de acordo com o tipo de material.' },
    { icon: '📦', number: '02', title: 'Coleta', description: 'Disponibilize os materiais para coleta seletiva ou leve até pontos de reciclagem.' },
    { icon: '♻️', number: '03', title: 'Processamento', description: 'Os materiais são processados e transformados em matéria-prima.' },
    { icon: '✨', number: '04', title: 'Reutilização', description: 'Novos produtos são fabricados a partir dos materiais reciclados.' }
];

const weeklyData = [
    { day: 'Seg', value: 20 },
    { day: 'Ter', value: 35 },
    { day: 'Qua', value: 25 },
    { day: 'Qui', value: 40 },
    { day: 'Sex', value: 30 },
    { day: 'Sáb', value: 0 },
    { day: 'Dom', value: 0 }
];

const trashMaterials = [
    { name: 'Plástico', weight: 45, color: '#ef4444' },
    { name: 'Papel', weight: 60, color: '#3b82f6' },
    { name: 'Vidro', weight: 25, color: '#10b981' },
    { name: 'Metal', weight: 20, color: '#eab308' }
];

const stats = [
    { icon: '📅', label: 'Esta Semana', value: '150kg', color: 'blue' },
    { icon: '📈', label: 'Este Mês', value: '150kg', color: 'green' },
    { icon: '🏆', label: 'Pontos', value: '1,245', color: 'purple' },
    { icon: '🎯', label: 'Sequência', value: '12 dias', color: 'amber' }
];

const learningContent = [
    { icon: '🎥', title: 'Como Separar Corretamente', description: 'Aprenda a identificar e separar cada tipo de material', duration: '5 min', category: 'Vídeo Tutorial', color: '#ef4444' },
    { icon: '📄', title: 'Guia Completo de Reciclagem', description: 'Documento completo com todas as informações sobre reciclagem', duration: '15 min', category: 'Guia PDF', color: '#3b82f6' },
    { icon: '💡', title: 'Dicas de Sustentabilidade', description: 'Práticas diárias para reduzir seu impacto ambiental', duration: '8 min', category: 'Artigo', color: '#eab308' },
    { icon: '📚', title: 'O Ciclo da Reciclagem', description: 'Entenda o processo completo desde a coleta até o produto final', duration: '10 min', category: 'Infográfico', color: '#10b981' }
];

const tips = [
    'Lave as embalagens antes de descartar',
    'Remova tampas e rótulos quando possível',
    'Não misture materiais diferentes',
    'Separe vidros por cor quando possível'
];

const impactStats = [
    { icon: '📉', value: '70%', label: 'Redução de CO₂', description: 'Menos emissões de gases poluentes' },
    { icon: '🌳', value: '17', label: 'Árvores Salvas', description: 'Por tonelada de papel reciclado' },
    { icon: '💧', value: '95%', label: 'Economia de Água', description: 'Na reciclagem de alumínio' },
    { icon: '⚡', value: '80%', label: 'Menos Energia', description: 'Comparado à produção nova' }
];

const communityPosts = [
    { user: 'Maria Silva', avatar: '👩', location: 'São Paulo, SP', action: 'reciclou', amount: '45kg', type: 'plástico', time: '2 horas atrás', likes: 24, comments: 5 },
    { user: 'João Santos', avatar: '👨', location: 'Rio de Janeiro, RJ', action: 'completou', amount: '150kg', type: 'meta mensal', time: '5 horas atrás', likes: 38, comments: 12 },
    { user: 'Ana Costa', avatar: '👩‍🦰', location: 'Belo Horizonte, MG', action: 'organizou', amount: '200kg', type: 'mutirão de limpeza', time: '1 dia atrás', likes: 56, comments: 18 }
];

const leaderboard = [
    { position: 1, name: 'Carlos Mendes', amount: 450, badge: '🥇' },
    { position: 2, name: 'Fernanda Lima', amount: 420, badge: '🥈' },
    { position: 3, name: 'Pedro Oliveira', amount: 390, badge: '🥉' },
    { position: 4, name: 'Julia Ferreira', amount: 350, badge: '🏅' },
    { position: 5, name: 'Roberto Alves', amount: 320, badge: '🏅' }
];

const partnerships = [
    { name: 'Recicla +', description: 'Parceiro oficial de coleta', members: '5.2k', color: 'background: #d1fae5; color: #047857' },
    { name: 'Juvenilê', description: 'Educação ambiental', members: '3.8k', color: 'background: #dbeafe; color: #1e40af' },
    { name: 'EcoPoints', description: 'Pontos de coleta', members: '4.1k', color: 'background: #e9d5ff; color: #7c3aed' }
];

const achievements = [
    { icon: '🏆', title: 'Iniciante', description: 'Primeiro dia de reciclagem', completed: true, points: 50 },
    { icon: '⚡', title: 'Consistente', description: 'Recicle por 7 dias seguidos', completed: true, points: 100 },
    { icon: '⭐', title: 'Dedicado', description: 'Recicle por 30 dias seguidos', completed: false, points: 250, progress: 12, total: 30 },
    { icon: '🏆', title: 'Campeão', description: 'Recicle 500kg no total', completed: false, points: 500, progress: 150, total: 500 }
];

const rewards = [
    { icon: '☕', title: 'Café Grátis', description: 'Cafeteria Verde', points: 200, color: 'background: #fef3c7; color: #d97706; border-color: #fcd34d' },
    { icon: '🛍️', title: '10% de Desconto', description: 'Loja Sustentável', points: 350, color: 'background: #dbeafe; color: #1e40af; border-color: #93c5fd' },
    { icon: '🎫', title: 'Ingresso Cinema', description: 'CineEco', points: 500, color: 'background: #e9d5ff; color: #7c3aed; border-color: #c084fc' },
    { icon: '🎁', title: 'Kit Sustentável', description: 'Produtos Ecológicos', points: 800, color: 'background: #d1fae5; color: #047857; border-color: #6ee7b7' }
];

// Render Functions
function renderMaterials() {
    const grid = document.getElementById('materialsGrid');
    grid.innerHTML = materials.map(material => `
        <div class="material-card">
            <div class="material-icon" style="background-color: ${material.color}">
                ${material.icon}
            </div>
            <h3>${material.name}</h3>
            <p>${material.description}</p>
            <div class="material-examples">
                <p style="font-size: 0.875rem; color: #6b7280; margin-bottom: 0.5rem;">Exemplos:</p>
                ${material.examples.map(ex => `<span class="example-tag">${ex}</span>`).join('')}
            </div>
        </div>
    `).join('');
}

function renderProcess() {
    const grid = document.getElementById('processGrid');
    grid.innerHTML = processSteps.map(step => `
        <div class="process-step">
            <div class="process-icon">${step.icon}</div>
            <div class="process-number">${step.number}</div>
            <h3>${step.title}</h3>
            <p>${step.description}</p>
        </div>
    `).join('');
}

function renderWeeklyChart() {
    const chart = document.getElementById('weeklyChart');
    const maxValue = Math.max(...weeklyData.map(d => d.value));
    
    chart.innerHTML = weeklyData.map(day => {
        const height = maxValue > 0 ? (day.value / maxValue) * 100 : 0;
        return `
            <div class="chart-bar">
                <div class="bar-container">
                    <div class="bar-fill" style="height: ${height}%"></div>
                </div>
                ${day.value > 0 ? `<span class="bar-value">${day.value}kg</span>` : ''}
                <span class="bar-label">${day.day}</span>
            </div>
        `;
    }).join('');
}

function renderTrashItems() {
    const container = document.getElementById('trashItems');
    const totalWeight = trashMaterials.reduce((sum, m) => sum + m.weight, 0);
    
    container.innerHTML = trashMaterials.map(material => `
        <div class="trash-item">
            <div class="trash-header">
                <span>${material.name}</span>
                <span>${material.weight}kg</span>
            </div>
            <div class="trash-bar">
                <div class="trash-bar-fill" style="width: ${(material.weight / totalWeight) * 100}%; background-color: ${material.color}"></div>
            </div>
        </div>
    `).join('');
}

function renderStats() {
    const grid = document.getElementById('statsGrid');
    grid.innerHTML = stats.map(stat => `
        <div class="stat-card ${stat.color}">
            <div>
                <p style="margin-bottom: 0.25rem; opacity: 0.8;">${stat.label}</p>
                <p style="font-size: 1.5rem; font-weight: 700;">${stat.value}</p>
            </div>
            <div class="stat-icon">${stat.icon}</div>
        </div>
    `).join('');
}

function renderLearning() {
    const grid = document.getElementById('learnGrid');
    grid.innerHTML = learningContent.map(content => `
        <div class="learn-card">
            <div class="learn-icon" style="background-color: ${content.color}">
                ${content.icon}
            </div>
            <div class="learn-content">
                <span class="learn-category">${content.category}</span>
                <h3>${content.title}</h3>
                <p>${content.description}</p>
                <div class="learn-duration">⏱️ ${content.duration} de leitura</div>
            </div>
        </div>
    `).join('');
}

function renderTips() {
    const list = document.getElementById('tipsList');
    list.innerHTML = tips.map((tip, index) => `
        <div class="tip-item">
            <div class="tip-number">${index + 1}</div>
            <p>${tip}</p>
        </div>
    `).join('');
}

function renderImpact() {
    const grid = document.getElementById('impactGrid');
    grid.innerHTML = impactStats.map(stat => `
        <div class="impact-card">
            <div class="impact-icon">${stat.icon}</div>
            <div class="impact-value">${stat.value}</div>
            <h3>${stat.label}</h3>
            <p>${stat.description}</p>
        </div>
    `).join('');
}

function renderCommunity() {
    const posts = document.getElementById('communityPosts');
    posts.innerHTML = communityPosts.map(post => `
        <div class="community-post">
            <div class="post-header">
                <div class="post-avatar">${post.avatar}</div>
                <div class="post-info">
                    <div class="post-user">${post.user}</div>
                    <div class="post-location">📍 ${post.location}</div>
                </div>
                <div class="post-time">${post.time}</div>
            </div>
            <p class="post-content">${post.action} <strong style="color: #059669">${post.amount}</strong> de ${post.type}</p>
            <div class="post-actions">
                <button class="post-action">❤️ ${post.likes}</button>
                <button class="post-action">💬 ${post.comments}</button>
            </div>
        </div>
    `).join('');
}

function renderLeaderboard() {
    const list = document.getElementById('leaderboardList');
    list.innerHTML = leaderboard.map(user => `
        <div class="leaderboard-item">
            <span class="leader-badge">${user.badge}</span>
            <div class="leader-info">
                <div class="leader-name">${user.name}</div>
                <div class="leader-amount">${user.amount}kg reciclados</div>
            </div>
        </div>
    `).join('');
}

function renderPartnerships() {
    const list = document.getElementById('partnershipsList');
    list.innerHTML = partnerships.map(partner => `
        <div class="partnership-item">
            <div class="partnership-header">
                <h4>${partner.name}</h4>
                <span class="partnership-badge" style="${partner.color}">${partner.members}</span>
            </div>
            <p class="partnership-desc">${partner.description}</p>
        </div>
    `).join('');
}

function renderAchievements() {
    const list = document.getElementById('achievementsList');
    const totalPoints = 1245;
    
    list.innerHTML = achievements.map(achievement => `
        <div class="achievement-item ${achievement.completed ? 'completed' : ''}">
            <div class="achievement-header">
                <div class="achievement-icon ${achievement.completed ? 'completed' : 'incomplete'}">
                    ${achievement.icon}
                </div>
                <div class="achievement-content">
                    <div class="achievement-top">
                        <div>
                            <div class="achievement-title">${achievement.title}</div>
                            <div class="achievement-desc">${achievement.description}</div>
                        </div>
                        <div class="achievement-points">
                            +${achievement.points}
                            <div style="font-size: 0.75rem; font-weight: 400;">pontos</div>
                        </div>
                    </div>
                    ${!achievement.completed && achievement.progress !== undefined ? `
                        <div class="achievement-progress">
                            <div class="progress-info">
                                <span>Progresso</span>
                                <span>${achievement.progress}/${achievement.total}</span>
                            </div>
                            <div class="progress-bar">
                                <div class="progress-bar-fill" style="width: ${(achievement.progress / achievement.total) * 100}%"></div>
                            </div>
                        </div>
                    ` : ''}
                    ${achievement.completed ? '<div style="margin-top: 0.5rem; color: #059669; font-size: 0.875rem;">⭐ Conquistado!</div>' : ''}
                </div>
            </div>
        </div>
    `).join('');
}

function renderRewards() {
    const list = document.getElementById('rewardsList');
    const totalPoints = 1245;
    
    list.innerHTML = rewards.map(reward => `
        <div class="reward-item" style="${reward.color}">
            <div class="reward-content">
                <div class="reward-icon">${reward.icon}</div>
                <div class="reward-info">
                    <div class="reward-title">${reward.title}</div>
                    <div class="reward-desc">${reward.description}</div>
                    <div class="reward-footer">
                        <div class="reward-points">⭐ ${reward.points} pontos</div>
                        ${totalPoints >= reward.points 
                            ? '<button class="reward-btn">Resgatar</button>' 
                            : `<span style="font-size: 0.875rem; opacity: 0.6">Faltam ${reward.points - totalPoints}</span>`
                        }
                    </div>
                </div>
            </div>
        </div>
    `).join('');
}

// Form Handler
function handleContactForm(e) {
    e.preventDefault();
    const name = document.getElementById('name').value;
    const email = document.getElementById('email').value;
    const message = document.getElementById('message').value;
    
    alert(`Obrigado, ${name}! Sua mensagem foi enviada com sucesso. Entraremos em contato em breve.`);
    e.target.reset();
}

// Smooth Scroll
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            target.scrollIntoView({ behavior: 'smooth', block: 'start' });
        }
    });
});

// Initialize
document.addEventListener('DOMContentLoaded', function() {
    renderMaterials();
    renderProcess();
    renderWeeklyChart();
    renderTrashItems();
    renderStats();
    renderLearning();
    renderTips();
    renderImpact();
    renderCommunity();
    renderLeaderboard();
    renderPartnerships();
    renderAchievements();
    renderRewards();
    
    const form = document.getElementById('contactForm');
    if (form) {
        form.addEventListener('submit', handleContactForm);
    }
    
    // Animate progress circle
    setTimeout(() => {
        const circle = document.getElementById('progressCircle');
        if (circle) {
            const weeklyTotal = weeklyData.reduce((sum, d) => sum + d.value, 0);
            const weeklyGoal = 150;
            const progress = (weeklyTotal / weeklyGoal);
            const circumference = 2 * Math.PI * 88;
            const offset = circumference * (1 - progress);
            circle.style.strokeDashoffset = offset;
        }
    }, 100);
});
