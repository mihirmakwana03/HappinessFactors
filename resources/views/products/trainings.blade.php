@extends('main')

@section('title', 'Trainings - Happiness Factors')
@section('description', 'Explore our Group Happiness Training designed to enhance team wellbeing and productivity through research-backed workshops.')
@section('keywords', 'Group Happiness Training, Team Wellbeing, Workplace Culture, Employee Engagement, Professional Development')
@section('og-image', asset('images/group-happiness-training.jpg'))
@section('og-title', 'Group Happiness Training - Happiness Factors')
@section('og-description', 'Enhance team wellbeing and productivity through our research-backed group happiness workshops that transform workplace culture.')
@section('og-url', url()->current())
@section('og-type', 'website')
@section('og-site-name', 'Happiness Factors')
@section('og-image-width', 1200)

@section('content')

<div class="training-container"><br><br><br>
    <!-- Hero Section -->
    <div class="banner-section" style="background-image: url('https://images.unsplash.com/photo-1522071901873-411886a10004?ixlib=rb-1.2.1&auto=format&fit=crop&w=1200&q=80'); background-size: cover; background-position: center; position: relative;">
        <div style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: rgba(255,255,255,0.85); z-index: 1;"></div>
        <div style="position: relative; z-index: 2;">
            <h1 class="main-title">Group Training: HappinessFactors</h1>
            <div class="description text-bold">
                <p>💼 Happier Teams, Better Business.
                    Your people are your power.
                    When employees thrive, so does everything else—productivity, culture, and your bottom line.</p>
                <p>🎉 At HappinessFactors, we deliver engaging, Spiritual science-backed training programs that help your team:
                    <ol>
                        <li>✔️ Stress less</li>
                        <li>✔️ Collaborate better</li>
                        <li>✔️ Lead with purpose</li>
                        <li>✔️ Get Proactive Burnout Busters</li>
                        <li>✔️ Get Better Employee Engagement</li>
                        <li>✔️ And actually enjoy Mondays!😊</li>
                    </ol>
                    We work with individuals, teams, and entire organizations—whether you're a startup or a global giant.
                    From personalized coaching to fun group sessions, our packages are built to boost:
                    <ol>
                        <li>✔️ Productivity</li>
                        <li>✔️ Team spirit</li>
                        <li>✔️ Goal Alignment</li>
                        <li>✔️ Real business results</li>
                        <li>✔️ Mental/Emotional wellbeing</li>
                    </ol>
                </p>
                <div class="cta-box">
                    <p class="cta-text">Contact us for details.</p>
                    <a href="/#contact" class="btn btn-primary">Get in Touch</a>
                </div>
            </div>
        </div>
    </div>

    <div class="training-grid">
        <!-- Training Cards -->
        <div class="training-card">
            <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80" alt="Happy team collaborating" class="card-image">
            <div class="card-icon"><i class="fas fa-lightbulb"></i></div>
            <h3>🧠 From Blah to Boom: Disrupting Unhappiness at Work</h3>
            <p><em>"Happiness is not by chance, but by choice."</em> – Jim Rohn</p>
            <p>Happy employees are motivated, loyal, engaged and productive.</p>
            <a href="trainings/disrupting-unhappiness" class="read-more">Read more</a>
        </div>

        <div class="training-card">
            <img src="https://images.unsplash.com/photo-1499209974431-9dddcece7f88?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80" alt="Person practicing mindfulness" class="card-image">
            <div class="card-icon"><i class="fas fa-brain"></i></div>
            <h3>🌪️ Calm in the Chaos: Mental Wellness for Uncertain Times</h3>
            <p>In these times of a global pandemic, people are forced to stay at home, only go out when necessary, maintain social distancing, wear masks while outside.</p>
            <a href="#" class="read-more">Read more</a>
        </div>

        <div class="training-card">
            <img src="https://images.unsplash.com/photo-1517048676732-d65bc937f952?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80" alt="Leadership meeting" class="card-image">
            <div class="card-icon"><i class="fas fa-users"></i></div>
            <h3>🌪️ Calm in the Chaos: Mental Wellness for Uncertain Times</h3>
            <p><em>"There is little success where there is little laughter."</em> – Andrew Carnegie</p>
            <p>It is a well-known secret that a happy leader is outstandingly effective and leads to an impactful team.</p>
            <a href="#" class="read-more">Read more</a>
        </div>

        <div class="training-card">
            <img src="https://images.unsplash.com/photo-1506126613408-eca07ce68773?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80" alt="Person relaxing in nature" class="card-image">
            <div class="card-icon"><i class="fas fa-balance-scale"></i></div>
            <h3>😄 Lead with a Smile: The Happiness-Driven Leadership Advantage</h3>
            <p><em>"If you cannot manage stress, you will not manage success."</em> – Buddhist proverb</p>
            <p>Many times, life throws us curveballs or unexpected things happen, that lead us to stress...</p>
            <p class="note">*Offered as both a group training and one-on-one coaching package</p>
            <a href="#" class="read-more">Read more</a>
        </div>

        <div class="training-card">
            <img src="https://images.unsplash.com/photo-1521737711867-e3b97375f902?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80" alt="Team resolving conflict" class="card-image">
            <div class="card-icon"><i class="fas fa-handshake"></i></div>
            <h3>💥 Stressed But Still Awesome: Mastering Stress Like a Pro</h3>
            <p><em>"Conflict is inevitable, but combat is optional."</em> – Max Lucardo</p>
            <p>By our very nature, human beings are unique. They have their own thought patterns, opinions, lifestyle and deciding what's wrong or what's right...</p>
            <a href="#" class="read-more">Read more</a>
        </div>

        <div class="training-card">
            <img src="https://images.unsplash.com/photo-1552581234-26160f608093?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80" alt="Productive workspace" class="card-image">
            <div class="card-icon"><i class="fas fa-chart-line"></i></div>
            <h3>🤝 Squash the Drama: Conflict to Connection in Teams</h3>
            <p><em>"Productivity is less about what you do with your time. And more about how you run your mind."</em> – Robin Sharma</p>
            <a href="#" class="read-more">Read more</a>
        </div>

        <div class="training-card">
            <img src="https://images.unsplash.com/photo-1531482615713-2afd69097998?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80" alt="Modern office culture" class="card-image">
            <div class="card-icon"><i class="fas fa-building"></i></div>
            <h3>🚀 Joy = Results: The Happy Path to High Performance</h3>
            <p>A company's culture defines the company's success, employee motivation, core beliefs, behavior norms, accepted work practices and the different styles of operation.</p>
            <a href="#" class="read-more">Read more</a>
        </div>

        <div class="training-card">
            <img src="https://images.unsplash.com/photo-1559028012-481c04fa702d?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80" alt="Innovation concept" class="card-image">
            <div class="card-icon"><i class="fas fa-lightbulb"></i></div>
            <h3>🎉 Ready to Energize Your Workplace?</h3>
            <p>Innovation is the bottom line for the success of any organization. It can transform insights into growth, build and launch new products, transform customer experiences.</p>
            <a href="#" class="read-more">Read more</a>
        </div>

        <div class="training-card">
            <img src="https://images.unsplash.com/photo-1556761175-4b46a572b786?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80" alt="Engaged team members" class="card-image">
            <div class="card-icon"><i class="fas fa-hands-helping"></i></div>
            <h3>Employee Engagement</h3>
            <p><em>"When people are financially invested, they want a return. When people are emotionally invested, they want to contribute."</em> – Simon Sinek</p>
            <a href="#" class="read-more">Read more</a>
        </div>

        <div class="training-card">
            <img src="https://images.unsplash.com/photo-1553729459-efe14ef6055d?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80" alt="Goal setting concept" class="card-image">
            <div class="card-icon"><i class="fas fa-bullseye"></i></div>
            <h3>Employee Goal Management</h3>
            <p><em>"A goal without a timeline is just a dream."</em> – Robert Herjavec</p>
            <p>Goal setting involves the development of an action plan...</p>
            <a href="#" class="read-more">Read more</a>
        </div>
    </div>
