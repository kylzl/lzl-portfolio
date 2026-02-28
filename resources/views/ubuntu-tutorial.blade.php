<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubuntu Server Setup Tutorial</title>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700&family=Rajdhani:wght@400;500;700&display=swap" rel="stylesheet">
    @vite('resources/css/style.css')
</head>
<body>

      <nav>
        <div class="logo">LK</div>
        <ul>
            <li><a href="/">Meee</a></li>
            <li class="separator">|</li>
            <li><a href="/#projects">Projects</a></li>
            <li class="separator">|</li>
            <li><a href="/#skills">Skills</a></li>
            <li class="separator">|</li>
            <li><a href="/#contact">Contact</a></li>
            <li class="separator">|</li>
            <li><a href="/#tutorial">Tutorial</a></li>
            <li class="separator">|</li>
            <li><a href="http://bryandacera.me">Chatgpt</a></li>
        </ul>
    </nav>

    <section class="hero" id="about" style="padding: 1.5rem 1rem; text-align: center;">
        <h1 style="font-size: 2rem; margin-bottom: 0.5rem;">Ubuntu Server Setup Guide</h1>
        <p style="margin: 0; color: var(--text-muted);">Complete tutorial for setting up MySQL, Nginx, and Laravel on Ubuntu servers.</p>
    </section>

    <section id="tutorial-content" style="max-width: 900px; margin: 3rem auto; padding: 0 1rem;">
        <h2 style="color: var(--accent); margin-top: 3rem; margin-bottom: 1.5rem; border-top: 2px solid var(--accent); padding-top: 1.5rem; font-size: 1.3rem;">01 | Access Server</h2>
        <div style="position: relative; margin-bottom: 2rem;">
            <button onclick="copyToClipboard(this)"
                style="position: absolute; top: 0.5rem; right: 0.5rem;
                background: rgba(0,255,255,0.2);
                border: 1px solid var(--accent);
                color: var(--accent);
                padding: 0.4rem 0.6rem;
                cursor: pointer;
                border-radius: 3px;
                font-size: 0.8rem;
                z-index: 10;
                transition: all 0.3s;">
                Copy
                </button>
            <pre style="background: rgba(0,255,255,0.05); padding: 1rem; border-radius: 5px; overflow-x: auto; margin: 0;">ssh root@ip_address</pre>
        </div>

        <h2 style="color: var(--accent); margin-top: 3rem; margin-bottom: 1.5rem; border-top: 2px solid var(--accent); padding-top: 1.5rem; font-size: 1.3rem;">02 | How to Install MySQL</h2>
        <div style="position: relative; margin-bottom: 1.5rem;">
            <button onclick="copyToClipboard(this)"
style="position: absolute; top: 0.5rem; right: 0.5rem;
background: rgba(0,255,255,0.2);
border: 1px solid var(--accent);
color: var(--accent);
padding: 0.4rem 0.6rem;
cursor: pointer;
border-radius: 3px;
font-size: 0.8rem;
z-index: 10;
transition: all 0.3s;">
Copy
</button>
            <pre style="background: rgba(0,255,255,0.05); padding: 1rem; border-radius: 5px; overflow-x: auto; margin: 0;">sudo apt update
sudo apt upgrade -y
keep the local currently installed
(Click Enter)</pre>
        </div>

        <h3 style="color: var(--text); margin-top: 1.5rem; margin-bottom: 0.8rem; font-size: 1rem;">Install MySQL Server</h3>
        <div style="position: relative; margin-bottom: 1.5rem;">
            <button onclick="copyToClipboard(this)"
style="position: absolute; top: 0.5rem; right: 0.5rem;
background: rgba(0,255,255,0.2);
border: 1px solid var(--accent);
color: var(--accent);
padding: 0.4rem 0.6rem;
cursor: pointer;
border-radius: 3px;
font-size: 0.8rem;
z-index: 10;
transition: all 0.3s;">
Copy
</button>
            <pre style="background: rgba(0,255,255,0.05); padding: 1rem; border-radius: 5px; overflow-x: auto; margin: 0;">sudo apt install mysql-server -y
\q;</pre>
        </div>

        <h3 style="color: var(--text); margin-top: 1.5rem; margin-bottom: 0.8rem; font-size: 1rem;">Start & Enable MySQL</h3>
        <div style="position: relative; margin-bottom: 1.5rem;">
            <button onclick="copyToClipboard(this)"
