<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="SSF Marketing performance dashboard">
    <title>Dashboard - SSF Marketing</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="{{ url('frontend/assets/css/dashboard.css') }}">
</head>
<body>
    <div class="app-shell">
        <aside class="sidebar" aria-label="Dashboard navigation">
            <a class="brand-panel" href="{{ route('home') }}" aria-label="SSF Marketing home">
                <img src="{{ url('frontend/assets/images/logo/logo.png') }}" alt="SSF Marketing">
                <span>SSF</span>
            </a>

            <nav class="side-nav">
                <a class="active" href="{{ route('dashboard') }}"><i class="fa-solid fa-chart-pie"></i><span>Dashboard</span></a>
                <a href="#campaigns"><i class="fa-solid fa-bullhorn"></i><span>Campaigns</span></a>
                <a href="#channels"><i class="fa-solid fa-layer-group"></i><span>Channels</span></a>
                <a href="#tasks"><i class="fa-solid fa-list-check"></i><span>Tasks</span></a>
                <a href="{{ route('home') }}"><i class="fa-solid fa-globe"></i><span>Website</span></a>
            </nav>

            <div class="side-card">
                <span>Monthly target</span>
                <strong>82%</strong>
                <div class="progress-track"><span style="width: 82%"></span></div>
                <small>$148k of $180k pipeline booked</small>
            </div>
        </aside>

        <main class="dashboard-main">
            <header class="topbar">
                <div>
                    <span class="eyebrow">{{ auth()->user()->role?->name ?? 'Team' }} dashboard</span>
                    <h1>Marketing Dashboard</h1>
                </div>
                <div class="top-actions">
                    <button type="button" aria-label="Search"><i class="fa-solid fa-magnifying-glass"></i></button>
                    <button type="button" aria-label="Notifications"><i class="fa-regular fa-bell"></i><span></span></button>
                                        <a class="profile-chip" href="#tasks"><span>{{ strtoupper(substr(auth()->user()->name, 0, 1)) }}</span><strong>{{ auth()->user()->name }}</strong></a>
                    <form class="logout-form" method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" aria-label="Logout"><i class="fa-solid fa-arrow-right-from-bracket"></i></button>
                    </form>
                </div>
            </header>

            <section class="welcome-panel">
                <div>
                    <span class="eyebrow">Welcome back, {{ auth()->user()->name }}</span>
                    <h2>Campaigns are pacing 24% ahead this week.</h2>
                    <p>Track revenue, ROAS, leads, and channel delivery from one clean Vuexy-inspired command center.</p>
                    <a href="#campaigns">Review campaigns <i class="fa-solid fa-arrow-right"></i></a>
                </div>
                <div class="growth-widget" aria-label="Revenue progress">
                    <span>Revenue</span>
                    <strong>$128.4k</strong>
                    <small>+18.6% vs last month</small>
                </div>
            </section>

            <section class="stats-grid" aria-label="Key metrics">
                <article class="metric-card">
                    <i class="fa-solid fa-sack-dollar"></i>
                    <span>Revenue</span>
                    <strong>$128.4k</strong>
                    <small class="positive">+18.6%</small>
                </article>
                <article class="metric-card">
                    <i class="fa-solid fa-user-plus"></i>
                    <span>New Leads</span>
                    <strong>2,841</strong>
                    <small class="positive">+12.4%</small>
                </article>
                <article class="metric-card">
                    <i class="fa-solid fa-chart-line"></i>
                    <span>ROAS</span>
                    <strong>5.8x</strong>
                    <small class="positive">+0.9x</small>
                </article>
                <article class="metric-card">
                    <i class="fa-solid fa-wallet"></i>
                    <span>Ad Spend</span>
                    <strong>$22.1k</strong>
                    <small class="warning">-3.2%</small>
                </article>
            </section>

            <section class="dashboard-grid">
                <article class="panel chart-panel">
                    <div class="panel-head">
                        <div>
                            <span class="eyebrow">Performance</span>
                            <h2>Revenue Overview</h2>
                        </div>
                        <button type="button">2026 <i class="fa-solid fa-chevron-down"></i></button>
                    </div>
                    <div class="bar-chart" aria-label="Monthly revenue chart">
                        <span style="height: 46%"><b>Jan</b></span>
                        <span style="height: 58%"><b>Feb</b></span>
                        <span style="height: 52%"><b>Mar</b></span>
                        <span style="height: 73%"><b>Apr</b></span>
                        <span style="height: 68%"><b>May</b></span>
                        <span style="height: 88%"><b>Jun</b></span>
                        <span style="height: 76%"><b>Jul</b></span>
                        <span style="height: 94%"><b>Aug</b></span>
                    </div>
                </article>

                <article class="panel" id="channels">
                    <div class="panel-head">
                        <div>
                            <span class="eyebrow">Channels</span>
                            <h2>Traffic Split</h2>
                        </div>
                    </div>
                    <div class="donut-wrap">
                        <div class="donut" role="img" aria-label="Traffic split chart"></div>
                        <div class="legend">
                            <span><i class="seo"></i> SEO 42%</span>
                            <span><i class="paid"></i> Paid 31%</span>
                            <span><i class="social"></i> Social 19%</span>
                            <span><i class="email"></i> Email 8%</span>
                        </div>
                    </div>
                </article>
            </section>

            <section class="dashboard-grid lower-grid">
                <article class="panel table-panel" id="campaigns">
                    <div class="panel-head">
                        <div>
                            <span class="eyebrow">Live campaigns</span>
                            <h2>Campaign Performance</h2>
                        </div>
                        <button type="button">Export <i class="fa-solid fa-download"></i></button>
                    </div>
                    <div class="table-wrap">
                        <table>
                            <thead>
                                <tr>
                                    <th>Campaign</th>
                                    <th>Channel</th>
                                    <th>Budget</th>
                                    <th>Leads</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><strong>Summer Scale</strong><span>Retail launch</span></td>
                                    <td>Google Ads</td>
                                    <td>$8,400</td>
                                    <td>912</td>
                                    <td><mark class="live">Live</mark></td>
                                </tr>
                                <tr>
                                    <td><strong>Founder Webinar</strong><span>B2B pipeline</span></td>
                                    <td>LinkedIn</td>
                                    <td>$4,900</td>
                                    <td>386</td>
                                    <td><mark class="review">Review</mark></td>
                                </tr>
                                <tr>
                                    <td><strong>Email Winback</strong><span>Lifecycle</span></td>
                                    <td>Email</td>
                                    <td>$1,250</td>
                                    <td>548</td>
                                    <td><mark class="live">Live</mark></td>
                                </tr>
                                <tr>
                                    <td><strong>SEO Content Sprint</strong><span>Organic growth</span></td>
                                    <td>Search</td>
                                    <td>$3,700</td>
                                    <td>995</td>
                                    <td><mark class="planned">Planned</mark></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </article>

                <aside class="panel task-panel" id="tasks">
                    <div class="panel-head">
                        <div>
                            <span class="eyebrow">Today</span>
                            <h2>Priority Tasks</h2>
                        </div>
                    </div>
                    <label><input type="checkbox" checked> Approve PPC budget shift</label>
                    <label><input type="checkbox"> Review Meta creatives</label>
                    <label><input type="checkbox"> Send weekly client report</label>
                    <label><input type="checkbox"> Publish SEO brief</label>

                    <div class="activity-feed">
                        <h3>Activity</h3>
                        <p><span></span> ROAS alert triggered for Summer Scale.</p>
                        <p><span></span> 146 leads added from LinkedIn forms.</p>
                        <p><span></span> Email automation crossed 41% open rate.</p>
                    </div>
                </aside>
            </section>
        </main>
    </div>
</body>
</html>