</div>

<style>
    /* Additional styles for images */
    .card-image {
        width: 100%;
        height: 180px;
        object-fit: cover;
        border-radius: 8px 8px 0 0;
        margin-bottom: 1.5rem;
    }

    .training-card {
        padding: 0 0 2rem 0;
    }

    .training-card .card-icon,
    .training-card h3,
    .training-card p,
    .training-card .read-more {
        padding: 0 2rem;
    }

    .training-card .card-icon {
        margin-top: 1.5rem;
    }

    .training-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 2rem 1rem;
    }

    .banner-section {
        background: linear-gradient(135deg, #f8f9fa, #e9ecef);
        border-radius: 15px;
        padding: 4rem 2rem;
        margin-bottom: 3rem;
        text-align: center;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    }

    .main-title {
        color: #343a40;
        font-size: 2.8rem;
        margin-bottom: 1.5rem;
        font-weight: 700;
    }

    .description {
        font-size: 1.1rem;
        line-height: 1.7;
        color: #495057;
        max-width: 800px;
        margin: 0 auto;
    }

    .cta-box {
        margin-top: 2.5rem;
        padding: 1.5rem;
        background-color: rgba(255, 255, 255, 0.8);
        border-radius: 12px;
        display: inline-block;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
    }

    .btn-primary {
        background-color: #0275d8;
        color: white;
        padding: 12px 24px;
        border-radius: 30px;
        text-decoration: none;
        font-weight: 600;
        transition: all 0.3s ease;
        display: inline-block;
    }

    .btn-primary:hover {
        background-color: #0069d9;
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
    }

    .training-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(340px, 1fr));
        gap: 2rem;
    }

    .training-card {
        background: #fff;
        border-radius: 12px;
        padding: 2rem;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08);
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
        height: 100%;
        display: flex;
        flex-direction: column;
    }

    .training-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 12px 30px rgba(0, 0, 0, 0.15);
    }

    .training-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        height: 5px;
        width: 100%;
        background: linear-gradient(to right, #0275d8, #5bc0de);
    }

    .card-icon {
        font-size: 2.5rem;
        color: #0275d8;
        margin-bottom: 1.5rem;
        text-align: center;
    }

    .training-card h3 {
        color: #343a40;
        font-size: 1.5rem;
        margin-bottom: 1rem;
        font-weight: 600;
    }

    .training-card p {
        color: #6c757d;
        font-size: 1rem;
        line-height: 1.6;
        margin-bottom: 1rem;
    }

    .training-card .note {
        font-style: italic;
        font-size: 0.9rem;
        color: #868e96;
    }

    .read-more {
        color: #0275d8;
        text-decoration: none;
        font-weight: 600;
        margin-top: auto;
        padding-top: 1rem;
        display: inline-block;
        transition: all 0.3s ease;
    }

    .read-more::after {
        content: ' →';
        transition: all 0.3s ease;
    }

    .read-more:hover {
        color: #0069d9;
    }

    .read-more:hover::after {
        margin-left: 5px;
    }

    @media (max-width: 768px) {
        .training-grid {
            grid-template-columns: 1fr;
        }

        .main-title {
            font-size: 2.2rem;
        }
    }
</style>

@endsection