style="position: absolute; top: 0.5rem; right: 0.5rem;
background: rgba(0,255,255,0.2);
border: 1px solid var(--accent);
color: var(--accent);
padding: 0.4rem 0.6rem;
cursor: pointer;
border-radius: 3px;
font-size: 0.8rem;
z-index: 10;
transition: all 0.3s;">
Copy
</button>
            <pre style="background: rgba(0,255,255,0.05); padding: 1rem; border-radius: 5px; overflow-x: auto; margin: 0;">sudo systemctl start mysql
sudo systemctl enable mysql
sudo systemctl status mysql</pre>
        </div>

        <h3 style="color: var(--text); margin-top: 1.5rem; margin-bottom: 0.8rem; font-size: 1rem;">Secure MySQL Installation</h3>
        <div style="position: relative; margin-bottom: 1.5rem;">
            <button onclick="copyToClipboard(this)"
style="position: absolute; top: 0.5rem; right: 0.5rem;
background: rgba(0,255,255,0.2);
border: 1px solid var(--accent);
color: var(--accent);
padding: 0.4rem 0.6rem;
cursor: pointer;
border-radius: 3px;
font-size: 0.8rem;
z-index: 10;
transition: all 0.3s;">
Copy
</button>
            <pre style="background: rgba(0,255,255,0.05); padding: 1rem; border-radius: 5px; overflow-x: auto; margin: 0;">sudo mysql_secure_installation
VALIDATE PASSWORD COMPONENT → Yes
Password strength → 2
Set root password → Yes
Remove anonymous users → Yes
Disallow root login remotely → Yes
Remove test database → Yes
Reload privilege tables → Yes</pre>
        </div>

        <h3 style="color: var(--text); margin-top: 1.5rem; margin-bottom: 0.8rem; font-size: 1rem;">Edit MySQL Config</h3>
        <div style="position: relative; margin-bottom: 1.5rem;">
            <button onclick="copyToClipboard(this)"
style="position: absolute; top: 0.5rem; right: 0.5rem;
background: rgba(0,255,255,0.2);
border: 1px solid var(--accent);
color: var(--accent);
padding: 0.4rem 0.6rem;
cursor: pointer;
border-radius: 3px;
font-size: 0.8rem;
z-index: 10;
transition: all 0.3s;">
Copy
</button>
            <pre style="background: rgba(0,255,255,0.05); padding: 1rem; border-radius: 5px; overflow-x: auto; margin: 0;">sudo nano /etc/mysql/mysql.conf.d/mysqld.cnf
(change bind address to bind-address = 0.0.0.0)
SAVE (CTRL + X → Y → ENTER)
RESTART
sudo systemctl restart mysql</pre>
        </div>

        <h3 style="color: var(--text); margin-top: 2rem; margin-bottom: 0.8rem; font-size: 1rem;">
        Database User Policy (Local vs Remote)
        </h3>

        <div style="
            background: rgba(0,255,255,0.05);
            border-left: 4px solid var(--accent);
            padding: 1rem;
            border-radius: 5px;
            margin-bottom: 2rem;
        ">

        <p style="margin-bottom: 0.8rem; color: var(--text-muted);">
        Choose the correct MySQL user type depending on your deployment architecture.
        </p>

        <table style="width:100%; border-collapse: collapse; font-size:0.9rem;">
        <tr style="border-bottom:1px solid var(--accent);">
            <th style="text-align:left; padding:6px;">Type</th>
            <th style="text-align:left; padding:6px;">Example</th>
            <th style="text-align:left; padding:6px;">Guideline</th>
        </tr>

        <tr>
            <td style="padding:6px;">✔ Local-only user (Recommended)</td>
            <td style="padding:6px;"><code>'app_user'@'localhost'</code></td>
            <td style="padding:6px;">Safer and faster when Laravel and MySQL run on the same server.</td>
        </tr>

        <tr>
            <td style="padding:6px;">⚠ Remote user (Avoid if unnecessary)</td>
            <td style="padding:6px;"><code>'app_user'@'%'</code></td>
            <td style="padding:6px;">Allows external connections if MySQL port is exposed.</td>
        </tr>
        </table>

        <p style="margin-top:1rem; color: var(--text-muted);">
        ✔ Use <strong>localhost</strong> for production droplets.<br>
        ✔ Use remote access only for external apps or database management tools.
        </p>

        </div>
        <h3 style="color: var(--text); margin-top: 1.5rem; margin-bottom: 0.8rem; font-size: 1rem;">Login & Create User</h3>
        <div style="position: relative; margin-bottom: 1.5rem;">
            <button onclick="copyToClipboard(this)"
