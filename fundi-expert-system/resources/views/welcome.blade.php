<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>FUNDI Expert System</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background-color: #f9fafb;
            color: #1f2937;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #2563eb;
            color: white;
            padding: 1rem;
            text-align: center;
        }
        main {
            padding: 2rem;
        }
        section {
            margin-bottom: 2rem;
        }
        h2 {
            color: #2563eb;
        }
        ul {
            list-style-type: disc;
            padding-left: 1.5rem;
        }
        a {
            color: #2563eb;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <header>
        <h1>Welcome to FUNDI Expert System</h1>
        <p>Your one-stop solution for connecting with skilled professionals</p>
    </header>
    <main>
        <section>
            <h2>🔐 Authentication</h2>
            <ul>
                <li><a href="{{ route('login') }}">Login</a> or <a href="{{ route('register') }}">Register</a> to access your account.</li>
                <li>Securely manage your profile and service requests.</li>
            </ul>
        </section>

        <section>
            <h2>🔍 Search for Experts</h2>
            <ul>
                <li>Use our <a href="{{ route('search') }}">search</a> feature to find experts by profession or location.</li>
                <li>View detailed profiles to choose the right expert for your needs.</li>
            </ul>
        </section>

        <section>
            <h2>📨 Request a Service</h2>
            <ul>
                <li>Send service requests directly to experts.</li>
                <li>Track the status of your requests in your dashboard.</li>
            </ul>
        </section>

        <section>
            <h2>📝 Rate and Review</h2>
            <ul>
                <li>Provide feedback on services received.</li>
                <li>Help others make informed decisions by sharing your experience.</li>
            </ul>
        </section>

        <section>
            <h2>⚙️ Manage Your Profile</h2>
            <ul>
                <li>Update your personal information and preferences.</li>
                <li>Experts can edit their professional details and availability.</li>
            </ul>
        </section>

        <section>
            <h2>🛡️ Admin Panel</h2>
            <ul>
                <li>Administrators can manage users and expert profiles.</li>
                <li>Access the <a href="{{ route('admin.dashboard') }}">Admin Dashboard</a> for oversight and control.</li>
            </ul>
        </section>
    </main>
</body>
</html>
