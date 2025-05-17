@extends('main')

@section('title', 'Disrupting Unhappiness - Happiness Factors')
@section('description', 'Learn how to disrupt unhappiness at work and build a culture of positivity and resilience.')
@section('keywords', 'Disrupting Unhappiness, Workplace Happiness, Team Wellbeing, Employee Engagement')

@section('content')
<div class="training-hero">
    <div class="training-overlay"></div>
    <div class="training-content">
        <h1 class="animate-fade-in">Disrupting Unhappiness</h1>
        <p class="quote animate-fade-in"><i class="fas fa-quote-left"></i> Happiness is not by chance, but by choice. <i class="fas fa-quote-right"></i> <span class="author">– Jim Rohn</span></p>
    </div>
</div>

<div class="training-container">
    <div class="training-grid">
        <div class="training-image animate-slide-in">
            <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="Happy team collaborating">
        </div>
        
        <div class="training-description animate-slide-in">
            <h2>Transform Your Workplace</h2>
            <p>
                Unhappiness at work can be contagious and costly. This training helps teams identify root causes of unhappiness, disrupt negative patterns, and build a culture of positivity and resilience.
            </p>
            
            <div class="benefits-card">
                <h3>What You'll Learn</h3>
                <ul>
                    <li><i class="fas fa-check-circle"></i> Recognize triggers of workplace unhappiness</li>
                    <li><i class="fas fa-check-circle"></i> Practical tools to shift mindset and behavior</li>
                    <li><i class="fas fa-check-circle"></i> Strategies for fostering a happier, more engaged team</li>
                </ul>
            </div>
            
            <div class="outcome-card">
                <h3>Outcome</h3>
                <p>Empower your team to break the cycle of negativity and create a thriving, productive environment.</p>
            </div>
            </div>
        <div class="buttons animate-slide-in" style="display: flex; justify-content: center; align-items: center; flex-direction: column;">            
            <a href="/products/trainings" class="btn btn-primary btn-lg"><i class="fas fa-arrow-left"></i> Back to Trainings</a>
            <a href="/products/packages" class="btn btn-success btn-lg">Request This Training <i class="fas fa-arrow-right"></i></a>
        </div>
    </div>
</div>

<style>
.training-hero {
    background: linear-gradient(rgba(0,0,0,0.3), rgba(0,0,0,0.3)), url('https://images.unsplash.com/photo-1531545514256-b1400bc00f31?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');
    height: 80vh;
    width: 80vw;
    margin: 0 auto;
    background-size: cover;
    background-position: center;
    position: relative;
    border-radius: 15px;
    margin-bottom: 3rem;
    margin-top: 100px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    text-align: center;
    opacity: 0.8;
}

.training-content {
    z-index: 2;
    padding: 0 20px;
}

.training-content h1 {
    color: white;
    font-size: 3rem;
    font-weight: 700;
    margin-bottom: 1rem;
    text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
}

.quote {
    font-size: 1.5rem;
    font-style: italic;
    margin-bottom: 2rem;
    text-shadow: 1px 1px 3px rgba(0,0,0,0.5);
}

.author {
    font-weight: 600;
}

.training-container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
}

.training-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 30px;
}

.training-image img {
    width: 100%;
    border-radius: 15px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    transition: transform 0.3s ease;
}

.training-image img:hover {
    transform: scale(1.02);
}

.benefits-card, .outcome-card {
    background-color: #f8f9fa;
    border-radius: 12px;
    padding: 20px;
    margin-bottom: 20px;
    box-shadow: 0 3px 10px rgba(0,0,0,0.08);
    transition: all 0.3s ease;
}

.benefits-card:hover, .outcome-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
}

.benefits-card h3, .outcome-card h3 {
    color: #2c3e50;
    margin-bottom: 15px;
    font-weight: 600;
}

.benefits-card ul {
    padding-left: 0;
    list-style: none;
}

.benefits-card li {
    margin-bottom: 10px;
    font-size: 1.1rem;
}

.benefits-card i {
    color: #28a745;
    margin-right: 10px;
}

/* Center align all content */
.training-container {
    text-align: center;
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
    margin-bottom: 3rem;
}

.training-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 30px;
    text-align: center;
}

.training-description {
    text-align: center;
}

.buttons {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    margin: 0 auto;
    width: 100%;
    grid-column: span 2;
}

@media (max-width: 768px) {
    .buttons {
        grid-column: span 1;
    }
}

.btn {
    margin-top: 1rem;
    margin-right: 10px;
    padding: 12px 25px;
    border-radius: 50px;
    font-weight: 600;
    transition: all 0.3s;
}

.btn:hover {
    transform: translateY(-3px);
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
}

.animate-fade-in {
    animation: fadeIn 1s ease-in-out;
}

.animate-slide-in {
    animation: slideIn 0.8s ease-out;
}

@keyframes fadeIn {
    from { opacity: 0; }
    to { opacity: 1; }
}

@keyframes slideIn {
    from { transform: translateY(20px); opacity: 0; }
    to { transform: translateY(0); opacity: 1; }
}

@media (max-width: 768px) {
    .training-grid {
        grid-template-columns: 1fr;
    }
    
    .training-hero {
        height: 200px;
    }
    
    .training-content h1 {
        font-size: 2rem;
    }
}
</style>
@endsection