style="position: absolute; top: 0.5rem; right: 0.5rem;
background: rgba(0,255,255,0.2);
border: 1px solid var(--accent);
color: var(--accent);
padding: 0.4rem 0.6rem;
cursor: pointer;
border-radius: 3px;
font-size: 0.8rem;
z-index: 10;
transition: all 0.3s;">
Copy
</button>
            <pre style="background: rgba(0,255,255,0.05); padding: 1rem; border-radius: 5px; overflow-x: auto; margin: 0;">sudo mysql -u root -p
CREATE USER 'user01'@'localhost' IDENTIFIED BY 'P@ssword123';
GRANT ALL PRIVILEGES ON *.* TO 'user01'@'localhost' WITH GRANT OPTION;
FLUSH PRIVILEGES;
\q;</pre>
        </div>

        <h3 style="color: var(--text); margin-top: 1.5rem; margin-bottom: 0.8rem; font-size: 1rem;">Test Connection</h3>
        <div style="position: relative; margin-bottom: 1.5rem;">
            <button onclick="copyToClipboard(this)"
style="position: absolute; top: 0.5rem; right: 0.5rem;
background: rgba(0,255,255,0.2);
border: 1px solid var(--accent);
color: var(--accent);
padding: 0.4rem 0.6rem;
cursor: pointer;
border-radius: 3px;
font-size: 0.8rem;
z-index: 10;
transition: all 0.3s;">
Copy
</button>
            <pre style="background: rgba(0,255,255,0.05); padding: 1rem; border-radius: 5px; overflow-x: auto; margin: 0;">mysql -h ip_address -u user01 -p</pre>
        </div>

        <h2 style="color: var(--accent); margin-top: 3rem; margin-bottom: 1.5rem; border-top: 2px solid var(--accent); padding-top: 1.5rem; font-size: 1.3rem;">03 | How to Install Nginx</h2>
        <div style="position: relative; margin-bottom: 1.5rem;">
            <button onclick="copyToClipboard(this)"
style="position: absolute; top: 0.5rem; right: 0.5rem;
background: rgba(0,255,255,0.2);
border: 1px solid var(--accent);
color: var(--accent);
padding: 0.4rem 0.6rem;
cursor: pointer;
border-radius: 3px;
font-size: 0.8rem;
z-index: 10;
transition: all 0.3s;">
Copy
</button>
            <pre style="background: rgba(0,255,255,0.05); padding: 1rem; border-radius: 5px; overflow-x: auto; margin: 0;">sudo apt install nginx -y
sudo systemctl start nginx
sudo systemctl enable nginx</pre>
        </div>

        <h3 style="color: var(--text); margin-top: 1.5rem; margin-bottom: 0.8rem; font-size: 1rem;">Allow Nginx in Firewall</h3>
        <div style="position: relative; margin-bottom: 1.5rem;">
            <button onclick="copyToClipboard(this)"
style="position: absolute; top: 0.5rem; right: 0.5rem;
background: rgba(0,255,255,0.2);
border: 1px solid var(--accent);
color: var(--accent);
padding: 0.4rem 0.6rem;
cursor: pointer;
border-radius: 3px;
font-size: 0.8rem;
z-index: 10;
transition: all 0.3s;">
Copy
</button>
            <pre style="background: rgba(0,255,255,0.05); padding: 1rem; border-radius: 5px; overflow-x: auto; margin: 0;">sudo ufw allow 'Nginx Full'
sudo ufw enable
sudo ufw status</pre>
        </div>

        <h3 style="color: var(--text); margin-top: 1.5rem; margin-bottom: 0.8rem; font-size: 1rem;">Test Nginx</h3>
        <p style="color: var(--text-muted); margin-top: 0.5rem; margin-bottom: 1.5rem;">Open browser and navigate to http://your_droplet_ip to verify Nginx is running.</p>

        <h2 style="color: var(--accent); margin-top: 3rem; margin-bottom: 1.5rem; border-top: 2px solid var(--accent); padding-top: 1.5rem; font-size: 1.3rem;">04 | How to Install Laravel</h2>
        <h3 style="color: var(--text); margin-top: 1.5rem; margin-bottom: 0.8rem; font-size: 1rem;">Install PHP</h3>
        <div style="position: relative; margin-bottom: 1.5rem;">
            <button onclick="copyToClipboard(this)"
style="position: absolute; top: 0.5rem; right: 0.5rem;
background: rgba(0,255,255,0.2);
border: 1px solid var(--accent);
color: var(--accent);
padding: 0.4rem 0.6rem;
cursor: pointer;
border-radius: 3px;
font-size: 0.8rem;
z-index: 10;
transition: all 0.3s;">
Copy
</button>
            <pre style="background: rgba(0,255,255,0.05); padding: 1rem; border-radius: 5px; overflow-x: auto; margin: 0;">sudo apt install php php-fpm php-mysql php-cli php-curl php-mbstring php-xml php-zip php-bcmath php-tokenizer php-common php-intl unzip curl -y</pre>
        </div>

        <h3 style="color: var(--text); margin-top: 1.5rem; margin-bottom: 0.8rem; font-size: 1rem;">Install Composer</h3>
        <div style="position: relative; margin-bottom: 1.5rem;">
            <button onclick="copyToClipboard(this)"
style="position: absolute; top: 0.5rem; right: 0.5rem;
background: rgba(0,255,255,0.2);
border: 1px solid var(--accent);
color: var(--accent);
padding: 0.4rem 0.6rem;
cursor: pointer;
border-radius: 3px;
font-size: 0.8rem;
z-index: 10;
transition: all 0.3s;">
Copy
</button>
            <pre style="background: rgba(0,255,255,0.05); padding: 1rem; border-radius: 5px; overflow-x: auto; margin: 0;">cd ~
curl -sS https://getcomposer.org/installer -o composer-setup.php
sudo php composer-setup.php --install-dir=/usr/local/bin --filename=composer</pre>
        </div>

        <h3 style="color: var(--text); margin-top: 1.5rem; margin-bottom: 0.8rem; font-size: 1rem;">Clone or Create Laravel Project</h3>
        <div style="position: relative; margin-bottom: 1.5rem;">
            <button onclick="copyToClipboard(this)"
style="position: absolute; top: 0.5rem; right: 0.5rem;
background: rgba(0,255,255,0.2);
border: 1px solid var(--accent);
color: var(--accent);
padding: 0.4rem 0.6rem;
cursor: pointer;
border-radius: 3px;
font-size: 0.8rem;
z-index: 10;
transition: all 0.3s;">
Copy
</button>
            <pre style="background: rgba(0,255,255,0.05); padding: 1rem; border-radius: 5px; overflow-x: auto; margin: 0;">cd /var/www
sudo composer create-project laravel/laravel myproject</pre>
        </div>

        <h3 style="color: var(--text); margin-top: 1.5rem; margin-bottom: 0.8rem; font-size: 1rem;">Set Permissions</h3>
        <div style="position: relative; margin-bottom: 1.5rem;">
            <button onclick="copyToClipboard(this)"
style="position: absolute; top: 0.5rem; right: 0.5rem;
background: rgba(0,255,255,0.2);
border: 1px solid var(--accent);
color: var(--accent);
padding: 0.4rem 0.6rem;
cursor: pointer;
border-radius: 3px;
font-size: 0.8rem;
z-index: 10;
transition: all 0.3s;">
Copy
</button>
            <pre style="background: rgba(0,255,255,0.05); padding: 1rem; border-radius: 5px; overflow-x: auto; margin: 0;">sudo chown -R www-data:www-data /var/www/myproject
sudo chmod -R 775 /var/www/myproject/storage
sudo chmod -R 775 /var/www/myproject/bootstrap/cache</pre>
        </div>

        <h3 style="color: var(--text); margin-top: 1.5rem; margin-bottom: 0.8rem; font-size: 1rem;">Configure .env Database</h3>
        <div style="position: relative; margin-bottom: 1.5rem;">
            <button onclick="copyToClipboard(this)"
style="position: absolute; top: 0.5rem; right: 0.5rem;
background: rgba(0,255,255,0.2);
border: 1px solid var(--accent);
color: var(--accent);
padding: 0.4rem 0.6rem;
cursor: pointer;
border-radius: 3px;
font-size: 0.8rem;
z-index: 10;
transition: all 0.3s;">
Copy
</button>
            <pre style="background: rgba(0,255,255,0.05); padding: 1rem; border-radius: 5px; overflow-x: auto; margin: 0;">sudo nano /var/www/myproject/.env

DB_CONNECTION=mysql
DB_DATABASE=myproject
DB_USERNAME=user01
DB_PASSWORD=P@ssword123</pre>
        </div>

        <h3 style="color: var(--text); margin-top: 1.5rem; margin-bottom: 0.8rem; font-size: 1rem;">Configure Nginx for Laravel</h3>
        <div style="position: relative; margin-bottom: 1.5rem;">
            <button onclick="copyToClipboard(this)"
style="position: absolute; top: 0.5rem; right: 0.5rem;
background: rgba(0,255,255,0.2);
border: 1px solid var(--accent);
color: var(--accent);
padding: 0.4rem 0.6rem;
cursor: pointer;
border-radius: 3px;
font-size: 0.8rem;
z-index: 10;
transition: all 0.3s;">
Copy
</button>
            <pre style="background: rgba(0,255,255,0.05); padding: 1rem; border-radius: 5px; overflow-x: auto; margin: 0;">sudo nano /etc/nginx/sites-available/myproject

server {
    listen 80;
    server_name your_droplet_ip;

    root /var/www/myproject/public;
    index index.php index.html;

    location / {
        try_files $uri $uri/ /index.php?$query_string;
    }

    location ~ \.php$ {
        include snippets/fastcgi-php.conf;
        fastcgi_pass unix:/run/php/php8.3-fpm.sock;
    }

    location ~ /\.ht {
        deny all;
    }
}</pre>
        </div>

        <h3 style="color: var(--text); margin-top: 1.5rem; margin-bottom: 0.8rem; font-size: 1rem;">Enable Configuration & Restart</h3>
        <div style="position: relative; margin-bottom: 1.5rem;">
            <button onclick="copyToClipboard(this)"
style="position: absolute; top: 0.5rem; right: 0.5rem;
background: rgba(0,255,255,0.2);
border: 1px solid var(--accent);
color: var(--accent);
padding: 0.4rem 0.6rem;
cursor: pointer;
border-radius: 3px;
font-size: 0.8rem;
z-index: 10;
transition: all 0.3s;">
Copy
</button>
            <pre style="background: rgba(0,255,255,0.05); padding: 1rem; border-radius: 5px; overflow-x: auto; margin: 0;">sudo ln -s /etc/nginx/sites-available/myproject /etc/nginx/sites-enabled/
sudo nginx -t
sudo systemctl restart nginx</pre>
        </div>

        <h3 style="color: var(--text); margin-top: 1.5rem; margin-bottom: 0.8rem; font-size: 1rem;">Migrate Database</h3>
        <div style="position: relative; margin-bottom: 1.5rem;">
            <button onclick="copyToClipboard(this)"
style="position: absolute; top: 0.5rem; right: 0.5rem;
background: rgba(0,255,255,0.2);
border: 1px solid var(--accent);
color: var(--accent);
padding: 0.4rem 0.6rem;
cursor: pointer;
border-radius: 3px;
font-size: 0.8rem;
z-index: 10;
transition: all 0.3s;">
Copy
</button>
            <pre style="background: rgba(0,255,255,0.05); padding: 1rem; border-radius: 5px; overflow-x: auto; margin: 0;">php artisan migrate</pre>
        </div>

        <p style="color: var(--text-muted); margin-top: 1.5rem;">Now open your browser and navigate to your droplet/server IP address to see your Laravel application in action.</p>
    </section>

    <footer>
        <div style="display: flex; justify-content: center; gap: 1.5rem; margin-bottom: 1rem;">
            <a href="https://www.facebook.com/kaye.liezl" target="_blank" style="color: var(--accent); text-decoration: none; font-size: 0.9rem;">Facebook</a>
            <span style="color: var(--text-muted);">|</span>
            <a href="#" target="_blank" style="color: var(--accent); text-decoration: none; font-size: 0.9rem;">LinkedIn</a>
        </div>
        <p>SYSTEM TIMESTAMP: 2026 | ALL RIGHTS RESERVED BY LIEZL KAYE ROA.</p>
    </footer>

    <script>
    function copyToClipboard(button) {
        const codeBlock = button.parentElement.querySelector('pre');
        const text = codeBlock.textContent;

        navigator.clipboard.writeText(text).then(() => {

            const originalText = button.innerText;

            button.innerText = "Copied ✓";
            button.style.backgroundColor = "var(--accent)";
            button.style.color = "#ffffff";

            setTimeout(() => {
                button.innerText = originalText;
                button.style.backgroundColor = "rgba(0,255,255,0.2)";
                button.style.color = "var(--accent)";
            }, 1500);

        }).catch(() => {
            button.innerText = "Failed";
        });
    }
    </script>

</body>
</html>









